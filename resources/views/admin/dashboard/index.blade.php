@extends('layout.admin')
@section('title')
    Admin|Dashboard
@endsection
@section('content')
    <!--Begin::Row-->
    <div class="row">
        <div class="col-md-3">
            <!--begin: Stats Widget 19-->
            <div class="card card-custom bg-danger card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body my-3">
                    <a href="#" class="card-title font-weight-bolder text-light text-hover-state-dark font-size-h6 mb-4 d-block">Total Tournament</a>
                    <div class="font-weight-bold text-muted font-size-sm">
                    <span class="text-light font-size-h2 font-weight-bolder mr-2">23</span></div>
                </div>
                <!--end:: Body-->
            </div>
            <!--end: Stats:Widget 19-->
        {{-- </div>
        <div class="col-md-3">
            <!--begin::Stats Widget 20-->
            <div class="card card-custom bg-success card-stretch gutter-b">
                <!--begin::Body-->
                <div class="card-body my-4">
                    <a href="{{ route('admin.order.pending') }}" class="card-title font-weight-bolder text-light font-size-h6 mb-4 text-hover-state-dark d-block">Order Pending</a>
                    <div class="font-weight-bold text-muted font-size-sm">
                    <span class="text-light font-weight-bolder font-size-h2 mr-2">{{ App\Models\Order::Where('status', 0)->count() }}</span></div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Stats Widget 20-->
        </div>
        <div class="col-md-3">
            <!--begin::Stats Widget 21-->
            <div class="card card-custom bg-info card-stretch gutter-b">
                <!--begin::ody-->
                <div class="card-body my-4">
                    <a href="{{ route('admin.order.accepted') }}" class="card-title font-weight-bolder text-light font-size-h6 mb-4 text-hover-state-dark d-block">Order Accepted</a>
                    <div class="font-weight-bold text-muted font-size-sm">
                    <span class="text-light font-weight-bolder font-size-h2 mr-2">{{ App\Models\Order::where('status',1)->count()}}</span></div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Stats Widget 21-->
        </div>
        <div class="col-md-3">
            <!--begin::Stats Widget 21-->
            <div class="card card-custom bg-warning card-stretch gutter-b">
                <!--begin::ody-->
                <div class="card-body my-4">
                    <a href="{{ route('admin.order.dispatched') }}" class="card-title font-weight-bolder text-light font-size-h6 mb-4 text-hover-state-dark d-block">Order Dispatched</a>
                    <div class="font-weight-bold text-muted font-size-sm">
                    <span class="text-light font-weight-bolder font-size-h2 mr-2">{{ App\Models\Order::where('status',3)->count()}}</span></div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Stats Widget 21-->
        </div> --}}
       
    </div>
    
@endsection