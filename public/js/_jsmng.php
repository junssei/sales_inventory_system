<?php

if($title == 'Login'){
    echo '<script src="js/auth.js"></script>';
}

if($title == 'Register'){
    echo '<script src="js/register.js"></script>';
    echo '<script src="js/auth.js"></script>';
}

if($title == 'Dashboard' || "Product" || "Report" || "Customer"){
    echo '<script src="js/index.js"></script>';
}

echo '<script src="js/main.js"></script>';

?>