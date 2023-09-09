<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230906165630 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rdv_dispo DROP FOREIGN KEY FK_9084B4BD4CCE3F86');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F86AEF5A6C1');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F86C1BB8466');
        $this->addSql('DROP TABLE rdv');
        $this->addSql('DROP INDEX IDX_9084B4BD4CCE3F86 ON rdv_dispo');
        $this->addSql('ALTER TABLE rdv_dispo DROP rdv_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rdv (id INT AUTO_INCREMENT NOT NULL, rdv_dispo_id INT DEFAULT NULL, services_id INT DEFAULT NULL, commentaire VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_unicode_ci`, status TINYINT(1) NOT NULL, INDEX IDX_10C31F86C1BB8466 (rdv_dispo_id), INDEX IDX_10C31F86AEF5A6C1 (services_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F86AEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F86C1BB8466 FOREIGN KEY (rdv_dispo_id) REFERENCES rdv_dispo (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE rdv_dispo ADD rdv_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rdv_dispo ADD CONSTRAINT FK_9084B4BD4CCE3F86 FOREIGN KEY (rdv_id) REFERENCES rdv (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_9084B4BD4CCE3F86 ON rdv_dispo (rdv_id)');
    }
}
