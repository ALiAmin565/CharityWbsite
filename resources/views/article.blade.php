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

    @include('Include.slider')
    <section class="news-section section-padding">
        <div class="container">
            <div class="">
                <div class="col-lg-6 col-12 text-center m-auto">
                    <div class="news-block">
                        <div class="news-block-top mb-4">
                            <img src="images/news/medium-shot-volunteers-with-clothing-donations.jpg" class="news-image img-fluid" alt="">

                        </div>
                        <div class="news-block-info">
                            <div class="news-block-title mb-2">
                                <h4>Clothing donation to urban area</h4>
                            </div>
                            <div class="news-block-body">
                                <p><strong>Lorem Ipsum</strong> dolor sit amet, consectetur adipsicing kengan omeg
                                    kohm tokito Professional charity theme based on Bootstrap</p>
                                <p><strong>Sed leo</strong> nisl, This is a Bootstrap 5.2.2 CSS template for charity
                                    organization websites. You can feel free to use it. Please tell your friends
                                    about TemplateMo website. Thank you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

@endsection
