<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Info </h1>
<form action = "info.php" method = "post">
    What is your name? <br>
    <input type = "text" name = "name">
    <input type = "submit">
</form>
    <?php 
    $userName = $_POST['name']; 
        function sayHi($name ) {
            echo "Hello $name!";
        }

        sayHi($userName); 
    ?> 

    <hr>
    <h3> Four Function Calclulator :  </h3>
    <form action = "info.php" method = "post">
        First Number : <input type = "number" step = 0.0001 name = "num1"> <br>
        Operator : <input type = "textbox" name = "op"> <br>
        Second Number : <input type = "number" step = 0.0001 name = "num2"> <br>
    <input type = "submit">
    </form>

    <?php 
    $num1 = $_POST['num1']; 
    $num2 = $_POST['num2']; 
    $op = $_POST['op']; 

    if($op == "+" ) {
        echo $num1 + $num2;
    } elseif($op == "-") {
        echo $num1 - $num2; 
    } elseif($op == "/") {
        echo $num1 / $num2;
    } elseif($op == "*") {
        echo $num1 * $num2;
    } else {
        echo "Invalid Operator"; 
    }

    
    ?>

    <?php 
    class Book {
        public $title; 
        public $author; 
        public $pages;

        function set_title($title) {
            $this->title = $title;
        }
        function get_title(){
            return $this->title; 
        }
        function set_author($author) {
            $this->author = $author;
        }
        function get_author() {
            return $this->author;
        }
        function set_pages($pages){
            $this->pages = $pages;
        }
        function get_pages(){
            return $this->pages; 
        }
    }

    $theHobbit = new Book();

    $theHobbit->set_author('J.R.R Tolkien');
    $theHobbit->set_pages(700);
    $theHobbit->set_title('The Hobbit, An Unexpected Journey');
    echo "<br>";
    echo "Book Title: " . $theHobbit->get_title();
    echo "<br>";
    echo "By : " . $theHobbit->get_author(); 
    echo "<br>"; 
    echo "A Book with a page count of" . $theHobbit->get_pages();

    // An easier way to build classes and objects : 

    class SportsTeam {
        public $teamName;
        public $sport; 
        public $numOfPlayers;
        public $championshipsWon;

        function __construct($teamName, $sport, $numOfPlayers, $championshipsWon) {
            $this->teamName = $teamName;
            $this->$sport = $sport;
            $this->$numOfPlayers = $numOfPlayers;
            $this-> $championshipsWon = $championshipsWon;

            
        }
    }

$arizonaCardinals = new SportsTeam('Arizona Cardinals', "Football", 72, 0); 
echo $arizonaCardinals->teamName;

    ?> 
<!-- Object Functions :  --> 

<?php 

    class Student {
        var $name; 
        var $major; 
        var $gpa; 

        function __construct($name, $major, $gpa) {
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonors() {
            if ($this->gpa >= 3.5) {
                return "true";
            }
            return "false";
        }
    }

    $student1 = new Student("Ryan", "Computer Science", 3.5);
    $student2 = new Student("John", "Astro-Physics", 4.2);
    echo "<br>";
    echo $student1->hasHonors(); 
    echo "<br>";
    echo $student2->hasHonors();
?>

</body>
</html>
