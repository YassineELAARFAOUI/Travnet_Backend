<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240501151821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acc_client (id INT AUTO_INCREMENT NOT NULL, full_name VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL, phone VARCHAR(10) NOT NULL, password VARCHAR(64) NOT NULL, block TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_453E21A9E7927C74 (email), UNIQUE INDEX UNIQ_IDENTIFIER_ID (id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE acc_client');
    }
}
