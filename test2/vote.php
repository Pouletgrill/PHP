<?php
/**
 * Created by PhpStorm.
 * User: 201354694
 * Date: 2015-11-02
 * Time: 11:29
 */
$NBVoteMaxParPersonnes = 0;
$item;
session_start();

if (isset($_SESSION["VoteMaxPersonne"]))
{
    $NBVoteMaxParPersonnes = $_SESSION["VoteMaxPersonne"];
	echo("L:15 NbVoteMaxParPersonne créé<br>");
}
else
{header('Location: vote_result.php');}

if (!(isset($_SESSION["VoteUsager"])))
{
    $_SESSION["VoteUsager"]=0;
	echo("L:22 variable session voteusager cree <br>");
}
if (!file_exists("dataSheet"))
{header('Location: vote_result.php'); echo("L:24 dataSheet créé<br>");}

if (isset($_SESSION["Item"])){
    $Item = $_SESSION["Item"];
	echo("L:28 Item créé<br>");
}
else
{header('Location: vote_result.php');}
echo("Pret<br>");
?>
<html>
    <body>
        <h1>Votre animal prefere</h1>
        
	<?php 
		//Création des boutton
		for($l=0; $l< count($Item); $l++)
		{
			echo("
			<form method='POST' >
				<input type='submit' name='button" . $l . "'  value='" . $Item[$l] . "'>
			</form>
			");
		}
		
		//Création du listenner des bouttons
		$b_click = false;
		for($i=0; $i< count($Item) && !$b_click; $i++)
		{
			echo($i."<br>");
			if (isset($_POST["button".(string)$i]))
			{
				echo($i." X <br>");
				
				if($_SESSION["VoteUsager"]<$NBVoteMaxParPersonnes)
				{
					$_SESSION["VoteUsager"] += 1;
					//Open, read
					$Myfile1 = fopen("dataSheet","r");
					for($j=0; $j<count($Item); $j++)
					{
						$ItemValue[$j] = fgets($Myfile1);
						echo("Ligne 66: itemValue[x]:".$ItemValue[$j]."<br>");
						/*$ItemValue[1] = fgets($Myfile);
						$ItemValue[2] = fgets($Myfile);
						$ItemValue[3] = fgets($Myfile);
						$ItemValue[4] = fgets($Myfile);*/
					}
					fclose($Myfile1);
					unlink("dataSheet");
					
					//Open and overwrite
					
					$String = "";
					for($k=0; $k<count($Item); $k++)
					{
						if($i == $k)
						{
							echo("i et k ÉGAUX <br>");
							$ItemValue[$j]++;
						}
						$String = $String . (string) $ItemValue[$j] . "\n";
						//echo("Ligne 85: string valeur:".$ItemValue[$j]."<br>");
					}
					$Myfile = fopen("dataSheet","w");
					echo($String);
					fwrite($Myfile,$String);
					fclose($Myfile);
					
					
					
					
					/*$Myfile2 = fopen("dataSheet","w");
					fwrite($Myfile2,(string)($ItemValue[0]+1)."\n");
					fwrite($Myfile2,(string) $ItemValue[1]);
					fwrite($Myfile2,(string) $ItemValue[2]);
					fwrite($Myfile2,(string) $ItemValue[3]);
					fwrite($Myfile2,(string) $ItemValue[4]);
					fclose($Myfile2);*/
				}
				$b_click = true;
			}
		}
		
		
		
		
		
		
		
		
		
		
		
		/*
		if (isset($_POST['button1']))
		{
			if($_SESSION["VoteUsager"]<$NBVoteMaxParPersonnes)
			{
				$_SESSION["VoteUsager"] += 1;
				//Open, read
				$Myfile1 = fopen("dataSheet","r");
				$ItemValue[0] = fgets($Myfile1);
				$ItemValue[1] = fgets($Myfile1);
				$ItemValue[2] = fgets($Myfile1);
				$ItemValue[3] = fgets($Myfile1);
				$ItemValue[4] = fgets($Myfile1);

				fclose($Myfile1);
				unlink("dataSheet");
				//Open and overwrite
				$Myfile2 = fopen("dataSheet","w");
				fwrite($Myfile2,(string)($ItemValue[0]+1)."\n");
				fwrite($Myfile2,(string) $ItemValue[1]);
				fwrite($Myfile2,(string) $ItemValue[2]);
				fwrite($Myfile2,(string) $ItemValue[3]);
				fwrite($Myfile2,(string) $ItemValue[4]);
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
				$ItemValue[0] = fgets($Myfile1);
				$ItemValue[1] = fgets($Myfile1);
				$ItemValue[2] = fgets($Myfile1);
				$ItemValue[3] = fgets($Myfile1);
				$ItemValue[4] = fgets($Myfile1);

				fclose($Myfile1);
				unlink("dataSheet");
				//Open and overwrite
				$Myfile2 = fopen("dataSheet","w");
				fwrite($Myfile2,(string) $ItemValue[0]);
				fwrite($Myfile2,(string)($ItemValue[1]+1)."\n");
				fwrite($Myfile2,(string) $ItemValue[2]);
				fwrite($Myfile2,(string) $ItemValue[3]);
				fwrite($Myfile2,(string) $ItemValue[4]);
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
				$ItemValue[0] = fgets($Myfile1);
				$ItemValue[1] = fgets($Myfile1);
				$ItemValue[2] = fgets($Myfile1);
				$ItemValue[3] = fgets($Myfile1);
				$ItemValue[4] = fgets($Myfile1);

				fclose($Myfile1);
				unlink("dataSheet");
				//Open and overwrite
				$Myfile2 = fopen("dataSheet","w");
				fwrite($Myfile2,(string) $ItemValue[0]);
				fwrite($Myfile2,(string) $ItemValue[1]);
				fwrite($Myfile2,(string)($ItemValue[2]+1)."\n");
				fwrite($Myfile2,(string) $ItemValue[3]);
				fwrite($Myfile2,(string) $ItemValue[4]);
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
				$ItemValue[0] = fgets($Myfile1);
				$ItemValue[1] = fgets($Myfile1);
				$ItemValue[2] = fgets($Myfile1);
				$ItemValue[3] = fgets($Myfile1);
				$ItemValue[4] = fgets($Myfile1);

				fclose($Myfile1);
				unlink("dataSheet");
				//Open and overwrite
				$Myfile2 = fopen("dataSheet","w");
				fwrite($Myfile2,(string) $ItemValue[0]);
				fwrite($Myfile2,(string) $ItemValue[1]);
				fwrite($Myfile2,(string) $ItemValue[2]);
				fwrite($Myfile2,(string)($ItemValue[3]+1)."\n");
				fwrite($Myfile2,(string) $ItemValue[4]);
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
				$ItemValue[0] = fgets($Myfile1);
				$ItemValue[1] = fgets($Myfile1);
				$ItemValue[2] = fgets($Myfile1);
				$ItemValue[3] = fgets($Myfile1);
				$ItemValue[4] = fgets($Myfile1);

				fclose($Myfile1);
				unlink("dataSheet");
				//Open and overwrite
				$Myfile2 = fopen("dataSheet","w");
				fwrite($Myfile2,(string) $ItemValue[0]);
				fwrite($Myfile2,(string) $ItemValue[1]);
				fwrite($Myfile2,(string) $ItemValue[2]);
				fwrite($Myfile2,(string) $ItemValue[3]);
				fwrite($Myfile2,(string)($ItemValue[4]+1)."\n");
				fclose($Myfile2);
			}
		}
		else if (isset($_POST['RESET']))
		{
			session_destroy();
			session_unset();
		}*/
	?>
        <h2><?php echo( "Nombre de votes restent:" . ($NBVoteMaxParPersonnes - $_SESSION["VoteUsager"])); ?></h2>
        <a href="vote_result.php"><h2>Retour</h2></a>
    </body>
</html>
