<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222164100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tourner (id INT AUTO_INCREMENT NOT NULL, coursier_id INT DEFAULT NULL, nb_livraison INT NOT NULL, poid_tourner DOUBLE PRECISION DEFAULT NULL, prix_tourner DOUBLE PRECISION NOT NULL, INDEX IDX_6825F8B92D831673 (coursier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tourner ADD CONSTRAINT FK_6825F8B92D831673 FOREIGN KEY (coursier_id) REFERENCES coursier (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tourner DROP FOREIGN KEY FK_6825F8B92D831673');
        $this->addSql('DROP TABLE tourner');
    }
}
