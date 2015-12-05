<?php
$target_dir = "./Images/";
$target_file = $target_dir . basename($_FILES["fichier"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fichier"]["tmp_name"]);
    if($check !== false) {
        echo "Le fichier est une image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Le fichier n'est pas une image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "D�sol�. Ce fichier existe d�j�.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fichier"]["size"] > 4000000) {
    echo "D�sol�. Ce ficier est trop large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "D�sol�. Seulement les fichiers JPG, JPEG, PNG & GIF sont accept�s.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "D�sol�. Votre fichier n'as pas �t� t�l�vers�.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file)) {
        echo "Le fichier ". basename( $_FILES["fichier"]["name"]). " a �t� t�l�vers�.";
    } else {
        echo "D�sol�. Il y a eu un erreur avec le fichier.";
    }
}
?>
<br>
<form action="index.php" method="post">
<input type="submit" value="Retour � l'accueil">
