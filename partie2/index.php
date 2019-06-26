<?php
require_once('exo5.php');

class ArielAccount extends BankAccount {


}

$constructAriel = new ArielAccount('Ariel', 10000, 1.9, '€'); ?>

<p>Bonjour <?= $constructAriel->getHolder(); ?>, vous venez d'ouvrir un compte avec un taux d'intérêt de <?= $constructAriel->getInterestRate(); ?> et vous y avez déposé un montant de <?= $constructAriel->getSold(); ?><?= $constructAriel->getCurrency(); ?>!</p>

<?php

$constructAriel->credit($amount);

?>

<p>Bonjour <?= $constructAriel->getHolder(); ?>, votre compte viens d'être crédité de 1250€, voici votre nouveau solde : <?= $constructAriel->getSold(); ?><?= $construct->getCurrency(); ?>!</p>

<?php
$constructAriel->debit($amount);
?>

<p>Bonjour <?= $constructAriel->getHolder(); ?>, votre compte viens d'être débité de 500€, voici votre nouveau solde : <?= $constructAriel->getSold(); ?><?= $construct->getCurrency(); ?>!</p>





