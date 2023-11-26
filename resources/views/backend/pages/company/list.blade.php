@extends('backend.master')


@section('content')

<div class="container-fluid px-4">

<h1 class="mt-2"> Companies </h1>
<ol class="breadcrumb mb-1">

</ol>

<a href="{{route('company.create.form')}}" class="btn btn-success">Create</a>
<ol class="breadcrumb mb-2">
</ol>

<br> </br>
<h1> Company List:</h1>
<table class="table">
        <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Total Employee</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
        <tr>
            <th scope="row">{{$company->id}}</th>
            <td>{{$company->name}}</td>
            <td>{{$company->email}}</td>
            <td>{{$company->phone}}</td>
            <td>{{$company->total_employee}}</td>

            <td>
        <ul>
          <a href="{{route('company.edit',$company->id)}}" class="btn btn-secondary" >Edit</a>
          <a href="{{route('company.delete',$company->id)}}" class="btn btn-danger" >Delete</a>

        </ul>
      </td>
        </tr>
        @endforeach

        </tbody>
    </table>


    {{$companies->links()}}

</div>



@endsection
