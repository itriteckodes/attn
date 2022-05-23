@extends('layout.admin')
@section('title')
Admin|Student
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title txt4">Add Student</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.student.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Tournament Title"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Enterance Tournament Price"
                                required>
                        </div>

                    </div>
                    <div class="form-group row">

                        <div class="form-group col-md-6">
                            <label>Roll No</label>
                            <input name="roll_no" type="number" class="form-control" placeholder="Enter Tournament Win Prize"
                                required>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
