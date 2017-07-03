<?php /* Template Name: inscription */ ?>


<?php get_header('custom'); ?>

<style>


fieldset {
  width: 50%;
  margin: 20px;
  border: 0 none;
}

legend {
  font-size: 1.6em;
  font-weight:bold;
  width: 100%;
}

fieldset div {
  margin: 4px 0;
}

input, textarea, select {
  font-size: 1em;
  padding: 2px 5px 4px;
  border: 0 none;
  border-radius: 2px;
}

/* flexbox styles */
fieldset div {
  display: flex;
  align-items: center;
}

label {
  order: 1;
  width: 10em;
  padding-right: 0.5em;
    white-space: nowrap;
  user-select: none;
  cursor: pointer;
  color:black;
}

input, textarea, select {
  order: 2;
  flex: 1 1 auto;
}

input[type="checkbox"], input[type="radio"] {
  order: 1;
  flex: none;
  width: auto;
  margin-left: 10em;
}

input[type="checkbox"] ~ label, input[type="radio"] ~ label {
  width: auto;
  text-align: left;
}

/* label state styles */

input:checked ~ label {
  font-weight: bold;
}




/* GENERAL STYLES END */


.pagenations {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
  height: 100px;
  background: transparent;
}

.pagenation {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  border: 1px solid black;
  background: white;
  margin: 0 3px;
}

.pagenation.is-active {
  background: black;
}

.block {
  background: transparent;
  position: absolute;
  transform: translateX(0);
  transition: transform 900ms;
  display: flex;
  opacity: 0;
  transition: opacity 1200ms;
  justify-content: center;
  align-items: center;
}

.block input {
  height: 30px;
  width: 200px;
  margin: 5px 0 10px 0;
  border-radius: 5px;
  border-style: none;
}

.block select
{
    display: inline-block;
    height: 30px;
  width: 200px;
  margin: 5px 0 10px 0;
  border-radius: 5px;
  border-style: none;
}

.block-01 {
  z-index: 3;
/*   transform: translateX(500px); */
}

.block-02 {
  z-index: 2;
/*   transform: translateX(500px); */
}

.block-03 {
  z-index: 1;
/*   transform: translateX(500px); */
}

.block-04 {
  z-index: 1;
/*   transform: translateX(500px); */
}

.block-04 {
  z-index: 1;
/*   transform: translateX(500px); */
}


.block.is-active {
    
    display: flex;
    z-index: 999;
    opacity: 1;
    transition: opacity 0.5s;
    animation: slide 600ms forwards;
    transform: translateX(0);
}

.button
{
    border-radius: 50px;
    float : right;
    background: #353533;
    font-family: gilroy-light;
    text-transform: capitalize;
    font-size: .85em;
}

.button:hover
{
    background:#666;
}

@keyframes slide {
  0% {
    transform: translateX(600px);
  }
  
  100% {
    transform: translateX(0);
  }
}

