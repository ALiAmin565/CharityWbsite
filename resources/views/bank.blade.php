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
    <div class="col-6 m-auto">
    <table class="table">
        <tbody>
            <tr class="text-center fw-bolder text-primary">
                <td>اسم البنك</td>
                <td>البنك الأهلى المصرى</td>
            </tr>
          <tr class="text-center">
            <td scope="col">اسم فرع البنك</td>
            <td>فرع سوريا بالمهندسين</td>

          </tr>
          <tr class="text-center">
            <td scope="col">رقم الحساب الحالي</td>
            <td>3920001000019450</td>
          </tr>
          <tr class="text-center">
            <td scope="col">رقم IBAN</td>
            <td>EG420002039203920001000019450</td>
          </tr>

        </tbody>
      </table>
    </div>


</main>

@endsection
