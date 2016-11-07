<?php

session_start();
unlink("dataSheet") ;
session_destroy();
session_unset();

header('Location: vote_result.php');

?>
