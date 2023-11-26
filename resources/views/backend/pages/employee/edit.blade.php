
@extends('backend.master')


@section('content')
<div class="container-fluid px-4">
<h1 class="mt-2">Edit Employee</h1>
<ol class="breadcrumb mb-1">

</ol>

<form action="{{route('employee.update',$employees->id)}}" method="post" >
    @csrf
    @method('put')

        <div class="form-group">
            <label for="">Name <span style="color: red;">* </span> </label>
            <input value="{{$employees->name}}" required name="name" type="text" class="form-control" id="" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="">Company </label>
            <input value="{{$employees->company}}" name="company_name" type="text" class="form-control" id="" placeholder="Enter company name">
        </div>

        <div class="form-group">
            <label for=""> Email</label>
            <input  value="{{$employees->email}}" type="email" class="form-control" name="email" placeholder="Enter Email Address">
        </div>

        <div class="form-group">
            <label for=""> Phone </label>
            <input  value="{{$employees->phone}}" type="tel" class="form-control" name="phone" placeholder="Enter Phone_No">
        </div>

        <ol class="breadcrumb mb-1">

        </ol>

        <button type="submit" class="btn btn-success">Submit</button>
</form>

</div>



@endsection
