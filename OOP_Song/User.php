<?php

/**
 * a user working with the website
 */
class User
{
    public static $singleton = null;

    public static function singleton(): User
    {
        if (static::$singleton === null) {

            // initialize the object

            // contact the database
            // check things
            // save things
            // update stuff

            // make the nice User object
            $user = new User;
            $user->email = 'whatever@what.com';

            static::$singleton = $user;
        }

        return static::$singleton;
    }


    public $id = null;
    public $username = null;
    public $email = null;
    public $last_login_at = null;
    public $role = []; // user|admin

}
