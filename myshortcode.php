<?php
/*
Plugin Name: myshortcode
Description:  add mention text with a simple shortcode [simplon]
Copyright 2019 Caumontat email:loic.caumontat@insa-rouen.fr
*/
	

function shortcode_simplon(){
	$mention = "
	<section>
		<p>Destinée aux chercheurs d’emplois en situation de reconversion, la formation <span class='gras_texte'>Référent.e Numérique Entreprise</span> prépare en 8 mois aux métiers du numérique et est couronnée par l’obtention de <span class='rouge_texte'>3 certifications.</span>
		</p>
		<p>Le métier de référent numérique consiste à accompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins. 
La formation est menée conjointement par : 
		</p>
	<ul>
		<li>l'
			<a href='https://www.insa-rouen.fr/' class='normal'>INSA</a>;
		</li>
	 	<li>le
	 		<a href='https://www.cesi.fr/' class='normal'>CESI</a>;
	 	</li>
	 	<li><a href='https://www.simplon.co/' class='normal'>Simplon.co</a>.
	 	</li>
	 </ul>
	 </section>
	<style>
.rouge_texte
{
    color:red;
}
.gras_texte
{
    font-weight: bold;
}
.normal, a:link {
  color: blue;
}
.normal, a:visited {
  color: purple;
}
.normal, a:hover {
  color: darkblue;
}
.normal, a:active {
  color: blue;
} 
	</style>";

	return $mention;
}

add_shortcode ("simplon","shortcode_simplon");

?>