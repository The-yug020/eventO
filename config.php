<?php
require ('stripe-php-master/init.php');

$stripedetails=array(
"PublishableKey"=>"pk_test_51KlYTGSG78JPAyE5RJz2EbKtbfVslmnQYWDn1FYZzoWO9rWLE9O0KpzGPRQeyy6Syjyc2LJ4eFgBG5z2JJzq7uPI00bqZcv79W",
"SecretKey"=>"sk_test_51KlYTGSG78JPAyE5WkMljb7buRMEcX8mnonAnZ6jCicMgx7Tv7pzx3R1sA3AeM1JWx3qmqFO6qQXr7g6zjwNZ0j800tim7MPCs",
);

\Stripe\Stripe::setApiKey($stripedetails["SecretKey"]);

?>