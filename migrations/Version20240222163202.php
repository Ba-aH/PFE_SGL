<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222163202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE coursier_position_history (id INT AUTO_INCREMENT NOT NULL, coursier_id INT DEFAULT NULL, position_history_lat DOUBLE PRECISION DEFAULT NULL, position_history_long DOUBLE PRECISION DEFAULT NULL, position_date_ajout DATETIME NOT NULL, INDEX IDX_7D8E60AA2D831673 (coursier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE coursier_position_history ADD CONSTRAINT FK_7D8E60AA2D831673 FOREIGN KEY (coursier_id) REFERENCES coursier (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coursier_position_history DROP FOREIGN KEY FK_7D8E60AA2D831673');
        $this->addSql('DROP TABLE coursier_position_history');
    }
}
