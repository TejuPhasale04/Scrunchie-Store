<!DOCTYPE html>
<html lang="en">
<head>
  <title>Scrunchie Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<style>
  .top-bar {
    display : flex;
    align-items : center;
    justify-content : space-between;
    padding : 15px 25px;
    background : #dcd0ff;
  }

  .top-bar span{
    color : #100c08;
    padding-left : 450px;
    padding-right : 180px;
  }

  nav {
    background : #f0f8ff;
    padding : 5px 20px;
    display : flex;
    align-items : center;
  }

  nav a{
    color : #100c08;
  }

  nav a:hover{
    color : #100c08;
  }

  .logo {
    display : flex;
    align-items : center;
    list-style : none;
  }

  .logo li{
    padding : 15px 10px;
    font-size : 20px;
  }

  .menu {
    display : flex;
    align-items : center;
    list-style : none;
    padding-left : 150px;
  }

  .menu li{
    padding : 25px 30px;
    font-size : 14px;
    
  }

  .menu-right {
    display : flex;
    align-items : center;
    list-style : none;
    padding-left : 100px;
  }

  .menu-right li{
    padding : 15px 10px;
    font-size : 20px;
  }

  #r{
    text-decoration: none;
  }
</style>
<body>
<div class="top-bar">
    <span><marquee>Enjoy 10% off on Quirky collection. Use code : 10QUIRKY</marquee></span>
</div>

<nav>
<ul class="logo">
    <li><img src="logo.png" alt="logo" width="50" height="50"></li>
    <li><b>VIONCA.IN</b></li>
</ul>
<ul class="menu">
    <li><a id="r" href="index.php">Home</a></li>
    <li><a id="r" href="Shop.php">Shop</a></li>
    <li><a id="r" href="About us.php">About us</a></li>
    <li><a id="r" href="Contact us.php">Contact us</a></li>
    <li><a id="r" href="Store Policy.php">Store Policy</a></li>
</ul>
<ul class="menu-right">
    <li><a href="SendMsg.php"><ion-icon name="person-circle-outline"></ion-icon></a></li>
    <li><a href="My cart.php"><ion-icon name="cart-outline"></ion-icon></a></li>
    <li><a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a></li>
</ul>
</nav>
</body>
</html>