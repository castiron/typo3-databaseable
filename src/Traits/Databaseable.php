<?php namespace Castiron\Databaseable\Traits;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class Databaseable
 * @package Castiron\Databaseable\Traits
 */
trait Databaseable
{
    /**
     * @param string $table
     * @return QueryBuilder
     */
    protected static function queryBuilderForTable($table = '')
    {
        return GeneralUtility::makeInstance(ConnectionPool::class)
            ->getQueryBuilderForTable($table);
    }
}
