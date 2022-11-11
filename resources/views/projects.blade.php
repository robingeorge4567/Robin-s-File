@extends('layout.app')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
         <h2></h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
            </li>
           {{-- <li class="breadcrumb-item">
                <a>Tables</a>
            </li> --}}
            <li class="breadcrumb-item active">
                <strong>Projects</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
    <div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>List Projects</h5>
            
            {{-- <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#" class="dropdown-item">Config option 1</a>
                    </li>
                    <li><a href="#" class="dropdown-item">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div> --}}
        </div>
      
        <div class="ibox-content">
            <a href="add_project" class="btn btn-warning" style='float:right'>Add New projects</a><br>
            @if(Session::get('sucess'))
            <p style="color:red"> {{ Session::get('sucess') }}</p>
            @endif
            <br>
            <div class="table-responsive" style="padding-top: 22px;">
        <table class="table table-striped table-bordered table-hover dataTables-example" >
        <thead>
        <tr>
            
            <th>SL.No</th>
            <th>Project Name</th>
            <th>Amount</th>
            <th>Received</th>
            <th>Balance</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
<?php
$i=1; 
?>
@foreach ($projects as $project)
    

        <tr class="gradeX">
            <td>{{ $i; }}</td>
            <td>{{ $project['name']; }}</td>
            <td>{{ $project['amount']; }}
            </td>
            <td>{{ $project['received']; }}</td>
            <td>{{ $project['balance']; }}</td>
            <td>{{ $project['status']; }}</td>
            <td><a class="btn" href="{{ route('edit_project',$project['id']) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a class="btn" href="{{ route('delete',$project['id']) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
        </tr>
       <?php $i++; ?> 
        @endforeach       
        </tbody>
        <tfoot>
        <tr>
            <th>SL.No</th>
            <th>Project Name</th>
            <th>Amount</th>
            <th>Received</th>
            <th>Balance</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </tfoot>
        </table>
            </div>

        </div>
    </div>
</div>
</div>
</div>
 
@endsection
     

