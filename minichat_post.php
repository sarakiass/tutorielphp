<?php
try
	{
      $bdd=new PDO ('mysql:host=localhost;dbname=chat;charset=utf8,'root','root');
	}
      catch (Exception $e)
{
      die ('Erreur:'.$e->getMessage());


$req=$bdd=prepare(INSERT INTO chat (Pseudo,Message) VALUES (:Pseudo,:Message);
$req->excute(array($_POST['Pseudo'],$_POST['Message']));
	
header('Location:minichat.php');
?>