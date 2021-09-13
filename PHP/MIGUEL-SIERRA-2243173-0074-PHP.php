<? php
//PHP code goes here
?>

<html>
    <head>
        <title> My first PHP page</title>
    </head>
    <body>
    <? php
    echo //"hello world";
    ?>
    </body>
</html>

<html>
  <head>
    <title>My First PHP Page</title>
  </head>
  <body>
  <script language="php">
    echo "Hello World!";
  </script>
  </body>
</html>

<?php
echo "A";
echo "B";
echo "C";
?>

<?php
echo "<strong> This is a bold text.</strong>";
?>

<?php
echo "<P>Hello world!</p>";
// this is a single-line comment
echo "<p>I am learningg PHP!</p>";
echo "<p>This is my first program!</p>";
?>

<?php
echo "<P>Hello world!</p>";
/*
This is multi-line comment bnlock
that spans over
multiple line
*/
echo "<p>I am learningg PHP!</p>";
echo "<p>This is my first program!</p>";
?>

<?php
$name = "john";
$age = 25;
echo $neme;

//outputs ´john'
?>

define(name, value, case-insensitive)

<?php
define("MSG", "Hi Sololearners");
echo MSG;

//Outputs "Hi Sololearners!"
?>

<?php
define("MSG", "Hi Sololearners", true);
echo msg;

//Outputs "Hi Sololearners!"
?>

<?php
  $string1 = "Hello world!"; //double quotes
  $string2 = 'Hello world!';  //single quotes
?>

<?php
  $int1 = 42; // positive number
  $int2 = -42; // negative number
?>

<?php
  $x = 42.168;
?>

<?php
  $x = true; $y = false;
?>

<?php
$str = "10";
$int =20;
$sum = $str + $int;
echo ($sum);
// outputs 30
?>

<?php
$ name = 'david';
function gerName() {
    echo $name;
}
getName();
//Error: underfined variable: name 
?>

<?php
$name = 'David';
function getName(){
    global $name;
    echo $name;
}
getName();
//Outputs 'David'
?>

<?php
$a = 'hello';
$hello = "hi!";
echo $$a
//Outputs 'hi!'
?>

<?php
$num1 = 8;
$num2 = 6;
//Addition
echo $num1 + $num2; //14
//Subtraction
echo $num1 - $num2; //2
//Multiplication
echo $num1 * $num2; //48
//Division
echo $num1 / $num2; //1.333333333
?>

<?php
$x = 14;
$y = 3;
echo $x % $y; //2
?>

$x++; //equivalent to $x = $x+1;
$x--; //equivalent to $x = $x-1; 

$x++; // post-increment 
$x--; // post-decrement 
++$x; // pre-increment 
--$x; // pre-decrement

$a  = 2; $b = $a++; // $a=3,  $b=2
$a  = 2; $b = ++$a; // $a=3,  $b=3  

$num1 = 5;
$num2 = $num1;

<?php
$x = 50;
$x += 100;
echo $x;
//Outputs: 150
?>

$name1 = "David"; 
$name2 = "Amy"; 
$name3 = "John"; 

$names = array("David", "Amy", "John");

$names[0] = "David";
$names[1] = "Amy";
$names[2] = "John";

echo $name[1]; // Outputs "Amy"

<?php
$myArray $name[0] = "john";
$myArray $name[1] = "<strong>PHP</strong>";
$myArray $name[2] = 21;

echo "$myArray[0] is $myArray[2] and knows
$myArray[1]";
//Outputs "John is 21 and hnows PHP"
?>

$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
// or
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";

$people = array("David"=>"27", "Amy"=>"21",
 "john"=>"42")
 echo $people['Amy']; //Outputs 21"

 $people = array(
   'online'=>array('David', 'Amy'),
   'offline'=>array('John', 'Rob', 'Jack'),
   'away'=>array('Arthur', 'Daniel')
);

echo $$people ['online'][0]; //Outputs "David"
echo $$people ['away'][1]; //Outputs "Daniel"

if (condition) {
   code to be executed if condition is true;
} else {
   code to be executed if condition is false;
}

<?php
$x = 10;
$y = 20;
if $x >= $y) {
  echo $x;
} else {
  echo $y;
}
//OUtouts "20"
?>

if (condition) {
  code to be executed if condition is true;
} elseif (condition) {
  code to be executed if condition is true;
} else {
   code to be executed if condition is false;
}

