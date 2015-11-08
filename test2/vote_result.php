<?php
$nombreParticipent = 3;
$Item = array("Chien", "Chat", "Oiseau", );
$ItemValue = array(1,2,0);
$LenghtBar = 250;
$RoundNumber = 0;
?>

<html>
    <body>
        <h1>Votre animal prefere</h1>
        <h2>Resultats obtenus pour <?php echo $nombreParticipent; ?> </h2>

        <table border="1" >
            <tr>
                <td><?php echo($Item[0]); ?></td>
                <td><?php echo($ItemValue[0]); ?></td>
                <td>
                    <div style="background-color: aquamarine; width: <?php
                    if ($nombreParticipent>0)
                        echo($LenghtBar*($ItemValue[0]/$nombreParticipent));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipent>0)//Pour évité les divisions par zéros
                            echo(round(100*$ItemValue[0]/$nombreParticipent,$RoundNumber));
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
                    <div style="background-color: aquamarine; width: <?php
                    if ($nombreParticipent>0)
                        echo($LenghtBar*($ItemValue[1]/$nombreParticipent));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipent>0)//Pour évité les divisions par zéros
                            echo(round(100*$ItemValue[1]/$nombreParticipent,$RoundNumber));
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
                    <div style="background-color: aquamarine; width: <?php
                    if ($nombreParticipent>0)
                        echo($LenghtBar*($ItemValue[2]/$nombreParticipent));
                    else
                        echo(0);
                    ?>px">
                        <?php
                        if($nombreParticipent>0)//Pour évité les divisions par zéros
                            echo(round(100*$ItemValue[2]/$nombreParticipent,$RoundNumber));
                        else
                            echo(0);
                        ?>%
                    </div>
                </td>
            </tr>
        </table>
        Couleur:
        <input type="radio" name="couleur"
            <?php if (isset($couleur) && $couleur=="rouge") echo "checked";?>
               value="rouge" onchange="onChangeRadio">Rouge
        <input type="radio" name="couleur"
            <?php if (isset($couleur) && $couleur=="bleu") echo "checked";?>
               value="bleu" onchange="onChangeRadio">Bleu
        <input type="radio" name="couleur"
            <?php if (isset($couleur) && $couleur=="clown") echo "checked";?>
               value="clown" onchange="onChangeRadio">Clown
        <br/>
        <a href="vote.php">Voter</a>
    </body>
</html>

<?php
function onChangeRadio($sender) {
echo ($sender);
}
?>