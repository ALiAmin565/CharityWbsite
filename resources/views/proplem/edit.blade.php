@extends('layouts.master')
@section('title')
    القائمة العلوية
@stop



@section('page-header')
<br>
<H1>   تعديل العضو</H1>
@endsection


@section('content')



 @if (session()->has('update'))
 <script>
     window.onload = function() {
         notif({
             msg: "تم التحديث بنجاح",
             type: "warning"
         })
     }
 </script>
@endif

@if ($errors->any())
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
     @foreach ($errors->all() as $error)
         <strong>{{ $error }}</strong>
     @endforeach
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
@endif
<!-- row -->
<div class="row">
 <div class="col-xl-10 ">
    <form action="{{ route('user.update',$user->id) }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3 mt-3">
            <label for="Nmae" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $user->name }}">
          </div>
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>





@endsection
