@extends('layout.admin')

@section('styles')
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3')}}" rel="stylesheet"
    type="text/css" />
@endsection

@section('title')
Attendence
@endsection

@section('content')
<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">attendece
            </h3>
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Roll No</th>
                    <th>Time</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($attendences as $key => $attendence)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$attendence->student->name}}</td>
                    <td>{{$attendence->student->roll_no}}</td>
                    <td>{{Carbon\Carbon::parse($attendence->time)->format('h:i A || d/m/Y')}}</td>

                    <td></td>
                </tr>
                @endforeach


            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>

@endsection
@section('scripts')
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3')}}"></script>
<!--end::Page users-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('assets/js/pages/crud/datatables/basic/paginations.js?v=7.0.3')}}"></script>
<!--end::Page Scripts-->
<script>
    $(document).ready(function(){


    });
</script>
@endsection
