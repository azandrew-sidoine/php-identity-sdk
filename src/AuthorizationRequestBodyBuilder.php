<?php

namespace Drewlabs\Identity;

use Drewlabs\Identity\Concerns\Authorization;

class AuthorizationRequestBodyBuilder implements \JsonSerializable
{
    use Authorization;

    /**
     * Creates class instances
     * 
     * @return void 
     */
    private function __construct()
    {
    }

    /**
     * Creates new class instances
     * 
     * @return static 
     */
    public static function new()
    {
        return new static;
    }

    /**
     * Creates a JSON serializable request body
     * 
     * @return string[] 
     */
    public function build()
    {

        return [
            'label' => $this->label,
            'display_label' => $this->description
        ];
    }
}