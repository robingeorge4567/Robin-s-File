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
                <strong>Accounts</strong>
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
            <a href="{{ route('add_haccounts') }}" class="btn btn-warning" style='float:right'>Add New Account</a><br>
            @if(Session::get('sucess'))
            <p style="color:red"> {{ Session::get('sucess') }}</p>
            @endif
            <br>
            <div class="table-responsive" style="padding-top: 22px;">
        <table class="table table-striped table-bordered table-hover dataTables-example" >
        <thead>
        <tr>
            
            <th>SL.No</th>
            <th>Domain Name</th>
            <th>Start Date</th>
            <th>Amount</th>
            <th>Domain</th>
            <th>Email</th>
            <th>Renewal Date</th>
            <th>Due Amount</th>
            <th>Payment Status</th>
            <th>Service With</th>
            <th>Notes</th>
            <th>Action</th>

        </tr>
        </thead>
    <tbody>
<?php
$i=1; 
?>
@foreach ($haccounts as $haccount)
    

        <tr class="gradeX">
            <td>{{ $i; }}</td>
            <td>{{ $haccount['domain_name']; }}</td>
            <td>{{ date('d/m/Y', strtotime($haccount['startdate'])); }}</td>
            <td>{{ $haccount['amount']; }}</td>
            <td>{{ $haccount['domain']; }}</td>
            <td>{{ $haccount['email']; }}</td>
            <td>{{ date('d/m/Y', strtotime($haccount['renewal_date'])); }}</td>
            <td>{{ $haccount['due_amount']; }}</td>
            <td>{{ $haccount['payment_status']; }}</td>
            <td>{{ $haccount['service_with']; }}</td>
            <td>{{ $haccount['notes']; }}</td>
            <td><a class="btn" href="{{ route('haccount.edit',$haccount['id']) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a class="btn" href="{{ route('haccount.delete',$haccount['id']) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
        </tr>
       <?php $i++; ?> 
        @endforeach       
        </tbody>
        <tfoot>
        <tr>
            {{-- <th>SL.No</th>
            <th>Project Name</th>
            <th>Amount</th>
            <th>Received</th>
            <th>Balance</th>
            <th>Status</th>
            <th>Action</th> --}}
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
     

