<?php
/**
 * Created by PhpStorm.
 * User: 201354694
 * Date: 2015-11-02
 * Time: 11:29
 */
$NBVoteMaxParPersonnes = 10;
session_start();
if ($_SESSION["VoteUsager"] === null)
{
    $_SESSION["VoteUsager"]=0;
}
if ($_SESSION["Animal1"] === null)
{
    $_SESSION["Animal1"]=0;
    $_SESSION["Animal2"]=0;
    $_SESSION["Animal3"]=0;
}
?>
<html>
    <body>
        <h1>Votre animal prefere</h1>
        <form method="POST" >
            <input type="submit" name="button1"  value="Chien">
        </form>
        <form method="POST" >
            <input type="submit" name="button2"  value="Chat">
        </form>
        <form method="POST"'>
            <input type="submit" name="button3"  value="Oiseau">
        </form>
        <form method="POST">
            <input type="submit" name="RESET"  value="RESET TOUT">
        </form>
        <?php
            if (isset($_POST['button1']))
            {
                if($_SESSION["VoteUsager"]<$NBVoteMaxParPersonnes)
                {
                    $_SESSION["VoteUsager"] += 1;
                    $_SESSION["VoteTotal"] +=1;
                    $_SESSION["Animal1"] += 1;
                }
            }
            else if (isset($_POST['button2']))
            {
                if($_SESSION["VoteUsager"]<$NBVoteMaxParPersonnes)
                {
                    $_SESSION["VoteUsager"] += 1;
                    $_SESSION["VoteTotal"] +=1;
                    $_SESSION["Animal2"] += 1;
                }
            }
            else if (isset($_POST['button3']))
            {
                if($_SESSION["VoteUsager"]<$NBVoteMaxParPersonnes)
                {
                    $_SESSION["VoteUsager"] += 1;
                    $_SESSION["VoteTotal"] +=1;
                    $_SESSION["Animal3"] += 1;
                }
            }
            else if (isset($_POST['RESET']))
            {
                session_destroy();
                session_unset();
            }
        ?>
        <a href="vote_result.php">Retour</a>
    <?php echo( "Nombre de votes restent:" . ($NBVoteMaxParPersonnes- $_SESSION["VoteUsager"])); ?>
    </body>
</html>
