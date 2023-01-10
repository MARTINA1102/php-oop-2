<?php
abstract class Prodotti
{

    public $nome;
    public $categoria;
    public $descrizione;
    public $costo;


	public function __construct($nome,$categoria,$descrizione, $costo)
	{
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->descrizione = $descrizione;
		$this->costo = $costo;
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
}