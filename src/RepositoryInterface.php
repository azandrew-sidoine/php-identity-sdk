<?php

declare(strict_types=1);
/*
 * This file is auto generated using the drewlabs code generator package (v2.4)
 *
 * (c) Sidoine Azandrew <contact@liksoft.tg>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace Drewlabs\Identity;

interface RepositoryInterface
{
    /**
     * resolve `$name` attached value from the repository instance
     * 
     * @param string $name 
     * @param mixed $default 
     * @return mixed 
     */
    public function get(string $name, $default);
}