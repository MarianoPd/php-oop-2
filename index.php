<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/classes/PremiumUser.php";
require_once __DIR__ . "/classes/Products.php";
require_once __DIR__ . "/classes/Cart.php";

$new_users[] = new User("Mimmo", "Dei Polli", "imegliopolli@coccode.com");
$new_users[] = new User("Giuseppe", "Verdi", "vapensiero@yahoo.it");
$new_premium = new PremiumUser("Giangiorgio", "Genoveffi", "ciaopoveri@gmail.com",85);

$new_users[0]->setBirthday("12-12-1978");
$new_users[0]->insetCreditCard(1111222233334444, "22-07");
$new_users[0]->setAddress("Via dei mille","Roma", "Italia", 12345);
$new_users[1]->setAddress("Via col vento","Genova", "Italia", 12346);

$new_premium->insetCreditCard(1111222233334444, "20-07");
$new_premium->setAddress("Via dalla mia propietà", "Milano 2.1","Italia","99999");

$products[] = new Product("Posacenere", 6.99);
$products[0]->setDescription("posacenere ottimo per contenere cenere");
$products[] = new Product("Lampada da tavolo", 74.50);
$products[1]->setDescription("non funziona, da considerarsi solo come oggetto ornamentale");
$products[] = new Product("Coso", 999.99);
$products[2]->setDescription("oggetto di dubbia forma e natura ignota. Pressoché inutile");

$new_cart = new Cart($new_premium, $products);


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
    <hr>
    <h2>Utenti</h3>
    <div>   
        <?php foreach($new_users as $new_user): ?>     
            <h3><?php echo $new_user->getName()." ".$new_user->getSurname() ?></h3>
            <h4>Datata di nascita: <?php echo $new_user->getBirthday();?></h4>
            <h4>Email: <?php echo $new_user->getEmail();?></h4>
            <h4>Indirizzo: <?php echo $new_user->getFullAddress(); ?></h4>
            <?php if(!$new_user->getCreditCard(0)){ echo  "<h4>No credit card present </h4>";
                }else{ echo "<h4>Card: **** **** ****". $new_user->getCreditCard(0)."</h4>"; }
            ?>
            <hr>
        <?php endforeach; ?>
    </div>
    <div>
        <h3><?php echo $new_premium->getName()." ".$new_premium->getSurname() ?></h3>
        <h4>Datata di nascita: <?php echo $new_premium->getBirthday();?></h4>
        <h4>Email: <?php echo $new_premium->getEmail();?></h4>
        <h4>Indirizzo: <?php echo $new_premium->getFullAddress(); ?></h4>
        <?php if(!$new_premium->getCreditCard(0)){ echo  "<h4>No credit card present </h4>";
            }else{ echo "<h4>Card: **** **** **** ". $new_premium->getCreditCard(0)."</h4>"; }
        ?>        
        <h4>Discount: <?php echo $new_premium->getDiscount() ?> %</h4>
        <hr>
    </div>

    <h2>Prodotti</h2>
    <hr>
    <div>
        <?php foreach($products as $product):?>
            <h3><?php echo $product->getName()?></h3>
            <h3>Prezzo: <?php echo $product->getPrice()?>$</h3>
            <p><?php echo $product->getDescription()?></p>
            <hr>
        <?php endforeach; ?>    
    </div>

    <h2>Carrello</h2>
    <hr>
    <div>
        <h3>Utente: <?php echo $new_cart->getUser()->getName()." ".$new_cart->getUser()->getSurname() ?> </h3>
        <h3>Sconto: <?php echo $new_cart->getUser()->getDiscount() ?>%</h3>
        <ul>
            <?php foreach($new_cart->getProducts() as $prod): ?>
                <li><?php echo $prod->getName() . " - ".$prod->getPrice()?>$</li>
            <?php endforeach; ?>
        </ul>
        <h3>Tot: <?php echo $new_cart->getTotal() ?>$</h3>
    </div>

</body>
</html>