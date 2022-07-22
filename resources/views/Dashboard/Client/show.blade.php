
@extends('Dashboard.layouts.master')

@section('title')
{{$client->name}}
@endsection

@section('content')


    <!-- Post -->
    <div class="card text-center">
        <div class="card-body">
            <div class="mb-4">
                <div class="mb-3 text-center">
                    <a href="#" class="d-inline-block">
                        <img src="/storage/" class="img-fluid" alt="" style="height: 300px;">
                    </a>
                </div>

                <h4 class="font-weight-semibold mb-1">
                    <p >{{$client->name}}</p>
                    <h4 class="text-default">  {{$client->phone}}</h4>
                    <h5>{{$client->address}}</h5>
                </h4>


                <div class="container">

                    <div class="container" style="margin-top:50px;">
                        <table class="table table-bordered table-hover datatable-highlight">
                            <thead>
                            <tr>
                                <th> AX</th>
                                <th> CYL</th>
                                <th> SPIL</th>
                                <th> I.P.D</th>
                                <th> AX</th>
                                <th> CYL</th>
                                <th> SPIL</th>


                            </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>{{$client->l_ax}}</td>
                                    <td>{{$client->l_cyl}}</td>
                                    <td>{{$client->l_spil}}</td>
                                    <td>{{$client->i_p_d}}</td>
                                    <td>{{$client->r_ax}}</td>
                                    <td>{{$client->r_cyl}}</td>
                                    <td>{{$client->r_spil}}</td>

                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class="container">
                        <table class="table table-bordered table-hover datatable-highlight"style="margin-top:30px;">
                            <thead>
                            <tr>
                                <th> <h6>نوع الفريم</h6></th>
                                <th> <h6>خامة الفريم</h6></th>
                                <th> <h6>نوع العدسه</h6></th>
                                <th> <h6>خامة العدسه</h6></th>


                            </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td> <h6>{{$client->frame_type->name}}</h6></td>
                                    <td> <h6>{{$client->frame_material}}</h6></td>
                                    <td> <h6>{{$client->lens_type}}</h6></td>
                                    <td> <h6>{{$client->lens_material}}</h6></td>

                                </tr>
                            </tbody>
                        </table>

                    </div>


                    <div class="container">
                        <table class="table table-bordered table-hover datatable-highlight"style="margin-top:30px;">
                            <thead>
                            <tr>
                                <th> <h6> السعر</h6></th>
                                <th> <h6> مدفوع</h6></th>
                                <th> <h6>متبقي </h6></th>



                            </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td> <h6>{{$client->price}}</h6></td>
                                    <td> <h6>{{$client->paid_up}}</h6></td>
                                    <td> <h6>{{$client->remainder}}</h6></td>

                                </tr>
                            </tbody>
                        </table>

                    </div>


            </div>





            <div class="mb-4">

                <ul class="list-inline list-inline-dotted text-muted mb-3">
                    <li class="list-inline-item"><h4>{{$client->created_at->format('d/m/Y')}}</h4></li>
                </ul>
            </div>


        </div>
    </div>
    <!-- /post -->


@endsection
