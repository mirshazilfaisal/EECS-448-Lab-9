<style> <?php include 'style.css'; ?> </style>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    $username = $_POST["username"];
    $password = $_POST["password"];
    $spe= $_POST["spe"];
    $jc = $_POST["jc"];
    $tv = $_POST["tv"];
    $ship = $_POST["choice"];
    $delivery = 0;

    $spetotal = $spe*125;
    $jctotal = $jc*160;
    $tvtotal = $tv*365;


    if($ship == "Normal")
    {
        $delivery = 0;
    }
    else if($ship == "Priority")
    {
        $delivery = 5;
    }
    else if($ship == "Express")
    {
        $delivery = 50;
    }

    $grandtotal = $delivery + $spetotal + $jctotal + $tvtotal;

    echo "---------------------------------------------------------------------------------------------------------------------------";
    echo "<br>";

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
		<td>$125</td>
		<td>$$spetotal</td>
	</tr>";

	echo "<tr>
		<th >Maison Margiela REPLICA Jazz Club</th>
		<td>$jc</td>
		<td>$160</td>
		<td>$$jctotal</td>
	</tr>";

    echo "<tr>
		<th >Tom Ford Tobacco Vanille</th>
		<td>$tv</td>
		<td>$365</td>
		<td>$$tvtotal</td>
	</tr>";

    echo "<tr>
		
		<th >Shipping</th>
		<td colspan='2'>$ship</td>
		<td>$$delivery</td>
    </tr>";

    echo "<tr>
		
		<th  colspan='3'>Total Cost</th>
		<td>$$grandtotal</td>
    </tr>";

echo "</table>";
echo "---------------------------------------------------------------------------------------------------------------------------";

?>