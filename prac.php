<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "My name";
        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.", "<br>";
        
        echo strlen("This string was made with multiple parameters."); // outputs 12
        
        echo "<br>";
        
        echo "Today is " , date("d/m/y") . "<br>";
        echo "Today is " , date("d.m.y") . "<br>";
        echo "Today is " , date("d-m-y") . "<br>";
        echo "Today is " , date("i"). "<br>";
        date_default_timezone_set("Singapore");
        echo "The time in Singapore is ", date("h:i:s");
        
        $t = date("H");

        if ($t < "10") {
          echo "Have a good morning!";
        } elseif ($t < "20") {
          echo "Have a good day!";
        } else {
          echo "Have a good night!";
        }
        
        
        // define variables and set to empty values
        $name = $height = $weight = "";
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $weight = test_input($_POST["weight"]);
            $height = test_input($_POST["height"]);
            }
            
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        
        
        <h2>BMI Checker</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Name: <input type="text" name="name">
            <br><br>
            Height: <input type="double" name="height"> m
            <br><br>
            Weight: <input type="double" name="weight"> kg
            <br>
            <input type="submit" name="submit" value="Submit">  
        </form>
              
        <?php
        echo "<h2>Results:</h2>";
        echo $name . " is ";
        //echo $weight;
        if (!empty($height) && !empty($weight) ){           
            $bmi = $weight / $height / $height;
            //echo $bmi;
              if ($bmi < 18.5)
                  echo "Underweight";
              else if($bmi < 25)
                  echo "healthy";
              else {
                  echo "overweight";
                  echo "<br>";
                  echo '<img src="https://static.simpsonswiki.com/images/thumb/1/1f/Fat_Homer.jpg/250px-Fat_Homer.jpg">';
              }
        }

        ?>

    </body>
</html>
