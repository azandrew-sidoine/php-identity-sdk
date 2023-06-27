<?php

namespace Drewlabs\Identity;

use Drewlabs\Identity\Concerns\Authorization;

class AuthorizationGroupRequestBodyBuilder implements \JsonSerializable
{

    use Authorization;

    /**
     * @var array
     */
    private $authorizations = [];

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
     * Set the authorizations property value
     * 
     * @param array $values 
     * @return static 
     */
    public function setAuthorizations(array $values)
    {
        $this->authorizations = $values;
        return $this;
    }

    /**
     * Creates a JSON serializable request body
     * 
     * @return string[] 
     */
    public function build()
    {
        return empty($this->authorizations) ? [
            'label' => $this->label,
            'display_label' => $this->description,
        ] : [
            'label' => $this->label,
            'display_label' => $this->description,
            'authorizations' => $this->authorizations
        ];
    }
}
