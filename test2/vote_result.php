<?php
//Initialisation des variable
$TitreSondage = "Votre Animal Préférer";
$NBVoteMaxParPersonnes = 20;

$nombreParticipant = 0;
$Item = array("Chien", "Dragon deau", "Tigre", "Tortue","Gazelle", "Sanglier", "Lion",
			  "Cigogne", "Palourde", "Poulpe");
$NbItem = count($Item);
$ItemValue = array_fill(0,$NbItem,0);/*array(0,0,0,0,0);*/
$LenghtBar = 500;
$RoundNumber = 0;

//défini le nombre d'élément dans la session
session_start();
if (!(isset($_SESSION["Item"])))
{
    $_SESSION["Item"] = $Item;
}
if (!(isset($_SESSION["VoteMaxPersonne"])))
{
    $_SESSION["VoteMaxPersonne"] = $NBVoteMaxParPersonnes;
}

//Lecture Fichier
if (file_exists("dataSheet")) //si le txt existe, on va chercher les valeur a l'int�rieur pour les utiliser
{
    $Myfile = fopen("dataSheet","r");
	//va chercher les valeurs du fichier
    for($i=0; $i<$NbItem; $i++)
	{
		$ItemValue[$i] = fgets($Myfile);
		$nombreParticipant += $ItemValue[$i];//pour savoir le NB total de votes
	}
	fclose($Myfile);
}
else//sinon, on l'initialise
{
	$Myfile = fopen("dataSheet","w");
    for($i=0; $i<$NbItem; $i++)
	{
		fwrite($Myfile,"0\n");
	}
	fclose($Myfile);
}

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
    $CouleurBar = Array("#0099ff", "#0066FF");//bleu
} else if ($couleurIndex == 3) {
    $CouleurBar = Array("#12700f", "#00BB00");//vert
}
?>

<html>
    <body>
        <?php echo("<h1>" . $TitreSondage . "</h1>"); ?>
        <h2>Resultats obtenus pour <?php echo $nombreParticipant; ?> Participant(s)</h2>
        <table border="10" >
            
		  <?php
		for ($i=0; $i<$NbItem; $i++)
		{
		echo("
			<tr>
                <td>" . $Item[$i] . "</td>
                <td>" . $ItemValue[$i] . "</td>
                <td>
                    <div style='background-color: ". $CouleurBar[$i%2] . "; width: ");
                    if ($nombreParticipant>0)
                        echo($LenghtBar*($ItemValue[$i]/$nombreParticipant));
                    else
                        echo(0);
                    echo("px'>");
                        
                        if($nombreParticipant>0)//Pour �vit� les divisions par z�ros
                            echo(round(100*$ItemValue[$i]/$nombreParticipant,$RoundNumber));
                        else
                            echo(0);
                        echo("
                    </div>
                </td>
            </tr>
			"); 
		}	
?>	
			
        </table>
        <a href="vote_color.php">Changer Couleurs</a><br/>
        <a href="vote.php" style="font-size: 25pt">Votez</a>
    </body>
</html>
