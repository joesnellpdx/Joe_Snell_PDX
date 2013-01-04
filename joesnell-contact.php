<?php
/*
Template Name: joesnell-contact
*/

get_header(); ?>


		<section id="primary" class="site-content">
			<div id="content" role="main" class="content">
            	<div class="contact-intro">
                	<p>Do you have a great website idea?  Do you need help with your digital marketing strategy?  Do you need help maintaining your website?</p>
                    <p>Drop me a line by filling out this form, or you can reach out to me on my social channeles below.  I look forward to hearing form you!</p>
                </div>
                <div class="contact-form">
                	<div class="contact-form">
                        <form action="/scripts/contact.php" method="post">
                        <h3>Contact Me</h3>
                          <fieldset>
                          <div>
                            <label for="name">Your Name</label>
                            <input id="name" name="name" type="text" required>
                          </div>
                          <div>
                            <label for="email">E-mail</label>
                            <input id="email" name="email" type="email" placeholder="you@example.com" requird>
                            </div>
                            
                          <div>
                            <label for="message">Description of the project</label><textarea id="message" name="message" required></textarea>
                          </div>
                          </fieldset>
                          
                          <fieldset>
                          <legend>Additional Details</legend>
                          <div>
                          <label for="company">Company</label>
                          <input id="company" name="company" type="text">
                          </div>
                          <div>
                          <label for="phone">Phone</label>
                          <input id="phone" name="phone" type="tel" placeholder="+1 503 555 1212">
                          </div>
                          
                          <div>
                            <label for="url">Web site</label>
                            <input id="url" name="url" type="url" placeholder="http://www.example.com">
                          </div>
                          
                          <div>
                            <button type="submit" class="btn" id="send-contact">Send</button>
                          </div>
                          </fieldset>
                        </form>
                </div>
                <div class="contact-social">
                	<a href="https://twitter.com/#!/joesnellpdx" target="_blank"><img class="img-contact" src="/wp-content/uploads/2012/03/twitter-logo.gif" alt="twitter"></a>
                    <a href="http://www.linkedin.com/in/joesnellpdx" target="_blank"><img class="linkedin colorbox-manual" src="/wp-content/uploads/2012/03/linkedin-logo.gif" alt="twitter"></a>
                    <a href="mailto:joesnellpdx@gmail.com" target="_blank"><img class="mail colorbox-manual" src="/wp-content/uploads/2012/03/mail-logo.gif" alt="twitter"></a>
                </div>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->

		</section><!-- #primary .site-content -->


<?php get_footer(); ?>