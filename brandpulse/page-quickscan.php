<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brandpulse
 */

get_header();

while ( have_posts() ) : the_post(); ?> 

<div class="quickscan-main top-header-padding">
      <div class="container">
          <div class="quickscan-section-inner-cover">
            <img src="images/quick-Pattern.svg" alt="" title="" class="quickscan-pattern"/>
            <div class="quickscan-section-inner light-gray-bg">
              <div class="row">
                <div class="col-2">
                  <label>quickscan</label>
                  <h1>Optimaal resultaat behalen met jouw website?</h1>
                  <p>Wil je graag een betere vindbaarheid voor jouw website, een hogere conversie of meer bezoekers? Vraag dan nu de <strong>Quickscan</strong> van Brandpulse aan en ontvang een <strong>uitgebreid rapport</strong> met daarin verbeterpunten en kansen voor jouw website.</p>
                  <div class="quickscan-icon-caps">
                    <div class="row">
                      <div class="col-3">
                        <span><img src="images/Uitgebreid-rapport.svg" alt="" title=""/></span>
                        <label>UITGEBREID <br>RAPPORT</label>
                      </div>
                      <div class="col-3">
                        <span><img src="images/Betere-positie.svg" alt="" title=""/></span>
                        <label>BETERE POSITIE <br>IN GOOGLE</label>
                      </div>
                      <div class="col-3">
                        <span><img src="images/meer-conversie.svg" alt="" title=""/></span>
                        <label>MEER <br>CONVERSIE</label>
                      </div>
                    </div>
                  </div>
                  <p>Onze online marketingspecialist analyseert jouw website en kijkt vanuit de ogen van jouw bezoeker. Er wordt onder andere kritisch gekeken naar <strong>SEO, gebruiksvriendelijkheid en navigatiestructuur.</strong></p>
                  <p>De <strong>Quickscan van Brandpulse is kosteloos en geheel vrijblijvend.</strong> Vul het formulier in en ontvang het rapport al binnen twee werkdagen. Daarna nemen wij telefonisch contact met je op om al jouw vragen te beantwoorden. Zodat jij snel kunt beginnen met de zoekmachine- en conversieoptimalisatie!</p>
                </div>
                <div class="col-2">
                  <div class="quickscan-form">
                    <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>


<?php	endwhile; // End of the loop.?>
	

<?php 	

get_footer();
