<?php

namespace Engine;

use Engine\Traits\Singleton;
use ArrayAccess;

class Config
{

    use Singleton;

    private array $items = [];


    public function accessible($value): bool
    {
        return is_array($value) || $value instanceof ArrayAccess;
    }


    public function get($key, $default = null)
    {
        return $this->value($this->items, $key, $default);
    }

    private function exists($array, $key): bool
    {

        if ($array instanceof ArrayAccess) {
            return $array->offsetExists($key);
        }

        if (is_float($key)) {
            $key = (string)$key;
        }

        return array_key_exists($key, $array);
    }

    private function value($array, $key, $default = null)
    {


        if (is_null($key)) {
            return $array;
        }


        if ($this->exists($array, $key)) {
            return $array[$key];
        }

        if (!str_contains($key, '.')) {

            return $array[$key] ?? $array;

        }

        foreach (explode('.', $key) as $segment) {
            if ($this->exists($array, $segment) && $this->accessible($array)) {
                $array = $array[$segment];
            } else {

                return $default;
            }
        }

        return $array;


    }

    /**
     * @param array $items
     */
    public function set(array $items): void
    {
        $this->items = $items;
    }


}