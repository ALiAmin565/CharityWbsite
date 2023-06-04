<section class="section-padding section-bg" id="section_6" style="direction: rtl;">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <img src="{{ asset('imagesfb/'.$sectionRight->image) }}"
                    class="custom-text-box-image img-fluid" alt="">
            </div>

            <div class="col-lg-6 col-12">
                <div class="custom-text-box">
                    <h2 class="mb-2">{{ $sectionRight->title_vision }}</h2>

                    <h5 class="mb-3">{{ $sectionRight->span_vision }}</h5>

                    <p class="mb-0">{{ $sectionRight->text_vision }}.</p>
                </div>
                <div class="custom-text-box">
                    <h2 class="mb-2">{{ $sectionRight->title_message }}</h2>

                    <h5 class="mb-3">{{ $sectionRight->span_message }}</h5>

                    <p class="mb-0">{{ $sectionRight->text_message }}.</p>
                </div>


            </div>

        </div>
    </div>
</section>
