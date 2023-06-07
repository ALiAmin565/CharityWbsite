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
        @include('includes.slider')

        <section class="section-padding" id="section_2" dir="rtl">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>اخر الاخبار</h2>
                    </div>
                    @foreach ($lastSixRecords as $blog)
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-5">
                            <div class="custom-block-wrap">
                                <img src="{{ asset('imagesfb/' . $blog->image) }}" class="custom-block-image img-fluid"
                                    alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3"> {{ $blog->title }} </h5>
                                        @php
                                            $string = substr($blog->description, 0, 25);
                                        @endphp
                                        <p>{{ $string }}.....</p>
                                    </div>

                                    <a href="{{ route('blog.show', $blog->id) }}" class="custom-btn btn">اقرا المزيد</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">للمشاركة والمساهمة</h2>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="#section_4" class="d-block">
                                <img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"> <strong> تطوع معنا </strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="/payment" class="d-block">
                                <img src="images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>تبرع الان</strong> </p>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        @include('includes.vision&message_right')

        @include('includes.vision&message_left')

        <section class="volunteer-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12" dir="rtl">
                        <h2 class="text-white mb-4">Volunteer</h2>
                        <form class="custom-form volunteer-form mb-5 mb-lg-0" action="{{ route('proplem') }}" method="post"
                            role="form">
                            @csrf
                            <h3 class="mb-4">Become a volunteer today</h3>

                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="name" id="volunteer-name" class="form-control"
                                        placeholder="الاسم" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="email" id="volunteer-email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="البريد الالكتروني" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="text" name="number" id="volunteer-subject" class="form-control"
                                        placeholder="رقم الهاتف" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="text" name="volunteer-menu" id="volunteer-subject" class="form-control"
                                        placeholder="العنوان" required>
                                </div>
                            </div>

                            <textarea name="desc" rows="3" class="form-control" id="volunteer-message" placeholder="رسالتك "required></textarea>

                            <button type="submit" class="form-control">Submit</button>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12">
                        <img src="images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg"
                            class="volunteer-image img-fluid" alt="">

                        <div class="custom-block-body text-center">
                            <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                            <p class="text-white">اتطوع معانا تطوع معانا تطوع معانا</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
