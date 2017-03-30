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
  text-align: right;
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
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section>
				<div class="container" id="page-content">
                    <form action="get">
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
                    </fieldset>
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
                    </fieldset>  

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
                          <label for="experienceDuree">Durée</label>
                        </div>
                    </fieldset> 

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

                          <div>
                          <input id="Autre" name="Autre" type="checkbox" />
                          <label for="Autre">Autre</label>
                          <input id="Autre" name="Autre" type="text" />
                          </div>
                    </fieldset>
                    <div>
                      Captcha
                    </div>
                </form>
				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
