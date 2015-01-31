<?php snippet('html-header') ?>
<?php snippet('hero') ?>

<section class="content-section content-section--contact">
    <div class="margin-container">

        <form action="process-email.php" method="POST" id="contact-form">
        	<input type="text" class="contact-form--firstname" name="firstname" placeholder="First Name" required>
        	<input type="text" class="contact-form--lastname" name="lastname" placeholder="Last Name" required> 
        	<input type="email" class="contact-form--email" name="email" placeholder="Email" required>
        	<textarea class="contact-form--message" name="message" placeholder="<?= html( $page->textarea_placeholder() ) ?>"></textarea>

        	<button type="submit">Send Message</button>
        </form>

        <?= kirbytext( $page->text() ) ?>
    </div>
</section>

<?php snippet('footer') ?>
<?= js('assets/js/contact.js')  ?>
<?php snippet('html-footer') ?>