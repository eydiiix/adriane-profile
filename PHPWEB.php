<!DOCTYPE html>
<html>
   <body>
          <!-- Php Basics Array -->
       
        <?php
         $phrase = "Batangas State University";
        echo '</br>';  
        ?>String to uppercase: <?php echo strtoupper($phrase); //--function converts a string to uppercase.
        echo '</br>';
        ?>Length of the Phrase: <?php echo strlen($phrase); //--function returns the length of a string.
        echo '</br>';
        ?>Absolute Value of -100: <?php echo abs(-100); //--get absolute value
        echo '</br>';
        ?> Exponential Equation of 4 raise to 3: <?php echo pow(4,3); //-- exponential equation
        echo '</br>';
        ?> Squareroot of 144: <?php echo sqrt(144); //--squareroot
        echo '</br>';
        ?> Min value in (144,200,2): <?php echo min(144 , 200, 2); //--to get the minimum value
        echo '</br>';
        ?> Round of 144.85: <?php echo round(144.85); //--To round a floating-point number
        echo '</br>';
        ?> Rounds a number UP to nearest integer of 144.35: <?php echo ceil(144.35);//--function rounds a number UP to the nearest integer
        echo '</br>';
        ?> Rounds a number DOWN to nearest integer of 144.35: <?php echo floor(144.35);//--To round a number DOWN to the nearest integer
        ?>
       
      <!-- Name and Age -->
    
      
            <form action = "" method = "get" class="Forms">
                Name: <input type="text" name = "txtfld"/> </br>
                Age:  <input type="text" name = "age"/>
            <input type="submit" name="namenage" style="color:black; background-color:aquamarine;"/>
            <?php if(isset($_GET['namenage'])){?><br>
            Your name is:
            <?php echo $_GET['txtfld'];?>
            <br>
            Your age is:
            <?php echo $_GET['age'];
            }else{ echo '<br>'; echo "Input your name and age."; }?>
            </form>
  
 
      <!-- Addition -->
   
    <form action = "" method = "get" class = "Forms">
            Input 1: <input type="number" name = "num1"/> </br>
            Input 2:  <input type="number" name = "num2"/>
            <input type="submit" name="submit_btn" style="color:black; background-color:aquamarine;"/><br>
            Answer: <?php
            if(isset($_GET['submit_btn'])){
            echo $_GET["num1"] + $_GET["num2"];
            } else {
                echo "Input Input 1 and Input 2 Values";
            }  ?>
    </form>
    
      <!-- Fruits Array -->
       
            <form action = "" method = "post" class="Forms-array">
            Banana:    <input type="checkbox" name = "fruits[]" value = "Banana"/> </br>
            Oranges:  <input type="checkbox" name = "fruits[]" value = "Oranges"/></br>
            Mango:    <input type="checkbox" name = "fruits[]" value = "Mango"/></br>
            <input type="submit" name="submit-array" style="color:black; background-color:aquamarine;"/>
                 <center>Result:
                 <?php
                 if(isset($_POST['submit-array'])){
                   
                 $fruits = $_POST["fruits"];
                echo $fruits[0];}else{ echo "Choose fruits";}?>
                </center>
             </form>
       
          <!-- Celebrity -->
    
            <form action = "" method = "get" class="Forms">
            Color: <input type="text" name = "color"/> </br>
            Plural Noun:  <input type="text" name = "plural"/></br>
            Celebrity:  <input type="text" name = "celebrity"/></br>
            <input type="submit" name="celeb" style="color:black; background-color:aquamarine;"/><br><br>
            Results:
            <?php
            if(isset($_GET['celeb'])){
                $color = $_GET['color'];
                $plural = $_GET['plural'];
                $celeb = $_GET['celebrity'];
           
                echo "Roses are $color, $plural are blue, I love $celeb.";
           
            } else {
                echo "Provide Input";}
 
            ?>
           
        <!-- Friends Array -->

            <?php
            $friend = array("Kevin", "Karen", "Oscar", "Jim");
            $friends[10] = "Angela";
            echo count ($friend);
            ?>
           
 
          <!-- Calculator -->
         
         <form action="" method = "post" class="Forms">
        Input 1: <input type = "number" step="0.001" name="num1"/><br>
        Operator:<input type = "text" name="operator"/><br>
        Input 2:<input type = "number" step="0.001" name="num2"/><br>
       
        <input type = "submit" name="calcu"/>
        <br> Results:
        <?php
        if(isset($_POST['calcu'])){
        $num1 = $_POST["num1"];
        $num2 =$_POST["num2"];
        $op =$_POST["operator"];
 
        if($op == "+"){
            echo $num1 + $num2;
        }
        elseif($op == "-"){
            echo $num1 - $num2;
        }
        elseif($op == "/"){
            echo $num1 / $num2;
        }
        elseif($op == "*"){
            echo $num1 * $num2;
        }else{
            echo "Invalid Operator";
        }}else{
            echo "Input num1,operator and num2";
        }
        ?>
    </form>
    
       <!-- If - else - Statements -->
   
        <?php
           $isMale = false;
           $isTall = true;
 
           if($isMale && $isTall){
            echo "You are tall male";
           }elseif($isMale && !$isTall){
            echo "You are short male";
           }elseif(!$isMale && $isTall) {
            echo "You are not male but tall";
           }else{
            echo "You are not male and not tall";
           }
            ?>

           
    <!--- Grade -->
   
    <form action = "" method = "post" class="Forms">
            Student Name:<input type="name" name="student">
            <input type="submit" name="gradebtn" style="color:black; background-color:aquamarine;"/><br>
            Grade: <?php
            if (isset($_POST['gradebtn'])){
            $grades = array("Jis"=>"A+","Pam"=>"A+","Oscar"=>"C+");
            echo $grades[$_POST["student"]];}else { echo "Input Name";}
             ?>
    </form>
           
    
    <!-- Case Statements -->
   
    <form action = "" method = "Post" class="Forms">
            <input type = "text" name="grade">
            <input type = "submit" name="case"><br> Results:
                <?php
                if(isset($_POST['case'])){
                $grade = $_POST["grade"];
                switch($grade){
                case "A":
                    case"a":
                echo "You did amazing!";
                break;
                case "B":
                    case"b":
                echo "You did pretty good";
                break;
                case "C":
                    case"c":
                echo "You did poorly.";
                break;
                case "D":
                    case"d":
                echo "You did very bad.";
                break;
                case "F":
                    case"f":
                echo "YOU FAIL~.";
                break;
                default:
                echo "Invalid Grade";
            }}else{ echo "Input your Grade (A,B,C++):";}
 
            ?>
        </form>
       
       
         <!-- Function-->
       
         <?php
            function sayHi($name,$age){
                echo "Hello $name, you are $age year/s old<br>";
           
            }
            sayHI ("Rudolph",20);
           
            ?>
          
        <!-- Cube Result-->
        
        <?php
            function cube ($num){
                echo "The cube of 4 is :"; echo'<br>';
                return $num * $num * $num;
               
            }
            $cubeResult = cube(4);
           
            echo $cubeResult;
       
        ?>
      
         <!--- WHILE LOOP -->
       
        
        While Loop:<br>
        <?php
        $index = 1;
        while($index<=5){
            echo "$index<br>";
            $index++;
        }
        ?>

          <!--- DO WHILE LOOP -->
        DoWhile Loop:<br>
        <?php
        $index = 1;
        do{
            echo "$index<br>";
            $index++;
        }
        while($index<=5)
        ?>
         <!--- FOR LOOP -->
        For Loop:
        <br>
        <?php
        $luckyNumbers = array (4,8,14,16,23);
        for($i = 0; $i <=count($luckyNumbers);$i++){
            echo "$luckyNumbers[2]<br>";
        }
        ?>
       <!--INCLUDE -->

                <?php include "oparray.php"?>
                <p>This is the body.</p>
                <?php include "web2.php"?>
                
        <!-- Class and Objects -->
            <?php
            class book{
                var $title;
                var $author;
                var $pages;
 
               
                }
           
 
 
            $book1 = new Book();
            $book1 -> title = "Harry Potter";
            $book1 -> author= "JK Rowling";
            $book1 -> pages ="400";
 
            $book2 = new Book();
            $book2 -> title = "Lord of the Rings";
            $book2 -> author= "Tolkien";
            $book2 -> pages ="700";
 
            echo $book2 ->author
            ?>
         <!-- Constructor -->

             <?php
            class books{
                var $title;
                var $author;
                var $pages;
 
                function __construct(){
                    echo "New book CREATED <br>";
                }
            }
 
 
            $book1 = new Books();
            $book1 -> title = "Harry Potter";
            $book1 -> author= "JK Rowling";
            $book1 -> pages ="400";
 
            $book2 = new Books();
            $book2 -> title = "Lord of the Rings";
            $book2 -> author= "Tolkien";
            $book2 -> pages ="700";
            ?>
           <!-- Constructor 2 -->
            <?php
            class books1{
                var $title;
                var $author;
                var $pages;
 
                function __construct($aTitle, $aAuthor, $aPages){
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                }
            }
            $book3 = new Books1("Harry Potter", "JK Rowling", 400);
            $book4 = new Books1("Lord of the Rings", "Tolkien", 700);
 
            echo $book3-> author;
            ?>

           <!-- Constructor Grades-->
            
            <?php
                class Student{
                    var $name;
                    var $major;
                    var $gpa;
 
                    function __construct($name, $major, $gpa){
                        $this->name =$name;
                        $this->major =$major;
                        $this->gpa =$gpa;
                    }
                    function hasHonors(){
                        if($this->gpa>=3.5){
                            return "true";
                        }
                        return "false";
                    }
                }
                $student1 = new Student("Jim", "Business", 2.8);
                $student2 = new Student("Pam", "Art", 3.6);
                echo $student1 ->hasHonors();
                ?>

            <!-- Getters and Setters -->
            <?php
            class Movie{
                public $title;
                private $rating;
 
                function setRating($rating){
                    if($rating == "G"|| $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
                        $this -> rating = $rating;
                    }else {
                        $this-> rating = "NR";
                    }
                }
                function __construct($title,$rating){
                    $this -> title = $title;
                    $this -> setRating($rating);
                }
                function getRating(){
                    return $this->rating;
                }
            }
                $avengers = new Movie ("Avengers", "Dog");
                $avengers -> setRating ("PG");
                echo $avengers -> getRating();
       
             ?>

            <!-- Inheritance or Extends -->

                        <?php
                    class Chef{
                        function makeChicken(){
                            echo "The chef makes chicken<br>";
                        }
                        function makeSalad(){
                            echo "The chef makes salad<br>";
                        }
                        function makeSpecialDish(){
                            echo "The chef makes bbq ribs<br>";
                        }    
                    }
                    class ItalianChef extends Chef{
                        function makePasta(){
                            echo "the chef makes pasta<br>";
                        }
                        function makeSpecialDish(){
                            echo "The chef makes chicken parm<br>";
                        }
                    }
                    $chef = new Chef();
                    $chef -> makeSpecialDish();
                    $italianChef = new ItalianChef();
                    $italianChef -> makeSpecialDish();
                    //-- inherits other function -- //
                    $italianChef -> makeSalad();
 
                ?>
           
    </body>
</html>


