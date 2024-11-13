<?php
session_start();
$title = 'Register';
include 'process/header.php'; 
?>
    <div id="container">
        <div id="subcontainer">
            <div id="header">
                <h1> <?php echo $title ?> </h1>
                <img class="logo" src="_img/DefaultNoSkinLogoTP.png" draggable=false>
            </div>
            <form action="process/registerProcess.php" method="post" autocomplete="off">
                <div id="auth_input">
                    <div id="inputfullname">
                        <input type="text" name="firstname" placeholder="First Name" id="myfirstname" required <?php 
                            if (isset($_SESSION['regfirstname'])) {
                                echo "value='" . $_SESSION['regfirstname'] . "'";
                            }
                        ?>/>
                        <input type="text" name="lastname" placeholder="Last Name" id="mylastname" required <?php 
                            if (isset($_SESSION['reglastname'])) {
                                echo "value='" . $_SESSION['reglastname'] . "'";
                            }
                        ?>/>
                    </div>
                    <div id="input_username"> 
                        <input type="text" name="username" placeholder="Username" id="myusername" required <?php 
                            if (isset($_SESSION['regusername'])) {
                                echo "value='" . $_SESSION['regusername'] . "'";
                            }
                        ?>/>
                    </div>
                    <div id="input_password"> 
                        <input type="password" name="password" placeholder="Password" id="mypassword" required />
                        <img class="icon" src="_img/icon/visibilityoff.png" onclick="passwordVisibility()" draggable="false" id="mypasswordicon">
                    </div>
                    <div id="message">
                        <span id="letter" class="invalid"> <b>Lowercase</b> </span>
                        <span id="capital" class="invalid"> <b> Uppercase </b> </span>
                        <span id="number" class="invalid"> <b>Number</b></span>
                        <span id="specialchar" class="invalid"> <b>Special Character</b></span>
                        <span id="length" class="invalid"> Minimum <b>8 characters</b></span>
                    </div>
                    <?php
                        if (isset($_SESSION['registerPSWerror'])) {
                            echo "<p class='errormessage'>" . $_SESSION['registerPSWerror'] . "</p>";
                        }
                    ?>
                    <div id="input_email"> 
                        <input type="email" name="email" placeholder="Email or username" required/>
                    </div>
                </div>
                <div id="auth_action">
                    <a href="login.php" draggable=false> Already have an account? </a>
                    <input type="submit" value="Register">
                </div>
                
            </form>
        </div>
    </div>
<?php 
include 'process/footer.php'; 
?>