@extends('backend.master')


@section('content')

<div class="container-fluid px-4">

<h1 class="mt-2"> Employees </h1>
<ol class="breadcrumb mb-1">

</ol>

<a href="{{route('employee.create.form')}}" class="btn btn-success">Create</a>
<ol class="breadcrumb mb-2">
</ol>

<br> </br>
<h1> Employee List:</h1>
<table class="table">
        <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Name</th>
            <th scope="col">Company</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
        <tr>
            <th scope="row">{{$employee->id}}</th>
            <td> {{$employee->name}} </td>
            <td>{{$employee->company}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->phone}}</td>


            <td>
        <ul>
          <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-secondary" >Edit</a>
          <a href="{{route('employee.delete',$employee->id)}}" class="btn btn-danger" >Delete</a>

        </ul>
      </td>
        </tr>

        @endforeach
        </tbody>
    </table>

    {{$employees->links()}}

</div>



@endsection
