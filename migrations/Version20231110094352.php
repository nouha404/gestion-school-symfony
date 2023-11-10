<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231110094352 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classe ADD filiere_id INT NOT NULL, ADD niveau_id INT NOT NULL');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF96180AA129 FOREIGN KEY (filiere_id) REFERENCES filiere (id)');
        $this->addSql('ALTER TABLE classe ADD CONSTRAINT FK_8F87BF96B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
        $this->addSql('CREATE INDEX IDX_8F87BF96180AA129 ON classe (filiere_id)');
        $this->addSql('CREATE INDEX IDX_8F87BF96B3E9C81 ON classe (niveau_id)');
        $this->addSql('ALTER TABLE module ADD professeur_id INT NOT NULL');
        $this->addSql('ALTER TABLE module ADD CONSTRAINT FK_C242628BAB22EE9 FOREIGN KEY (professeur_id) REFERENCES professeur (id)');
        $this->addSql('CREATE INDEX IDX_C242628BAB22EE9 ON module (professeur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF96180AA129');
        $this->addSql('ALTER TABLE classe DROP FOREIGN KEY FK_8F87BF96B3E9C81');
        $this->addSql('DROP INDEX IDX_8F87BF96180AA129 ON classe');
        $this->addSql('DROP INDEX IDX_8F87BF96B3E9C81 ON classe');
        $this->addSql('ALTER TABLE classe DROP filiere_id, DROP niveau_id');
        $this->addSql('ALTER TABLE module DROP FOREIGN KEY FK_C242628BAB22EE9');
        $this->addSql('DROP INDEX IDX_C242628BAB22EE9 ON module');
        $this->addSql('ALTER TABLE module DROP professeur_id');
    }
}
