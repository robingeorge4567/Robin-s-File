@extends('layout.app')
@section('content')

            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Update Projects</h5>
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
                                <form method="post" action={{ route('update_project',$edata->id) }}>
                                    @if(Session::get('fail'))
                                    <p style="color:red"> {{ Session::get('fail') }}</p>
                                    @endif
                                
                                    @csrf
                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Project Name</label>
    
                                        <div class="col-sm-10"><input type="text" name="name" value="{{ $edata->name }}" class="form-control"><span clss="text-danger" style='color:red'>@error('name') {{ $message }} @enderror</span></div>
                                        
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Contact</label>
                                         <div class="col-sm-10"><input type="text" name="contact" value="{{ $edata->contact }}" class="form-control">{{-- <span class="form-text m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span> --}}
                                            <span clss="text-danger" style='color:red'>@error('contact') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Country</label>
    
                                        <div class="col-sm-10"><select name="country" class="form-control select">
                                        <?php  
                                          $country=$edata->country;  
                                          if($country=="") {
                                        ?>  
                                        <option value="">Select Country</option>
                                        <?php } else { ?> <option value="{{ $edata->country }}">{{ $edata->country }}</option><?php } ?>
                                        <option value="India">India</option>
                                        <option value="UAE">UAE</option>

                                    </select>
                                    <span clss="text-danger" style='color:red'>@error('country') {{ $message }} @enderror</span>    
                                </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Project Type</label>
                                         <div class="col-sm-10"><input type="text" name="type" value="{{ $edata->type }}" class="form-control">{{-- <span class="form-text m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span> --}}
                                            
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Amount</label>
                                         <div class="col-sm-10"><input type="text" name="amount" id="amnt" value="{{ $edata->amount }}" class="number form-control">{{-- <span class="form-text m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span> --}}
                                            <span clss="text-danger" style='color:red'>@error('amount') {{ $message }} @enderror</span>
                                        </div>
                                    </div>
                                  
                              
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Amount Received</label>
    
                                        <div class="col-sm-10"><input type="text" value="{{ $edata->received }}" id="ramnt" class="number form-control" name="received"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Amount Balanace</label>
    
                                        <div class="col-sm-10"><input type="text" value="{{ $edata->balance }}" id="bamnt" readonly name="balance" class="number form-control"></div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Status</label>
    
                                        <div class="col-lg-10"><input type="text" name="status" value="{{ $edata->status }}" class="form-control"></div>
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
     
