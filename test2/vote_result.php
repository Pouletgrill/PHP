<?php $longeur = "100px";
$pourcentage = "57%";
$nombreParticipent = 0;
?>

<html>
    <body>
        <h1>Votre animal prefere</h1>
        <h2>Resultats obtenus pour <?php echo $nombreParticipent; ?> </h2>

        <table border="0" >
            <tr>
                <td>Chien</td>
                <td>1</td>
                <td>
                    <div style="background-color: aquamarine; width: 25px">25%</div>
                </td>
            </tr>
            <tr>
                <td>Chat</td>
                <td>1</td>
                <td>
                    <div style="background-color: chartreuse; width: 80px">80%</div>
                </td>
            </tr>
            <tr>
                <td>Oiseau</td>
                <td>0</td>
                <td>
                    <div style="background-color: blueviolet; width: 100px">100%</div>
                </td>
            </tr>
        </table>
    </body>
</html>