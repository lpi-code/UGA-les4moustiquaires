<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Devenir membre</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/register.css">
  </head>

  <body>
    <?php
    include 'assets/php/header.php';
     ?>
     <main>
       <h2>Devenir membre</h2>
       <h3>Devenez membre et intégrez l'élite de l'escrime !</h3>

       <form action="post_register.php" method="post">
         <label for="lastname">Nom <span>*</span></label>
         <input type="text" name="lastname" value="CARTA">

         <label for="firstname">Prénom <span>*</span></label>
         <input type="text" name="Prénom" value="Roni">

         <label for="age">Âge <span>*</span></label>
         <input type="number" name="age" value="18">

         <label for="mail">Meil <span>*</span></label>
         <input type="email" name="mail" value="carta.roni@example.com">
         
         <label for="phone">Téléphone</label>
         <input type="phone" name="phone" value="0102030405">
       </form>
     </main>

    <?php
    include 'assets/php/footer.php';
     ?>
  </body>

</html>
