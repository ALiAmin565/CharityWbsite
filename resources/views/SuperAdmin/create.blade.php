@extends('layouts.master')
@section('title')
    القائمة العلوية
@stop



@section('page-header')
<br>
<H1>    اضافه عضو</H1>
@endsection


@section('content')






<!-- row -->
<div class="row">
 <div class="col-xl-10 ">
    <form action="{{ route('user.store') }}" method="post">

        @csrf

        <div class="mb-3 mt-3">
            <label for="Nmae" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
          </div>
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>





@endsection
