<?php 
session_start();

if (!$_SESSION['loggedin']) {
    session_destroy();
    header('Location: login.php');
}

$title = 'Dashboard';
$id = $_SESSION['admidID'];
include 'process/header.php';

if (isset($_SESSION['notification'])){
    echo "<div class='popupnotification'><p>" . $_SESSION['notification'] . "</p></div>";
    unset($_SESSION['notification']);
}
?>
<div id="main">
    <?php include 'pages/navigation.php' ?>
    <div id="main_content">
        <?php include 'pages/content_header.php' ?>
        <div id="content_body">
            <div class="body_pages">
                <div class="pages_infoact">
                    <div class="breadcrumbs">/<?php 
                    $path = basename($_SERVER['PHP_SELF'],".php");
                    if($path == "index") { echo "Dashboard"; } else { echo $path; }
                    ?>
                    </div>
                    <!-- <button class="button addbtn"> Add </button> -->
                </div>

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