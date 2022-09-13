 <section class="container bg-container">
    <div class="card bg-primary-transparent my-5 px-3 px-lg-5 py-5">
        <div class="row justify-content-between">
            <div class="col-lg-8 my-auto text-center text-lg-start" data-aos="fade-in" data-aos-duration="2000">
                <h3 class="fw-bold text-light">Konsultasikan Website Impian Anda Kepada TIM Profesional Kami</h3>
            </div>
            <div class="col-lg-4 my-auto text-center text-lg-end" data-aos="fade-in" data-aos-duration="5000">
                <a role="button" target="_blank" href="https://api.whatsapp.com/send?phone=<?= $nomorWhatsApp ?>&text=Halo%20%23ARPATEAM..."  title="Konsultasi Gratis Dengan Tim Profesional #ARPATEAM" class="btn btn-lg btn-warning"><i class="fa-brands fa-whatsapp"></i> <?= $nomorWhatsApp ?></a>
            </div>
        </div>
    </div>
</section>

<footer class="container-fluid bg-dark py-5">
    <div class="container px-0 px-sm-2 text-muted">
    	<div class="row justify-content-between">
    		<div class="col-md-7 col-lg-4" data-aos="fade-in" data-aos-duration="2000">
    			<h4 class="mb-3 mb-lg-4 text-light">Lokasi Kantor</h4>

    			<h5 class="text-light">KANTOR #ARPATEAM</h5>
    			<p><?= $alamat ?></p>

    			<?= $googleMaps ?>
    		</div>
    		<div class="col-md-5 col-lg-3 mt-4 mt-md-0" data-aos="fade-in" data-aos-duration="2000">
    			<h4 class="mb-3 mb-lg-4 text-light">Layanan Kami</h4>

    			<p class="lh-lg">
		            <a href="<?= $base_url ?>/promo-umkm" class="link-light-footer"><i class="fa-solid fa-angle-right"></i> Promo UMKM</a>
		            <br />
		            <a href="<?= $base_url ?>/web-gratis" class="link-light-footer"><i class="fa-solid fa-angle-right"></i> Web Gratis</a>
		        </p>
    		</div>
    		<div class="col-sm-6 col-md-7 col-lg-2 mt-4 mt-lg-0" data-aos="fade-in" data-aos-duration="2000">
    			<h4 class="mb-3 mb-lg-4 text-light">Informasi</h4>

                <div class="row">
                    <div class="col-6 col-sm-12 col-md-6 col-lg-12">
                        <p class="lh-lg mb-0">
                            <a href="<?= $base_url ?>/tentang-kami" class="link-light-footer <?php if($_GET['module']=='tentang-kami'){ echo 'active'; } ?>"><i class="fa-solid fa-angle-right"></i> Tentang Kami</a>
                            <br />

                            <a href="<?= $base_url ?>/kontak-kami" class="link-light-footer <?php if($_GET['module']=='kontak-kami'){ echo 'active'; } ?>"><i class="fa-solid fa-angle-right"></i> Kontak Kami</a>
                            <br />

                            <a href="<?= $base_url ?>/bantuan" class="link-light-footer <?php if($_GET['module']=='bantuan'){ echo 'active'; } ?>"><i class="fa-solid fa-angle-right"></i> Bantuan</a>
                            <br />

                            <a href="<?= $base_url ?>/pembayaran" class="link-light-footer <?php if($_GET['module']=='pembayaran'){ echo 'active'; } ?>"><i class="fa-solid fa-angle-right"></i> Pembayaran</a>
                            <br />

                            <a href="<?= $base_url ?>/blog" class="link-light-footer <?php if($_GET['module']=='blog'){ echo 'active'; } ?>"><i class="fa-solid fa-angle-right"></i> Blog</a>
                            <br />

                            <a href="<?= $base_url ?>/promo" class="link-light-footer <?php if($_GET['module']=='promo'){ echo 'active'; } ?>"><i class="fa-solid fa-angle-right"></i> Promo</a>
                            <br />
                        </p>
                    </div>
                    <div class="col-6 col-sm-12 col-md-6 col-lg-12">
                        <p class="lh-lg mb-0">
                            <a href="<?= $base_url ?>/penawaran" class="link-light-footer <?php if($_GET['module']=='penawaran'){ echo 'active'; } ?>"><i class="fa-solid fa-angle-right"></i> Penawaran</a>
                            <br />

                            <a href="<?= $base_url ?>/klien-kami" class="link-light-footer <?php if($_GET['module']=='klien-kami'){ echo 'active'; } ?>"><i class="fa-solid fa-angle-right"></i> Klien Kami</a>
                            <br />

                            <a href="<?= $base_url ?>/kerja-sama" class="link-light-footer <?php if($_GET['module']=='kerja-sama'){ echo 'active'; } ?>"><i class="fa-solid fa-angle-right"></i> Kerja Sama</a>
                            <br />

                            <a href="<?= $base_url ?>/karir-arpateam" class="link-light-footer <?php if($_GET['module']=='karir-arpateam'){ echo 'active'; } ?>"><i class="fa-solid fa-angle-right"></i> Karir</a>
                            <br />

                            <a href="<?= $base_url ?>/syarat-dan-ketentuan" class="link-light-footer <?php if($_GET['module']=='syarat-dan-ketentuan'){ echo 'active'; } ?>"><i class="fa-solid fa-angle-right"></i> Syarat & Ketentuan</a>
                        </p>
                    </div>
                </div>
    		</div>
    		<div class="col-sm-6 col-md-5 col-lg-3 mt-4 mt-lg-0" data-aos="fade-in" data-aos-duration="2000">
    			<h4 class="mb-3 mb-lg-4 text-light">Kontak Kami</h4>

	            <a href="tel:<?= $nomorTelpSms ?>" class="link-light-footer"><i class="fa-solid fa-phone"></i> <?= $nomorTelpSms ?></a>
	            <br />

	            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $nomorWhatsApp ?>&text=Halo%20%23ARPATEAM..." class="link-light-footer"><i class="fa-brands fa-whatsapp"></i> <?= $nomorWhatsApp ?></a>

	            <br />
	            <a href="mailto:<?= $email ?>" class="link-light-footer"><i class="fa-solid fa-envelope"></i> <?= $email ?></a>

	            <br /><br />
	            <a target="_blank" role="button" href="<?= $linkInstagram ?>" title="Instagram" class="btn btn-sm btn-outline-light"><i class="fa-brands fa-instagram"></i></a>
	            <a target="_blank" role="button" href="<?= $linkFacebook ?>" title="Facebook" class="btn btn-sm btn-outline-light"><i class="fa-brands fa-facebook-f"></i></a>
	            <a target="_blank" role="button" href="<?= $linkTikTok ?>" title="TikTok" class="btn btn-sm btn-outline-light"><i class="fa-brands fa-tiktok"></i></a>
	            <a target="_blank" role="button" href="<?= $linkYouTube ?>" title="YouTube" class="btn btn-sm btn-outline-light"><i class="fa-brands fa-youtube"></i></a>
	            <a target="_blank" role="button" href="<?= $LinkedIn ?>" title="LinkedIn" class="btn btn-sm btn-outline-light"><i class="fa-brands fa-linkedin-in"></i></a>

	            <p class="mt-4">Silakan hubungi kami melalui Alamat dan Info yang tertera. Kami akan segera membaca dan membalas setiap pesan yang masuk.</p>

	            <p class="mt-4">Atau kunjungi halaman <a href="<?= $base_url ?>/kontak-kami" class="link-light-footer"><u>Kontak Kami</u></a> untuk informasi lengkap</p>
    		</div>
    	</div>
    </div>
