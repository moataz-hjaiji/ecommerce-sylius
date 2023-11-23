<?php

declare(strict_types=1);

namespace App\Command\Admin;

use App\Entity\User\AdminUser;
use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

final class CreateAdminCommand extends Command
{
    public function __construct(string $name, private ContainerInterface $container)
    {
        parent::__construct($name);
    }

    protected function configure(): void
    {
        $this
            ->setName('app:admin:create')
            ->setDescription('Creates a new admin')
            ->addArgument(
                'email',
                InputArgument::REQUIRED,
                'Admin email'
            )
            ->addArgument(
                'password',
                InputArgument::REQUIRED,
                'Admin Password'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /** @var AdminUser $admin */
        $admin = $this->container->get('sylius.factory.admin_user')->createNew();

        $email = $input->getArgument('email');
        $password = $input->getArgument('password');

        \Webmozart\Assert\Assert::email($email);
        \Webmozart\Assert\Assert::stringNotEmpty($password);

        $admin->setEmail($email);
        $admin->setPlainPassword($password);
        $admin->setLocaleCode('en_US');
        $admin->setEnabled(true);
        $admin->setUsername($email);
        $admin->setUsernameCanonical($email);

        $io = new SymfonyStyle($input, $output);
        try {
            $this->container->get('sylius.repository.admin_user')->add($admin);
        } catch (\Exception $exception) {
            $io->error($exception->getMessage());

            return Command::FAILURE;
        }

        $io->success('Admin ' . $email . ' created successfully');

        return Command::SUCCESS;
    }
}
