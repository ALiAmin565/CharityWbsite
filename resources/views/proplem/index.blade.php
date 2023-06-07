@extends('layouts.master')
@section('title')
    القائمة العلوية
@stop



@section('page-header')
<br>
<br>


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
 <div class="col-xl-12 ">
     <div class="card mg-b-20">
         <div class="card-body">
             <h2> القائمة العلوية</h2>
             <div class="table-responsive mg-t-50">
                 <table id="example" class="table key-buttons text-md-nowrap" data-page-length='50'
                     style="text-align: center">
                     <thead>
                         <tr>
                             <th class="border-bottom-0">#</th>
                             <th class="border-bottom-0">الاسم  </th>
                             <th class="border-bottom-0">الايميل     </th>
                             <th class="border-bottom-0">الهاتف     </th>

                         </tr>
                     </thead>

                     <tbody>
                        @foreach ($preo as $item)
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td>
                                 {{ $item->name }}

                             </td>
                             <td>
                                 {{ $item->email }}

                             </td>
                             <td>
                                {{ $item->desc }}

                            </td>

<td>
    <div class="dropdown">
        <button aria-expanded="false" aria-haspopup="true"
            class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
            type="button">تعديل<i class="fas fa-caret-down ml-1"></i></button>
        <div class="dropdown-menu tx-13">

            <a class="dropdown-item"
                href="{{ route('proplem_show', $item->id) }}">التفاضيل
               </a>
</td>
                         </tr>
                         @endforeach

                     </tbody>

                 </table>
             </div>
         </div>
     </div>
 </div>

</div>





@endsection
