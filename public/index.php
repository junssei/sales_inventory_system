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
        <header id="content_header">
            <div class="header_leftside">
                <img src="_img/icon/default_burger.png" class="icon hamburger">
            </div>
            <div class="header_rightside">
                <img src="_img/icon/default_notification.png" class="icon">
                <div class="user_profile">
                    <div class="profile_image"></div>
                    <div class="profile_name">
                        <p> <?php echo $row["username"] ?> </p>
                        <span> <?php echo $row["role"] ?> </span>
                    </div>
                </div>
                <img src="">
            </div>
        </header>
        <div id="content_body">

        </div>
    </div>
</div>
<?php 
include 'process/footer.php';
?>