<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210115122245 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE buyer (id INT AUTO_INCREMENT NOT NULL, code INT NOT NULL, number INT NOT NULL, name VARCHAR(1000) NOT NULL, telefone VARCHAR(255) DEFAULT NULL, courier_time INT NOT NULL, courier_foto VARCHAR(255) NOT NULL, courier_cloth INT NOT NULL, courier_mask INT NOT NULL, courier_contact INT NOT NULL, courier_end INT NOT NULL, foto_pack VARCHAR(255) NOT NULL, box_deformed INT NOT NULL, box_date INT NOT NULL, plants VARCHAR(255) NOT NULL, milks VARCHAR(255) NOT NULL, what_like VARCHAR(1000) DEFAULT NULL, what_not_like VARCHAR(1000) DEFAULT NULL, comments VARCHAR(1000) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE buyer');
    }
}
