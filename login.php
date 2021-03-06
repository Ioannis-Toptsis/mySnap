<?php
    include("classes/connect.php");
    include("classes/login.php");
    session_start();

    $email = "";
    $passwort = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $login = new Login();
        $result = $login->execute($_POST);

        if($result != ""){
            echo "<div style='text-align:center; font-size:30px; color:white; background-color:rgb(250, 134, 10);'>";
            echo $result;
            echo "</div>";
        }else{
            header("Location: profile.php");
            die;
        }

        $email = $_POST['email'];
        $passwort = $_POST['passwort'];
    }
?>

<html>
<!-- Code by Ioannis Toptsis | https://github.com/Ioannis-Toptsis -->

    <head>
        <title>
            🔥 mySnap - Login 🔥
        </title>
    </head>

    <style>
        #body{
            background-color:rgb(36, 36, 36);
            font-family: Arial;
        }

        #bar{
            background-color: rgb(250, 134, 10);
            color: rgb(250, 250, 250);
            font-size:50px;
            padding: 7px;
        }

        #register_text{
            border-radius: 4px;
            text-align: center;
            float: right;
        }

        #login_fenster{
            background-color: rgb(50, 50, 50);
            width: 800px;
            height: 350px;
            margin: auto;
            margin-top: 70px;
            padding: 10px;
            text-align: center;
            color: rgb(250, 134, 10);
            font-family: Arial;
        }

        #input_text{
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: solid 1px #aaa;
            padding: 4px;
            font-size: 14px;
        }

        a{
            color: lightskyblue;
        }

        #button{
            width: 200px;
            height: 40px;
            font-weight: bold;
            border-radius: 50px;
            background-color: rgb(5, 237, 152);
            border: none;
            font-size: medium;
            font-family: Arial;
        }
    </style>

    <body id="body">
            <h1 id="bar">
                mySnap
            </h1>

        <div id="login_fenster">
        <br>
            <strong style="font-size:25px;">Anmeldung für mySnap</strong><br><br><br>
            <form method="post">
            <input name="email" value="<?php echo $email ?>" type="text" id="input_text" placeholder="E-Mail"><br><br>
            <input name="passwort" value="<?php echo $passwort ?>" type="password" id="input_text" placeholder="Passwort"><br><br><br>
            <input type="submit" id="button" value="Anmelden"><br><br><br>
            </form>
            <b>Du hast noch kein Account? <a href="register.php">Klicke hier</a></b>
        </div>
    </body>

<!-- Code by Ioannis Toptsis | https://github.com/Ioannis-Toptsis -->
</html>