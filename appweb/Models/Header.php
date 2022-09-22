<header class="container-fluid" style="background-image:url(<?= $url_images;?>/<?= $backgroundJumbtoron ?>)" data-aos="fade-in">
    <div class="container pt-5 px-0 px-sm-2">
        <div class="row justify-content-between mt-5 pt-lg-2">
            <div class="col-lg-7 col-xl-6 my-auto py-5 text-light" data-aos="fade-in" data-aos-duration="2000">
                <div class="text-jumbotron fw-bolder text-display text-center text-lg-start mt-3">
                    <p class="my-0">LIVE YOUR</p>
                    <p class="text-orange my-0">ADVENTURE</p>
                </div>
                <img src="<?= $url_images; ?>/examples/<?= $imgJumbotron; ?>" title="<?= $imgJumbotron; ?>" alt="Gambar <?= $imgJumbotron; ?>" class="w-100 d-inline-block d-lg-none p-3 p-md-5">
                <h5 class="my-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia consequuntur laboriosam, quidem esse quasi minima debitis asperiores totam dolore tempora tempore enim voluptates eius accusamus magnam quisquam illo recusandae earum!</h5>
                <form  action="#" class="bg-blur p-2 d-flex justify-content-around rounded-5 shadow mb-5">
                    <div class="d-flex">
                        <i class="fa fa-location-dot my-auto fs-3 pe-2"></i>
                        <div class="d-grid">
                            <span>Location <i class="fa fa-chevron-down text-orange fs-6"></i></span>
                            <div class="select-custom">
                                <select class="fw-bold text-white" aria-label="#">
                                    <option class="select-value" value="1">Bandung</option>
                                    <option class="select-value" value="2">Jakarta</option>
                                    <option class="select-value" value="3">Yogyakarta</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <i class="fa fa-calendar my-auto fs-3 pe-2"></i>
                        <div class="d-grid">
                            <span>Date <i class="fa fa-chevron-down text-orange fs-6"></i></span>
                            <input class="input-date fw-bold" type="date" >
                        </div>
                    </div>

                    <input class="btn bg-orange-gradient h-50 px-4 my-auto text-white fw-bold" type="submit" value="Search">
                </form>
            </div>
            <div class="col-lg-5 col-xl-6 my-auto mb-0 text-center" data-aos="fade-in" data-aos-duration="2000">
                <img src="<?= $url_images; ?>/examples/<?= $imgJumbotron; ?>" title="<?= $imgJumbotron; ?>" class="w-100 d-none d-lg-inline-block">
            </div>
        </div>
    </div>
</header>