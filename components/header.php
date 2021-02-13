<?php 
    $page = basename($_SERVER['PHP_SELF']);
    session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="mbajtsi">
    <header>
        <div class="header-main">
            <div class="logo">
                <a href="index.php">
                    <img src="../images/logos/logo.svg" alt="">
                    <h2>Quantum<span>store</span></h2>
                </a>
            </div>
            <div class="navbar">
                <ul>
                    <li class="<?php if($page == 'index.php'){ echo ' active';}?>"><a href="index.php">Ballina</a></li>
                    <li class="<?php if($page == 'produktet.php'){ echo ' active';}?>"><a href="produktet.php">Produktet</a></li>
                    <li class="<?php if($page == 'kontakt.php'){ echo ' active';}?>"><a href="kontakt.php">Kontakt</a></li>
                    <li class="<?php if($page == 'rrethnesh.php'){ echo ' active';}?>"><a href="rrethnesh.php">Rreth nesh</a></li>
                    <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['role'] == 1 ){ ?>
                        <li class="<?php if($page == 'dashboard.php'){ echo ' active';}?>"><a href="dashboard.php">Dashboard</a></li>
                    <?php } else {?>
                        <li class="<?php if($page == 'shporta.php'){ echo ' active';}?>">
                        <a id='shporta-nav-link' href="shporta.php">
                            Shporta<img src="../images/icons/shopping-bag-solid.svg" alt="">
                        </a>
                        </li>
                    <?php } ?>
                    <?php if(isset($_SESSION['is_logged_in'])){ ?>
                        <li><a href="logout.php" class="button">Logout</a></li>
                    <?php } else {?>
                        <li class="<?php if($page == 'llogaria.php'){ echo ' active';}?>">
                            <a href="llogaria.php" class="button">
                                <img src="../images/icons/user-circle.svg" alt="">
                                Llogaria
                            </a>
                            </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </header>

