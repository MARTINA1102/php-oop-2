L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure 
iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili 
solo in un periodo particolare (es. da maggio ad agosto).

<?php
include_once __DIR__ . '/Utente.php';
include_once __DIR__ . '/CreditCard.php';
include_once __DIR__ . '/Prodotti.php';
include_once __DIR__ . '/Cibo.php';
include_once __DIR__ . '/Giochi.php';
include_once __DIR__ . '/Cucce.php';
include_once __DIR__ . '/Igiene.php';
include_once __DIR__ . '/traits/Login.php';


/*
$username		= $_POST['username']		?? '';
$password		= $_POST['password']		?? '';

$name				= $_POST['name']			?? '';
$address			= $_POST['address']		?? '';

$number			= $_POST['number']		?? '';
$expiryYear		= $_POST['expiryYear']	?? '';
$expiryMonth	= $_POST['expiryMonth']	?? '';

$creditCard		= new CreditCard($number, $expiryYear, $expiryMonth);

if ($username && $password) {
	$user = new Iscritto($username, $password);
} else {
	$user = new NonIscritto($name, $address, $creditCard);
}

var_dump((int) date('y'));
var_dump((int) date('n'));*/
