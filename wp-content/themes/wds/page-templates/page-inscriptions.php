<?php /* Template Name: inscriptions */ ?>


<?php get_header(); ?>
<style>
/* some basic styling to make things pretty */
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
                        <legend>Your skillset</legend>
                        
                        <div>
                        <input id="name" name="name" type="text" />
                        <label for="name">name</label>
                        </div>
                        
                        <div>
                        <select id="experience" name="experience">
                            <option value="1">1 year or less</option>
                            <option value="2">2 years</option>
                            <option value="3">3 - 4 years</option>
                            <option value="5">5 years or more</option>
                        </select>
                        <label for="experience">experience</label>
                        </div>
                        
                        <div>
                        <input id="html" name="html" type="checkbox" />
                        <label for="html">HTML</label>
                        </div>
                        
                        <div>
                        <input id="css" name="css" type="checkbox" />
                        <label for="css">CSS</label>
                        </div>
                        
                        <div>
                        <input id="javascript" name="javascript" type="checkbox" />
                        <label for="javascript">JavaScript</label>
                        </div>
                        
                    </fieldset>
                    </form>
				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
