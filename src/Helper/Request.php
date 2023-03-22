<?php
namespace MyVideo\Helper;
class Request
{
    protected array $params = [];

    public function __construct()
    {
        $this->params['get'] = $_GET;
        $this->params['post'] = $_POST;
    }

    /**
     * Hole Daten aus dem Superglobalen GET Array
     * @param $propertyName
     * @return mixed|null
     */
    public function get($propertyName)
    {
        return $this->params['get'][$propertyName] ?? null;
    }

    /**
     * Hole Daten aus dem Superglobalen POST Array
     * @param $propertyName
     * @return mixed|null
     */
    public function post($propertyName)
    {
        return $this->params['post'][$propertyName] ?? null;
    }
}
