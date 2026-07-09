<?php
include ("db_connect.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST["name"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
 $confirmPassword = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);


if ($name == "" || $email == "" || $password == "" || $confirmPassword == "") {
    $error = "All fields are required.";
    echo $error;
} else if(strlen($password)<8){
    echo "Password must be at least 8 characters long.";

}

else if(!preg_match('/[A-Z]/', $password)){
    echo "Password must contain at least one uppercase letter.";

}

else if(!preg_match('/[a-z]/', $password)){
    echo "Password must contain at least one lowercase letter";
} 

else if(!preg_match('/[0-9]/', $password)){
    echo "Password must contain at least one number.";
}



else if($password != $confirmPassword){
    $error = "Password does not match.";
    echo $error;
}
 else {
    //insert
    $insertQuery = "Insert into user(name, email, password) values('$name', '$email', '$password')";

    $result= mysqli_query($conn, $insertQuery);

    if($result){
            header("Location: success.php");

    }
       else{
        echo "Error occured while storing data";
        echo "Error: " . mysqli_error($conn);
       
    exit();
}
 }
}
?>
