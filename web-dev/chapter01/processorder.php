<?php
    // Creating short variables
    $tireqty    = $_POST['tireqty'];
    $oilqty     = $_POST['oilqty'] ;
    $sparkqty   = $_POST['sparkqty'];
    
    $find       = $_POST['find'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Order Results</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
        
        <?php
        $totalqty = 0;
        $totalqty = $tireqty + $oilqty + $sparkqty;
        
        // Conditional
        if ($totalqty == 0) {
            echo "<p style='color:red'>You did not order anything on the previous page!</p>";
        } else {
            if($totalqty > 0) {
                echo "<p>Order Processed at ".date('H:i, F jS Y')."</p><hr />"; 
                echo "<br />";
                echo "<p>Your order is as follows:</p><br />";  
            }
            if ($tireqty > 0) {
                echo "$tireqty Tire(s) <br />";
            }
            
            if ($oilqty > 0) {
                echo "$oilqty Bottles of oil <br />";
            }
            
            if ($sparkqty > 0) {
                echo "$sparkqty Spark Plugs <br /><br />";
            }
        }
        
        // Discounts
        if ($tireqty < 10) {
            $discount = 0;
        } elseif (($tireqty >= 10) && ($tireqty <= 49)) {
            $discount = 5;
        } elseif (($tireqty >= 50) && ($tireqty <= 99)) {
            $discount = 10;
        } elseif ($tireqty >= 100) {
            $discount = 15;
        }
        
        // How did the customer hear about Bob's?
        switch($find) {
            case "a" :
                echo "<p>Regular customers.</p>"
                break;
            case "b" :
                echo "<p>Referred to by TV ad.</p>"
                break;
            case "c" :
                echo "<p>Customer referred by phone directory.</p>"
                break;
            case "d" :
                echo "<p>Customer referred by word of mouth.</p>"
                break;
            default :
                echo "<p>We do not know how this customer found us.</p>"
                break;
        }
        
        // Constants
        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);
        
        $totalamount = ($tireqty * TIREPRICE) + ($oilqty * OILPRICE) + ($sparkqty * SPARKPRICE);
        echo "Subtotal: $".number_format($totalamount,2)."<br />";
        
        $taxrate = 0.10; // Local sales tax of 10%
        $totalamount = $totalamount * (1 + $taxrate);
        
        echo "<strong>Total with tax: $".number_format($totalamount, 2)."<br /></strong>";
        
        ?>
        
        
    </body>
</html>