<?php
session_start();
?>
//this comment
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>document</title>
</head>
<body>
    <div class="container">
    
    <?php
    $result = '';
    if(isset($_POST["ID"])){   
        $ID = $_POST["ID"];
        $pass = $_POST["pass"];
        if($ID == "admin" && $pass == "1234"){

            $_SESSION["id"] = 1;
            header("location:profile.php");
        }
        else
        {
            $result = "Ivalid user";
        }

    }
        
    
    
    ?>

    <?php
        if(isset($_POST["remember"]))
        {
            setcookie ("ID",$_POST["ID"],time()+ 3600);                            
        }
        // if(!empty($_POST["remember"])) {
        // setcookie ("ID",$_POST["ID"],time()+ 3600);
        // } else {
        // setcookie("ID","");
        // setcookie("pass","");
        // }
    ?>

         <form action="login.php" method="post">
         <?php   
         include("menu.php");
        ?>
            <hr>
            <div class="row mt-4">
                <div class="col-sm-6">
                    <label> UserId </label>
                    <input id="ID" type="text" name="ID" class="form-control">
                    
                    <label>password</label>
                    <input id="pass" type="password" name="pass" class="form-control">




    <div class="form-group">
                        <input type="checkbox" name="remember">
                        <label for="remember">remember me</label>
    </div> 
                    
                </div>
            </div>
            <hr>
                <div id="test">
                    <button  class="btn btn-primary" type="submit">Login</button>
                            <?php
                                echo $result;
                            ?>

                </div>


        </div>
        </form>

    </div>
</body>
</html>

<?php
    if(isset($_COOKIE["ID"]))
    {
        $id = $_COOKIE["ID"];
        echo "<script>document.getElementById('ID').value='$id'</script>";
    }
?>

<form action="insert.php" method="post">
user id : <>

</form>
