<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intermediate php</title>
</head>


<style>
    .container{
        padding: 23px;
        margin: auto;
        max-width: 100%;
        background-color: grey;
    }
    </style>



<body>
    <div class = "container">
        <h3> Here is your car status </h3>
    <p>Hello Everyone, here is a explanation of intermediate php</p></div>
    <?php
    $age = 3;
    if($age >= 18){
        echo "Yes you can drive the car";
    }
    else{
        echo "you are unable to drive the car";
    }
    echo "<br>";

    // ARRAYS IN PHP

    $nums = array("Verna", "chevrolet", "Bmw", "Mercedes");

    echo $nums[3];
    echo "<br>";
    echo count($nums);

    // Loops in php
    $a = 0;
    while($a <= 10){
        echo "<br>";
        echo "The value of a is: ";
        echo $a;
        
        $a++;
    }

    $a = 2;
    $i = 0;
    while($i <= 10){
        $ans = $a * $i;
        $i++;
        echo "<br>";
        echo $ans;
        echo "<br>";
    }
    // ITERATING in arrays using while loop
     
    $nums = array("Verna", "chevrolet", "Bmw", "Mercedes");
    $a = 0;
    while ($a < count($nums)) {
        echo "<br> the name of car is: ";
        echo $nums[$a];
        $a++;
        } 


    // FOR LOOOP
    $n = 5;
    for($i = 1; $i <= 10; $i++){
        echo "<br>";
        $ans = $n * $i;
        echo $ans;
    }
        //for each loop

        // foreach ($nums as $name){
        //     echo "<br> The name of the car from for each loop is: ";
        //     echo $name;
        // }

        //functions in php
echo "<br>";
        function print10(){
            echo "Ten";
        }
        print10();
   ?>
</body>
</html>
