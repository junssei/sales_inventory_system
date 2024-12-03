<div id="side_navbar">
        <div id="navbar_main">
            <div id="navbar_logo">
                <img src="_img/horizontal/ColoredNoSkinTPHRZTL.png">
            </div>
            <div class="navbar_menus">
                <!--[icon, menu name] dropdown (optional) -->
                <a href="dashboard.php" class="menu dashboard <?php if($title == "Dashboard") echo "active"?> ">
                    <span><img class="icon menu_icon" src="_img/icon/default_dashboard.png"><p> Dashboard </p></span>
                    <!-- <img class="icon dropdown" src="_img/icon/dropdown.png"> -->
                </a>
                <a href="product.php" class="menu dropdown product <?php if($title == "Product") echo "active"?>">
                    <span><img class="icon menu_icon" src="_img/icon/default_boxes.png"><p> Inventory </p></span>
                    <img class="icon dropdown" src="_img/icon/dropdown.png">
                </a>
                <a href="report.php" class="menu report <?php if($title == "Report") echo "active"?>">
                    <span><img class="icon menu_icon" src="_img/icon/default_analytics.png"><p> Report </p></span>
                    <!-- <img class="icon dropdown" src="_img/icon/dropdown.png"> -->
                </a>
                <a href="customer.php" class="menu customer <?php if($title == "Customer") echo "active"?>">
                    <span><img class="icon menu_icon" src="_img/icon/default_people.png"><p> Customer </p></span>
                    <img class="icon dropdown" src="_img/icon/dropdown.png">
                </a>
            </div>
        </div>
        <div class="navbar_actions">
            <a href="" class="action settings">
                <span><img class="icon menu_icon" src="_img/icon/default_settings.png"><p>Settings</p></span>
                <!-- <img class="icon dropdown" src="_img/icon/dropdown.png"> -->
            </a>
            <a href="process/logoutProcess.php" class="action logout">
                <span><img class="icon menu_icon" src="_img/icon/default_logout.png"><p>Logout</p></span>
                <!-- <img class="icon dropdown" src="_img/icon/dropdown.png"> -->
            </a>
        </div>
    </div>