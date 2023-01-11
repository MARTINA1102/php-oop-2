<?php
abstract class Prodotti
{

    public $nome;
    public $categoria;
    public $descrizione;
    public $costo;
    private int $availableStartMonth;
	private int $availableEndMonth;
	private int $availableQty;


	public function __construct($nome,$categoria,$descrizione, $costo)
	{
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->descrizione = $descrizione;
		$this->costo = $costo;
	}

    public function isAvailable ()
	{
		if ($this->availableQty == 0) {
			return false;
		}
		$currentMonth = (int) date('m');
		if ($this->availableStartMonth <= $currentMonth && $currentMonth <= $this->availableEndMonth) {
			return true;
		} else {
			return false;
		}
	}

    public function setCosto($costo) 
    {
    if (is_integer($costo) && $costo > 0) {
                $this->costo = $costo;
            }
    }

    public function getCosto()
    {
    return $this->costo;
    }

    public function decrementAvailableQty()
	{
		$this->availableQty--;
		return $this;
	}
}