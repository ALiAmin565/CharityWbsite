@extends('Layout.master')
@section('PageTitle')
    @lang('home.PageTitle')
@endsection

@section('content')
<style>
    .navbar .nav-item a {
        font-size: larger;
        font-weight: 600;
    }

    .collapse {
        margin-right: 10rem;

    }

</style>

<main>


    <section class="hero-section hero-section-full-height" >
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/slide/volunteer-helping-with-donation-box.jpg"
                                    class="carousel-image img-fluid" alt="...">


                            </div>

                            <div class="carousel-item">
                                <img src="images/slide/volunteer-selecting-organizing-clothes-donations-charity.jpg"
                                    class="carousel-image img-fluid" alt="...">


                            </div>

                            <div class="carousel-item">
                                <img src="images/slide/medium-shot-people-collecting-donations.jpg"
                                    class="carousel-image img-fluid" alt="...">


                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="prev" >
                            <span class="carousel-control-prev-icon" aria-hidden="true" style="display: none;"></span>
                            <span class="visually-hidden" >Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                            data-bs-slide="next " >
                            <span class="carousel-control-next-icon" aria-hidden="true" style="display: none;"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding" id="section_3" dir="rtl">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2> جميع المقالات</h2>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-5">
                    <div class="custom-block-wrap">
                        <img src="images/news/close-up-happy-people-working-together.jpg"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">اخبار التطوع </h5>

                                <p>التطوع حلو وبسميم وجميل وعلي احسن باك اند</p>

                                <!-- <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div> -->


                            </div>

                            <a href="/article" class="custom-btn btn">اقرا المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-5">
                    <div class="custom-block-wrap">
                        <img src="images/news/close-up-happy-people-working-together.jpg"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">اخبار التطوع </h5>

                                <p>التطوع حلو وبسميم وجميل وعلي احسن باك اند</p>

                                <!-- <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div> -->


                            </div>

                            <a href="/article" class="custom-btn btn">اقرا المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-5">
                    <div class="custom-block-wrap">
                        <img src="images/news/close-up-happy-people-working-together.jpg"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">اخبار التطوع </h5>

                                <p>التطوع حلو وبسميم وجميل وعلي احسن باك اند</p>

                                <!-- <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div> -->


                            </div>

                            <a href="/article" class="custom-btn btn">اقرا المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-5">
                    <div class="custom-block-wrap">
                        <img src="images/news/close-up-happy-people-working-together.jpg"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">اخبار التطوع </h5>

                                <p>التطوع حلو وبسميم وجميل وعلي احسن باك اند</p>

                                <!-- <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div> -->


                            </div>

                            <a href="/article" class="custom-btn btn">اقرا المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-5">
                    <div class="custom-block-wrap">
                        <img src="images/news/close-up-happy-people-working-together.jpg"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">اخبار التطوع </h5>

                                <p>التطوع حلو وبسميم وجميل وعلي احسن باك اند</p>

                                <!-- <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div> -->


                            </div>

                            <a href="/article" class="custom-btn btn">اقرا المزيد</a>
                        </div>
                    </div>
                </div><div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-5">
                    <div class="custom-block-wrap">
                        <img src="images/news/close-up-happy-people-working-together.jpg"
                            class="custom-block-image img-fluid" alt="">

                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">اخبار التطوع </h5>

                                <p>التطوع حلو وبسميم وجميل وعلي احسن باك اند</p>

                                <!-- <div class="progress mt-4">
                                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div> -->


                            </div>

                            <a href="/article" class="custom-btn btn">اقرا المزيد</a>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </section>
</main>

@endsection
