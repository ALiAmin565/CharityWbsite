@extends('Layout.master')
{{-- Naming Of Page --}}
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



    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">للمشاركة والمساهمة</h2>
                </div>


                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="#" class="d-block">
                            <img src="images/icons/Visa.png" class="featured-block-image img-fluid" alt="" style="width: 128px">

                            <p class="featured-block-text"> <strong> فيزا </strong></p>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="/cash" class="d-block">
                            <img src="images/icons/cash.png" class="featured-block-image img-fluid" alt="" style="width: 128px">

                            <p class="featured-block-text"><strong> كاش </strong> </p>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>


</main>
@endsection





