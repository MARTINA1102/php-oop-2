<?php
class Iscritto extends Utente
{
    private string $username;
    private string $password;
    public $sconto=20;

    public function __construct($username, $password)
	{
		// vado nel database a prendere i dati dell'utente
		// setto le variabili di istanza in base ai volori del database
		//
		// $row = $conn->query("SELECT * FROM users WHERE `username` = $username AND `password` = $password;");

		//$row = ['dati dal database'];

		//$this->creditCard = CreditCard::get($row['creditcard_id']);

		//parent::__construct($row['name'], $row['address'], $this->creditCard);
	}
}