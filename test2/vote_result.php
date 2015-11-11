<?php
//Initialisation des variable
$nombreParticipant;
$Item = array("Chien", "Dragon d'eau", "Tigre", "Tortue","Gazelle");
$ItemValue;
$LenghtBar = 500;
$RoundNumber = 0;

//Lecture Fichier
if (file_exists("dataSheet")) //si le txt existe, on va chercher les valeur a l'int�rieur pour les utiliser
{
    $Myfile = fopen("dataSheet","r");

    $nombreParticipant = fgets($Myfile);
    $ItemValue[0] = fgets($Myfile);
    $ItemValue[1] = fgets($Myfile);
    $ItemValue[2] = fgets($Myfile);
    $ItemValue[3] = fgets($Myfile);
    $ItemValue[4] = fgets($Myfile);
    $ItemValue[5] = fgets($Myfile);

    fclose($Myfile);
}
else//sinon, on l'initialise
{
    $Myfile = fopen("dataSheet","w");
    fwrite($Myfile,"0\n0\n0\n0\n0\n0\n");
    $nombreParticipant = 0;
    $ItemValue = array(0,0,0,0,0,0);
    fclose($Myfile);
}
session_start();
//Couleur

$couleurIndex = 1;
$CouleurBar;
if (!isset($_SESSION["couleurIndex"]))
{
    $_SESSION["couleurIndex"]=1;
    $couleurIndex = 1;
}
else
{
    $couleurIndex = $_SESSION["couleurIndex"];
}

if (isset($_POST["paramCouleur"]))
{
    $_SESSION["couleurIndex"] = $_POST["paramCouleur"];
    $couleurIndex = $_POST["paramCouleur"];
}

if ($couleurIndex == 1) {
    $CouleurBar = Array("#FF3300", "#FF9980");//rouge
} else if ($couleurIndex == 2) {
    $CouleurBar = Array("#0000FF", "#0066FF");//bleu
} else if ($couleurIndex == 3) {
    $CouleurBar = Array("#006600", "#00BB00");//vert
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
                    <div style="background-color: <?php echo($CouleurBar[0]) ?>; width: <?php
                    if ($nombreParticipant>0)
                        echo($LenghtBar*($ItemValue[0]/$nombreParticipant));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipant>0)//Pour �vit� les divisions par z�ros
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
                    <div style="background-color: <?php echo($CouleurBar[1]) ?>; width: <?php
                    if ($nombreParticipant>0)
                        echo($LenghtBar*($ItemValue[1]/$nombreParticipant));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipant>0)//Pour �vit� les divisions par z�ros
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
                    <div style="background-color: <?php echo($CouleurBar[0]) ?>; width: <?php
                    if ($nombreParticipant>0)
                        echo($LenghtBar*($ItemValue[2]/$nombreParticipant));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipant>0)//Pour �vit� les divisions par z�ros
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
                    <div style="background-color: <?php echo($CouleurBar[1]) ?>; width: <?php
                    if ($nombreParticipant>0)
                        echo($LenghtBar*($ItemValue[3]/$nombreParticipant));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipant>0)//Pour �vit� les divisions par z�ros
                            echo(round(100*$ItemValue[3]/$nombreParticipant,$RoundNumber));
                        else
                            echo(0);
                        ?>%
                    </div>
                </td>
            </tr>
            <tr>
                <td><?php echo($Item[4]); ?></td>
                <td><?php echo($ItemValue[4]); ?></td>
                <td>
                    <div style="background-color: <?php echo($CouleurBar[0]) ?>; width: <?php
                    if ($nombreParticipant>0)
                        echo($LenghtBar*($ItemValue[4]/$nombreParticipant));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipant>0)//Pour �vit� les divisions par z�ros
                            echo(round(100*$ItemValue[4]/$nombreParticipant,$RoundNumber));
                        else
                            echo(0);
                        ?>%
                    </div>
                </td>
            </tr>
        </table>
        <a href="vote_color.php">Changer Couleurs</a><br/>
        <a href="vote.php" style="font-size: 25pt">Votez</a>
    </body>
</html>
