<?php

namespace Drewlabs\Identity\Console;

class Options
{
    /**
     * Max number of argument to parse
     */
    const MAX_ARGS = 1024;

    /**
     * @var array
     */
    private $values;

    /**
     * Creates class instance
     * 
     * @param array $values 
     */
    public function __construct(array $values = [])
    {
        $this->values = $values;
    }

    /**
     * Load a list of options from command arguments
     * 
     * @param array $args 
     * @return static 
     */
    public static function load(array $args)
    {
        $index = 0;
        $configs = [];
        while ($index < static::MAX_ARGS && isset($args[$index])) {
            if (preg_match('/^([^-\=]+.*)$/', $args[$index], $matches) === 1) {
                // not have ant -= prefix
                $configs[$matches[1]] = true;
            } else if (preg_match('/^-+(.+)$/', $args[$index], $matches) === 1) {
                // match prefix - with next parameter
                if (preg_match('/^-+(.+)\=(.+)$/', $args[$index], $subMatches) === 1) {
                    if (array_key_exists($subMatches[1], $configs)) {
                        $configs[$subMatches[1]] = array_merge(is_array($configs[$subMatches[1]]) ? $configs[$subMatches[1]] : [$configs[$subMatches[1]]], [$subMatches[2]]);
                    } else {
                        $configs[$subMatches[1]] = $subMatches[2];
                    }
                } else if (isset($args[$index + 1]) && preg_match('/^[^-\=]+$/', $args[$index + 1]) === 1) {
                    // have sub parameter
                    if (array_key_exists($matches[1], $configs)) {
                        $configs[$matches[1]] = array_merge(is_array($configs[$matches[1]]) ? $configs[$matches[1]] : [$configs[$matches[1]]], [$args[$index + 1]]);
                    } else {
                        $configs[$matches[1]] = $args[$index + 1];
                    }
                    $index++;
                } elseif (strpos($matches[0], '--') === false) {
                    for ($j = 0; $j < strlen($matches[1]); $j += 1) {
                        $configs[$matches[1][$j]] = true;
                    }
                } else if (isset($args[$index + 1]) && preg_match('/^[^-].+$/', $args[$index + 1]) === 1) {
                    if (array_key_exists($matches[1], $configs)) {
                        $configs[$matches[1]] = array_merge(is_array($configs[$matches[1]]) ? $configs[$matches[1]] : [$configs[$matches[1]]], [$args[$index + 1]]);
                    } else {
                        $configs[$matches[1]] = $args[$index + 1];
                    }
                    $index++;
                } else {
                    $configs[$matches[1]] = true;
                }
            }
            $index++;
        }

        return new static($configs);
    }

    /**
     * Checks if a given option is provided
     * 
     * @param string $option 
     * @return bool 
     */
    public function has(string $option)
    {
        return array_key_exists($option, $this->values);
    }

    /**
     * get an option from the options cache
     * 
     * @param string $option
     * @param null|callable|mixed $default 
     * @return string|int|string[]|int[] 
     */
    public function get(string $option, $default = null)
    {
        if ($this->has($option) && (null !== ($this->values[$option] ?? null))) {
            return $this->values[$option];
        }
		$default = !is_string($default) && is_callable($default) ? $default : function () use ($default) {
			return $default;
		};
		return $default();
    }
}
