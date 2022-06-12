<?php
    include("classes/connect.php");
    include("classes/register.php");

    $vorname = "";
    $nachname = "";
    $geschlecht = "";
    $email = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $register = new Register();
        $result = $register->evaluate($_POST);

        if($result != ""){
            echo "<div style='text-align:center; font-size:30px; color:white; background-color:rgb(250, 134, 10);'>";
            echo $result;
            echo "</div>";
        }else{
            header("Location: login.php");
            die;
        }

        $vorname = $_POST['vorname'];
        $nachname = $_POST['nachname'];
        $geschlecht = $_POST['geschlecht'];
        $email = $_POST['email'];
    }
?>

<html>
<!-- Code by Ioannis Toptsis | https://github.com/Ioannis-Toptsis -->

    <head>
        <title>
            🔥 mySnap - Registrieren 🔥
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
            height: 625px;
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
            <strong style="font-size:25px;">Registrierung für mySnap</strong><br><br><br>
            <form method="post" action="">
                <input value="<?php echo $vorname ?>" name="vorname" type="text" id="input_text" placeholder="Vorname"><br><br>
                <input value="<?php echo $nachname ?>" name="nachname" type="text" id="input_text" placeholder="Nachname"><br><br>
                <input value="<?php echo $email ?>" name="email" type="text" id="input_text" placeholder="E-Mail"><br><br>
                <input name="passwort" type="password" id="input_text" placeholder="Passwort"><br><br>
                <input name="passwort2" type="password" id="input_text" placeholder="Passwort erneut eingeben"><br><br>
                <select id="input_text" name="geschlecht">
                    <option><?php echo $geschlecht ?></option>
                    <option>Mann</option>
                    <option>Frau</option>
                    <option>Diverses</option>
                </select><br><br><br><br><br>
                <input type="submit" id="button" value="Registrieren"><br><br><br>
            </form>
            <b>Du hast bereits ein Account? <a href="login.php">Klicke hier</a></b>
        </div>
    </body>

<!-- Code by Ioannis Toptsis | https://github.com/Ioannis-Toptsis -->
</html>