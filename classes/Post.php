<?php

/**
* @author Rocco Orefice rocco.orefice92@gmail.com
* @copyright 2021 RoccoOrefice
*/
class Post {
    public $titolo;
    public $testo;
    public $data_creazione;

    public function __construct(string $titolo, string $testo, string $data_creazione){
        $this->titolo = $titolo;
        $this->testo = $testo;
        $this->data_creazione = $data_creazione;
    }
}

?>