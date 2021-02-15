<?php session_start();

//On vva vérifier si notre formulaire est soumis

if(isset($_POST['Submit'])){

    //Définir le username et le mot de passe associé pour 3 utilisateurs fictifs
    $logins = array('test@test.fr' => 'test', 'truc@truc.fr' => 'truc', 'bidule@bidule.fr' => 'bidule');

    //Je vérifie et j'assigne un username et mdp soumis à une variable
    $username = isset($_POST['Email'])? $_POST['Email'] : '';
    $password = isset($_POST['Password'])? $_POST['Password'] : '';

    //On va vérifier si le username et le password existent dans mon tableau d'utilisateurs fictifs
    if (isset($logins[$username]) && $logins[$username] == $password){
    
    // On lui set les variables en session et on le redirige vers une autre page
    $_SESSION['USER'] = $logins[$username];
    header('location: index.php');
    exit;
    } else{
        //Si la vérification a échoué : on set un message d'erreur

        $message = "<span style='color : red'> Identifiants invalides </span>";
    }

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

        <h1>Connectez-vous</h1>

        <form action="login.php" method="post" name="Login_form"> 

        <?php if(isset($messagge)){ ?>

            <p><?php echo $message; ?></p>
        <?php } ?>
        
        <!--Attribut action permet de définir l'emplacement (url) où seront envoyées les données récoltées par le formulaire-->
        <!--Attribut method va définir la méthode HTTP utilisée pour envoyer les données -->

            <table class="Table">
                <tr>
                    <td>Email</td>
                    <td><input type="email" class="Input" name="Email"></td>
                </tr>
                <tr>
                    <td>Mot de passe</td>
                    <td><input type="password" class="Input" name="Password"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" class="button" name="Submit" value="Login"></td>
                </tr>
            </table>

            <label id="option"><input type="checkbox" name="auto" checked>Se souvenir de moi</label>
        </form>

    </div>

</section>








<?php include("src/footer.php"); ?>
</body>
</html>