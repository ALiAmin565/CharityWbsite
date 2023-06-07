<section class="section-padding section-bg" id="section_6">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <img src="{{ asset('imagesfb/' . $sectionLeft->image) }}" class="custom-text-box-image img-fluid"
                    alt="">
            </div>

            <div class="col-lg-6 col-12" dir="rtl">
                <div class="custom-text-box">
                    <h2 class="mb-2">{{ $sectionLeft->titleOne }}</h2>

                    <h5 class="mb-3">{{ $sectionLeft->spanOne }}</h5>

                    <p class="mb-0">{!! $sectionLeft->textOne !!}.</p>
                </div>
                <div class="custom-text-box">
                    <h2 class="mb-2">{{ $sectionLeft->titleTwo }}</h2>

                    <h5 class="mb-3">{{ $sectionLeft->spanTwo }}</h5>

                    <p class="mb-0">{!! $sectionLeft->textTwo !!}.</p>
                </div>
            </div>

        </div>
    </div>
</section>
