<style> <?php include 'style.css'; ?> </style>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    $username = $_POST["username"];
    $password = $_POST["password"];
    $spe= $_POST["spe"];
    $jc = $_POST["jc"];
    $tv = $_POST["tv"];
    $shipping = $_POST["choice"];
    $dc = 0;

    $spetotal = $spe*125;
    $jctotal = $jc*160;
    $tvtotal = $tv*365;


    if($shipping = "Normal")
    {
        $dc = 0;
    }
    else if($shipping = "Priority")
    {
        $dc = 5;
    }
    else if($shipping = "Express")
    {
        $dc = 50;
    }

    $grandtotal = $dc + $spetotal + $jctotal + $tvtotal;

    echo "Receipt: "
    echo "------------------------------"
    echo "<br>"

    echo "
 <table>
	<tr>	
		<th >            </th>
		<th >Quantity</th>
		<th >Cost Per Item</th>
		<th >Sub Total</th>
	</tr>";

	echo "<tr>
		<th >Viktor & Rolf Spicebomb Extreme</th>
		<td>$spe</td>
		<td>$359.59</td>
		<td>$$spetotal</td>
	</tr>";

	echo "<tr>
		<th >Maison Margiela REPLICA Jazz Club</th>
		<td>$jc</td>
		<td>$269.49</td>
		<td>$$jctotal</td>
	</tr>";

    echo "<tr>
		<th >Tom Ford Tobacco Vanille</th>
		<td>$tv</td>
		<td>$300</td>
		<td>$$tvtotal</td>
	</tr>";

    echo "<tr>
		
		<th >Shipping</th>
		<td colspan='2'>$shipping</td>
		<td>$$shippingfees</td>
    </tr>";

    echo "<tr>
		
		<th  colspan='3'>Total Cost</th>
		<td>$$total</td>
    </tr>";

echo "</table>";

?>