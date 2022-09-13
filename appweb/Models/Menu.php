<header class="container-fluid bg-primary d-none d-lg-block">
	<div class="container px-0 px-sm-2" data-aos="fade-in" data-aos-duration="2000">
		<div class="row justify-content-between py-2">
			<div class="col-auto">
		    	<a class="link-light m-1 <?php if($_GET['module']=='bantuan'){ echo 'active'; } ?>" href="<?= $base_url ?>/bantuan" title="Halaman Bantuan"><i class="fa-solid fa-headset"></i> Bantuan</a>
		    	<a class="link-light m-1 <?php if($_GET['module']=='pembayaran'){ echo 'active'; } ?>" href="<?= $base_url ?>/pembayaran" title="Halaman Pembayaran"><i class="fa-solid fa-credit-card"></i> Pembayaran</a>
		    	<a class="link-light m-1 <?php if(($_GET['module']=='blog') OR ($_GET['module']=='blog-kategori') OR ($_GET['module']=='blog-detail')){ echo 'active'; } ?>" href="<?= $base_url ?>/blog" title="Halaman Blog"><i class="fa-solid fa-newspaper"></i> Blog</a>
		    	<a class="link-light m-1 <?php if(($_GET['module']=='promo') OR ($_GET['module']=='promo-detail')){ echo 'active'; } ?>" href="<?= $base_url ?>/promo" title="Halaman Promo"><i class="fa-solid fa-bullhorn"></i> Promo</a>
			</div>

			<div class="col-auto">
		    	<a class="link-light m-1 <?php if(($_GET['module']=='penawaran') OR ($_GET['module']=='penawaran-detail')){ echo 'active'; } ?>" href="<?= $base_url ?>/penawaran" title="Halaman Penawaran"><i class="fas fa-user-tag"></i> Penawaran</a>
		    	<a class="link-light m-1 <?php if($_GET['module']=='klien-kami'){ echo 'active'; } ?>" href="<?= $base_url ?>/klien-kami" title="Halaman Klien Kami"><i class="fa-solid fa-user-group"></i> Klien Kami</a>
		    	<a class="link-light m-1 <?php if($_GET['module']=='kerja-sama'){ echo 'active'; } ?>" href="<?= $base_url ?>/kerja-sama" title="Halaman Kerja Sama"><i class="fa-solid fa-user-tie"></i> Kerja Sama</a>
			</div>
		</div>
	</div>
</header>

