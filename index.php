<?php
$insert = false; 

if(isset($_POST['name'])){   

 //isset func is used to check that the name which we insert is set or not, if it is set then execution is succeessfully access else its failed//


$server = "localhost";
$username = "root";
$password = "";
$connectivity = mysqli_connect($server, $username, $password);
if(!$connectivity){
    die("Sorry your connectivity is failed");
}
// echo "Your data base is connected now";

//1) Now we insert the values and execute mysql query

//2) Make the variable of the names which is inside the brackets of query

//$sno = $_POST['sno]; yeh b hum nahi krenge kyuki yeh automatic increament hojagea

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$others = $_POST['others'];

// $dt = $_POST['dt']; (yeh hum nahi baanayenge, kyuki iski jagha hum current_ timestamp() use karlenge)

//3) Now the names which is written inside the VALUES('testname', 'xyz@gmail.com', etc..., replace these by using the variables which we made above like $name, $email, etc....)

$sql = "INSERT INTO `itm trip`.`mtr trip` ( `name`, `email`, `phone`, `others`, `dt`) VALUES ( '$name', '$email', '$phone', '$others', current_timestamp());";
// echo $sql;  (We don't have to print this)


//now we have to execute our database
//for that we have to do:
//(->)  this is object operator 


if($connectivity->query($sql) == true){
    // echo "Successfully inserted";   (We don't have to print this)
    $insert = true;

}
else{
    echo "ERROR: $sql <br> $connectivity -> error";
}
$connectivity -> close();
}
?>
<!-- after that we have to do paste all the html code below the php: -->

<!-- and after that we have to check that name which we enter is set or not using isset function i.e., if(isset($_POST['name'])){
    and "next curly braces wil close just below and before the ending of php code}
-->
<!-- After that we have to fix php code in HTML, so that we can print thankyou msg -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITM Trip Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class = "itm" src="itm.png" alt="ITM University Gwalior">
    <div class="container"> 
        <h3>Welcome To ITM Gwalior</h3>
        <p><b>This trip is for visiting Mathura, which is a Lord krishna Nagri. All the students have to do register yourself by filling the form and submit it.</b> </p>

        <?php
        if($insert == true){
            echo "<p class = 'fb'>Thanks to submission. We are happy to joining you for this trip! see You there!</p>";
        } 
        ?>
        <form action="index.php" method="post" class="form">
            <input type="text" name = 'name' id = 'name' placeholder="Enter your name here">
            <input type="email" name = 'email' id = 'email' placeholder="Enter your email here">
            <input type="phone" name = 'phone' id = 'phone' placeholder="Enter your number here">
            <textarea name = "others"  id = 'others' rows="10" cols="80" placeholder="Short description"></textarea>
            <input type="submit" value="Submit" class="btn">
            <input type="reset" value="Reset" class="btn">
        </form>   
    </div>
    <script src = "index.js"></script>  
</body>
</html>