</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div id="bandeau-contact" class="bandeau" style="border:solid 1px black; height:350px; width:100%;margin-top:50px">
				
			</div>
			<section style="padding-top:50px">
				<div class="container" id="page-content">
        <div class="main">
          <div class="pagenations">
            <h4 style="padding-right:150px; font-weight:bold;"> Je m'inscris</h4>
            <div class="pagenation page-01 is-active"></div>
            <div class="pagenation page-02"></div>
            <div class="pagenation page-03"></div>
            <div class="pagenation page-04"></div>
            <div class="pagenation page-05"></div>
          </div>
          <div class="blocks">
          <form>
            <div class="block block-01 is-active">
              <fieldset>
                <legend>Vos Infos</legend>
                <div>
                  <input id="name" name="name" type="text" />
                  <label for="name">Nom</label>
                </div>
                <div>
                  <input id="prenom" name="prenom" type="text" />
                  <label for="prenom">Prénom</label>
                </div>

                <div>
                  <input id="birth" name="birth" type="date" />
                  <label for="birth">Date de Naissance</label>
                </div>

                <div>
                  <input id="tel" name="tel" type="tel" />
                  <label for="tel">Téléphone</label>
                </div>

                <div>
                  <input id="email" name="email" type="email" />
                  <label for="email">Email</label>
                </div>
                
                <div>
                    <select id="select-formation" name="select-formation">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="Bac +2 : Chargé Marketing Digital (Bac+2 en 1 an)">Bac +2 : Chargé Marketing Digital (Bac+2 en 1 an)</option>
                        <option value="Mastere Systeme Reseau (Bac+3/4 en 2 ans)">Mastère Système & Réseau (Bac+3/4 en 2 ans)</option>
                        <option value="Mastere Design Graphique (Bac+3/4 en 2 ans)">Mastère Design Graphique (Bac+3/4 en 2 ans)</option>
                        <option value="Mastere Developpement (Bac+3/4 en 2 ans)">Mastère Développement (Bac+3/4 en 2 ans)</option>
                        <option value="Mastere IT Manager (Bac+5 en 1 an)">Mastère IT Manager (Bac+5 en 1 an)</option>
                    </select>
                    <label for="select-formation">Choix de filière</label>
                </div>
               
                <div class="btn waves-effect waves-light btn-contact button page-02">Suivant</div>
              </fieldset>
            </div>
            <div class="block block-02">
                <fieldset>
                  <legend>Dernière formation</legend>
                  <div>
                    <input type="number" name="year" value="" id="year">
                    <label for="year">Année</label>
                  </div>
                  <div>
                    <input type="text" name="etablissement" value="" id="etablissement">
                    <label for="etablissement">Etablissement</label>
                  </div>
                  <div>
                    <input type="text" name="formation" value="" id="formation">
                    <label for="formation">Formation</label>
                  </div>
                  <div>
                    <input id="obtention" name="obtention" type="checkbox" />
                    <label for="obtention">Obtention</label>
                  </div>
                  <div class="btn waves-effect waves-light btn-contact button page-03">Suivant</div>
                </fieldset>  
            </div>
            <div class="block block-03">
              <fieldset>
                  <legend>Dernière expérience</legend>
                  <div>
                    <input type="text" name="statut" value="" id="statut">
                    <label for="statut">Statut</label>
                  </div>
                  <div>
                    <input id="experienceDate" name="experienceDate" type="date" />
                    <label for="experienceDate">Date Début</label>
                  </div>
                  <div>
                    <input type="text" name="entreprise" value="" id="entreprise">
                    <label for="entreprise">Entreprise</label>
                  </div>
                  <div>
                    <input type="text" name="poste" value="" id="poste">
                    <label for="poste">Poste</label>
                  </div>
                  <div>
                    <input type="number" name="experienceDuree" value="" id="experienceDuree">
                    <label for="experienceDuree">Durée (en semaines)</label>
                  </div>
                  <div class="btn waves-effect waves-light btn-contact button page-04">Suivant</div>
              </fieldset> 
            </div>
            <div class="block block-04">
            <fieldset>
              <legend>Comment avez-vous connu la WDS ?</legend>
                <div>
                  <input id="internet" name="internet" type="checkbox" />
                  <label for="internet">Internet</label>
                </div>
                <div>
                  <input id="Presse" name="Presse" type="checkbox" />
                  <label for="Presse">Presse</label>
                </div>
                <div>
                  <input id="Connaissances" name="Connaissances" type="checkbox" />
                  <label for="Connaissances">Connaissances</label>
                </div>
                <div id="slider">
                  <input id="Autre" name="Autre" type="checkbox" />
                  <label for="Autre">Autre</label>
                </div>
                <div id="sliding" style="display:none;">
                  <label for="autreText">Par quel moyen ?</label>
                  <input id="autreText" name="AutreText" type="text" />
                </div>
                <div class="btn waves-effect waves-light btn-contact button page-05">Suivant</div>
              </fieldset>
            </div>
            <div class="block block-05">
              <fieldset>
                  <legend>Fin</legend>
                  <div>
                      Captcha
                      Upload cv
                    </div>
                  <input class="button" type="submit" name="submit" value="submit">                  
              </fieldset> 
            </div>
          </form>
          </div>
        </div>

		</main><!-- #main -->           
		</div>
    </section>

	</div><!-- #primary -->

<?php
include('wp-content\themes\wds\inc\inscription_form.php');
get_footer();