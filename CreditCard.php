<?php
class CreditCard
{
	private $number;
	private $cvc;
	private $expiryYear;
    private $expiryMonth;


	public function __construct(string $number, int $cvc, int $expiryYear, int $expiryMonth)
	{
		$this->number = $number;
		$this->cvc = $cvc;
		$this->expiryYear = $expiryYear;
        $this->expiryMonth = $expiryMonth;
	}

	
    public function isExpired(): bool {
		if ((int) date('y') < $this->expiryYear) {
			return false;
		} else if ((int) date('y') == $this->expiryYear && (int) date('n') < $this->expiryMonth) {
			return false;
		}
		return true;
	}


	public function checkNumber($number) {
		// controlli sul numero: 16 cifre numeriche ...
        if (is_integer($number) && strlen($number) === 16) {
                    $this->number = $number;
        }
    }
    

	public function checkCvc($cvc) {
		// controlli sul CVC: 3 cifre numeriche
        if (is_integer($cvc) && strlen($cvc) === 3) {
            $this->cvc = $cvc;
        }
    }

    public function pay(float $amount): bool {
		if ($this->isExpired()) {
			// ritorna errore
			return false;
		} else {
			// fai il pagament
			return true;
		}
	}
	
}
