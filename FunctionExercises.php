<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Exercises</title>
</head>
<body>
   
<h1>Function Exercises</h1>
<hr>
<h2>Opdracht 1:</h2>
<p>Write a function to check whether a number is prime or not.</p>
<p>Note: A prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself.</p>
</p>
<hr>

<?php 
function checkPrime($n)
{
 for($i=2; $i<$n; $i++)
   {
      if($n%$i==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = checkPrime(8);
if($a == 0)
echo "This is not a Prime Number. <br>";
else
echo "This is a Prime Number. <br>";
?>

<hr>
<h2>Opdracht 2:</h2>
<p>Write a function to reverse a string.</p>
<hr>

<?php
function reverseString($string){
    return strrev ($string);
}
$string = "Het is vandaag mooi weer.";
echo reverseString($string);
?>

<hr>
<h2>Opdracht 3:</h2>
<p>Write a PHP function that checks whether a string is all lowercase.</p>
<hr>

<?php
$string = "blahBlahblah";
{
    if (ctype_lower($string)) {
        echo "The string $string consists of all lowercase letters. <br>";
    } else {
        echo "The string $string does not consist of all lowercase letters. <br>";
    }
}
?>

<hr>
<h2>Opdracht 4:</h2>
<p>Write a function to sort an array.</p>
<hr>

<?php
$kunststroming = ["Renaissance", "Impressionisme", "Pointillisme"];
sort($kunststroming);

$klength = count($kunststroming);
for($x = 0; $x < $klength; $x++) {
  echo $kunststroming[$x];
  echo "<br>";
}
?>

<hr>
<h2>Opdracht 5:</h2>
<p>Write a PHP function that checks whether a person is eligible to vote.</p>
<p>Condition
    <ul>
        <li>Je moet een parameter naam en leeftijd als parameter kunnen passen aan je function.</li>
        <li>Je moet dynamisch kunnen outputten met echo of de persoon oud genoeg is om te stemmen.
            <ul>
            <li>Tomi, je bent niet oud genoeg om te stemmen.</li>
            <li>De stemgrens is 18 jaar.</li>
            </ul>
    </ul>
<hr>
<?php
function checkVote($age)
{
$name = "Tomi";
if ($age >=18) {
    echo $name . ", je bent oud genoeg om te stemmen.";
} else {
    echo $name . ", je bent niet oud genoeg om te stemmen.";
}
}
checkVote(17)
?>
<hr>
</body>
</html>



