<?php /* Template Name: inscriptions */ ?>


<?php get_header(); ?>
<style>
*, *:before, *:after {
  box-sizing: border-box;
    padding: 0;
    margin: 0;
}

body, input, textarea, select, option {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Droid Sans", "Helvetica Neue", sans-serif;
}

body {
  font-size: 125%;
  color: #333;
  background-color: #9bd;
}

fieldset {
  width: 25em;
  margin: 20px;
  border: 0 none;
}

legend {
  font-size: 1.2em;
  width: 100%;
  border-bottom: 1px dotted #99c;
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
  padding-left: 0.4em;
}

/* label state styles */
input:focus ~ label, textarea:focus ~ label, select:focus ~ label {
  color: #933;
}

input:checked ~ label {
  font-weight: bold;
}



/* Style for form*/

.pen-info {
  text-align: center;
  margin: 20px;
}

.pen-info h1 {
 text-transform: uppercase;
  margin: 0;
  padding: 0;
}

/* GENERAL STYLES END */

.main {
  height: 600px;
  width: 800px;
  overflow: hidden;
  position: relative;
  margin: 0 auto;
  border-radius: 5px;
}

.pagenations {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
  max-width: 800px;
  height: 30px;
  background: #fff;
}

.pagenation {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #f4ff81;
  margin: 0 3px;
}

.pagenation.is-active {
  background: #827717;
}

.block {
  background: #fff;
  width: 800px;
  height: 400px;
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

.block-01 {
  background: #dcedc8;
  z-index: 3;
/*   transform: translateX(500px); */
}

.block-02 {
  background: #84ffff;
  z-index: 2;
/*   transform: translateX(500px); */
}

.block-03 {
  background: #ffe0b2;
  z-index: 1;
/*   transform: translateX(500px); */
}

.block-04 {
  background: lightgreen;
  z-index: 1;
/*   transform: translateX(500px); */
}

.block-04 {
  background: lightcoral;
  z-index: 1;
/*   transform: translateX(500px); */
}


.block .button {
    display: block;
    width: 70px;
    text-align: center;
    background: #00e676;
    border: none;
    color: #fff;
    padding: 4px;
    border-radius: 5px;
    margin-top: 4px;
    cursor: pointer;
    transform: translateX(0);
    float:right;
}

.block.is-active {
    
    display: flex;
    z-index: 999;
    opacity: 1;
    transition: opacity 1s;
    animation: slide 600ms forwards;
    transform: translateX(0);
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

			<section>
				<div class="container" id="page-content">
        <div class="main">
          <div class="pagenations">
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
                  <select id="class" name="class">
                      <option value="Bac +2 : Chargé Marketing Digital (Bac+2 en 1 an)">Bac +2 : Chargé Marketing Digital (Bac+2 en 1 an)</option>
                      <option value="Mastere Systeme Reseau (Bac+3/4 en 2 ans)">Mastère Système & Réseau (Bac+3/4 en 2 ans)</option>
                      <option value="Mastere Design Graphique (Bac+3/4 en 2 ans)">Mastère Design Graphique (Bac+3/4 en 2 ans)</option>
                      <option value="Mastere Developpement (Bac+3/4 en 2 ans)">Mastère Développement (Bac+3/4 en 2 ans)</option>
                      <option value="Mastere IT Manager (Bac+5 en 1 an)">Mastère IT Manager (Bac+5 en 1 an)</option>
                  </select>
                  <label for="class">Choix de filière</label>
                </div>
                <div class="button page-02">Next</div>
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
                  <div class="button page-03">Next</div>
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
                  <div class="button page-04">Next</div>
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
                <div class="button page-05">Next</div>
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
get_footer();
