<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP</title>
</head>
<body>
    <?php 
    $characterName = "John";
    $characterAge = 35; 
    // making variables

    echo "<h1>Ryans Website </h1>"; 
    echo "<hr>"; 
    echo "<p> This is ryans website </p> "; 
    // Writing to HTML Doc

    echo "There once was a man named $characterName ,<br> "; 
    echo " and his age was $characterAge. <br> ";
    $characterName = "Ryan"; 
    // variables are not universally scoped and will be altered if redeclared. 
    echo "His new name is $characterName <br> " ; 

    // data types : 
    $string = "This is a string";
    $integer = 12345; 
    $floatingPointNumber = 40.2; 
    $boolean = true; 
    $null = null; 
    echo "$string, <br> $integer <br> "; 

    //more on strings : 

    $string = "this is a string"; 
    echo strtoupper($string); // all upper case
    echo "<br>"; 
    echo strtolower($string); // all lower case
    echo "<br>"; 
    echo strlen($string); // total length 
    echo "<br>"; 
    echo $string[0]; // print index of string
    echo str_replace('this', 'that', $string); // the first parameter is what the function looks for, 
    // the second is what to replace the first with, and the third is where this function is applied. 
    echo substr($string, 8,3); // produces a new string AFTER the written index (8) and grabs how many you want (3)

    // numbers and math operations 
echo "<br>"; 
echo -40.62; 
echo "<br>"; 
echo 5+9; 
// PHP does basic order of operations (pemadas) and instead of printing formula to html, it will print answer. 
echo abs(-100); // finds absolute value of number. 
echo pow(2,4); // 2 to the 4th power 
echo sqrt(144); //square root 
echo max (2,4); // returns largets number. 4 
echo min(1,2); // returns smallest number 
echo round(3.2); // rounds number up or down. 
echo ceil(3.3); // will always round up 
echo floor(3.9); // always rounds down. 

// Arrays : 


$friends = array("Ryan", "Kevin", "Oscar", "Jim");
// receivng input from users : 
echo $friends; // prints "Array" to html 
echo $friends[0]; 
// to re-write over array index
$friends[2] = "John"; 
// to determine length of array : 
echo count($friends); 
?>

<hr>
<h3> Arrays </h3> 
<form action = "site.php" method = "post">
    Apples <input type = "checkbox" name = "fruits[]" value = "apples"> <br>
    Oranges <input type = "checkbox" name = "fruits[]" value = "oranges"> <br>
    Bananas <input type = "checkbox" name = "fruits[]" value = "bananas"> <br>
    Strawberries <input type = "checkbox" name = "fruits[]" value = "strawberries"> <br>
    <input type = "submit">
</form>

<?php 
    $fruits = $_POST['fruits']; 
    echo "$fruits[0] , ";

    foreach ($fruits as $x) {
        echo "$x , ";
    } // to display all values in array
?>

<hr> 

<h3> Associative arrays </h3> 
<p> By typing in a name here, we can get the value associated with that name. </p> 
<form action = "site.php" method = 'post'>
    <input type = "text" name = "student">
    <input type = "submit">
</form>
<?php 
    $grades = array('Jim' => 'A+', "Pam" => "B-", "Oscar"  => "C+"); 
    // echo $grades['Jim']; // displays value of given key 
    echo $grades[$_POST["student"]]; 
?> 

<!-- <form action = "site.php" method = "get">
    Name : <input type = "text" name = "name">
    <input type = "submit"> 
    Age : <input type = "number" name = "age">
</form>
<br>
Your name is : <?php echo $_GET['name'] ?> 
<br>
Your age is : <?php echo $_GET['age'] ?>  -->

<hr>
<!-- <h3> Ryan's Addition PHP Calculator </h3> 
<form action = "site.php" method = "get"> 
    First Number : <input type = "number" name = "num1">
    <br> 
    Second Number : <input type = "number" name = "num2">
<br>
    <input type = "submit">
</form>

Answer : <?php echo $_GET['num1'] + $_GET['num2'] ?> -->

<hr> 

<h3> POST vs GET </h3> 
<p> When a GET request is used to retrieve data from user, it passes from client to server in an unsecure way, ie ; the URL address. </p> <br>
<p> However, when POST is used, the data is transferred to the server in a more secure way. This is ideal when sending private information from client to server </p> <br> 
<form action = "site.php" method = "post">
    Password : <input type = "password" name = "password"> <br>
    <input type = "submit"> 
</form>
<br>
<?php echo $_POST['password']?>

<p> Even though a POST request was used, we can still access this data as though it were a GET request. <br> 
You'll notice that when a POST request is used, the browser will also ask to confirm resubmission. </p> 







</body>
</html>