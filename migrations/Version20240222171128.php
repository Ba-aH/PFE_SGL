<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222171128 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, tourner_id INT DEFAULT NULL, code_pin INT DEFAULT NULL, livraison_date DATETIME DEFAULT NULL, frais_livraison DOUBLE PRECISION NOT NULL, prix_totale_livraison DOUBLE PRECISION NOT NULL, reference VARCHAR(255) NOT NULL, poid_livraison DOUBLE PRECISION DEFAULT NULL, INDEX IDX_A60C9F1F3BAFBF35 (tourner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statut_livraison (id INT AUTO_INCREMENT NOT NULL, livraison_id INT DEFAULT NULL, status_title VARCHAR(255) NOT NULL, status_class VARCHAR(255) DEFAULT NULL, status_date_ajout DATETIME NOT NULL, status_date_modifier DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_7A20ADD8E54FB25 (livraison_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F3BAFBF35 FOREIGN KEY (tourner_id) REFERENCES tourner (id)');
        $this->addSql('ALTER TABLE statut_livraison ADD CONSTRAINT FK_7A20ADD8E54FB25 FOREIGN KEY (livraison_id) REFERENCES livraison (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F3BAFBF35');
        $this->addSql('ALTER TABLE statut_livraison DROP FOREIGN KEY FK_7A20ADD8E54FB25');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE statut_livraison');
    }
}
