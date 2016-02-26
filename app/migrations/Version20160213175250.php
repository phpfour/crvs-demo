<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160213175250 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE audit_log (id INT AUTO_INCREMENT NOT NULL, type_id VARCHAR(200) NOT NULL, type VARCHAR(500) DEFAULT NULL, description LONGTEXT DEFAULT NULL, event_time DATETIME NOT NULL, user VARCHAR(255) NOT NULL, ip VARCHAR(20) DEFAULT NULL, entity_type VARCHAR(255) DEFAULT NULL, entity_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tasks (id INT AUTO_INCREMENT NOT NULL, contributed_by INT DEFAULT NULL, reviewed_by INT DEFAULT NULL, approved_by INT DEFAULT NULL, published_by INT DEFAULT NULL, created_by INT DEFAULT NULL, updated_by INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, reference LONGTEXT DEFAULT NULL, imageUrls LONGTEXT DEFAULT NULL, contents LONGTEXT DEFAULT NULL, state VARCHAR(25) DEFAULT NULL, published TINYINT(1) DEFAULT NULL, published_url VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_50586597C52906A7 (contributed_by), INDEX IDX_5058659785D7FB47 (reviewed_by), INDEX IDX_505865974EA3CB3D (approved_by), INDEX IDX_50586597B548D29F (published_by), INDEX IDX_50586597DE12AB56 (created_by), INDEX IDX_5058659716FE72E1 (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_1483A5E992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_1483A5E9A0D96FBF (email_canonical), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tasks ADD CONSTRAINT FK_50586597C52906A7 FOREIGN KEY (contributed_by) REFERENCES users (id)');
        $this->addSql('ALTER TABLE tasks ADD CONSTRAINT FK_5058659785D7FB47 FOREIGN KEY (reviewed_by) REFERENCES users (id)');
        $this->addSql('ALTER TABLE tasks ADD CONSTRAINT FK_505865974EA3CB3D FOREIGN KEY (approved_by) REFERENCES users (id)');
        $this->addSql('ALTER TABLE tasks ADD CONSTRAINT FK_50586597B548D29F FOREIGN KEY (published_by) REFERENCES users (id)');
        $this->addSql('ALTER TABLE tasks ADD CONSTRAINT FK_50586597DE12AB56 FOREIGN KEY (created_by) REFERENCES users (id)');
        $this->addSql('ALTER TABLE tasks ADD CONSTRAINT FK_5058659716FE72E1 FOREIGN KEY (updated_by) REFERENCES users (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tasks DROP FOREIGN KEY FK_50586597C52906A7');
        $this->addSql('ALTER TABLE tasks DROP FOREIGN KEY FK_5058659785D7FB47');
        $this->addSql('ALTER TABLE tasks DROP FOREIGN KEY FK_505865974EA3CB3D');
        $this->addSql('ALTER TABLE tasks DROP FOREIGN KEY FK_50586597B548D29F');
        $this->addSql('ALTER TABLE tasks DROP FOREIGN KEY FK_50586597DE12AB56');
        $this->addSql('ALTER TABLE tasks DROP FOREIGN KEY FK_5058659716FE72E1');
        $this->addSql('DROP TABLE audit_log');
        $this->addSql('DROP TABLE tasks');
        $this->addSql('DROP TABLE users');
    }
}
