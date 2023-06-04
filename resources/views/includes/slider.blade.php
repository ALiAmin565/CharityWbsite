<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('imagesfb/'.$SliderImages->imageOne) }}"
                                class="carousel-image img-fluid" alt="...">


                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('imagesfb/'.$SliderImages->imageTwo) }}"
                                class="carousel-image img-fluid" alt="...">


                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('imagesfb/'.$SliderImages->imageThree) }}"
                                class="carousel-image img-fluid" alt="...">


                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" style="display: none;"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                        data-bs-slide="next ">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="display: none;"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>
