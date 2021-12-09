<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211209105307 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accounts (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, balance DOUBLE PRECISION NOT NULL, total_debit_due DOUBLE PRECISION NOT NULL, exported_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contract_vehicles (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, customer_id INT NOT NULL, contract_id INT NOT NULL, license_plate VARCHAR(16) DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contracts (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, customer_id INT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer_versions (id INT AUTO_INCREMENT NOT NULL, customer_id INT NOT NULL, firstname VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, email_private VARCHAR(255) NOT NULL, date_of_birth DATE NOT NULL, phone_home VARCHAR(50) NOT NULL, phone_business VARCHAR(50) NOT NULL, phone_mobile VARCHAR(50) NOT NULL, street VARCHAR(255) DEFAULT NULL, house_number VARCHAR(255) DEFAULT NULL, zip VARCHAR(20) NOT NULL, city VARCHAR(50) NOT NULL, country_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_versions (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, contract_invoice_cycle VARCHAR(255) DEFAULT NULL, contract_invoice_cycle_interval INT DEFAULT NULL, contract_invoice_cycle_interval_type VARCHAR(255) DEFAULT NULL, contractinitial_duration INT NOT NULL, contractinitial_duration_type VARCHAR(255) DEFAULT NULL, contract_extensiontime VARCHAR(255) DEFAULT NULL, contract_extensiontime_type VARCHAR(255) DEFAULT NULL, contract_cancellation_time_period INT DEFAULT NULL, contract_cancellation_time_period_type VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE accounts');
        $this->addSql('DROP TABLE contract_vehicles');
        $this->addSql('DROP TABLE contracts');
        $this->addSql('DROP TABLE customer_versions');
        $this->addSql('DROP TABLE product_versions');
    }
}
