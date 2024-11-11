<?php 
session_start();

if (!$_SESSION['loggedin']) {
    session_destroy();
    header('Location: login.php');
}

$role = $_SESSION['role'];
$name = $_SESSION['username'];

$title = 'Dashboard';
include 'process/header.php';
?>
<div id="main">
    <?php include 'pages/navigation.php' ?>
    <div id="main_content">
        <header id="content_header">
            
        </header>
        <div id="content_body">

        </div>
    </div>
</div>
<?php 
include 'process/footer.php'; 
?>