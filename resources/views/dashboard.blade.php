@extends('layouts.app')
@section('title', 'الرئيسية')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">
                        الخدمات
                    </h2>
                    
                   
                </div>
            </div>
        </div>   
    </div>
    <div class="content-body">
        @if ($data->isNotEmpty())
            
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
@endsection
