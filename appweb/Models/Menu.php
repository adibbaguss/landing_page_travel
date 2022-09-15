<nav id="navbar_top" class="container-fluid position-fixed fixed-top navbar navbar-expand-lg bg-blur navbar-dark py-3" data-aos="fade-down">
    <div class="container px-0 px-sm-2">
        <a class="navbar-brand" href="<?= $base_url; ?>">
          	<img src="<?= $url_images; ?>/<?= $logoMobile ?>" title="<?= $judulLogoMobile; ?>" alt="Gambar <?= $judulLogoMobile; ?>" id="navbar_brand" class="navbar-brand-40">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <hr class="border border-white d-block d-lg-none">
            <ul class="navbar-nav">
                <li class="nav-item">
	            	<a class="nav-link <?php if($_GET['module']=='dicover'){ echo 'active'; } ?>" aria-current="page" href="<?= $base_url ?>/discover" title="DISCOVER">
	            		Discover 
					</a>
				</li>
                <li class="nav-item">
                    <a class="nav-link <?php if($_GET['module']=='services'){ echo 'active'; } ?>" aria-current="page" href="<?= $base_url ?>/services" title="SERVICE">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if($_GET['module']=='Communtiy'){ echo 'active'; } ?>" aria-current="page" href="<?= $base_url ?>/community" title="COMMUNITY">community</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if($_GET['module']=='About-us'){ echo 'active'; } ?>" href="<?= $base_url ?>/about-us" title="ABOUT US">About Us</a>
                </li>


                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link <?php if($_GET['module']=='Login'){ echo 'active'; } ?>" href="<?= $base_url ?>/login" title="Login">Login</a>
                </li>

	        	<div class="nav-item my-2 d-block d-lg-none">
					<a target="_blank" href="#"  class="btn bg-orange text-white fw-bolder" aria-current="page" title="Register">Register</a>
				</div>
            </ul>
        </div>
        <div class="justify-content-end d-none d-lg-block">
            <div class="nav-item">
                <a class="nav-link <?php if($_GET['module']=='Login'){ echo 'active'; } ?> text-white" href="<?= $base_url ?>/login" title="Login">Login</a>
            </div>
	    </div>
        <div class="justify-content-end d-none d-lg-block">
            <div class="nav-item">
                <a target="_blank" href="#"  class="btn bg-orange text-white fw-bolder" aria-current="page" title="Register">Register</a>
			</div>
	    </div>
    </div>
</nav>