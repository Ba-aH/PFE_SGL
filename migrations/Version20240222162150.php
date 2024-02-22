<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222162150 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE statut_coursier DROP FOREIGN KEY FK_794EA76E3256915B');
        $this->addSql('DROP INDEX UNIQ_794EA76E3256915B ON statut_coursier');
        $this->addSql('ALTER TABLE statut_coursier CHANGE relation_id coursier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE statut_coursier ADD CONSTRAINT FK_794EA76E2D831673 FOREIGN KEY (coursier_id) REFERENCES coursier (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_794EA76E2D831673 ON statut_coursier (coursier_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE statut_coursier DROP FOREIGN KEY FK_794EA76E2D831673');
        $this->addSql('DROP INDEX UNIQ_794EA76E2D831673 ON statut_coursier');
        $this->addSql('ALTER TABLE statut_coursier CHANGE coursier_id relation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE statut_coursier ADD CONSTRAINT FK_794EA76E3256915B FOREIGN KEY (relation_id) REFERENCES coursier (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_794EA76E3256915B ON statut_coursier (relation_id)');
    }
}
