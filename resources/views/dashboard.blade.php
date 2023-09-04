@extends('layouts.app')
@section('title', 'الرئيسية')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">
                        طلبات خدمة نقل الملكية
                    </h2>
                    
                   
                </div>
            </div>
        </div>   
    </div>
    <div class="content-body">
        @if ($data->isNotEmpty())
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">    طلبات خدمة نقل الملكية</h4>
                    </div>
    
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>رقم الطلب</th>
                                            <th> رقم جوال البائع </th>
                                            <th> رقم جوال المشتري </th>
                                            <th> نوع الخدمة </th>
                                            <th>الملفات</th>
                                            <th> الحالة </th>
                                            <th> خيارات </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                
                                                <td>{{ $item->order_no }}</td>
                                                <td>{{ $item->seller_phone }}</td>
                                                <td>{{ $item->buyer_phone }}</td>
                                                <td>
                                                    @if ($item->type == 1)
                                                        <span class="badge badge-primary">
                                                            افراد
                                                        </span>
                                                    @else
                                                        <span class="badge badge-warining">
                                                            شركات
                                                        </span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-success" name="edit_button"
                                                        value="{{ $item->id }}" data-toggle="modal"
                                                        data-target="#edit_modal">
                                                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                                                    </button>
                                                </td>

                                                <td>
                                                    @if ($item->is_paid)
                                                        تم الدفع
                                                        <i style="color: #28C76F; font-size: 2rem" class="fa fa-check"></i>
                                                    @else
                                                        غير مدفوع
                                                        <i class="fa fa-close" style="font-size:2rem;color:red"></i>
                                                    @endif
                                                </td>

                                                <td>
                                                    <a class="btn btn-primary" 
                                                        href="{{ route('service.paymentSuccess', ['tap_id'=>$item->payment_id]) }}" >
                                                        مراجعة
                                                        <i class="fa fa-money" aria-hidden="true"></i>
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
       
        @else
        <!-- Not Data -->
        <section id="description" class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text text-center">
                        <h4>  لا توجد بيانات حتي الان 
                            <i class="fa fa-map-o"></i>
                        </h4>
                    </div>
                </div>
            </div>


        </section>
        <!--/ No Data -->
        @endif

    </div>

                    <!-- edit Modal -->
                    <div class="modal fade text-left" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel1"> الملفات </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-section">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@section('scriptjs')
    <script>
        $(document).ready(function() {
            $("button[name='edit_button']").click(function() {

                var edit_val = this.value;
                

                $(".form-section").html(" ");
                $(".form-section").append(
                    "<center><img src='{{ asset('loader.gif') }}'  width='300px'/></center>"
                );

                $.get("/admin/service/" + edit_val + "/files", function(data, status) {
                    $(".form-section").html(data);
                }).fail(function() {
                    $(".form-section").html(" ");
                    $(".form-section").append(
                        "<div class='alert alert-danger' role='alert'>عذراً , حصل خطأ ما !!</div>"
                    );
                });
            });
        });
    </script>
@endsection
