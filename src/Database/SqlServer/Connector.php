<?php

namespace Farzai\Viola\Database\SqlServer;

use Farzai\Viola\Database\AbstractConnector;

class Connector extends AbstractConnector
{
    /**
     * Parse the database configuration, add the default values.
     */
    protected function parseConfig(array $config): array
    {
        return array_merge(parent::parseConfig($config), [
            'driver' => class_exists(\PDO::class)
                ? 'pdo_sqlsrv'
                : 'sqlsrv',
        ]);
    }
}
