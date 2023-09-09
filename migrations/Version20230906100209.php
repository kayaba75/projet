<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230906100209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rdv_dispo ADD rdv_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rdv_dispo ADD CONSTRAINT FK_9084B4BD4CCE3F86 FOREIGN KEY (rdv_id) REFERENCES rdv (id)');
        $this->addSql('CREATE INDEX IDX_9084B4BD4CCE3F86 ON rdv_dispo (rdv_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rdv_dispo DROP FOREIGN KEY FK_9084B4BD4CCE3F86');
        $this->addSql('DROP INDEX IDX_9084B4BD4CCE3F86 ON rdv_dispo');
        $this->addSql('ALTER TABLE rdv_dispo DROP rdv_id');
    }
}
