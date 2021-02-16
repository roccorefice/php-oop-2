<?php
include_once __DIR__ . '/UserDetails.php';

class UserProfile extends User{
    public $nome;
    public $cognome;
    public $indirizzo;
    public $telefono;
    public $descrizione;
    public $interessi;
    public $data_iscrizione;

    public function __construct(string $username, string $email, string $password){
        parent::__construct($username, $email, $password);

    }

}

?>