<?php
try
	{
     $bdd=new PDO ('mysql:host=localhost;dbname=minichat;charset=utf8','root','');
	}
      catch (Exception $e)
{
      die ('Erreur:'.$e->getMessage());
  }

 $req=$bdd->prepare('INSERT INTO chat(Pseudo, Message, date) VALUES(?,?, NOW()) ORDER BY date DESC');

 $req->execute(array($_POST['ID'],$_POST['Pseudo'],$_POST['Message'],$_POST['date']));
 

	
header('Location:minichat.php');
?>
 
