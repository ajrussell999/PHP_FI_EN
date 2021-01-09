<?php
session_start();
    include('languages/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');
 $available_langs = array('en','fi');


    if(isset($_GET['lang']) && $_GET['lang'] !=''){
        // check if selcted langauge is one we support
    
    if (in_array($_GET['lang'], $available_langs))
        {
            $_SESSION['lang'] = $_GET['lang']; // set session
            //setcookie('lang', $_GET['lang'], time()+3600,"/");
        }
    }

    // Set our default language session ONLY if we've got nothing
    if ($_SESSION['lang']=='') {
    $_SESSION['lang'] = 'en';
    }

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = 
$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title> subscribe to fly tying for species</title>
</head>

<body> 
<div class="vlog">
    <div class="menu">
        <div class="navbar"><a href="./subscribe.php?lang=en" target="_self">
            <img border="2" alt="EN_flag" src="./images/flagstgeorge.png"><?php echo $lang['lang_en'] ?></a>
         
         <!-- <a href="index.php?lang=fi"><?php echo $lang['lang_fi'] ?></a> -->
            <a href="./subscribe_FI.php?lang=fi"  target="_self">
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
            </div><!-- close div subnav-->
        <div class="navbar"></div><a href="./subscribe.php"><?php echo $lang['subscribe'] ?></a></div>
    </div><!-- close div menu -->

      <div class="headline_low">
        <h2><?php echo $lang['subscr_title'] ?></h2>
      </div>
          <p> <?php echo $lang['subscr_text'] ?></p>


          <p><span class="error">* Vaadittu kenttä</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER      ["PHP_SELF"]);?>">
      Nimi: <input type="text" name="name" value="<?php echo  $name;?>">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
      E-mail: <input type="text" name="email" value="<?php echo $email;?>">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
      Sukupuoli:
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Nainen") echo "checked";?>
        value="nainen">nainen
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Mies") echo "checked";?> value="mies">mies
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Muu") echo "checked";?>
        value="muu">muu
      <span class="error">* <?php echo $genderErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="Lähetä">
    </form>

    <?php
    echo "<h2>Sinun Panoksesi:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $gender;
    ?>

</div><!-- close vlog -->
</body>
</html>
