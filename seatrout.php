<?php
session_start();
    // Which langauges are supported
    $available_langs = array('en','fi');

    if(isset($_GET['lang']) && $_GET['lang'] !=''){
        // check if selcted langauge is one we support
    
    if (in_array($_GET['lang'], $available_langs))
        {
            $_SESSION['lang'] = $_GET['lang']; // set session
        }
    }
    // Set our default language session ONLY if we've got nothing
    if ($_SESSION['lang']=='') {
    $_SESSION['lang'] = 'en';
    }
    // Include active language
    //require_once('languages/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');
    include('languages/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Fly Tying For SeaTrout</title>
</head>

<body>
<div class="vlog">
    <div class="menu">
        <div class="navbar"><a href="./seatrout.php?lang=en" target="_self">
            <img border="2" alt="EN_flag" src="./images/flagstgeorge.png"><?php echo $lang['lang_en'] ?></a>
         
         <!-- <a href="index.php?lang=fi"><?php echo $lang['lang_fi'] ?></a> -->
            <a href="./seatrout.php?lang=fi"  target="_self">
            <img border="2" alt="FI_flag" src="./images/FIflag.png"><?php echo $lang['lang_fi'] ?></a>
     </div>

     <div class="navbar"><a href="./index.php"><?php echo $lang['home'] ?></a>
            <div class="subnav">
                <button class="subnavbutton"><?php echo $lang['fish'] ?><i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="./grayling.php"><?php echo $lang['grayling'] ?></a>
                    <a href="./trout.php"><?php echo $lang['trout'] ?></a>
                    <a href="./seatrout.php"><?php echo $lang['sea trout'] ?></a>
                    <a href="./salmon.php"><?php echo $lang['salmon'] ?></a>
                </div>
            </div>
            <div class="subnav">
                <button class="subnavbutton"><?php echo $lang['about'] ?> <i class="fa fa-caret-down"></i></button>
                <div class="subnav-content">
                    <a href="./about.php"><?php echo $lang['about'] ?></a>
                    <a href="./Barry.php">Barry</a>
                    <a href="./Davie.php">Davie</a>
                </div>
            </div>
        <div class="navbar"></div><a href="./subscribe.php"><?php echo $lang['subscribe'] ?></a></div>
    </div>

    <div class="backfill">
        <div class="header">
        <div class="hblock">
        <h2><?php echo $lang['Seatrout_headline']?></h2>
        </div></div>
        <div class="text_seatrout"><?php echo$lang['ftfs_seatrout'] ?>
        </div>

        <div class="tile_7">
        <a href="./vl_proppen.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>

        <div class="tile_8">
        <a href="./vl_silver_doctor.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>

        <div class="tile_9">
        <a href="./vl_sculpin.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
    </div><!-- close div backfill -->
</div>
</body>
</html>