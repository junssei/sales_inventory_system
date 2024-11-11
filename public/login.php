<?php
session_start();
$title = 'Login';
include 'process/header.php'; 
?>
    <div id="container">
        <div id="subcontainer">
            <div id="header">
                <h1> <?php echo $title ?> </h1>
                <img class="logo" src="_img/DefaultNoSkinLogoTP.png" draggable=false>
            </div>
                <?php 
                if (isset($_SESSION['success'])){
                    echo "<div class='popupnotification'><p>" . $_SESSION['success'] . "</p></div>";
                    session_unset();
                }
                
                if (isset($_SESSION['error'])) {
                echo "<p class='errormessage'>" . $_SESSION['error'] . "</p>";
                } ?>
            <form action="process/validation.php" method="post" autocomplete="off">
                <div id="auth_input">
                    <div id="input_username"> 
                        <input type="text" name="email" placeholder="Email or username" required
                        <?php 
                            if (isset($_SESSION['username'])) {
                                echo "value='" . $_SESSION['username'] . "'";
                            }
                        ?>/>
                    </div>
                    <div id="input_password"> 
                        <input type="password" name="password" placeholder="Password" id="mypassword" required />
                        <img class="icon" src="_img/icon/visibilityoff.png" onclick="passwordVisibility()" draggable="false" id="mypasswordicon">
                    </div>
                </div>
                <div id="auth_action">
                    <a id="forgotpassword" href="#" draggable=false> Forgot Password </a>
                    <input type="submit" value="LOGIN">
                </div>
                <span>
                    <p>Don't have an account? <a href='register.php'>Sign Up</a></p>
                </span>
            </form>
        </div>
    </div>
<?php 
include 'process/footer.php'; 
?>