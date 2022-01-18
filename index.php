<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/classes/PremiumUser.php";

$new_users[] = new User("Mimmo", "Dei Polli", "imegliopolli@coccode.com");
$new_users[] = new User("Giuseppe", "Verdi", "vapensiero@yahoo.it");
$new_premium = new PremiumUser("Giangiorgio", "Genoveffi", "ciaopoveri@gmail.com",85);

$new_users[0]->setBirthday("12-12-1978");
$new_users[0]->insetCreditCard(1111222233334444, "22-07");
$new_premium->insetCreditCard(1111222233334444, "20-07");

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
    <h1>Mega Turbo Shop</h1>
    <h3>Utenti</h3>
    <div>   
        <?php foreach($new_users as $new_user): ?>     
            <h4><?php echo $new_user->getName()." ".$new_user->getSurname() ?></h4>
            <h4>Datata di nascita: <?php echo $new_user->getBirthday();?></h4>
            <h4>Email: <?php echo $new_user->getEmail();?></h4>
            <?php if(!$new_user->getCreditCard(0)){ echo  "<h4>No credit card present </h4>";
                }else{ echo "<h4>Card: **** **** ****". $new_user->getCreditCard(0)."</h4>"; }
            ?>
        <?php endforeach; ?>
    </div>
    <div>
        <h4><?php echo $new_premium->getName()." ".$new_premium->getSurname() ?></h4>
        <h4>Datata di nascita: <?php echo $new_premium->getBirthday();?></h4>
        <h4>Email: <?php echo $new_premium->getEmail();?></h4>
        <?php if(!$new_premium->getCreditCard(0)){ echo  "<h4>No credit card present </h4>";
            }else{ echo "<h4>Card: **** **** **** ". $new_premium->getCreditCard(0)."</h4>"; }
        ?>        
    </div>
    
</body>
</html>