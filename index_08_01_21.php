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
    include('./languages/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Fly Tying For Species</title>
</head>

<body>
<div class="vlog">

    <div class="menu">
        <div class="navbar">
            <a href="index.php?lang=en" target="_self">
            <img border="2" alt="EN_flag" src="./images/flagstgeorge.png"><?php echo $lang['lang_en'] ?></a>
         
            <a href="index.php?lang=fi"  target="_self">
            <img border="2" alt="FI_flag" src="./images/FIflag.png"><?php echo $lang['lang_fi'] ?></a>
        </div>  <!-- close div navbar -->

        <div class="navbar"><a href="./index.php"><?php echo $lang['home'] ?></a>
            <div class="subnav">
                <button class="subnavbutton"><?php echo $lang['fish'] ?><i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                    <a href="./grayling.php"><?php echo $lang['grayling'] ?></a>
                    <a href="./trout.php"><?php echo $lang['trout'] ?></a>
                    <a href="./seatrout.php"><?php echo $lang['sea trout'] ?></a>
                    <a href="./salmon.php"><?php echo $lang['salmon'] ?></a>
                    </div>
            </div> <!-- close div subnav -->
            
            <div class="subnav">
                <button class="subnavbutton"><?php echo $lang['about'] ?> <i class="fa fa-caret-down"></i></button>
                    <div class="subnav-content">
                    <a href="./about.php"><?php echo $lang['about'] ?></a>
                    <a href="./Barry.php">Barry</a>
                    <a href="./Davie.php">Davie</a>
                    </div>
                </div> <!-- close div subnav -->

        <div class="navbar"> 
        </div>
            <div class="subnav"><a href="./subscribe.php"><?php echo $lang['subscribe'] ?></a>
            </div> <!-- close div subnav -->
    
     <div class="header">
         <div class="hblock">
                <div class="TTspace"></div>
                    <div class="rectangle">
                    <h1 class="headline"><strong><?php echo $lang['head1a'] ?> <br><?php echo $lang['head1b'] ?><br><br><br><br></strong></h1> 
                    <h1 class="headlinetwo"><strong><?php echo $lang['head2'] ?></strong></h1>
                    </div><!-- close div rectanagle for front page-->

                    <h3 class="headline_low"><br><?php echo $lang['headlowa'] ?> <br> <?php echo $lang['headlowb'] ?> <br></h3><br>
                </div> <!-- close div TTspace for front page titles -->
            </div> <!-- close div hblock -->
        </div>  <!-- close div header -->
    </div>  <!-- close div menu -->
<!--  div vlog remains open, acts as backdrop container -->


    <div class="posts">
        <div class="tile_1">
         <a href="./vl_adams_irresistible.php" target="_self"><?php echo $lang['more'] ?></a> 
        </div><!-- close div tile_1, div posts remains open -->
        <div class="text_1">
            <?php echo $lang['tile_gr_1'] ?>
                <a href="./vl_adams_irresistible.php" target="_self"><?php echo $lang['continue reading'] ?><a><br>
        </div><!-- close div text_1 -->
        <div class="tags_1">
            <?php echo $lang['tags_tile_gr_1'] ?><hr>
        </div><!-- close div tags_1 -->
    </div><!-- close div posts -->

    <div class="posts">
        <div class="tile_2">
           <a href="/vl_cdc_olive_dun.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
        <div class="text_2">
             <?php echo $lang['tile_gr_2'] ?> 
                <a href="/vl_cdc_olive_dun.php" target="_self"><?php echo $lang['continue reading'] ?></a><br>
        </div>
        <div class="tags_2">
            <?php echo $lang['tags_tile_gr_2'] ?><hr>
        </div>
    </div>

    <div class="posts">
        <div class="tile_3">
            <a href="/vl_peeping_caddis.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
        <div class="text_3">
            <?php echo $lang['tile_gr_3'] ?>
                <a href="/vl_peeping_caddis.php" target="_self"><?php echo $lang['continue reading'] ?></a><br>
        </div>
        <div class="tags_3">
            <?php echo $lang['tags_tile_gr_3'] ?><hr>
        </div>
    </div>

    <div class="posts">
        <div class="tile_4">
          <a href="/vl_cdc_olive_emerger.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
        <div class="text_4">
            <?php echo $lang['tile_tr_4'] ?>
            <a href="/vl_cdc_olive_emerger.php" target="_self"><?php echo $lang['continue reading'] ?></a><br>
        </div>
        <div class="tags_4">
            <?php echo $lang['tags_tile_tr_4'] ?><hr>
        </div>
    </div>

    <div class="posts">
        <div class="tile_5">
            <a href="/vl_wally_spinner.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
        <div class="text_5">
            <?php echo $lang['tile_tr_5'] ?>
            <a href="/vl_wally_spinner.php" target="_self"><?php echo $lang['continue reading'] ?></a><br><br>
        </div>
        <div class="tags_5">
            <?php echo $lang['tags_tile_tr_5'] ?><hr>
        </div>
    </div>

    <div class="posts">
        <div class="tile_6">
            <a href="/vl_caddis_pupa.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
        <div class="text_6">
            <?php echo $lang['tile_tr_6'] ?>
            <a href="/vl_caddis_pupa.php" target="_self"><?php echo $lang['continue reading'] ?></a><br><br>
        </div>
        <div class="tags_6">
            <?php echo $lang['tags_tile_tr_6'] ?><hr>
        </div>
    </div>

    <div class="posts">
        <div class="tile_7">
            <a href="/vl_proppen.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
        <div class="text_7">
            <?php echo $lang['tile_se_7'] ?>
            <a href="/vl_proppen.php" target="_self"><?php echo $lang['continue reading'] ?></a><br><br>
        </div>
        <div class="tags_7">
            <?php echo $lang['tags_tile_se_7'] ?><hr>
        </div>
    </div>

    <div class="posts">
        <div class="tile_8">
            <a href="/vl_silver_doctor.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
        <div class="text_8">
            <?php echo $lang['tile_se_8'] ?>
            <a href="/vl_silver_doctor.php" target="_self"><?php echo $lang['continue reading'] ?></a><br><br>
        </div>
        <div class="tags_8">
            <?php echo $lang['tags_tile_se_8'] ?><hr>
        </div>
    </div>

    <div class="posts">
        <div class="tile_9">
            <a href="/vl_sculpin.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
        <div class="text_9">
            <?php echo $lang['tile_se_9'] ?>
            <a href="/vl_sculpin.php" target="_self"><?php echo $lang['continue reading'] ?></a><br><br>
        </div>
        <div class="tags_9">
            <?php echo $lang['tags_tile_se_9'] ?><hr>
        </div>
    </div>
    <div class="posts">
        <div class="tile_10">
            <a href="/vl_green_machine.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
        <div class="text_10">
            <?php echo $lang['tile_sa_10'] ?>
            <a href="/vl_green_machine.php" target="_self"><?php echo $lang['continue reading'] ?></a><br><br>
        </div>
        <div class="tags_10">
                 <?php echo $lang['tags_tile_sa_10'] ?><hr>
        </div>
    </div>
    <div class="posts">
        <div class="tile_11">
            <a href="/vl_royal_spey.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
        <div class="text_11">
            <?php echo $lang['tile_sa_11'] ?>
            <a href="/vl_royal_spey.php" target="_self"><?php echo $lang['continue reading'] ?></a><br><br>
        </div>
        <div class="tags_11">
            <?php echo $lang['tags_tile_sa_11'] ?><hr>
        </div>
    </div>
    <div class="posts">
        <div class="tile_12">
            <a href="/vl_allys_shrimp_tube.php" target="_self"><?php echo $lang['more'] ?></a>
        </div>
        <div class="text_12">
            <?php echo $lang['tile_sa_12'] ?>
            <a href="/vl_allys_shrimp_tube.php" target="_self"><?php echo $lang['continue reading'] ?></a><br><br>
        </div>
        <div class="tags_12">
            <?php echo $lang['tags_tile_sa_12'] ?><hr>
        </div>
    </div> <!-- close div posts -->

    <div class="adverts">
        <div class="adv_1">
            <a href="https://www.farlows.co.uk/" target="_blank">
            <img border="2" alt="farlows" src="./images/farlows200.png" width="200" height="200"></a>
        </div>
        <div class="adv_2">
            <a href="https://www.cookshill-flytying.co.uk/" target="_blank">
            <img border="2" alt="cookshill" src="./images/cookshill.jpg" width="200" height="200"></a>
        </div>
        <div class="adv_3">
            <a href="https://www.anglers-lodge.co.uk/" target="_blank">
            <img border="2" alt="cookshill" src="./images/anglerslodge.jpg" width="200" height="200"></a>
    </div> <!-- close div adverts -->
    <div class="footer">Andrew Russell  &copy;2021
    </div>
</div> <!-- close div vlog -->
</body> 
</html>