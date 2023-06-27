<?php

namespace Drewlabs\Identity;

use Drewlabs\RestQuery\Client;

class API
{
    /**
     * @return never 
     * @throws RuntimeException 
     */
    private function __construct()
    {
        throw new \RuntimeException('API class cannot be constructed');
    }

    /**
     * Creates an `authorizations` query client instance
     * 
     * @param string|null $host 
     * @return Client 
     * @throws InvalidArgumentException 
     */
    public static function authorizations(string $host = null)
    {
        return Client::new(sprintf("%s/%s", rtrim(EnvRepository::getInstance()->get('_host'), '/'), 'api/v2/authorizations'));
    }

    /**
     * Create an `authorization groups` query client instance
     * 
     * @param string|null $host 
     * @return Client 
     * @throws InvalidArgumentException 
     */
    public static function groups(string $host = null)
    {
        return Client::new(sprintf("%s/%s", rtrim(EnvRepository::getInstance()->get('_host'), '/'), 'api/v2/authorization-groups'));
    }

    /**
     * Create an `users` query client instance
     * 
     * @param string|null $host 
     * @return Client 
     * @throws InvalidArgumentException 
     */
    public static function users(string $host = null)
    {
        return Client::new(sprintf("%s/%s", rtrim(EnvRepository::getInstance()->get('_host'), '/'), 'api/v2/users'));
    }
}
