<?php


namespace Drewlabs\Identity\Concerns;

trait Authorization
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $description;


    /**
     * Set the label property value
     * 
     * @param string $value 
     * @return static 
     */
    public function setLabel(string $value)
    {
        $this->label = $value;
        return $this;
    }

    /**
     * Set the description property value
     * 
     * @param string $value 
     * 
     * @return static 
     */
    public function setDescription(string $value)
    {
        $this->description = $value;
        return $this;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->build();
    }
}