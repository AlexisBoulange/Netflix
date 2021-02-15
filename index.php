

<?php session_start(); /* On commence la session*/

if(!isset($_SESSION['USER'])){  /*$_SESSION Variable superglobale -> interne à PHP, peut être utiliser dans tout le script + toujours un tableau associatif*/
    header("location:login.php");
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Netflix sans BDD</title>
</head>
<body>
    
<?php include("src/header.php"); ?>

<section>
    <div id="login-body">

        Vous êtes connecté "<?= $_SESSION['USER'] ?>" <a href="logout.php"><strong style='color:red'>Cliquez ici</strong></a>

    </div>
</section>







<?php include("src/footer.php"); ?>
</body>
</html>