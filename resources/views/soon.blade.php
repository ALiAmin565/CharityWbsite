@extends('Layout.master')
@section('PageTitle')
    @lang('home.PageTitle')
@endsection

@section('content')
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  /* background-image: url('./images/forestbridge.jpg'); */
  background-color: gray;
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 10px;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

hr {
  margin: auto;
  width: 40%;
}
.soon{
    font-size: 10rem;
    color: black;
    font-weight: bolder;
}
</style>

  <div class="mt-10 text-center mb-10">
    <p class="soon">قريباَ</p>
    {{-- <a class="btn btn-danger mb-10" href="{{ url('/' . $page='payment') }}">الرجوع الي القائمة السابقة</a> --}}
  </div>

@endsection
