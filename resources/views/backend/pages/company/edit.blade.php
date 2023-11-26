
@extends('backend.master')


@section('content')
<div class="container-fluid px-4">
<h1 class="mt-2">Edit Company</h1>
<ol class="breadcrumb mb-1">

</ol>

<form action="{{route('company.update',$companies->id)}}" method="post" >
    @csrf
    @method('put')

        <div class="form-group">
            <label for="">Name <span style="color: red;">* </span> </label>
            <input value="{{$companies->name}}" required name="name" type="text" class="form-control" id="" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for=""> Email</label>
            <input value="{{$companies->email}}" type="email" class="form-control" name="email" placeholder="Enter Email Address">
        </div>


        <div class="form-group">
            <label for=""> Phone </label>
            <input value="{{$companies->phone}}" type="tel" class="form-control" name="phone" placeholder="Enter Phone_No">
        </div>

        <div class="form-group">
            <label for="">Total Employee</label>
            <input value="{{$companies->total_employee}}" name="total_employee" type="number" class="form-control" id="" placeholder="Enter total employee no">
        </div>


        <ol class="breadcrumb mb-1">

        </ol>

        <button type="submit" class="btn btn-success">Submit</button>
</form>

</div>


@endsection
