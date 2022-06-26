<?php
    session_start();

    include("classes/connect.php");
    include("classes/login.php");
    include("classes/user.php");

    if(isset($_SESSION['mysnap_userid']) && is_numeric($_SESSION['mysnap_userid'])){
        $id = $_SESSION['mysnap_userid'];
        $login = new Login();

        $result = $login->logincheck($id);

        if($result){
            $user = new User();
            $user_data = $user->get_data($id);

            if(!$user_data){
                header("Location: login.php");
                die;
            }
        }else{
            header("Location: login.php");
            die;
        }
    }else{
        header("Location: login.php");
        die;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        print_r($_POST);
    }

?>

<!DOCTYPE html>
<html>
<!-- Code by Ioannis Toptsis | https://github.com/Ioannis-Toptsis -->

    <head>
        <title>
            🔥 mySnap - Profile 🔥
        </title>
    </head>

    <style type="text/css">
        #body{
            background-color:rgb(36, 36, 36);
            font-family: Arial;
        }

        #bar{
            height: 50px;
            background-color: rgb(250, 134, 10);
            color: white;
        }

        #suchbox{
            height: 20px;
            width: 500px;
            border-radius: 6px;
            border: solid 1px #888;
            padding: 4px;
            font-size: 14px;
            background-image: url(img/suche.png);
            background-repeat: no-repeat;
            background-position: 98%;
            background-size: 20px;
        }

        #profile_area{
            width: 800px;
            margin: auto;
            min-height: 400px;
        }

        #pb{
            width: 150px;
            margin-left: -70%;
            margin-top: -300px;
            border-radius: 50%;
            background-color: rgb(50, 50, 50);
            border: solid 2px white;
        }

        #menu_buttons{
            width: 100px;
            display: inline-block;
            margin: 2px;
        }

        #freunde_img{
            width: 50px;
            float: left;
            margin: 8px;
        }

        #freunde_liste{
            min-height: 500px;
            margin-top: 20px;
            color: white;
            padding: 8px;
        }

        #freunde{
            clear: both;
            font-size: 14px;
            font-weight: bold;
            color: rgb(250, 134, 10);
        }

        textarea{
            width: 100%;
            border: none;
            font-family: Arial;
            font-size: 14px;
            height: 80px;
            resize: none;
            background-color: rgb(60, 60, 60);
        }

        #post_button{
            float: right;
            background-color: rgb(5, 237, 152);
            border: none;
            color: black;
            padding: 4px;
            font-size: 17px;
            border-radius: 2px;
            height: 25px;
            width: 70px;
        }

        #post_bar{
            margin-top: 20px;
            background-color: rgb(60, 60, 60);
            padding: 10px;
        }

        #post{
            padding: 4px;
            font-size: 13px;
            display: flex;
            color: white;
            margin-bottom: 20px;
        }

        a{
            color: white;
        }
    </style>

    <body id="body">
        <div id="bar">
            <div style="width:1600px; margin:auto; font-size:30px;">
                mySnap &nbsp &nbsp &nbsp &nbsp<input type="text" id="suchbox" placeholder="Suche nach Personen oder Gewerbe">
                <img src="img/platzhalter-selfie.jpg" style="width:50px; float:right;">
                <a href="logout.php">
                <span style="font-size:13px; float:right; margin:10px;">Ausloggen</span>
                </a>
            </div>
        </div>

        <div id="profile_area">
            <div style="background-color:rgb(50, 50, 50); text-align:center; color: white;">
                <img src="img/platzhalter-banner.jpg" style="width:100%;">
                <img src="img/platzhalter-selfie.jpg" id="pb">
                <br>
                <div style="font-size: 25px; margin-left:25%; margin-top:-80px; color: white;text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;"><p align="left"><?php echo $user_data['vorname'] . " " . $user_data['nachname'] ?></p></div>
                <br>
                <div id="menu_buttons">Timeline</div>
                <div id="menu_buttons">Über mich</div>
                <div id="menu_buttons">Freunde</div>
                <div id="menu_buttons">Fotos</div>
                <div id="menu_buttons">Einstellungen</div>
            </div>

            <div style="display:flex;">
                <!--Freunde-Liste-->
                <div style="min-height:400px; flex:1;">
                    <div id="freunde_liste">
                        Freunde<br>
                        <div id="freunde">
                            <img id="freunde_img" src="img/platzhalter-user1.jpg">
                            <br>
                            Froppy
                        </div>
                        <div id="freunde">
                            <img id="freunde_img" src="img/platzhalter-user2.jpg">
                            <br>
                            Katski Bakogu
                        </div>
                        <div id="freunde">
                            <img id="freunde_img" src="img/platzhalter-user3.jpg">
                            <br>
                            All Might
                        </div>
                        <div id="freunde">
                            <img id="freunde_img" src="img/platzhalter-user4.jpg">
                            <br>
                            Eraserhead
                        </div>
                    </div>
                </div>
                <!--Posting-Liste-->
                    <div style="min-height:400px; flex:2.5; padding:20px; padding-right: 0px;">
                        <div style="border:solid thin #aaa; padding:10px; background-color:rgb(60, 60, 60);">
                        <form method="post">
                        <textarea name="post" placeholder="Kommentar"></textarea>
                        <input id="post_button" type="submit" value="Posten">
                        <br>
                        </form>
                    </div>
                    <!--Posting-Bereich-->
                    <div id="post_bar">
                        <div id="post">
                            <div>
                                <img src="img/platzhalter-user3.jpg" style="width:50px; margin-right:7px;">
                            </div>
                            <div>
                                <div style="font-weight:bold; color: rgb(250, 134, 10);"> All Might</div>
                                Und jetzt bist du an der Reihe, junger Midoriya.
                                <br>
                                <br>
                                <a href="">Like</a> | <a href="">Kommentieren</a> | <span style="color: lightskyblue;">11.06.2022</span>
                            </div>
                        </div>
                        <div id="post">
                            <div>
                                <img src="img/platzhalter-user4.jpg" style="width:50px; margin-right:7px;">
                            </div>
                            <div>
                                <div style="font-weight:bold; color: rgb(250, 134, 10);"> Eraserhead</div>
                                Wage es dich nicht deine ganze Kraft einzusetzen wenn du sie nicht beherschen kannst.
                                <br>
                                <br>
                                <a href="">Like</a> | <a href="">Kommentieren</a> | <span style="color: lightskyblue;">11.06.2022</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </body>

<!-- Code by Ioannis Toptsis | https://github.com/Ioannis-Toptsis -->
</html>