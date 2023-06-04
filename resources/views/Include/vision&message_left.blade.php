<section class="section-padding section-bg" id="section_6">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <img src="{{ asset('imagesfb/'.$sectionLeft->image) }}"
                    class="custom-text-box-image img-fluid" alt="">
            </div>

            <div class="col-lg-6 col-12" dir="rtl">
                <div class="custom-text-box">
                    <h2 class="mb-2">{{ $sectionLeft->title_vision }}</h2>

                    <h5 class="mb-3">{{ $sectionLeft->span_vision }}</h5>

                    <p class="mb-0">{{ $sectionLeft->text_vision }}.</p>
                </div>
                <div class="custom-text-box">
                    <h2 class="mb-2">{{ $sectionLeft->title_message }}</h2>

                    <h5 class="mb-3">{{ $sectionLeft->span_message }}</h5>

                    <p class="mb-0">{{ $sectionLeft->text_message }}.</p>
                </div>


            </div>

        </div>
    </div>
</section>
