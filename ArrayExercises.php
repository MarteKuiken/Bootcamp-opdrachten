<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Exercises</title>
</head>
<body>
   
<h1>Array Exercises</h1>
<hr>
<h2>Opdracht 1:</h2>
<p>$color = array('white', 'green', 'red', 'blue', 'black');</p>
<p>Write a script which will display the following string
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
and the words 'red', 'green' and 'white' will come from $color.</p>
<hr>

<?php 
$color = ["white", "green", "red", "blue", "black"];
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."<br>";
?>

<hr>
<h2>Opdracht 2:</h2>
<p>$color = array('white', 'green', 'red'')</p>
<p>Write a PHP script which will display the colors in the following way :</p>
<p>Output :</p>
<ul>
    <li>green</li>
    <li>red</li>
    <li>white</li>
</ul>
<hr>

<?php
$color = ["white", "green", "red"];
sort($color);
echo "<ul>";
foreach ($color as $a)
{
echo "<li>$a</li>";
}
echo "</ul>";
?>

<hr>
<h2>Opdracht 3:</h2>
<p>$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;</p>
<p>Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.
<p>Sample Output :</p>
<p>The capital of Netherlands is Amsterdam The capital of Greece is Athens</p>
<p>The capital of Germany is Berlin</P> 
<hr>

<?php
$ceu = ["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"];
asort($ceu);
foreach ($ceu as $country => $capital)
echo "The capital of $country is $capital. <br>"
?>

<hr>
<h2>Opdracht 4:</h2>
<p>Write a PHP script to calculate and display average temperature, five lowest and highest temperatures</p>
<p>Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73</p>
<p>Expected Output :</p>
<p>Average Temperature is : 70.6</p>
<p>List of seven lowest temperatures : 60, 62, 63, 63, 64, List of seven highest temperatures : 76, 78, 79, 81, 85,</p>
<hr>

<?php
$rec_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(",", $rec_temp);
$total_temp = 0;
$array_length_temp = count($temp_array);
foreach($temp_array as $temp)
{
 $total_temp += $temp;
}
 $avg_temp = $total_temp/$array_length_temp;
 echo "Average Temperature is : $avg_temp."; 
sort($temp_array);
echo "<br> List of five lowest temperatures:";
for ($i=0; $i< 5; $i++)
{ 
echo "$temp_array[$i], ";
}
echo "List of five highest temperatures:";
for ($i=($array_length_temp-5); $i< ($array_length_temp); $i++)
{
echo "$temp_array[$i], ";
}
?>

<hr>
<h2>Opdracht 5:</h2>
<p>Write a PHP script that displays the highest temperature that day and which city this was in.</p>
<p>$weeklyTemps = [</p>
<p>"Maandag" => [</p>
<p>"Groningen" => 25,</p>
<p>"Assen" => 12,</p>
<p>"Emmen" => 19</p>
<p>],</p>
<p>"Dinsdag" => [</p>
<p>"Groningen" => 26,</p>
<p>"Assen" => 28,</p>
<p>"Emmen" => 19</p>
<p>],</p>
<p>"Woensdag" => [</p>
<p>"Groningen" => 16,</p>
<p>"Assen" => 30,</p>
<p>"Emmen" => 35</p>
<p>];</p>
<p>Example Output:</p>
<p>De hoogste temperatuur op Maandag was 25 graden in Groningen.</p>
<p>De hoogste temperatuur op Dinsdag was 28 graden in Assen.</p>
<p>De hoogste temperatuur op Woensdag was 35 graden in Emmen.</p>
<hr>

<?php
 $weeklyTemps = [
    "Maandag" => [ 
        "Groningen" => 25,
         "Assen" => 12,
        "Emmen" => 19
    ],
    "Dinsdag" => [ 
        "Groningen" => 26,
        "Assen" => 28,
        "Emmen" => 19
    ],
 "  Woensdag" => [ 
        "Groningen" => 16,
        "Assen" => 30,
        "Emmen" => 35
    ]
];
foreach ($weeklyTemps as $dag => $info) {
    $stad = array_search(max($info) , $info);
    echo 'De hoogste temperatuur op ' . $dag . ' was ' . $info[$stad] . ' graden in ' . $stad . '.<br>'; 
}
?>  
<hr>
