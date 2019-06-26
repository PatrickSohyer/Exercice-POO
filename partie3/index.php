<?php
require_once('bankAccount.php');

$constructJohn = new BankAccount('John', 1250, 2.3, 'euros');
$constructJane = new BankAccount('Jane', 1500, 2.3, 'euros');
$constructDavid = new BankAccount('David', 12000, 2.3, 'euros');
$constructToto = new BankAccount('Toto', 1000, 2.3, 'euros');
$constructLala = new BankAccount('Lala', 5000, 2.3, 'euros');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Exercice 3!</title>

    </head>



    <body>

        <?php
        $result = array($constructJohn, $constructJane, $constructDavid, $constructToto, $constructLala);
        foreach ($result as $construct) {
            ?>


            <ul>
                <li>Titulaire : <?= $construct->getHolder(); ?></li>
                <li>Solde : <?= $construct->getSold(); ?> <?= $construct->getCurrency(); ?></li>
                <li>Taux d'intérêt : <?= $construct->getInterestRate(); ?> %</li>
            </ul>
            <?php }
        ?>

    </body>

</html>


