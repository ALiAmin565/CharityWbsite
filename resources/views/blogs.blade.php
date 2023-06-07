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
        <section class="section-padding" id="section_3" dir="rtl">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2> جميع المقالات</h2>
                    </div>
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-5">
                            <div class="custom-block-wrap">
                                <img src="{{ asset('imagesfb/' . $blog->image) }}" class="custom-block-image img-fluid"
                                    alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3"> {{ $blog->title }} </h5>
                                        @php
                                            $string = substr($blog->description, 0, 5);
                                        @endphp
                                        <p>{!! $string !!}.....</p>
                                    </div>

                                    <a href="{{ route('blogsingle.view', $blog->id) }}" class="custom-btn btn">اقرا المزيد</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
