@extends('layouts.master')
@section('title')
    قائمة الفواتير
@stop
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
    <!-- breadcrumb -->
    {{-- <div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">TopNav</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">Navigation</span>
        </div>
    </div>

</div> --}}
    <!-- breadcrumb -->
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
    @if (session()->has('delete'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم الحذف بنجاح",
                    type: "error"
                })
            }
        </script>
    @endif
    @if (session()->has('create'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم الاضافة بنجاح",
                    type: "success"
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
                        <h2> Top Navigation</h2>
                        <br>
                        <form method="get" action="{{ route('blog.create') }}">
                            @csrf
                            <button class="btn btn-primary buttons-copy buttons-html5" tabindex="0"
                                aria-controls="example" type="submit" fdprocessedid="g0j9oe"><span>اضافة</span></button>
                        </form>
                        <br>
                        <div class="table-responsive mg-t-50">
                            <table id="example" class="table key-buttons text-md-nowrap" data-page-length='50'
                                style="text-align: center">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">#</th>
                                        <th class="border-bottom-0">الصورة </th>
                                        <th class="border-bottom-0"> العنوان</th>
                                        <th class="border-bottom-0">المحتوي</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('imagesfb/' . $blog->image) }}" alt=""
                                                    width="100px" height="100px">

                                            </td>
                                            <td>
                                                {{ $blog->title }}

                                            </td>
                                            <td>
                                                @php
                                                    $string = substr($blog->description, 0, 25);
                                                @endphp
                                                {{ $string }}.....

                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button aria-expanded="false" aria-haspopup="true"
                                                        class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                        type="button">تعديل<i class="fas fa-caret-down ml-1"></i></button>
                                                    <div class="dropdown-menu tx-13">

                                                        <a class="dropdown-item"
                                                            href="{{ route('blog.edit', $blog->id) }}">تعديل </a>
                                                        <form method="post"
                                                            action="{{ route('blog.destroy', $blog->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="dropdown-item" type="submit">حذف</button>
                                                        </form>

                                                    </div>
                                                </div>
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
    @section('js')
        <!-- Internal Data tables -->
        <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
        <!--Internal  Datatable js -->
        <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
        <!--Internal  Notify js -->
        <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
        <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>










    @endsection
