<?php
session_start();
if(!isset($_SESSION["id"]))
{
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>profile</title>
</head>
<body>
    <div class="container">


         <form action="login.php" method="post">
         <?php   
         include("menu.php");
        ?>
            <hr>
            <div class="row mt-4">
                <div class="col-sm-6">
                    this is profile page
                    </span><a href="logout.php">logout</a></p>
                </div>
            </div>
            <hr>
                
        </div>
        </form>

    </div>
</body>
</html>