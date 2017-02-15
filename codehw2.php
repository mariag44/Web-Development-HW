<!DOCTYPE html> 
<html>
<h1> Challenge 1: ISBN 10 Validator </h1>
</head>
<body>
<?php 
$isbn = "1856698246"; 

$firstnumber = (10* substr($isbn, 0,1 ));
$secondnumber = (9*substr($isbn, 1,1 ));
$thirdnumber= (8*substr($isbn, 2,1 ));
$fourthnumber= (7*substr($isbn, 3,1 ));
$fifthnumber= (6*substr($isbn, 4,1 ));
$sixthnumber= (5*substr($isbn, 5,1 ));
$seventhnumber = (4*substr($isbn, 6,1 ));
$eigthnumber = (3*substr($isbn, 7,1 ));
$ninthnumber = (2*substr($isbn, 8,1 ));
$tenthnumber = (1*substr($isbn, 9,1 ));

$total = $firstnumber+$secondnumber +$thirdnumber+$fourthnumber+$fifthnumber+$sixthnumber+$seventhnumber+$eigthnumber+$ninthnumber+$tenthnumber;

$ISBNtotal = $total/11;

echo "Checking $isbn for validity...<p>";

if (is_int($ISBNtotal)) {
echo "You have entered a valid isbn.<p>"; }

if (is_int($ISBNtotal)) {
echo '<a href=""http://www.isbnsearch.org">Search your text here!</a>'; }


else { echo " ERROR!! Invalid isbn";}
?>
<h2> Challenge 2A: Coin Toss </h2>
</head>
<?php

$head = 0;
echo "Flipping a coin one time<p>";
for ($head = 0; $head <1; ++$head) {
	$flip = mt_rand(0,1);
	if ($flip == 0){
	echo '<img src =http://awesomemoney101.weebly.com/uploads/2/3/7/4/23749064/3347211_orig.jpeg><p>';
	}
	else { echo '<img src =http://random-ize.com/coin-flip/us-penny/2011-us-penny.jpg> <p>'; }
			
}

$head = 0;
echo "Flipping a coin three times<p>";
for ($head = 0; $head <3; ++$head) {
	$flip = mt_rand(0,1);
	if ($flip == 0){
	echo '<img src =http://awesomemoney101.weebly.com/uploads/2/3/7/4/23749064/3347211_orig.jpeg><p>';}

	else { echo '<img src =http://random-ize.com/coin-flip/us-penny/2011-us-penny.jpg><p>'; }
}

$head = 0;
echo "Flipping a coin five times<p>";
for ($head = 0; $head <5; ++$head) {
	$flip = mt_rand(0,1);
	if ($flip == 0){
	echo '<img src =http://awesomemoney101.weebly.com/uploads/2/3/7/4/23749064/3347211_orig.jpeg><p>';}

	else { echo '<img src =http://random-ize.com/coin-flip/us-penny/2011-us-penny.jpg><p>'; }
}

$head = 0;
echo "Flipping a coin seven times<p>";
for ($head = 0; $head <7; ++$head) {
	$flip = mt_rand(0,1);
	if ($flip == 0){
	
	echo '<img src =http://awesomemoney101.weebly.com/uploads/2/3/7/4/23749064/3347211_orig.jpeg><p>';}

	else { echo '<img src =http://random-ize.com/coin-flip/us-penny/2011-us-penny.jpg><p>'; }
}

$head = 0;
echo "Flipping a coin nine times<p>";
for ($head = 0; $head <9; ++$head) {
	$flip = mt_rand(0,1);
	if ($flip == 0){
	echo '<img src =http://awesomemoney101.weebly.com/uploads/2/3/7/4/23749064/3347211_orig.jpeg><p>';}

	else { echo '<img src =http://random-ize.com/coin-flip/us-penny/2011-us-penny.jpg><p>'; }
}
?>
<h3> Challenge 2b: Two Heads are Better than One </h3>
</head>

<?php
$numtosstotal = 0;
$numheads =0;

while ($numheads <2) { 
$flip = mt_rand(0,1);
if ($flip == 0) {
echo '<img src =http://random-ize.com/coin-flip/us-penny/2011-us-penny.jpg><p>'; 
++$numheads;}

else {echo '<img src =http://awesomemoney101.weebly.com/uploads/2/3/7/4/23749064/3347211_orig.jpeg><p>';

$numheads=0; }

++$numtosstotal;

echo "The were $numtosstotal flips!<p>"; 

}
?>
</body>
</html>