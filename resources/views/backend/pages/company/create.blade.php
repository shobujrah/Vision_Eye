
@extends('backend.master')


@section('content')
<div class="container-fluid px-4">
<h1 class="mt-2">Company Create Form</h1>
<ol class="breadcrumb mb-1">

</ol>

<form action="{{route ('company.store')}}" method="post">
    @csrf

        <div class="form-group">
            <label for="">Name <span style="color: red;">* </span> </label>
            <input required name="name" type="text" class="form-control" id="" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for=""> Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
        </div>

        <div class="form-group">
            <label for=""> Phone </label>
            <input type="tel" class="form-control" name="phone" placeholder="Enter Phone_No">
        </div>

        <div class="form-group">
            <label for="">Total Employee</label>
            <input name="total_employee" type="number" class="form-control" id="" placeholder="Enter total employee no">
        </div>


        <ol class="breadcrumb mb-1">

        </ol>

        <button type="submit" class="btn btn-success">Submit</button>
</form>

</div>
@endsection
