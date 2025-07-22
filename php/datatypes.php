<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h2>String</h2>
<?php
$x = "Hello world";
$y = 'Hello world';

echo $x;
echo "<br>";
echo $y;
?>
<h2>Integer</h2>
<?php
$x = 5985;
var_dump($x);
?> 
<h2>Float</h2>
<?php
$x = 10.365;
var_dump($x);
?>
<h2>Array</h2>
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>
<h2>Class and object</h2>
<?php
class book{
    var $title;
    var $author;
    var $pages;
}
$book1= new book;
$book1->title="Harry Potter";
$book1->author="JK Rowling";
$book1->pages="400";
echo $book1->title;
echo $book1->author;
echo $book1->pages;
?>
<h2>NULL Value</h2>
<?php
$x = "Hello world";
$x = null;
var_dump($x)
?>
<h2>Casting</h2>
<?php 
$x=5;
$x=(string)$x;
var_dump($x);
?>
</body>
</html>