<?php declare(strict_types=1);

namespace WalleePayment\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

/**
 * Class Migration1590646356OrderEntity
 *
 * @package WalleePayment\Migration
 */
class Migration1590646356OrderEntity extends MigrationStep {
	/**
	 * get creation timestamp
	 *
	 * @return int
	 */
	public function getCreationTimestamp(): int
	{
		return 1590646356;
	}

	/**
	 * update non-destructive changes
	 *
	 * @param \Doctrine\DBAL\Connection $connection
	 * @throws \Doctrine\DBAL\DBALException
	 */
	public function update(Connection $connection): void
	{
		$connection->executeUpdate('ALTER TABLE `order` ADD COLUMN `wallee_lock` DATETIME DEFAULT NULL;');
	}

	/**
	 * update destructive changes
	 *
	 * @param \Doctrine\DBAL\Connection $connection
	 */
	public function updateDestructive(Connection $connection): void
	{
		// implement update destructive
	}
}