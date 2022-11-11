@extends('layout.app')
@section('content')

            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Profile</h5>
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
                                <form method="post" action="{{ route('change_password','1') }}">
                                    @if(Session::get('sucess'))
                                    <p style="color:red"> {{ Session::get('sucess') }}</p>
                                    @endif
                                    @if(Session::get('fail'))
                                    <p style="color:red"> {{ Session::get('fail') }}</p>
                                    @endif
                                
                                    @csrf
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Password</label>
    
                                    <div class="col-sm-10"><input type="password" name="password"  class="form-control">
                                          </div>
                                        
                                    </div>
                                 
                                 
                                   
                                   
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            {{-- <button class="btn btn-white btn-sm" type="submit">Cancel</button> --}}
                                            <button class="btn btn-primary btn-sm" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                @endsection
     
