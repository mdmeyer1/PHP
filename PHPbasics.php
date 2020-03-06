<!doctype/html>

<html>

<head>

<meta charset="Utf-8">
<title>Intor to Php</title>
<style>
h1{
	font-family: Satisfy, cursive;
	font-weight:normal;
	font-size:22px;
	padding-top: 50px;
	Color: white;
}

p {
	font-family: Satisfy, cursive;
	font-weight:normal;
	font-size:22px;
	padding-top: 50px;
	Color: white;
}
Body { 
background-color: navy;
}

a {
color: white;
}



</style>

</head>

<body>

<?php 
	$yourName = "Mitchell Meyer";
	$number1 = "1";
	$number2 = "2";
	$total = $number1 + $number2;
 ?>
<?php echo "<h1>PHP Basics</h1>"; ?>

<h2><?php echo "$yourName"; ?></h2>

<?php echo "<p>$number1 + $number2 = $total</p>"; ?>

<?php
$classes = array("HTML", "PHP", "Jacascrippt"); 
echo " " . $classes[0] . ", " . $classes[1] . " and " . $classes[2] . ".";
?>

</body>
</html?
