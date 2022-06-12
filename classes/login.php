<?php

class Login{
    private $error = "";
    function execute($data){
        $email = addsLashes($data['email']);
        $passwort = addsLashes($data['passwort']);

        $query = "select * from benutzer where email = '$email' limit 1";
        
        $DB = new DB();
        $result = $DB->read($query);

        if($result){
            $row = $result[0];

            if($passwort == $row['passwort']){
                $_SESSION['mysnap_userid'] = $row['userid'];
            }else{
                $this->error .= "Email oder Passwort ist nicht korrekt.<br>";
            }
        }else{
            $this->error .= "Email oder Passwort ist nicht korrekt.<br>";
        }

        return $this->error;
    }

    public function logincheck($id){
        $query = "select 'userid' from benutzer where userid = '$id' limit 1";
        
        $DB = new DB();
        $result = $DB->read($query);

        if($result){
            return true;
        }

        return false;
    }
}