<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230523204246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE enseignants (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, cin VARCHAR(10) NOT NULL, email VARCHAR(50) NOT NULL, address LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etudiants (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, cne VARCHAR(10) NOT NULL, email VARCHAR(50) NOT NULL, address LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE filieres (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modules (id INT AUTO_INCREMENT NOT NULL, filieres_id INT NOT NULL, semestres_id INT NOT NULL, enseignants_id INT NOT NULL, nom VARCHAR(10) NOT NULL, INDEX IDX_2EB743D7A5DB2FE8 (filieres_id), INDEX IDX_2EB743D7F625C1D6 (semestres_id), INDEX IDX_2EB743D77CF12A69 (enseignants_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notes (id INT AUTO_INCREMENT NOT NULL, etudiants_id INT NOT NULL, modules_id INT NOT NULL, note NUMERIC(5, 2) NOT NULL, INDEX IDX_11BA68CA873A5C6 (etudiants_id), INDEX IDX_11BA68C60D6DC42 (modules_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE semestres (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE modules ADD CONSTRAINT FK_2EB743D7A5DB2FE8 FOREIGN KEY (filieres_id) REFERENCES filieres (id)');
        $this->addSql('ALTER TABLE modules ADD CONSTRAINT FK_2EB743D7F625C1D6 FOREIGN KEY (semestres_id) REFERENCES semestres (id)');
        $this->addSql('ALTER TABLE modules ADD CONSTRAINT FK_2EB743D77CF12A69 FOREIGN KEY (enseignants_id) REFERENCES enseignants (id)');
        $this->addSql('ALTER TABLE notes ADD CONSTRAINT FK_11BA68CA873A5C6 FOREIGN KEY (etudiants_id) REFERENCES etudiants (id)');
        $this->addSql('ALTER TABLE notes ADD CONSTRAINT FK_11BA68C60D6DC42 FOREIGN KEY (modules_id) REFERENCES modules (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE modules DROP FOREIGN KEY FK_2EB743D7A5DB2FE8');
        $this->addSql('ALTER TABLE modules DROP FOREIGN KEY FK_2EB743D7F625C1D6');
        $this->addSql('ALTER TABLE modules DROP FOREIGN KEY FK_2EB743D77CF12A69');
        $this->addSql('ALTER TABLE notes DROP FOREIGN KEY FK_11BA68CA873A5C6');
        $this->addSql('ALTER TABLE notes DROP FOREIGN KEY FK_11BA68C60D6DC42');
        $this->addSql('DROP TABLE enseignants');
        $this->addSql('DROP TABLE etudiants');
        $this->addSql('DROP TABLE filieres');
        $this->addSql('DROP TABLE modules');
        $this->addSql('DROP TABLE notes');
        $this->addSql('DROP TABLE semestres');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
