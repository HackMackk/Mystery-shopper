<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210115133423 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE buyer (id INT AUTO_INCREMENT NOT NULL, courier_time_id INT DEFAULT NULL, courier_cloth_id INT NOT NULL, courier_mask_id INT NOT NULL, courier_contact_id INT NOT NULL, code INT NOT NULL, number INT NOT NULL, names VARCHAR(1000) NOT NULL, telefone INT NOT NULL, courier_post VARCHAR(255) NOT NULL, courier_end VARCHAR(255) NOT NULL, pack_foto VARCHAR(255) NOT NULL, box_deformed VARCHAR(255) NOT NULL, box_date VARCHAR(255) NOT NULL, plants VARCHAR(255) NOT NULL, milks VARCHAR(255) NOT NULL, what_like VARCHAR(1000) DEFAULT NULL, what_not_like VARCHAR(1000) NOT NULL, other VARCHAR(1000) NOT NULL, INDEX IDX_84905FB3BCF1A8AB (courier_time_id), INDEX IDX_84905FB315DFEEDF (courier_cloth_id), INDEX IDX_84905FB39DEBAD0B (courier_mask_id), INDEX IDX_84905FB3C29FD907 (courier_contact_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB3BCF1A8AB FOREIGN KEY (courier_time_id) REFERENCES courier_time (id)');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB315DFEEDF FOREIGN KEY (courier_cloth_id) REFERENCES courier_cloth (id)');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB39DEBAD0B FOREIGN KEY (courier_mask_id) REFERENCES courier_mask (id)');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB3C29FD907 FOREIGN KEY (courier_contact_id) REFERENCES courier_contact (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE buyer');
    }
}
