<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210115131422 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE box_deformed ADD value VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE courier_end ADD value VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE milks ADD value VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE plants ADD value VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE box_deformed DROP value');
        $this->addSql('ALTER TABLE courier_end DROP value');
        $this->addSql('ALTER TABLE milks DROP value');
        $this->addSql('ALTER TABLE plants DROP value');
    }
}
