<?php
class session
{
    public static $instance = null;
    public static function instance(): Session
    {
        if (static::$instance === null) {
            static::$instance = new Session;
        }
        return static::$instance;
    }

    public $data = [];

    //when a session object is being created
    //thanks to singleton/instance principle, it will happen just once

    public function __construct()
    {
        session_start();
        $this->data = $_SESSION;
    }

    public function set($key, $value)
    {
        // putting the value into an array
        $this->data[$key] = $value;

        $_SESSION[$key] = $value;
    }
}
