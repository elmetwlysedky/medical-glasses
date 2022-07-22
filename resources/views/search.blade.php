@extends('Layouts')

@section('title') صفحة البحث  @endsection

@section('content')

<div class="card">
   <div class="card-header header-elements-inline">
       <h5 class="card-title"> نتائج البحث</h5>
       <div class="header-elements">
           <div class="list-icons">
               <a class="list-icons-item" data-action="collapse"></a>
               <a class="list-icons-item" data-action="reload"></a>
               <a class="list-icons-item" data-action="remove"></a>
           </div>
       </div>
   </div>

   <div class="card-body">
        <code></code><strong> </strong>
   </div>


   <table class="table datatable-basic">
           <thead>
               <tr>

                   <th>الاسم</th>
                   <th>رقم الهاتف</th>
                   <th>العنوان</th>
                   <th>نوع الفريم</th>
                    <!--<th>خامة الفريم</th>
                   <th>نوع العدسه</th>
                   <th>خامة العدسه</th>
                   <th>r_spil</th>
                   <th>r_cyl</th>
                   <th>r_ax</th>
                   <th>l_spil</th>
                   <th>l_cyl</th>
                   <th>l_ax</th>
                   <th>i_p_d</th> -->
                   <th>السعر </th>
                   <th>المدفوع</th>
                   <th>المتبقي</th>
                   <th>تاريخ التسجيل</th>
                   <th>Actions</th>
               </tr>
           </thead>
           <div>
               @foreach ($client as $item )
               <tr>
                   <td>{{$item->name}}</td>
                   <td>{{$item->phone}}</td>
                   <td>{{$item->address}}</td>
                    <td>{{$item->frame_type->name}}</td>
                   <!--<td>{{$item->frame_material}}</td>
                   <td>{{$item->lens_type}}</td>
                   <td>{{$item->lens_material}}</td>
                   <td>{{$item->r_spil}}</td>
                   <td>{{$item->r_cyl}}</td>
                   <td>{{$item->r_ax}}</td>
                   <td>{{$item->l_spil}}</td>
                   <td>{{$item->l_cyl}}</td>
                   <td>{{$item->l_ax}}</td>
                   <td>{{$item->i_p_d}}</td> -->
                   <td>{{$item->price}}</td>
                   <td>{{$item->paid_up}}</td>
                   <td>{{$item->remainder}}</td>
                   <td>{{$item->created_at->diffForhumans()}}</td>


                   </td>
                   <td>
                       <div class="list-icons">
                           <div class="list-icons-item dropdown">
                               <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                   <i class="icon-menu9"></i>
                               </a>

                               <div class="dropdown-menu dropdown-menu-left">
                                   <a href="{{route('client.show',[$item->id])}}" class="dropdown-item"><i class="icon-file-eye2 mr-3 icon"></i> عرض </a>

                                   <a href="{{route('client.edit',$item->id)}}"class="dropdown-item"><i class="icon-pencil7"></i> تعديل </a>


                                   <div class="dropdown-divider"></div>
                                   <form action="{{route('client.destroy',$item->id)}}" method="POST"  >
                                       @csrf
                                       @method('DELETE')

                                   <button class="dropdown-item" type="submit"><i class="icon-bin"> </i>الحذف</button>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </td>
               </tr>
           </div>
               @endforeach

           </tbody>
   </table>
</div>


@endsection
