<!DOCTYPE html>
<html>
<head>
<meta charset=UTF_8/>
<link rel="stylecheet" href="style.css"/>
<title>le minichat</title>
</head>
<body>
	<h2>Conversation</h2>
    <form method="POST" action="minichat_post.php">
	<p>
	<label for="Pseudo">Pseudo:</label> <input type="text" name="Pseudo" id="Pseudo"/><br/>
	<label for="Message">Message:</label> <textarea name="Message" id="Message"></textarea> <br/>
	<input type="submit" value="Envoyer"/>
	</p>
	</form>
	<?php
	try
	{
      $bdd=new PDO ('mysql:host=localhost;dbname=minichat;charset=utf8','root','');
	}
      catch(Exception $e)
{
      die ('Erreur:'.$e->getMessage());
}
      $req = $bdd->prepare('SELECT Pseudo,Message FROM chat');

      while ($donnees=$req->fetch())
      {
      echo '<p><strong>'.htmlspecialchars($donnees['Pseudo']).'</strong>:'.htmlspecialchars($donnees['message']).'</p>';
      }
      $req->closeCursor();
?>







</body>
</html>