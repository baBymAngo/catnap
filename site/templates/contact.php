<?php snippet('html-header') ?>
<?php snippet('hero') ?>

<main id="main" class="content">

	<section class="content-section">
        <div class="margin-container">
            <?= kirbytext( $page->text() ) ?>

            <form action="process-email.php" method="POST" id="contact-form">
            	<input type="text" class="first-name" name="first-name" placeholder="First Name" required>
            	<input type="text" class="last-name" name="last-name" placeholder="Last Name" required> 
            	<input type="email" class="email" name="email" placeholder="Email" required>
            	<textarea class="message" name="message" placeholder="Message" style="display: block"></textarea>

            	<button type="submit">Send Message</button>
            </form>
        </div>
    </section>

</main>

<?php snippet('footer') ?>
<?= js('assets/js/contact.js')  ?>
<?php snippet('html-footer') ?>