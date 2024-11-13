<?php

if($title == 'Login'){
    echo '<link rel="stylesheet" href="css/auth.css">';
}

if($title == 'Register'){
    echo '<link rel="stylesheet" href="css/auth.css">';
}

if($title == 'Dashboard' || "Product" || "Report" || "Customer"){
    echo '<link rel="stylesheet" href="css/index.css">';
}

echo '<link rel="stylesheet" href="css/global.css">';
?>