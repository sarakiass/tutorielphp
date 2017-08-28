<!DOCTYPE html>
<html>
<head>
<meta charset=UTF_8/>
<link rel="stylesheet" href="style.css">
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
     $reponse = $bdd->query('SELECT Pseudo,Message,DATE_FORMAT(date,\'%d%m%Y a %Hh%imin%ss\') AS date_Fr FROM chat ORDER BY date_Fr DESC LIMIT 0,10');
      
     while ($donnees=$reponse->fetch())
      {
      	?>
      	 <strong><?php echo ($donnees['date_Fr']);?></strong>
      	<?php echo '<p><strong>'.htmlspecialchars($donnees['Pseudo']).'</strong>:'.htmlspecialchars($donnees['Message']).'</p>';?>
     
      <?php
      }
      	$reponse->closeCursor();
      
      ?>
      

</body>
</html>