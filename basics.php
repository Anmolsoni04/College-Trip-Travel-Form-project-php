<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Php</title>
</head>
<body>
    <div class="container"> My first php website </div>
    <?php
    // echo "Hello Anmol this side" //in this way we can print the things in php
    //variables in php
    $variables1 = 5;
    $variables2 = 2;
    echo $variables1;
    echo $variables2;
    echo "<br>";

    echo $variables1 + $variables2;

    //operators in Php
    //1) ARITHMETIC OPERATORS(+, -, *, /)
    echo "The sum of 5 and 2 is";
    $ans = $variables1 + $variables2;
    echo $ans;
    echo "<br>";
    echo "The subtraction of 5 and 2 is";
    $ans = $variables1 - $variables2;
    echo $ans;
    echo "<br>";
    echo "The multi of 5 and 2 is";
    $ans = $variables1 * $variables2;
    echo $ans;
    echo "<br>";
    echo "The division of 5 and 2 is";
    $ans = $variables1 + $variables2;
    echo $ans;
    echo "<br>";
    // 2) ASSIGNMENT OPERATOR(+=. -=, =+, =-, ++, --)

    $newvar = $variables1;
    $newvar += 1;
    echo "The value of nayavariable after increament of 1 then: ";
    echo $newvar;
    echo "<br>";


    // Comparision Operators(>,<,>=,<=)
    //  echo "<h3> Comparision Operator </h3>"; //In this way we can make heading in php


    echo "the value of 1 == 4 is: ";
    echo var_dump(1==4); 
      //var_dump() is the function to check true or false.
      echo "<br>";

    //Increament and decreament operator
    // $variables1++
    echo $variables1++;
    echo $variables1;
    echo "<br>";

    // $variables2--;
    echo $variables2--;
    echo $variables2;
    echo "<br>";

    // ++$variables1;
    echo ++$variables1;
    echo $variables1;
    echo "<br>";

    // --$variables2;
    echo --$variables2;
    echo $variables2;
    echo "<br>";

    //Logical Operators(And( && ), OR( || ), NOT( ! ))
    //AND OPERATORS
    $mylogic = true and true;
    echo var_dump($mylogic);

    $mylogic = true and false;
    echo var_dump($mylogic);
echo "<br>";
    $mylogic = true or false;
    echo var_dump($mylogic);

    $mylogic = false or true;
    echo var_dump($mylogic);
    echo "<br>";

    echo "DATATYPES";
    echo "<br>";
    $dt = "This is anmol soni";
    echo var_dump($dt);
    echo "<br>";
    $dt = 4;
    echo var_dump($dt);
    echo "<br>";
    $dt = 4.10;
    echo var_dump($dt);
    echo "<br>";
    //constants:
    define('PI', 3.14);
    echo PI;
    ?>
</body>
</html>
