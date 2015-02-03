<div class="row fullWidth"> 
    <div class="large-6 medium-6 small-12 columns" id="contactform">
    	<h3>Formulaire de contact</h3>
    	<form id="formulairecontact" method="post" action="././index.php?id=contact&amp;action=send">
    		<p>
            	<input type="text" name="nom" placeholder="Nom"/><br>
            	<input type="text" name="prenom" placeholder="Prénom"/><br>
            	<input type="email" name="emailadresse" placeholder="Adresse e-mail"/><br>
            	<input type="tel" name="contacttel" placeholder="N° de téléphone"/><br>
            	<input type="text" name="subject" placeholder="Sujet"/><br>
            	<textarea name="mailcontent" id="emailcontent" placeholder="Contenu de votre e-mail"></textarea>
            	<input type="submit" name ="envoi" value="Envoyer" id="sendbutton" />
            	<input type="reset" value="Reinitialiser" id="resetbutton" />
        	</p>
    	</form>
    </div>

    <div class="large-6 medium-6 small-12 columns" id="gps">
    	<h3><span class="sprite-gps"></span>Localisation</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89077.13001931181!2d4.835120949999999!3d45.7579555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea516ae88797%3A0x408ab2ae4bb21f0!2sLyon!5e0!3m2!1sfr!2sfr!4v1421536944930" width="400" height="300" style="border:0"></iframe>
    </div>
</div>