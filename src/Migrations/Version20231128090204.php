<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231128090204 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE slider_image DROP FOREIGN KEY FK_4389483B2CCC9638');
        $this->addSql('ALTER TABLE slider_image DROP FOREIGN KEY FK_4389483B3DA5256D');
        $this->addSql('DROP TABLE slider_image');
        $this->addSql('ALTER TABLE Image ADD path VARCHAR(255) NOT NULL, DROP imageSize, CHANGE imageName type VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE slider_image (slider_id INT NOT NULL, image_id INT NOT NULL, INDEX IDX_4389483B2CCC9638 (slider_id), INDEX IDX_4389483B3DA5256D (image_id), PRIMARY KEY(slider_id, image_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE slider_image ADD CONSTRAINT FK_4389483B2CCC9638 FOREIGN KEY (slider_id) REFERENCES Slider (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE slider_image ADD CONSTRAINT FK_4389483B3DA5256D FOREIGN KEY (image_id) REFERENCES Image (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE Image ADD imageSize INT DEFAULT NULL, DROP path, CHANGE type imageName VARCHAR(255) DEFAULT NULL');
    }
}
