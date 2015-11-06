<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper indigo lighten-2">
            <?php
                if (isset($_SESSION['user_id'])){
                    echo '
                <a href="index.php" class="brand-logo"> Shoplift.Ninja </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">HOME</a></li>
                <li><a href="items.php">ITEMS</a></li>
                <li><a href="accountinfo.php">ACCOUNT</a></li>
                <li><a href="logout.php">LOGOUT</a></li>';
                }
                else{
                    echo '
                <a href="index.php" class="brand-logo"> Shoplift.Ninja </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">HOME</a></li>
                <li><a href="signup.php">SIGNUP</a></li>
                <li><a href="login.php">LOGIN</a></li>';
                }
                ?>
                </ul>
        </div>
    </nav>
</div>