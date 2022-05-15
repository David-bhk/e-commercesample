<?php
include 'database/connect.php';
if (isset($_POST['done1'])) {
    $username2 = htmlspecialchars($_POST['username2']);
    $email_address = htmlspecialchars($_POST['email_address']);
    $password2 = sha1($_POST['password2']);
    if (!empty($_POST['username2']) AND !empty($_POST['email_address']) AND !empty($_POST['password2'])) {
        if (filter_var($email_address)) {
            $reqemail = $bdd->prepare("SELECT * FROM user WHERE email_address = ?");
            $reqemail->execute(array($email_address));
            $emailexist = $reqemail->rowCount();
            if ($emailexist == 0) {
                $insertmbr = $bdd->prepare("INSERT INTO user(username2, email_address, password2) VALUES (?, ?, ?)");
                $insertmbr->execute(array($username2, $email_address, $password2));
                $error = "Votre a été créer avec succes !";
            }else{
                $error = "Adresse Email déjà utilisé";
            }
        }else{
            $error = "Adresse Email non valide";
        }
    }else{
        $error = "Tous les champs doivent être remplie";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style_account.css" />
    <title>Online Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="node_modules/sweetalert2/dist/sweetalert2.css">
    <!-- =============================================================================== -->

    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->



</head>

<body>
<?php
include ('header.php');
?>


<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/jordan.jpg" alt="">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Sign up</span>
                        <hr id="Indicator">
                    </div>
                    <form id="LoginForm" action="" method="post">
                        <input type="text" placeholder="Username" name="username">
                        <input type="password" placeholder="Password" name="password">
                        <button type="submit" class="btn" name="done">Login</button>
                        <a href="">Forgot Password</a>
                    </form>
                    <form id="RegForm" action="" method="post" >
                        <?php
                        if (isset($error)) {
                            echo $error;
                        }
                        ?>
                        <input type="text" placeholder="Username" name="username2">
                        <input type="email" placeholder="Email" name="email_address" id="username2">
                        <input type="password" placeholder="Password" name="password2" id="password2">
                        <button type="submit" id="signup" class="btn " name="done1" onclick="success()">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include ('footer.php');
?>

<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";
        }
        else {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>



<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register(){
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
    function login(){
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }


</script>

</body>

</html>


<script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

<script>
    function success() {

        Swal('hello word');
    }
</script>
<!-- 'well!',
  'You clicked the button!',
  'success' -->