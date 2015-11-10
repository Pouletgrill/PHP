<?php
/**
 * Created by PhpStorm.
 * User: 201354694
 * Date: 2015-11-02
 * Time: 11:29
 */
$NBVoteMaxParPersonnes = 3;
session_start();
if (!(isset($_SESSION["VoteUsager"])))
{
    $_SESSION["VoteUsager"]=0;
}
?>
<html>
    <body>
        <h1>Votre animal prefere</h1>
        <h2><?php echo( "Nombre de votes restent:" . ($NBVoteMaxParPersonnes- $_SESSION["VoteUsager"])); ?></h2>
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
        <form method="POST">
            <input type="submit" name="RESET"  value="RESET SESSION">
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
                    $ItemValue1 = fgets($Myfile1);
                    $ItemValue2 = fgets($Myfile1);
                    $ItemValue3 = fgets($Myfile1);
                    $ItemValue4 = fgets($Myfile1);

                    fclose($Myfile1);
                    unlink("dataSheet");
                    //Open and overwrite
                    $Myfile2 = fopen("dataSheet","a");
                    fwrite($Myfile2,(string)($nombreParticipent+1)."\n");
                    fwrite($Myfile2,(string)($ItemValue1+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue2);
                    fwrite($Myfile2,(string) $ItemValue3);
                    fwrite($Myfile2,(string) $ItemValue4);
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
                    $ItemValue1 = fgets($Myfile1);
                    $ItemValue2 = fgets($Myfile1);
                    $ItemValue3 = fgets($Myfile1);
                    $ItemValue4 = fgets($Myfile1);

                    fclose($Myfile1);
                    unlink("dataSheet");
                    //Open and overwrite
                    $Myfile2 = fopen("dataSheet","a");
                    fwrite($Myfile2,(string)($nombreParticipent+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue1);
                    fwrite($Myfile2,(string)($ItemValue2+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue3);
                    fwrite($Myfile2,(string) $ItemValue4);
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
                    $ItemValue1 = fgets($Myfile1);
                    $ItemValue2 = fgets($Myfile1);
                    $ItemValue3 = fgets($Myfile1);
                    $ItemValue4 = fgets($Myfile1);

                    fclose($Myfile1);
                    unlink("dataSheet");
                    //Open and overwrite
                    $Myfile2 = fopen("dataSheet","a");
                    fwrite($Myfile2,(string)($nombreParticipent+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue1);
                    fwrite($Myfile2,(string) $ItemValue2);
                    fwrite($Myfile2,(string)($ItemValue3+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue4);
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
                    $ItemValue1 = fgets($Myfile1);
                    $ItemValue2 = fgets($Myfile1);
                    $ItemValue3 = fgets($Myfile1);
                    $ItemValue4 = fgets($Myfile1);

                    fclose($Myfile1);
                    unlink("dataSheet");
                    //Open and overwrite
                    $Myfile2 = fopen("dataSheet","a");
                    fwrite($Myfile2,(string)($nombreParticipent+1)."\n");
                    fwrite($Myfile2,(string) $ItemValue1);
                    fwrite($Myfile2,(string) $ItemValue2);
                    fwrite($Myfile2,(string) $ItemValue3);
                    fwrite($Myfile2,(string)($ItemValue4+1)."\n");
                    fclose($Myfile2);
                }
            }
            else if (isset($_POST['RESET']))
            {
                session_destroy();
                session_unset();
            }
        ?>
        <a href="vote_result.php"><h2>Retour</h2></a>
    </body>
</html>
