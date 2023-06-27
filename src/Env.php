<?php

declare(strict_types=1);

/*
 * This file is auto generated using the drewlabs/mdl UML model class generator package
 *
 * (c) Sidoine Azandrew <contact@liksoft.tg>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace Drewlabs\Identity;

class Env
{
	/**
	 * Create new class instance
	 * 
	 * @param string $name
	 * @param string|mixed $value
	 */
	public function __construct(string $name, $value)
	{
		# code...
		$this->name = $name;
		$this->value = $value;
	}

	/**
	 * Name property
	 * 
	 * @var string
	 */
	private $name = null;

	/**
	 * Value Property
	 * 
	 * @var string
	 */
	private $value = null;

	/**
	 * Set name property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function setName(string $value)
	{
		# code...
		$this->name = $value;

		return $this;
	}

	/**
	 * Set value property value
	 * 
	 * @param string|mixed $value
	 *
	 * @return self
	 */
	public function setValue($value)
	{
		# code...
		$this->value = $value;

		return $this;
	}

	/**
	 * Get name property value
	 * 
	 *
	 * @return string
	 */
	public function getName()
	{
		# code...
		return $this->name;
	}

	/**
	 * Get value property value
	 * 
	 *
	 * @return string|mixed
	 */
	public function getValue()
	{
		# code...
		return $this->value;
	}

	/**
	 * Validate attributes keys exists
	 * 
	 * @param array $attributes 
	 * @return void 
	 * @throws InvalidArgumentException 
	 */
	private static function validateAttributes(array $attributes)
	{
		if (isset($attributes['name']) && is_string($attributes['name']) && isset($attributes['value']) && is_scalar($attributes['value'])) {
			return;
		}
		throw new \InvalidArgumentException('$attributes must have the name and the value properties');
	}

	/**
	 * Creates instance from a list of attributes
	 * 
	 * @param array $attributes
	 *
	 * @return static
	 */
	public static function fromAttributes(array $attributes = [])
	{
		self::validateAttributes($attributes);
		return new self($attributes['name'], $attributes['value']);
	}

	/**
	 * Returns the dictionnary representation of the component
	 * 
	 *
	 * @return array
	 */
	public function toArray()
	{
		return [
			'name' => $this->name,
			'value' => $this->value
		];
	}
}
