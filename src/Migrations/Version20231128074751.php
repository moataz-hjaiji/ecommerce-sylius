<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231128074751 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Slider (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE slider_image (slider_id INT NOT NULL, image_id INT NOT NULL, INDEX IDX_4389483B2CCC9638 (slider_id), INDEX IDX_4389483B3DA5256D (image_id), PRIMARY KEY(slider_id, image_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE slider_image ADD CONSTRAINT FK_4389483B2CCC9638 FOREIGN KEY (slider_id) REFERENCES Slider (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE slider_image ADD CONSTRAINT FK_4389483B3DA5256D FOREIGN KEY (image_id) REFERENCES Image (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE slider_image DROP FOREIGN KEY FK_4389483B2CCC9638');
        $this->addSql('ALTER TABLE slider_image DROP FOREIGN KEY FK_4389483B3DA5256D');
        $this->addSql('DROP TABLE Slider');
        $this->addSql('DROP TABLE slider_image');
    }
}
