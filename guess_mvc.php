<!--       model          -->
<?php
    $oldguess= "";
    $message= false;

    if(isset($_POST["guess"])){

      if ( strlen($_POST["guess"]) < 1 ) {
        $message="Your guess is too short";
      }
      else if ( ! is_numeric($_POST["guess"]) ) {
        $message="Your guess is not a number";
      }
       else if ( $_POST["guess"] < 68 ) {
        $message="Your guess is too low";
      }
      else if ( $_POST["guess"] > 68 ) {
        $message="Your guess is too high";
      }
      else {
        $message="Congratulations - You are right";
      }
    }
?>


<!--       view          -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>A Guessing game</title>
  </head>
  <body style="font-family: sans-serif;">

    <p>Guessing game...</p>
    <?php
        if($message!==false){
          echo ("<p>$message</p>");
          //echo "<br>";
        }
     ?>



     <form method="post">
       <p>
         <label for="guess">Input Guess</label>
         <input type="text" name="guess" id="guess" size="40" value="<?=htmlentities($oldguess)?>">
       </p>
          <input type="submit">

     </form>



  </body>
</html>



<!--       controller is the whole script          -->
