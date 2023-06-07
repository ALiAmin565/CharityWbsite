<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container" dir="rtl" style="width: 100%;">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('imagesfb/' . $footer->image) }}" class="logo img-fluid"
                alt="  جمعية البرالخيرية بظهران الجنوب " style="width: 12rem;">
            <!-- <span>
                   جمعية البرالخيرية
                    <small style="    font-size: initial;">بظهران الجنوب  </small>
                </span> -->
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" dir="rtl">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('home') }}">الصفحة الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('blog.view') }}">اخبارنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3">التبرع </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4">التطوع</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_6"> عن الجمعية</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn btn" href="#">تواصل معانا</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
