
<?php

    if(array_key_exists("logout",$_POST)){
        header("Location: index.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen23t</title>
    <link rel="stylesheet"  href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Secret diary</a>
        <div class="collapse navbar-collapse">
          <form method="POST" class="form-inline my-2 my-lg-0 ml-auto">
            <button name="logout"  class="btn btn-outline-success my-2 my-sm-0" type="submit">Log out</button>
          </form>
        </div>
    </nav>

      
    <div class="form-group m-4">
        <textarea style="resize: none;" rows="22"  class="form-control"></textarea>
    </div>


   <!-- <script>
$("#logOut").click(function(){
    alert(4);
});
    </script>-->
    <style>

      body{
        display: inherit;
      }

    </style>

    <script src="JavaScript.js"></script>
</body>
</html>