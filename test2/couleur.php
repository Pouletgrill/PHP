<?php
/**
 * Created by PhpStorm.
 * User: 201354694
 * Date: 2015-11-02
 * Time: 11:29
 */
?>
<html>
<body>
<form method="POST" action=''>
    <input type="submit" name="button1"  value="My Button">
</form>
<?php
if (isset($_POST['button1']))
{
    echo "button 1 has been pressed";

}
?>
<a href="vote_result.php">Retour</a>
</body>
</html>
