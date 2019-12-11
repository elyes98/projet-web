<?PHP
include "../core/messageCore.php";


//var_dump($listeregistres->fetchAll());
?>
<table border="1">
<tr>
<td>cinUtilisateur</td>
<td>contenu</td>
<td>date</td>
<td>source</td>


</tr>

<?PHP
foreach($listeregistres as $row){
	?>
	<tr>
	<td><?PHP echo $row['cinUtilisateur']; ?></td>
	<td><?PHP echo $row['contenu']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['source']; ?></td>

	
	<td><form method="POST" action="supprimerdate.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cinUtilisateur']; ?>" name="cinUtilisateur">
	</form>
	</td>

	</tr>
	<?PHP
}
?>
</table>

