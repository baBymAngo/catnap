<?php snippet('html-header') ?>

<div class="wrapper">
	<div class="hero">
		<?php snippet('header') ?>
	</div>

	<section>
        <h1 class="section-title">Services</h1>
        <ul class="services-list">
            <?php $services = $pages->find('services')->children()  ?>
            <?php foreach( $services as $service ): ?>
                <li class="list-item">
                    <a href="#">
                        <i style="color: black; position: relative; left: 50%; -webkit-transform: translateX(-50%); margin-bottom: 25px;" class="fa fa-3x fa-file-image-o large-text-center"></i>
                        <h3><?= $service->title() ?></h3>
                    </a>
                    <p><?= $service->blurb() ?></p>
                </li>
            <?php endforeach ?>
        </ul>
    </section>

    <section class="social-footer">
        <div class="instagram-wrapper">
            <div id="instagram"></div>
             <div class="overlay"></div>
        </div>  
    </section>
</div>

<script src="assets/js/instafeed.min.js"></script>
<script src="assets/js/home.js"></script>

<?php snippet('footer') ?>
<?php snippet('html-footer') ?>