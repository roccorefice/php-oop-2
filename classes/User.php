<?php

/**
* @author Rocco Orefice rocco.orefice92@gmail.com
* @copyright 2021 RoccoOrefice
*/
class User {
    public $username;
    public $email;
    public $password;

    public function __construct(string $username, string $email, string $password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
}

?>