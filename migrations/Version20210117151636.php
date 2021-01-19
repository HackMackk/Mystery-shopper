<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210117151636 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE buyer (id INT AUTO_INCREMENT NOT NULL, courier_time_id INT NOT NULL, courier_cloth_id INT NOT NULL, courier_mask_id INT NOT NULL, courier_contact_id INT NOT NULL, courier_end_id INT NOT NULL, box_deformed_id INT NOT NULL, box_date_id INT NOT NULL, plants_id INT NOT NULL, milks_id INT NOT NULL, code INT NOT NULL, number INT NOT NULL, name VARCHAR(255) NOT NULL, telefone INT NOT NULL, courier_file VARCHAR(1000) NOT NULL, courier_end_text VARCHAR(1000) DEFAULT NULL, box_foto VARCHAR(255) NOT NULL, box_deformed_foto VARCHAR(255) DEFAULT NULL, plants_foto VARCHAR(255) DEFAULT NULL, milks_text VARCHAR(1000) DEFAULT NULL, milks_foto VARCHAR(255) DEFAULT NULL, what_like VARCHAR(1000) DEFAULT NULL, what_dislike VARCHAR(1000) DEFAULT NULL, other VARCHAR(1000) DEFAULT NULL, INDEX IDX_84905FB3BCF1A8AB (courier_time_id), INDEX IDX_84905FB315DFEEDF (courier_cloth_id), INDEX IDX_84905FB39DEBAD0B (courier_mask_id), INDEX IDX_84905FB3C29FD907 (courier_contact_id), INDEX IDX_84905FB341B20ED9 (courier_end_id), INDEX IDX_84905FB3B409FA4 (box_deformed_id), INDEX IDX_84905FB3A155A85A (box_date_id), INDEX IDX_84905FB362091EAB (plants_id), INDEX IDX_84905FB341BCF918 (milks_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB3BCF1A8AB FOREIGN KEY (courier_time_id) REFERENCES courier_time (id)');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB315DFEEDF FOREIGN KEY (courier_cloth_id) REFERENCES courier_cloth (id)');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB39DEBAD0B FOREIGN KEY (courier_mask_id) REFERENCES courier_mask (id)');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB3C29FD907 FOREIGN KEY (courier_contact_id) REFERENCES courier_contact (id)');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB341B20ED9 FOREIGN KEY (courier_end_id) REFERENCES courier_end (id)');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB3B409FA4 FOREIGN KEY (box_deformed_id) REFERENCES box_deformed (id)');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB3A155A85A FOREIGN KEY (box_date_id) REFERENCES bdate (id)');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB362091EAB FOREIGN KEY (plants_id) REFERENCES plants (id)');
        $this->addSql('ALTER TABLE buyer ADD CONSTRAINT FK_84905FB341BCF918 FOREIGN KEY (milks_id) REFERENCES milks (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE buyer');
    }
}
