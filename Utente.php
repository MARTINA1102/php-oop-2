<?php
class Utente
{
	private $nome;
    private $cognome;
	private $creditCard;
    public $sconto;

	public function __construct($nome, $cognome, $creditCard)
	{
		$this->nome = $nome;
        $this->cognome = $cognome;
		$this->creditCard = $creditCard;

	}
}