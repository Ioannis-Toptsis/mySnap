<?php

class Register{
    private $error = "";

    public function evaluate($data){
        foreach ($data as $key => $value) {
            if(empty($value)){
                $this->error = $this->error . ucfirst($key) . " muss ausgefüllt werden!<br>";
            }

            if($key == "email"){
                if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value)){
                    $this->error = $this->error . "Bitte gebe eine Email-Addresse an<br>";
                }
            }

            if($key == "vorname"){
                if(is_numeric($value) || strstr($value," ")){
                    $this->error = $this->error . "Ungültiger Vorname<br>";
                }
            }

            if($key == "nachname"){
                if(is_numeric($value) || strstr($value," ")){
                    $this->error = $this->error . "Ungültiger Nachname<br>";
                }
            }
        }

        if($this->error == ""){
            // Keine Fehler
            $this->create_benutzer($data);
        }else{
            return $this->error;
        }
    }

    public function create_benutzer($data){
        $vorname = ucfirst($data['vorname']);
        $nachname = ucfirst($data['nachname']);
        $geschlecht = $data['geschlecht'];
        $email = $data['email'];
        $passwort = $data['passwort'];
        $url_address = strtoLower($vorname) . "-" . strtoLower($nachname);
        $userid = $this->create_userid();

        $query = "insert into benutzer (userid,vorname,nachname,geschlecht,email,passwort,url_address) values ('$userid','$vorname','$nachname','$geschlecht','$email','$passwort','$url_address')";
        
        $DB = new DB();
        $DB->save($query);
    }

    private function create_userid(){
        $lenght = rand(4,19);
        $nummer = "";
        for ($i=1; $i < $lenght; $i++) { 
            $random = rand(0,9);
            $nummer = $nummer . $random;
        }

        return $nummer;
    }
}