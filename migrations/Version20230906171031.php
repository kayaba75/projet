<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230906171031 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rdv (id INT AUTO_INCREMENT NOT NULL, services_id INT NOT NULL, rdv_dispo_id INT NOT NULL, commentaire VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, INDEX IDX_10C31F86AEF5A6C1 (services_id), INDEX IDX_10C31F86C1BB8466 (rdv_dispo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F86AEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id)');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F86C1BB8466 FOREIGN KEY (rdv_dispo_id) REFERENCES rdv_dispo (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F86AEF5A6C1');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F86C1BB8466');
        $this->addSql('DROP TABLE rdv');
    }
}
