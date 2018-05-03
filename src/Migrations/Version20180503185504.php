<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180503185504 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE threads ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE threads ADD CONSTRAINT FK_6F8E3DDD12469DE2 FOREIGN KEY (category_id) REFERENCES categories (id)');
        $this->addSql('CREATE INDEX IDX_6F8E3DDD12469DE2 ON threads (category_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE threads DROP FOREIGN KEY FK_6F8E3DDD12469DE2');
        $this->addSql('DROP INDEX IDX_6F8E3DDD12469DE2 ON threads');
        $this->addSql('ALTER TABLE threads DROP category_id');
    }
}
