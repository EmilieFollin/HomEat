<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180326145725 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE orders_review');
        $this->addSql('ALTER TABLE review ADD user1_id INT DEFAULT NULL, ADD user2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C656AE248B FOREIGN KEY (user1_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6441B8B65 FOREIGN KEY (user2_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_794381C656AE248B ON review (user1_id)');
        $this->addSql('CREATE INDEX IDX_794381C6441B8B65 ON review (user2_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE orders_review (orders_id INT NOT NULL, review_id INT NOT NULL, INDEX IDX_D8D3B817CFFE9AD6 (orders_id), INDEX IDX_D8D3B8173E2E969B (review_id), PRIMARY KEY(orders_id, review_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE orders_review ADD CONSTRAINT FK_D8D3B8173E2E969B FOREIGN KEY (review_id) REFERENCES review (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE orders_review ADD CONSTRAINT FK_D8D3B817CFFE9AD6 FOREIGN KEY (orders_id) REFERENCES orders (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C656AE248B');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6441B8B65');
        $this->addSql('DROP INDEX IDX_794381C656AE248B ON review');
        $this->addSql('DROP INDEX IDX_794381C6441B8B65 ON review');
        $this->addSql('ALTER TABLE review DROP user1_id, DROP user2_id');
    }
}