<nav id="navbar_top" class="container-fluid sticky-top navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container px-0 px-sm-2" data-aos="fade-in" data-aos-duration="2000">
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
	            	<a class="nav-link <?php if($_GET['module']=='promo-umkm'){ echo 'active'; } ?>" aria-current="page" href="<?= $base_url ?>/promo-umkm" title="PROMO UMKM">
	            		PROMO UMKM <span class="badge bg-success">Hot</span>
					</a>
				</li>
                <li class="nav-item">
                    <a class="nav-link <?php if($_GET['module']=='web-gratis'){ echo 'active'; } ?>" aria-current="page" href="<?= $base_url ?>/web-gratis" title="WEB GRATIS">WEB GRATIS <span class="badge bg-warning">New</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if(($_GET['module']=='arpateam-daftar-harga') OR ($_GET['module']=='daftar-harga-layanan') OR ($_GET['module']=='detail-daftar-harga-layanan')){ echo 'active'; } ?>" href="<?= $base_url ?>/daftar-harga-jasa-pembuatan-website" title="DAFTAR HARGA" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        DAFTAR HARGA
                    </a>
                    <ul class="dropdown-menu fade-up shadow navbar-nav-scroll overflow-auto text-wrap" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="me-1"><i class="fa-brands fa-docker"></i></span> Landing Page
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="me-1"><i class="fa-brands fa-docker"></i></span> Website Tour & Travel
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="me-1"><i class="fa-brands fa-docker"></i></span> Website Perusahaan
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($_GET['module']=='portofolio'){ echo 'active'; } ?>" href="<?= $base_url ?>/portofolio" title="PORTOFOLIO">PORTOFOLIO</a>
                </li>
                <li class="nav-item dropdown d-block d-lg-none">
                    <a class="nav-link dropdown-toggle <?php if(($_GET['module']=='tentang-kami') OR ($_GET['module']=='kontak-kami') OR ($_GET['module']=='bantuan') OR ($_GET['module']=='pembayaran') OR ($_GET['module']=='blog') OR ($_GET['module']=='promo') OR ($_GET['module']=='penawaran') OR ($_GET['module']=='klien-kami') OR ($_GET['module']=='kerja-sama') OR ($_GET['module']=='karir-arpateam') OR ($_GET['module']=='syarat-dan-ketentuan')){ echo 'active'; } ?>" href="<?= $base_url ?>/daftar-harga" title="DAFTAR HARGA" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        INFORMASI
                    </a>
                    <ul class="dropdown-menu fade-up shadow navbar-nav-scroll overflow-auto text-wrap" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item <?php if($_GET['module']=='tentang-kami'){ echo 'active'; } ?>" href="<?= $base_url ?>/tentang-kami"><span class="me-1"><i class="fa-regular fa-address-card"></i></span> Tentang Kami</a></li>
                        <li><a class="dropdown-item <?php if($_GET['module']=='kontak-kami'){ echo 'active'; } ?>" href="<?= $base_url ?>/kontak-kami"><span class="me-1"><i class="fa-solid fa-phone"></i></span> Kontak Kami</a></li>
                        <li><a class="dropdown-item <?php if($_GET['module']=='bantuan'){ echo 'active'; } ?>" href="<?= $base_url ?>/bantuan"><span class="me-1"><i class="fa-solid fa-headset"></i></span> Bantuan</a></li>
                        <li><a class="dropdown-item <?php if($_GET['module']=='pembayaran'){ echo 'active'; } ?>" href="<?= $base_url ?>/pembayaran"><span class="me-1"><i class="fa-solid fa-credit-card"></i></span> Pembayaran</a></li>
                        <li><a class="dropdown-item <?php if($_GET['module']=='blog'){ echo 'active'; } ?>" href="<?= $base_url ?>/blog"><span class="me-1"><i class="fa-solid fa-newspaper"></i></span> Blog</a></li>
                        <li><a class="dropdown-item <?php if($_GET['module']=='promo'){ echo 'active'; } ?>" href="<?= $base_url ?>/promo"><span class="me-1"><i class="fa-solid fa-bullhorn"></i></span> Promo</a></li>
                        <li><a class="dropdown-item <?php if($_GET['module']=='penawaran'){ echo 'active'; } ?>" href="<?= $base_url ?>/penawaran"><span class="me-1"><i class="fa-solid fa-file-signature"></i></span> Penawaran</a></li>
                        <li><a class="dropdown-item <?php if($_GET['module']=='klien-kami'){ echo 'active'; } ?>" href="<?= $base_url ?>/klien-kami"><span class="me-1"><i class="fa-solid fa-user-group"></i></span> Klien Kami</a></li>
                        <li><a class="dropdown-item <?php if($_GET['module']=='kerja-sama'){ echo 'active'; } ?>" href="<?= $base_url ?>/kerja-sama"><span class="me-1"><i class="fa-solid fa-user-tie"></i></span> Kerja Sama</a></li>
                        <li><a class="dropdown-item <?php if($_GET['module']=='karir-arpateam'){ echo 'active'; } ?>" href="<?= $base_url ?>/karir-arpateam"><span class="me-1"><i class="fa-solid fa-briefcase"></i></span> Karir</a></li>
                        <li><a class="dropdown-item <?php if($_GET['module']=='syarat-dan-ketentuan'){ echo 'active'; } ?>" href="<?= $base_url ?>/syarat-dan-ketentuan"><span class="me-1"><i class="fa-regular fa-file-lines"></i></span> Syarat & Ketentuan</a></li>
                    </ul>
                </li>
	        	<div class="nav-item my-2 d-block d-lg-none">
	            	<a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $nomorWhatsApp ?>&text=Halo%20%23ARPATEAM..." class="btn btn-warning fw-bolder" aria-current="page" title="KONSULTASI SEKARANG">
					  	<i class="fa-solid fa-phone"></i> KONSULTASI SEKARANG
					</a>
				</div>
            </ul>
        </div>

        <div class="justify-content-end d-none d-lg-block">
        	<div class="nav-item">
            	<a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $nomorWhatsApp ?>&text=Halo%20%23ARPATEAM..."  class="btn btn-warning fw-bolder" aria-current="page" title="KONSULTASI">
				  	<i class="fa-solid fa-phone"></i> <span class="d-lg-none d-xl-inline">KONSULTASI</span>
				</a>
			</div>
	    </div>
    </div>
</nav>