<?php

if(isset($_POST['submit'])) {
    $amount = $_POST['amount'];
    $cur1 = $_POST['cur1'];
    $cur2 = $_POST['cur2'];

    // CZK - Koruny
    if ($cur1 == "CZK" AND $cur2 == "EUR") {
        echo "<center><strong>Váše převedená částka je:</strong></center>";
        echo "<center>" . $amount * 0.039 . " €</center>";
    }

    if ($cur1 == "CZK" AND $cur2 == "USD") {
        echo "<center><strong>Váše převedená částka je:</strong></center>";
        echo "<center>" . $amount * 0.043 . " $</center>";
    }

    if ($cur1 == "CZK" AND $cur2 == "CZK") {
        echo "<center><strong>Zadejte jinou měnu prosím!</strong></center>";
    }

    // EUR - Eura
    if ($cur1 == "EUR" AND $cur2 == "CZK") {
        echo "<center><strong>Váše převedená částka je:</strong></center>";
        echo "<center>" . $amount * 25.34 . " Kč</center>";
    }

    if ($cur1 == "EUR" AND $cur2 == "USD") {
        echo "<center><strong>Váše převedená částka je:</strong></center>";
        echo "<center>" . $amount * 1.08 . " $</center>";
    }

    if ($cur1 == "EUR" AND $cur2 == "EUR") {
        echo "<center><strong>Zadejte jinou měnu prosím!</strong></center>";
    }

    // USD - Dollary
    if ($cur1 == "USD" AND $cur2 == "CZK") {
        echo "<center><strong>Váše převedená částka je:</strong></center>";
        echo "<center>" . $amount * 23.36 . " Kč</center>";
    }

    if ($cur1 == "USD" AND $cur2 == "EUR") {
        echo "<center><strong>Váše převedená částka je:</strong></center>";
        echo "<center>" . $amount * 0.92 . " €</center>";
    }

    if ($cur1 == "USD" AND $cur2 == "USD") {
        echo "<center><strong>Zadejte jinou měnu prosím!</strong></center>";
    }
}