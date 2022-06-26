<?php

session_start();
unset($_SESSION['mysnap_userid']);

header("Location: login.php");
die;