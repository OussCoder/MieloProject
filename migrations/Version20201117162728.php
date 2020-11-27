<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201117162728 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE label DROP FOREIGN KEY FK_EA750E8B8478C02');
        $this->addSql('DROP INDEX IDX_EA750E8B8478C02 ON label');
        $this->addSql('ALTER TABLE label DROP labels_id');
        $this->addSql('ALTER TABLE product CHANGE product_texture_id product_texture_id INT NOT NULL, CHANGE product_intensity_id product_intensity_id INT NOT NULL, CHANGE product_flavor_id product_flavor_id INT NOT NULL, CHANGE orders_id orders_id INT NOT NULL, CHANGE apiculteur_id apiculteur_id INT NOT NULL, CHANGE type_id type_id INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE label ADD labels_id INT NOT NULL');
        $this->addSql('ALTER TABLE label ADD CONSTRAINT FK_EA750E8B8478C02 FOREIGN KEY (labels_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_EA750E8B8478C02 ON label (labels_id)');
        $this->addSql('ALTER TABLE product CHANGE product_texture_id product_texture_id INT DEFAULT NULL, CHANGE product_intensity_id product_intensity_id INT DEFAULT NULL, CHANGE product_flavor_id product_flavor_id INT DEFAULT NULL, CHANGE orders_id orders_id INT DEFAULT NULL, CHANGE apiculteur_id apiculteur_id INT DEFAULT NULL, CHANGE type_id type_id INT DEFAULT NULL');
    }
}
