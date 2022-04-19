<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Exercises</title>
</head>
<body>
   
<h1>Loop Exercises</h1>
<hr>
<h2>Opdracht 1:</h2>
<p>Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.</p>
<hr>

<?php 
for ($x=1; $x<=10; $x++)
{
if ($x<10)
{
    echo "$x-";
}
else
{
    echo "$x";
}
}
?>

<hr>
<h2>Opdracht 2:</h2>
<p>Create a script using a for loop to add all the integers between 0 and 30 and display the total.</p>
<hr>

<?php
$sum = 0;
for ($x=1; $x<=30; $x++)
    {
        $sum +=$x;
    }
    echo "The sum of the numbers 0 to 30 is $sum";
?>

<hr>
<h2>Opdracht 3:</h2>
<p>Create a script to construct the following pattern, using nested for loop.</p>
<hr>

<?php
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "* ";
     }
 echo "<br>";
}
?>

<hr>
<h2>Opdracht 4:</h2>
<p>Create a script to construct the following pattern, using a nested for loop.</p>
<hr>

<?php
$n=5;
for($i=1; $i<=$n; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
    echo "* ";
    }
echo "<br>";
    }
    for($i=$n; $i>=1; $i--)
    {
    for($j=1; $j<=$i; $j++)
    {
    echo "* ";
    }
echo "<br>";
}
?>

<hr>
<h2>Opdracht 5:</h2>
<p>Write a PHP script using nested for loop that creates a chess board as shown below. Use table width="270" and take 30px as cell height and width.</p>
<hr>
<table width="270px" cellspacing="1px" cellpadding="1px" border="2px">
<?php
for($row=1;$row<=8;$row++)
{
    echo "<tr>";
    for ($col=1;$col<=8;$col++)
    {
    $total=$row+$col;
    if ($total%2==0)
    {
    echo "<td height=30px width=30px bgcolor=#000></td>";
    }
    else
    {
    echo "<td height=30px width=30px bgcolor=#FFF></td>";
    }
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>



