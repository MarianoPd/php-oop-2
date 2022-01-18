<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/classes/PremiumUser.php";

$new_user = new User("Mimmo", "Dei Polli", "imegliopolli@coccode.com");
$new_premium = new PremiumUser("Giangiorgio", "Genoveffi", "ciaopoveri@gmail.com",85);

$new_user->setBirthday("12-12-1978");
echo $new_user->getBirthday();
echo $new_premium->getDiscount();
$new_premium->insetCreditCard(1111222233334444, "08 - 24");
echo $new_premium->getCreditCard(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Oop 2</title>
</head>
<body>
    
</body>
</html>