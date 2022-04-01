<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220325102405 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pillow_category ADD name VARCHAR(100) NOT NULL, DROP hard_pillow, DROP soft_pillow');
        $this->addSql('ALTER TABLE pillow_product ADD name VARCHAR(100) NOT NULL, ADD about VARCHAR(100) NOT NULL, ADD price INT NOT NULL, DROP pillow_one, DROP pillow_two');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pillow_category ADD hard_pillow VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD soft_pillow VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP name');
        $this->addSql('ALTER TABLE pillow_product ADD pillow_one VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD pillow_two VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP name, DROP about, DROP price');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE name name VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
