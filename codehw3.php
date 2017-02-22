
<!DOCTYPE html>
<html>
<head>
<h1> Challenge 1: Books</h1>

</head>
<style> 

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;``
}
</style>

<body>

<?php


$books = array(
    array(
        'Title' => 'PHP and MySQL Web Development',
        'Author First Name' => 'Luke',
        'Author Last Name' => 'Welling',
        'Page Numbers' => 144,
        'Format Type' => 'Paperback',
        'Price' => 31.63,
    	),
    array(
        'Title' => 'Web Design with HTML, CSS, JavaScript and jQuery',
        'Author First Name' => 'Jon',
        'Author Last Name' => 'Duckett',
        'Page Numbers' => 135,
        'Format Type' => 'Paperback',
        'Price' =>41.23,
    	),
    array(
        'Title' => 'PHP Cookbook: Solutions & Examples for PHP Programmers',
        'Author First Name' => 'David',
        'Author Last Name' => 'Sklar',
        'Page Numbers' => 14,
        'Format Type' => 'Paperback',
        'Price' => 40.88,
		),
	array(
        'Title' => 'JavaScript and JQuery: Interactive Front-End Web Development',
        'Author First Name' => 'Jon',
        'Author Last Name' => 'Ducket',
        'Page Numbers' => 251,
        'Format Type' => 'Paperback',
        'Price' => 20.09,
		),
	array(
        'Title' => 'Modern PHP: New Features and Good Practices',
        'Author First Name' => 'Josh',
        'Author Last Name' => 'Lockhart', //I can't help but think of Harry Potter here
        'Page Numbers' => 7, //this can't acutally be the page numbers but okay
        'Format Type' => 'Paperback',
        'Price' => 28.49, //people are getting ripped off
		),
    array(
        'Title' => 'Programming PHP',
        'Author First Name' => 'Kevin',
        'Author Last Name' => 'Tatroe',
        'Page Numbers' => 26,
        'Format Type' => 'Paperback',
        'Price' => 28.96,
        ),

);
    function build_table($books){
    $html = '<table>';

    $html .= '<tr>';
    foreach($books[0] as $key=>$value){
            $html .= '<th>' . $key . '</th>';
        }
    $html .= '</tr>';

    foreach( $books as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . $value2 . '</td>';
        }
        $html .= '</tr>';
    }


    $html .= '</table>';
    return $html;
    
    
$total = array_sum(array_column($books,'Price'));

echo $total;
}


echo build_table($books);

//echo "Your total is $total <br>"; Should echo total price of books

?>

<head.
<h3> Challenge 2: The Return of Coin Toss </h3>
</head>
<?php
$heads = 0;
$flip = 0;



cointoss(4);

function cointoss($flipt) { 
$him = "<img src =http://random-ize.com/coin-flip/us-penny/2011-us-penny.jpg>";
$tim = "<img src =http://awesomemoney101.weebly.com/uploads/2/3/7/4/23749064/3347211_orig.jpeg>";
global $heads, $flip; 
while ($heads < $flipt) { 
$headsup = mt_rand(0,1);
$flip++; 
if ($headsup) {
$heads++;
echo $him; 
}

else {echo $tim;

$heads=0; }

//I worked with Kristin and she explained it but it wouldn't show up. I think it has something to do with my variables



}
}
?>
</head>
</body>
</html> 