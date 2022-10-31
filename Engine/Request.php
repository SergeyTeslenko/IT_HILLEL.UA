<?php

namespace Engine;

use Engine\Traits\Singleton;
use Exception;

class Request
{

    use Singleton;

    private array $items = [];


    /**
     * @throws Exception
     */

    private function method(): string
    {
        return mb_strtoupper($_SERVER['REQUEST_METHOD']);
    }

    const METHODS = ['POST', 'PUT', 'DELETE', 'PATCH', 'GET'];

    /**
     * @throws Exception
     */
    public function post(): static
    {
        if ($this->method() === "POST") {
            $this->items = array_filter($_POST);
            return $this;
        } else {
            throw new Exception("REQUEST METHOD UNDEFINED");
        }

    }

    public function isPost()
    {
        return $this->method() === "POST";
    }

    public function get(): static
    {
        if ($this->method() === "GET") {
            $this->items = array_filter($_GET);
            return $this;
        } else {
            throw new Exception("REQUEST METHOD UNDEFINED");
        }

    }

    /**
     * @throws Exception
     */
    public function all(): array
    {
        $method = $this->method();


        if ($method === "GET") {
            $this->get();
        }
        if ($method === "POST") {
            $this->post();
        }

        return $this->items;
    }

    /**
     * @throws Exception
     */
    public function isNotEmpty(): bool
    {
        return !empty($this->all());
    }


    public function only(array $keys): array
    {
        return array_only($this->items, $keys);
    }

}