<?php
  session_start();
  echo "aaa";
  if (isset($_POST['jmeno']) && isset($_POST['heslo'])) {
    $jmeno = $_POST['jmeno'];
    $heslo = $_POST['heslo'];
    if ($jmeno == "admin" && $heslo == "admin") {
    $_SESSION['login'] = 1;  
    }
    if ($jmeno == "spravce" && $heslo == "spravce") {
    $_SESSION['login'] = 2;  
    }
    var_dump($_SESSION);
}
?>
<html lang='cs'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
    <meta name='robots' content='all'>
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
   <style>
  .levyblok{
  float: left;
  height: 1000px;
  width: 200px;
  background-color:black;
  }
  .zaklad{
  width:1200px;
  height: 1000px;
  background-color:pink;
  }
  .login{
  width:200px;
  height: 300px;
  background-color:red;
  }
  .menu{
  width:200px;
  height: 400px;
  background-color:yellow;
  }
  .odkazy{
  width:200px;
  height: 300px;
  background-color:green;
  }
  .pata{
  width:1000px;
  height: 50px;
  background-color:brown;
  float: right;
  }
  .logo{
  width:1000px;
  height: 200px;
  float:right;
  background-color:purple;
  }
  .pravyblok{
  width:200px;
  height: 750px;
  float:right;
  background-color:blue;
  }
  .novinky{
  width:200px;
  height: 300px;
  background-color:blue;
  }
  .reklama{
  width:200px;
  height: 450px;
  background-color:red;
  }
  </style>
  </head>
  <body>
  <div class="zaklad">
    <div class="levyblok">
        <div class="login">
        <?php
        if(isset($_SESSION['login']) && $_SESSION['login']==1){
            echo "<h2 style='margin:0;padding:0;'>Vítej ADMINE!!!</h2>";
            echo "<a href='logout.php'> Odhlásit </a><br><br>";
        }
        if(isset($_SESSION['login']) && $_SESSION['login']==2){
            echo "<h2 style='margin:0;padding:0;'>VITEJ SPRAVCE!!</h2>";
            echo"<a href='logout.php'>Odhlásit se</a><br><br>;"
        }
        ?>
        <form action="index2.php" method="post">
            Jméno<input type="text" name="jmeno">
            Heslo<input type="text" name="heslo">
        <input type="submit" value="odeslat">
        </div>
        <div class="menu">menu</div>
        <div class="odkazy">odkazy</div>
        </form>
    </div>
    <div class="logo">logo</div>
    <div class="pravyblok">
        <div class="novinky">novinky</div>
        <div class="reklama">reklama</div>
    </div>
    <div class="pata">pata</div>
    
    
  </div>
  </body>