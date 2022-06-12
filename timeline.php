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

        #timeline_area{
            width: 800px;
            margin: auto;
            min-height: 400px;
        }

        #pb{
            width: 150px;
            border-radius: 50%;
            background-color: rgb(50, 50, 50);
            border: solid 2px white;
        }

        #liste{
            min-height: 500px;
            margin-top: 20px;
            color: white;
            padding: 8px;
            text-align: center;
            font-size: 20px;
            color: rgb(250, 134, 10);
            background-color: rgb(36, 36, 36);
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
            </div>
        </div>

        <div id="timeline_area">

            <div style="display:flex;">
                <div style="min-height:400px; flex:1;">
                    <div id="liste">
                       <img src="img/platzhalter-selfie.jpg" id="pb"><br>
                       Izuku Midoriya
                    </div>
                </div>
                    <div style="min-height:400px; flex:2.5; padding:20px; padding-right: 0px;">
                        <div style="border:solid thin #aaa; padding:10px; background-color:rgb(60, 60, 60);">
                        <textarea placeholder="Was geht ab?"></textarea>
                        <input id="post_button" type="submit" value="Posten">
                        <br>
                    </div>
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