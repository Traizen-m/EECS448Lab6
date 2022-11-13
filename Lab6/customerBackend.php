<style>
  <?php include "style.css" ?>
</style>

<?php 
    $username = $_POST["username"];
    $password = $_POST["pwd"];
    $overallsnum = $_POST["overallsnum"];
    $overtotal = $overallsnum*53.75;
    $milknum = $_POST["milknum"];
    $milktotal = $milknum*2.75;
    $eggsnum = $_POST["eggsnum"];
    $eggstotal = $eggsnum*1.50;
    $shipping = $_POST["shipping"];
    if($shipping == "Free 7 day")
    {
        $shippingcost = 0;
    }
    else if($shipping == "$50.00 over night")
    {
        $shippingcost = 50;        
    }
    else
    {
        $shippingcost = 5;        
    }
    $totalcost = $overtotal+$milktotal+$eggstotal+$shippingcost;
    echo "<title> Receipt </title>";
    echo "<center>";
    echo "<body>";
    echo "
    <h1>Thank you for your purchase ".$username."! <br>
        Your password is: ".$password."</h1> <br>

    <h3>Your receipt:</h3>

    <table class = 'receipt' border=\"3\">
    <tr class = 'green'>
    <td></td>
    <td>Quantity</td>
    <td>Cost Per Item</td>
    <td>Sub Total</td>
    </tr>

    <tr>
    <td class = 'green'>Item 1</td>
    <td class = 'blue'>".$overallsnum."</td>
    <td class = 'blue'>$53.75</td>
    <td class = 'blue'>$".$overtotal."</td>
    </tr>

    <tr>
    <td class = 'green'>Item 2</td>
    <td class = 'blue'>".$milknum."</td>
    <td class = 'blue'>$2.75</td>
    <td class = 'blue'>$".$milktotal."</td>
    </tr>

    <tr>
    <td class = 'green'>Item 3</td>
    <td class = 'blue'>".$eggsnum."</td>
    <td class = 'blue'>$1.50</td>
    <td class = 'blue'>$".$eggstotal."</td>
    </tr>

    <tr>
    <td class = 'green'>Shipping</td>
    <td colspan=\"2\" class = 'blue'>".$shipping."</td>
    <td class = 'blue'>$".$shippingcost."</td>
    </tr>

    <tr>
    <td colspan=\"3\" class = 'green'>Total Cost</td>
    <td class = 'blue'>$".$totalcost."</td>
    </tr>
    </table>
    ";

    echo "</body>";
    echo "</center>";
?> 