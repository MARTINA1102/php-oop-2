<?php
class CreditCard
{
	private $number;
	private $cvc;
	private $expiry;

	public function __construct($number, $cvc, $expiry)
	{
		$this->number = $number;
		$this->cvc = $cvc;
		$this->expiry = $expiry;
	}

	public function checkValidity()
	{
		// controlli se la carta e' valida (non scaduta ...)
		// return true o false in base alla validita'
	}

	public function checkNumber() {
		// controlli sul numero: 16 cifre numeriche ...
	}

	public function checkCvc() {
		// controlli sul CVC: 3 cifre numeriche
	}

	public function pay($amount) {
		// pagare la somma
	}
}