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
            <div class="body_pages">
                <span class="breadcrumbs"> /<?php 
                $path = basename($_SERVER['PHP_SELF'],".php");
                if($path == "index") { echo "Dashboard"; } else { echo $path; }
                ?> </span>
                <div class="pages_content">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ratione quaerat saepe. Beatae delectus nobis eos, modi maiores cupiditate cum natus minima illum fugiat corporis aliquam corrupti rem. Corrupti, alias? </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 'process/footer.php';
?>