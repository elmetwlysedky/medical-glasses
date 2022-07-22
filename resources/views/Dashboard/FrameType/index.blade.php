@extends('Dashboard.Layouts.master')

@section('title')
انواع الفريمات
@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card"	>
        <div class="card-header header-elements-inline">
            <h5 class="card-title">جدول الفريمات</h5>
            <div class="header-elements">

                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
        <div class="container">




                    @if(Session::has('success'))
                    <div class="alert alert-success border-0 alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        <span class="font-weight-semibold">تم اضافة فريم بنجاح</span>
                    </div>

                    @elseif (Session::has('update'))

                    <div class="alert alert-success border-0 alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        <span class="font-weight-semibold ">تم تعديل الفريم بنجاح</span>
                    </div>

                    @elseif(Session::has('delete'))
                    <div class="alert alert-danger border-0 alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        <span class="font-weight-semibold ">تم حذف الفريم بنجاح</span>
                    </div>
                    @endif

            <a href="{{route('frameType.create')}}">
            <button class="btn bg-teal "><b><i class="icon-plus3"></i></b>
             اضافة فريم
            </button>
            </a>
        </div>

        <table class="table datatable-basic">
            <thead>
            <tr>
                <th> الاسم</th>
                <th class="text-center">العمليات</th>
            </tr>
            </thead>
            <tbody>
            @isset($type_frame)
                @foreach($type_frame as $item)
            <tr>

                <td>{{$item->name}}</td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu ">
<!-- {{--                                <a href="{{route('type_frame.edit')}}" class="dropdown-item"><i class="icon-file-eye2 mr-3 icon"></i> show </a>--}} -->
                                <a href="{{route('frameType.edit',$item->id)}}"class="dropdown-item"><i class="icon-pencil7"></i> تعديل </a>

                                <form action="{{route('frameType.destroy',$item->id)}}" method="POST" >
                                    @csrf
                                    @method('DELETE')

                                    <button class="dropdown-item" type="submit"><i class="icon-bin"> </i>حذف</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                @endforeach
            @endisset

            </tbody>
        </table>

    <!-- /basic datatable -->

        <div class="container">

        <ul class="pagination pagination-flat pagination-rounded align-self-center">
        <li>{!! $type_frame->links() !!}</li>
        </ul>

        </div>
    </div>
@endsection

