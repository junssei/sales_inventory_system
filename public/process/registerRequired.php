<?php
$uppercase = preg_match("@[A-Z]@", $password);
$lowercase = preg_match("@[a-z]@", $password);
$number = preg_match("@[0-9]@", $password);
$specialchar= preg_match("@[^\w]@", $password);

if(!empty($_POST['firstname'])){
    $_SESSION['regfirstname'] = $firstname;
}

if(!empty($_POST['lastname'])){
    $_SESSION['reglastname'] = $lastname;
}

if(!empty($_POST['username'])){
    $_SESSION['regusername'] = $username;
}

if(strlen($password) < 8){
    $_SESSION['registerPSWerror'] = "Your password MUST be at least 8 characters long";
    // echo "<div class='errormessage'> Your password MUST be at least 8 characters long </div>";
    header('Location: ../register.php');
    exit();
}

if(!$uppercase){
    $_SESSION['registerPSWerror'] = "Your password MUST contain at least 1 uppercase letter";
    // echo "<div class='errormessage'> Your password MUST contain at least 1 lowercase letter </div>";
    header('Location: ../register.php');
    exit();
}

if(!$lowercase){
    $_SESSION['registerPSWerror'] = "Your password MUST contain at least 1 lowercase letter";
    // echo "<div class='errormessage'> Your password MUST contain at least 1 lowercase letter </div>";
    header('Location: ../register.php');
    exit();
}

if(!$number){
    $_SESSION['registerPSWerror'] = "Your password MUST contain at least 1 number";
    // echo "<div class='errormessage'> Your password MUST contain at least 1 number </div>";
    header('Location: ../register.php');
    exit();
}

if(!$specialchar){
    $_SESSION['registerPSWerror'] = "Your password MUST contain at least 1 special character";
    // echo "<div class='errormessage'> Your password MUST contain at least 1 special character </div>";
    header('Location: ../register.php');
    exit();
}

// if(strlen($username) < 3){
//     $_SESSION['registerUSNerror'] = "Your username MUST be at least 3 characters long";
//     // echo "<div class='errormessage'> Your password MUST be at least 8 characters long </div>";
//     header('Location: ../register.php');
//     exit();
// } else {
//     $_SESSION['REGusername_error'] = $username; 
// }

// if(strlen($firstname) < 3){
//     $_SESSION['registerFNMerror'] = "Your First Name MUST be at least 3 characters long";
//     // echo "<div class='errormessage'> Your password MUST be at least 8 characters long </div>";
//     header('Location: ../register.php');
//     exit();
// } else {
//     $_SESSION['REGfirstname'] = $firstname; 
// }

// if(strlen($lastname) < 3){
//     $_SESSION['registerLNMerror'] = "Your Last Name MUST be at least 3 characters long";
//     // echo "<div class='errormessage'> Your password MUST be at least 8 characters long </div>";
//     header('Location: ../register.php');
//     exit();
// } else {
//     $_SESSION['REGlastname'] = $lastname; 
// }
?>