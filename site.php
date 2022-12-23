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


// receivng input from users : 





    ?>

<form action = "site.php" method = "get">
    Name : <input type = "text" name = "name">
    <input type = "submit"> 
    Age : <input type = "number" name = "age">
</form>
<br>
Your name is : <?php echo $_GET['name'] ?> 
<br>
Your age is : <?php echo $_GET['age'] ?> 

<hr>
<h3> Ryan's Addition PHP Calculator </h3> 
<form action = "site.php" method = "get"> 
    First Number : <input type = "number" name = "num1">
    <br> 
    Second Number : <input type = "number" name = "num2">
<br>
    <input type = "submit">
</form>

Answer : <?php echo $_GET['num1'] + $_GET['num2'] ?>

<hr> 







</body>
</html>