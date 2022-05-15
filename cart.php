<?php
ob_start();
include ('header.php');
?>
<?php
/*  include cart items if it is not empty */
count($product->getData('cart'))?
    include ('Template/_cart-template.php'):
    include ('Template/notFound/_cart_notFound.php');
/*  include cart items if it is not empty */

/*  include top sale section */
include ('Template/_new-sales.php');
/*  include top sale section */
?>

<?php
include ('footer.php');
?>
