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
        <section class="news-section section-padding">
            <div class="container">
                <div class="">
                    <div class="col-lg-6 col-12 text-center m-auto">
                        <div class="news-block">
                            <div class="news-block-top mb-4">
                                <img src="{{ asset('imagesfb/' . $blog->image) }}" class="news-image img-fluid" alt="">

                            </div>
                            <div class="news-block-info">
                                <div class="news-block-title mb-2">
                                    <h4>{{ $blog->title }}</h4>
                                </div>
                                <div class="news-block-body">
                                    @php
                                        echo $blog->description;
                                    @endphp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
