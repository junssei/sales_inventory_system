<?php 
session_start();

if (!$_SESSION['loggedin']) {
    session_destroy();
    header('Location: login.php');
}

$title = 'Dashboard';
$id = $_SESSION['admidID'];
include 'process/header.php';
?>
<div id="main">
    <?php include 'pages/navigation.php' ?>
    <div id="main_content">
        <?php include 'pages/content_header.php' ?>
        <div id="content_body">
        
        </div>
    </div>
</div>
<?php 
include 'process/footer.php';
?>