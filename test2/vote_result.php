<?php
//Initialisation des variable
$nombreParticipant;
$Item = array("Chien", "Dragon d'eau", "Tigre", "Tortue");
$ItemValue;
$LenghtBar = 250;
$RoundNumber = 0;

//Lecture Fichier
if (file_exists("dataSheet")) //si le txt existe, on va chercher les valeur a l'intérieur pour les utiliser
{
    $Myfile = fopen("dataSheet","r");

    $nombreParticipant = fgets($Myfile);
    $ItemValue[0] = fgets($Myfile);
    $ItemValue[1] = fgets($Myfile);
    $ItemValue[2] = fgets($Myfile);
    $ItemValue[3] = fgets($Myfile);
    fclose($Myfile);
}
else//sinon, on l'initialise
{
    $Myfile = fopen("dataSheet","w");
    fwrite($Myfile,"0\n0\n0\n0\n0\n");
    $nombreParticipant = 0;
    $ItemValue = array(0,0,0,0);
    fclose($Myfile);
}
//Cookie & Session
session_start();
if ($_SESSION["CouleurBar"] === null)
{
    $_SESSION["CouleurBar"] = Array("#99FF66", "#33CCFF");
}
?>

<html>
    <body>
        <h1>Votre animal prefere</h1>
        <h2>Resultats obtenus pour <?php echo $nombreParticipant; ?> Participant(s)</h2>
        <table border="10" >
            <tr>
                <td><?php echo($Item[0]); ?></td>
                <td><?php echo($ItemValue[0]); ?></td>
                <td>
                    <div style="background-color: <?php echo($_SESSION["CouleurBar"][0]) ?>; width: <?php
                    if ($nombreParticipant>0)
                        echo($LenghtBar*($ItemValue[0]/$nombreParticipant));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipant>0)//Pour évité les divisions par zéros
                            echo(round(100*$ItemValue[0]/$nombreParticipant,$RoundNumber));
                        else
                            echo(0);
                        ?>%
                    </div>
                </td>
            </tr>
            <tr>
                <td><?php echo($Item[1]); ?></td>
                <td><?php echo($ItemValue[1]); ?></td>
                <td>
                    <div style="background-color: <?php echo($_SESSION["CouleurBar"][1]) ?>; width: <?php
                    if ($nombreParticipant>0)
                        echo($LenghtBar*($ItemValue[1]/$nombreParticipant));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipant>0)//Pour évité les divisions par zéros
                            echo(round(100*$ItemValue[1]/$nombreParticipant,$RoundNumber));
                        else
                            echo(0);
                        ?>%
                    </div>
                </td>
            </tr>
            <tr>
                <td><?php echo($Item[2]); ?></td>
                <td><?php echo($ItemValue[2]); ?></td>
                <td>
                    <div style="background-color: <?php echo($_SESSION["CouleurBar"][0]) ?>; width: <?php
                    if ($nombreParticipant>0)
                        echo($LenghtBar*($ItemValue[2]/$nombreParticipant));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipant>0)//Pour évité les divisions par zéros
                            echo(round(100*$ItemValue[2]/$nombreParticipant,$RoundNumber));
                        else
                            echo(0);
                        ?>%
                    </div>
                </td>
            </tr>
            <tr>
                <td><?php echo($Item[3]); ?></td>
                <td><?php echo($ItemValue[3]); ?></td>
                <td>
                    <div style="background-color: <?php echo($_SESSION["CouleurBar"][1]) ?>; width: <?php
                    if ($nombreParticipant>0)
                        echo($LenghtBar*($ItemValue[3]/$nombreParticipant));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipant>0)//Pour évité les divisions par zéros
                            echo(round(100*$ItemValue[3]/$nombreParticipant,$RoundNumber));
                        else
                            echo(0);
                        ?>%
                    </div>
                </td>
            </tr>
        </table>
        <a href="vote.php">Changer Couleurs</a>
        <a href="vote.php"><h2>Votez</h2></a>
    </body>
</html>
