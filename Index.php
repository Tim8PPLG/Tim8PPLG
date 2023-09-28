< ! DOCTYPE html >
<html>
<head>
    <title>Membuat Login Multi User Level Dengan PHP dan MySQLi -
www.malasngoding.com</title>
    <link rel="stylesheet"    type="text/css" herf="style1.css">
</head>
<body>

   <h1>Membuat Login Multi User Lever Dengan PHP dan MySQLi<br/>
www.malasngoding.com</h1>

<?php 
if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
     echo "<div  class='alert'>Username dan password tidak sesuai !</div>";
   }

}
 ?>

<div class="kotak_login">
   <p class="tulisan_login">Silahkan login</p>

  <form action="cek_login2.php" method="post">
     <label>Username</label>
     <input type="text"    name="username" class="form_login"placeholder="Username .." required="required">
     <label>Password</label>
     <input type="password" name="password" class="form_login" placeholder="password .."required="required">

     <input type="submit" class="tombol_login" value="LOGIN">     

     <br/>
     <br/>
     <center>
        <a class="link" herf="https://www.malasngoding.com">kembali</a>
     </center>
   </form>
</div>


</body>
</html>
