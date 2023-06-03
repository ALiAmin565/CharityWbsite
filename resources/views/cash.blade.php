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

    <table class="table">
        <thead>
          {{-- <tr>
            <th scope="col">#</th>
            <th scope="col">اسم البنك</th>
            <th scope="col">اسم فرع البنك</th>
            <th scope="col">رقم الحساب الحالي</th>
            <th scope="col">رقم IBAN</th>
          </tr>
        </thead> --}}
        <tbody>
            <tr>
                <td>اسم البنك</td>
                <td>البنك الأهلى المصرى</td>
            </tr>
          <tr>
            <th scope="row">1</th>
            <td>البنك الأهلى المصرى</td>
            <td>فرع سوريا بالمهندسين</td>
            <td>1623060320945400012</td>
            <td>EG660003016230603209454000120</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>بنك مصر</td>
            <td>فرع احمد فؤاد</td>
            <td>3920001000019450</td>
            <td>EG420002039203920001000019450</td>
          </tr>

        </tbody>
      </table>

    <div class="vc_tta-panel-body">
        <div class="wpb_text_column wpb_content_element  vc_custom_1654023096685">
            <div class="wpb_wrapper">
                <div dir="ltr">
    <div dir="rtl">
    <table dir="RTL">
    <tbody>



</main>
@endsection
