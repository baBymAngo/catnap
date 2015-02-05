<?php snippet('html-header') ?>
<?php snippet('hero') ?>

<section class="content-section content-section--contact">
    <div class="margin-container">
    	<div class="section-header">
			<h2><?= $page->title() ?></h2>			
			<?= kirbytext( $page->text() ) ?>
		</div>

        <form action="process-email.php" method="POST" id="contact-form" class="contact-form">
        	<input type="text" class="contact-form--firstname" name="firstname" placeholder="First Name">
        	<input type="text" class="contact-form--lastname" name="lastname" placeholder="Last Name"> 
        	<input type="email" class="contact-form--email" name="email" placeholder="Email">
        	<textarea class="contact-form--message" name="message" placeholder="<?= html( $page->textarea_placeholder() ) ?>"></textarea>

        	<button type="submit" class="btn contact-form--submit">Send Message</button>
        </form>

    </div>
</section>

<?php snippet('footer') ?>
<?= js('assets/js/contact.js')  ?>
<?php snippet('html-footer') ?>