<?php
$age = 21;
if ($age<=13) {
  echo "child.";
} elseif ($age>13 && $age<19) {
  echo "teenager";
} else {
  echo "adult";
}

//Outputs "adult"
?>

while (condition is true) {
   code to be executed;
}

$i = 1;
while ($i < 7 ) {
  echo "The value is $i <br />";
  $i++;
}

do {
  code to be executed;
} while (condition is true); 

$i = 5;
do{
  echo "the number is " . $i . "<br/>";
  $i++
} while ($i <= 7);

// Output
//The number is 5
//The number is 6
//The number is 7

for (init; test; increment) {
   code to be executed;
}

for ($a = 0; $a < 6; $a++) {
  echo "value of a : ". $a . "<br />";
}

foreach (array as $value) {
  code to be executed;
}
//or
foreach (array as $key => $value) {
   code to be executed;
}

$names = array("John", "David", "Amy");
foreach ($name as $name) {
  echo $nem. '<br />';
}

// John
// David 
//Amy

switch (n) {
  case value1:
    //code to be executed if n=value1
    break;
  case value2:
     //code to be executed if n=value2
     break;
  ...
  default:
    // code to be executed if n is different from all labels
}

<x=5;
switch ($x) {
  case 1:
    echo "One";
    break;
  case 2:
    echo "Two";
    break;
  default:
    echo "No match";
}
//Outputs "No match"
>

$x=1;
switch ($x) {
  case 1:
    echo "One";
  case 2:
    echo "Two";
  case 3:
    echo "Three";
  default:
    echo "No match";
}

//outputs "OneTwoThreeNo match"

for ( $i=0; $i < 10; $i++ ) {
  if ($i%2==0) {
    continue;
  }
  echo $i . ' ';
}
//Output: 1 3 5 7 9

<?php
  echo '<h1>Welcome</h1>';
?>

<html>
  <body>

  <?php include 'header.php'; ?>

  <p>Some text.</p>
  <p>Some text.</p>
  </body>
</html>

<html>
  <body>

  <?php include 'header.php'; ?>

  <p>This is a paragraph</p>
  </body>
</html>

function functionName() {    
   //code to be executed
}

function sayHello() {
  echo "Hello!";
}
sayHello(); //call the function
//outputs "Hello!"

function multiplyByTwo($number){
  $answer = $number * 2;
  echo $answer;
}
multiplyByTwo(3);
//Outpus 6

function multiply($num1, num2) {
  echo $num1 * $num2
}
multiply(3, 6);
//Outputs 18

funtion setCounter($num=10) {
  echo "Counter is ".$num;
}
setCounter(42); //Counter is 42
setCounter(); //Counter is 10

funVtion mult($num1, $num2) {
  $res = $num1 * $num2;
  return $res;
}

echo mult(8, 3)
//Outputs 24

<?php
echo $_SERVER['SCRIPT_NAME'];
//Outputs "/someFile.php"
?>

<?php
echo $_SERVER['HTTP_HOST'];
//Outputs "localhost"
?>

<?php
$host = $_SERVER['HTTP_HOST'];
$image_path = $host.'/images/';
?>

<?php
require 'config.php';
echo '<img src="'.$image_path.'header.png" />';
?>

<form action="first.php" method="post">
  <p>Name: <input type="text" name="name" /></p>
  <p>Age: <input type="text" name="age" /></p>
  <p><input type="submit" name="submit" value="Submit" /></p>
</form>

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br />
Your age: <?php echo $_POST["age"]; ?>

</body>
</html>

<form action="actionGet.php" method="get">
  Name: <input type="text" name="name" /><br /><br />
  Age: <input type="text" name="age" /><br /><br />
  <input type="submit" name="submit" value="Submit" />
</form>

<?php
echo "Hi ".$_GET['name'].". ";
echo "You are ".$_GET['age']." years old.";
?>

<?php
// Start the session
session_start();

$_SESSION['color'] = "red";
$_SESSION['name'] = "John";
?>

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "Your name is " . $_SESSION['name'];
// Outputs "Your name is John"
?>
</body>
</html>

setcookie(name, value, expire, path, domain, secure, httponly);

<?php
$value = "John";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: John"
?>

class Person {
  public $age; //property
  public function speak() { //method
    echo "Hi!"
  }
} 
