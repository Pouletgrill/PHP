<?php

session_start();
if (isset($_SESSION["VoteUsager"]))
{
    $_SESSION["VoteUsager"]=0;
	echo("reset du vote usager");
}
header('Location: vote_result.php');

?>
