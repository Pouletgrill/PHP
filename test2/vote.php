<?php
/**
 * Created by PhpStorm.
 * User: 201354694
 * Date: 2015-11-02
 * Time: 11:29
 */
$NBVoteMaxParPersonnes = 10;
session_start();
if (!(isset($_SESSION["VoteUsager"])))
{
    $_SESSION["VoteUsager"]=0;
}
?>
<html>
    <body>
        <h1>Votre animal prefere</h1>
        <form method="POST" >
            <input type="submit" name="button1"  value="Chien">
        </form>
        <form method="POST" >
            <input type="submit" name="button2"  value="Dragon D'Eau">
        </form>
        <form method="POST"'>
            <input type="submit" name="button3"  value="Tigre">
        </form>
        <form method="POST"'>
        <input type="submit" name="button4"  value="Tortue">
        </form>
        </form>
        <form method="POST"'>
        <input type="submit" name="button5"  value="Gazelle">
        </form>
        <form method="POST">
            <input type="submit" name="RESET"  value="RESET SESSION" hidden="hidden">
        </form>
        <?php
            if (isset($_POST['button1']))
            {
                if($_SESSION["VoteUsager"]<$NBVoteMaxParPersonnes)
                {
                    $_SESSION["VoteUsager"] += 1;
                    //Open, read
                    $Myfile1 = fopen("dataSheet","r");
                    $nombreParticipent = fgets($Myfile1);
                    $ItemValue[1] = fgets($Myfile1);
                    $ItemValue[2] = fgets($Myfile1);
                    $ItemValue[3] = fgets($Myfile1);
                    $ItemValue[4] = fgets($Myfile1);
                    $ItemValue[5] = fgets($Myfile1);

                    fclose($Myfile1);
                    unlink("dataSheet");
                    //Open and overwrite
                    $Myfile2 = fopen("dataSheet","a");
                    fwrite($Myfile2,(string)($nombreParticipent+1)."\n");
                    fwrite($Myfile2,(string)($ItemValue[1]+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue[2]);
                    fwrite($Myfile2,(string) $ItemValue[3]);
                    fwrite($Myfile2,(string) $ItemValue[4]);
                    fwrite($Myfile2,(string) $ItemValue[5]);
                    fclose($Myfile2);
                }
            }
            else if (isset($_POST['button2']))
            {
                if($_SESSION["VoteUsager"]<$NBVoteMaxParPersonnes)
                {
                    $_SESSION["VoteUsager"] += 1;
                    //Open, read
                    $Myfile1 = fopen("dataSheet","r");
                    $nombreParticipent = fgets($Myfile1);
                    $ItemValue[1] = fgets($Myfile1);
                    $ItemValue[2] = fgets($Myfile1);
                    $ItemValue[3] = fgets($Myfile1);
                    $ItemValue[4] = fgets($Myfile1);
                    $ItemValue[5] = fgets($Myfile1);

                    fclose($Myfile1);
                    unlink("dataSheet");
                    //Open and overwrite
                    $Myfile2 = fopen("dataSheet","a");
                    fwrite($Myfile2,(string)($nombreParticipent+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue[1]);
                    fwrite($Myfile2,(string)($ItemValue[2]+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue[3]);
                    fwrite($Myfile2,(string) $ItemValue[4]);
                    fwrite($Myfile2,(string) $ItemValue[5]);
                    fclose($Myfile2);
                }
            }
            else if (isset($_POST['button3']))
            {
                if($_SESSION["VoteUsager"]<$NBVoteMaxParPersonnes)
                {
                    $_SESSION["VoteUsager"] += 1;
                    //Open, read
                    $Myfile1 = fopen("dataSheet","r");
                    $nombreParticipent = fgets($Myfile1);
                    $ItemValue[1] = fgets($Myfile1);
                    $ItemValue[2] = fgets($Myfile1);
                    $ItemValue[3] = fgets($Myfile1);
                    $ItemValue[4] = fgets($Myfile1);
                    $ItemValue[5] = fgets($Myfile1);

                    fclose($Myfile1);
                    unlink("dataSheet");
                    //Open and overwrite
                    $Myfile2 = fopen("dataSheet","a");
                    fwrite($Myfile2,(string)($nombreParticipent+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue[1]);
                    fwrite($Myfile2,(string) $ItemValue[2]);
                    fwrite($Myfile2,(string)($ItemValue[3]+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue[4]);
                    fwrite($Myfile2,(string) $ItemValue[5]);
                    fclose($Myfile2);
                }
            }
            else if (isset($_POST['button4']))
            {
                if($_SESSION["VoteUsager"]<$NBVoteMaxParPersonnes)
                {
                    $_SESSION["VoteUsager"] += 1;
                    //Open, read
                    $Myfile1 = fopen("dataSheet","r");
                    $nombreParticipent = fgets($Myfile1);
                    $ItemValue[1] = fgets($Myfile1);
                    $ItemValue[2] = fgets($Myfile1);
                    $ItemValue[3] = fgets($Myfile1);
                    $ItemValue[4] = fgets($Myfile1);
                    $ItemValue[5] = fgets($Myfile1);

                    fclose($Myfile1);
                    unlink("dataSheet");
                    //Open and overwrite
                    $Myfile2 = fopen("dataSheet","a");
                    fwrite($Myfile2,(string)($nombreParticipent+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue[1]);
                    fwrite($Myfile2,(string) $ItemValue[2]);
                    fwrite($Myfile2,(string) $ItemValue[3]);
                    fwrite($Myfile2,(string)($ItemValue[4]+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue[5]);
                    fclose($Myfile2);
                }
            }
            else if (isset($_POST['button5']))
            {
                if($_SESSION["VoteUsager"]<$NBVoteMaxParPersonnes)
                {
                    $_SESSION["VoteUsager"] += 1;
                    //Open, read
                    $Myfile1 = fopen("dataSheet","r");
                    $nombreParticipent = fgets($Myfile1);
                    $ItemValue[1] = fgets($Myfile1);
                    $ItemValue[2] = fgets($Myfile1);
                    $ItemValue[3] = fgets($Myfile1);
                    $ItemValue[4] = fgets($Myfile1);
                    $ItemValue[5] = fgets($Myfile1);

                    fclose($Myfile1);
                    unlink("dataSheet");
                    //Open and overwrite
                    $Myfile2 = fopen("dataSheet","a");
                    fwrite($Myfile2,(string)($nombreParticipent+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue[1]);
                    fwrite($Myfile2,(string) $ItemValue[2]);
                    fwrite($Myfile2,(string) $ItemValue[3]);
                    fwrite($Myfile2,(string) $ItemValue[4]);
                    fwrite($Myfile2,(string)($ItemValue[5]+1)."\n");
                    fclose($Myfile2);
                }
            }
            else if (isset($_POST['RESET']))
            {
                session_destroy();
                session_unset();
            }
        ?>
        <h2><?php echo( "Nombre de votes restent:" . ($NBVoteMaxParPersonnes- $_SESSION["VoteUsager"])); ?></h2>
        <a href="vote_result.php"><h2>Retour</h2></a>
    </body>
</html>