</footer>

<section class="container-fluid bg-dark py-4 border-top border-secondary">
    <div class="container px-0 px-sm-2">
    	<div class="row justify-content-center">
            <div class="col-2 col-lg-1 my-auto">
                <img src="https://www.arpateam.com/assets/files/images/metode-pembayaran/dana-aldi-febriyanto.png" alt="Pembayaran Via" class="img-fluid my-1">
            </div>
            <div class="col-2 col-lg-1 my-auto">
                <img src="https://www.arpateam.com/assets/files/images/metode-pembayaran/dana-aldi-febriyanto.png" alt="Pembayaran Via" class="img-fluid my-1">
            </div>
            <div class="col-2 col-lg-1 my-auto">
                <img src="https://www.arpateam.com/assets/files/images/metode-pembayaran/dana-aldi-febriyanto.png" alt="Pembayaran Via" class="img-fluid my-1">
            </div>
            <div class="col-2 col-lg-1 my-auto">
                <img src="https://www.arpateam.com/assets/files/images/metode-pembayaran/dana-aldi-febriyanto.png" alt="Pembayaran Via" class="img-fluid my-1">
            </div>
            <div class="col-2 col-lg-1 my-auto">
                <img src="https://www.arpateam.com/assets/files/images/metode-pembayaran/dana-aldi-febriyanto.png" alt="Pembayaran Via" class="img-fluid my-1">
            </div>
    	</div>
    </div>
    <div class="container mt-4 px-0 px-sm-2 text-center text-muted">
    	<span>Copyright &copy; 2018-<?= date("Y") ?> <a href="<?= $base_url ?>" title="Website #ARPATEAM" class="link-light-footer">#ARPATEAM</a> All right reserved.</span>
    </div>
</section>