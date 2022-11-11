@extends('layout.app')
@section('content')

            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Add Accounts</h5>
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
                                <form method="post" action={{ route('insert') }}>
                                    @if(Session::get('fail'))
                                    <p style="color:red"> {{ Session::get('fail') }}</p>
                                    @endif
                                
                                    @csrf
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Domain</label>
    
                                        <div class="col-sm-10"><input type="text" name="domain_name" value="{{ old('domain_name') }}"  class="form-control">
                                            <span clss="text-danger" style='color:red'>@error('domain_name') {{ $message }} @enderror</span></div>
                                        
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Starting Date</label>
    
                                        <div class="col-sm-10"> <input type="date"  class="select form-control" placeholder="dd/mm/yyyy" name="startdate" value="{{ old('startdate') }}"  min="{{Carbon\Carbon::now()->addDay()->format('d-m-y')}}" max="{{Carbon\Carbon::now()->lastOfYear()->format('d-m-y')}}">
                                           
                                        
                                    </div>
                                    </div>
                                  
                                    
                                    
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Amount</label>
                                         <div class="col-sm-10"><input type="text" name="amount" value="{{ old('amount') }}"  class="number form-control">{{-- <span class="form-text m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span> --}}
                                            <span clss="text-danger" style='color:red'>@error('amount') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Domain</label>
                                         <div class="col-sm-10"><input type="text" name="domain" value="{{ old('domain') }}"  class="form-control">{{-- <span class="form-text m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span> --}}
                                            
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Email</label>
                                         <div class="col-sm-10"><input type="email" name="email"   value="{{ old('email') }}"  class="form-control">{{-- <span class="form-text m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span> --}}
                                            <span clss="text-danger" style='color:red'>@error('email') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Renewal Date</label>
    
                                        <div class="col-sm-10"> <input type="date" class="select form-control" placeholder="dd/mm/yyyy" name="renewal_date" value="{{ old('renewal_date') }}"  min="{{Carbon\Carbon::now()->addDay()->format('d-m-y')}}" max="{{Carbon\Carbon::now()->lastOfYear()->format('d-m-y')}}">
                                           
                                        
                                    </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Due Amount</label>
                                         <div class="col-sm-10"><input type="text" name="due_amount" value="{{ old('due_amount') }}"  class="number form-control">{{-- <span class="form-text m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span> --}}
                                           <span class="text-danger">@error('due_amount'){{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Payment Status</label>
    
                                        <div class="col-sm-10"><input type="text"  class="form-control" name="payment_status" value="{{ old('payment_status') }}"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Service With</label>
    
                                        <div class="col-sm-10"><input type="text"  name="service_with"  value="{{ old('service_with') }}" class="form-control"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Notes</label>
    
                                        <div class="col-lg-10"><textarea name="notes"  class="form-control">{{ old('notes') }}</textarea></div>
                                    </div>
                                   
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            {{-- <button class="btn btn-white btn-sm" type="submit">Cancel</button> --}}
                                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                @endsection
     
