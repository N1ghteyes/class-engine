<?php

namespace apexl\Class_engine\Traits;

trait Engine {

    protected $data = [];
    protected $operator;
    protected $driver;

    public function __get($name){
        return isset($this->data[$name]) ? (object)$this->data[$name] : FALSE;
    }

    public function __isset($name){
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }

    public function __destruct()
    {
        $this->data = null;
        $this->loadedFiles = null;
    }
}