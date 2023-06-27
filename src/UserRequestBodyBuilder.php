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

use JsonSerializable;

final class UserRequestBodyBuilder implements JsonSerializable
{

	/**
	 * User email property value
	 * 
	 * @var string
	 */
	private $email;

	/**
	 * User other email property value
	 * 
	 * @var string
	 */
	private $other_email;

	/**
	 * User password property value
	 * 
	 * @var string
	 */
	private $password;

	/**
	 * User authorization groups property value
	 * 
	 * @var string[]
	 */
	private $authorization_groups;

	/**
	 * User firstname property value
	 * 
	 * @var string
	 */
	private $firstname;

	/**
	 * User lastname property value
	 * 
	 * @var string
	 */
	private $lastname;

	/**
	 * User active property value
	 * 
	 * @var bool
	 */
	private $active;

	/**
	 * User verified property value
	 * 
	 * @var bool
	 */
	private $verified;

	/**
	 * User phone number property value
	 * 
	 * @var string
	 */
	private $phone_number;

	/**
	 * User postal code property value
	 * 
	 * @var string
	 */
	private $postal_code;

	/**
	 * User address property value
	 * 
	 * @var string
	 */
	private $address;

	/**
	 * User birthdate property value
	 * 
	 * @var string
	 */
	private $birthdate;

	/**
	 * User sex property value
	 * 
	 * @var string
	 */
	private $sex;

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
        return new self;
    }

	/**
	 * Set email property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function setEmail(string $value)
	{
		# code...
		$this->email = $value;
		
		return $this;
	}

	/**
	 * Set other_email property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function setOtherEmail(string $value)
	{
		# code...
		$this->other_email = $value;
		
		return $this;
	}

	/**
	 * Set password property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function setPassword(string $value)
	{
		# code...
		$this->password = $value;
		
		return $this;
	}

	/**
	 * Set authorization_groups property value
	 * 
	 * @param string[] $value
	 *
	 * @return self
	 */
	public function setAuthorizationGroups(array $value)
	{
		# code...
		$this->authorization_groups = $value;
		
		return $this;
	}

	/**
	 * Set firstname property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function setFirstname(string $value)
	{
		# code...
		$this->firstname = $value;
		
		return $this;
	}

	/**
	 * Set lastname property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function setLastname(string $value)
	{
		# code...
		$this->lastname = $value;
		
		return $this;
	}

	/**
	 * Set active property value
	 * 
	 * @param bool $value
	 *
	 * @return self
	 */
	public function setActive(bool $value)
	{
		# code...
		$this->active = $value;
		
		return $this;
	}

	/**
	 * Set verified property value
	 * 
	 * @param bool $value
	 *
	 * @return self
	 */
	public function setVerified(bool $value)
	{
		# code...
		$this->verified = $value;
		
		return $this;
	}

	/**
	 * Set phone_number property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function setPhoneNumber(string $value)
	{
		# code...
		$this->phone_number = $value;
		
		return $this;
	}

	/**
	 * Set postal_code property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function setPostalCode(string $value)
	{
		# code...
		$this->postal_code = $value;
		
		return $this;
	}

	/**
	 * Set address property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function setAddress(string $value)
	{
		# code...
		$this->address = $value;
		
		return $this;
	}

	/**
	 * Set birthdate property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function setBirthdate(string $value)
	{
		# code...
		$this->birthdate = $value;
		
		return $this;
	}

	/**
	 * Set sex property value
	 * 
	 * @param string $value
	 *
	 * @return self
	 */
	public function setSex(string $value)
	{
		# code...
		$this->sex = $value;
		
		return $this;
	}


	/**
     * Creates a JSON serializable request body
	 */
	public function build()
	{
        return array_filter([
            'email' => $this->email,
            'other_email' => $this->other_email,
            'password' => $this->password,
			'password_confirmation' => $this->password,
            'roles' => $this->authorization_groups,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'is_active' => $this->active,
            'is_verified' => $this->verified,
            'phone_number' => $this->phone_number,
            'postal_code' => $this->postal_code,
            'address' => $this->address,
            'birthdate' => $this->birthdate,
            'sex' => $this->sex,
        ], function($value) {
			return null !== $value;
		});
	}

	/**
     * @inheritDoc
	 */
    #[\ReturnTypeWillChange]
	public function jsonSerialize()
	{
        return $this->build();
	}

}