<?php
class Utente
{
	private $nome;
    private $cognome;
	private $CreditCard;
    public $sconto;

	public function __construct($nome, $cognome, $CreditCard)
	{
		$this->nome = $nome;
        $this->cognome = $cognome;
		$this->CreditCard = $CreditCard;

	}
    public function checkValidity() {
        $now = new DateTime();
    
        $expiration = DateTime::createFromFormat('m/y', $this->expiry);
        $interval = $now->diff($expiration);
        return $interval->invert != 1;
    }
}