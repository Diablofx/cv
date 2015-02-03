<h3>Presentation</h3>
<form id="formulairepresentationtxt" method="post" action="index.php?id=admin-upload">
	<p>
    	<textarea name="homecontent" id="homeprez" placeholder="Contenu de la presentation"></textarea>
    	<input type="submit" name ="envoi" value="Envoyer" id="adminsend" />
    	<input type="reset" value="Reinitialiser" id="adminreset" />
	</p>
</form>

<h3>Image Home</h3>
<form id="formulaireimg1" method="post" action="index.php?id=img1-upload" enctype="multipart/form-data">
	<p>
		<input type="file" name="imgup"/>
    	<input type="text" name="img1name" placeholder="Nom du fichier (a-z & 0-9)"/>
    	<input type="text" name="img1alt" placeholder="ALT"/>
    	<input type="submit" name ="envoi" value="Envoyer" class="adminsend" />
    	<input type="reset" value="Reinitialiser" class="adminreset" />
	</p>
</form>

<h3>Image Presentation</h3>
<form id="formulaireimg2" method="post" action="index.php?id=img2-upload" enctype="multipart/form-data">
	<p>
		<input type="file" name="img2up"/>
    	<input type="text" name="img2name" placeholder="Nom du fichier (a-z & 0-9)"/>
    	<input type="text" name="img2alt" placeholder="ALT"/>
    	<input type="submit" name ="envoi" value="Envoyer" class="adminsend" />
    	<input type="reset" value="Reinitialiser" class="adminreset" />
	</p>
</form>
