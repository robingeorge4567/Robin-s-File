<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Haccounts;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function home(){
        if(!Session::has('LoggesUser'))
        {
            return redirect('index');
        } else { 
        return view('home');
    }  
    }
    public function projects(){
        if(!Session::has('LoggesUser'))
        {
            return redirect('index');
        } else { 
        $alldata=Project::all();
      
        return view('projects',['projects'=> $alldata]);
        }  
    }


    public function haccounts(){
        if(!Session::has('LoggesUser'))
        {
            return redirect('index');
        } else { 
        $allaccdata=Haccounts::all();
      
        return view('haccounts',['haccounts'=> $allaccdata]);
        //return view('haccounts');
        }  
    }
    public function add_project(){
        if(!Session::has('LoggesUser'))
        {
            return redirect('index');
        } else {  
        return view('add_project');
        } 
    }
    public function add_haccounts(){
        if(!Session::has('LoggesUser'))
        {
            return redirect('index');
        } else {  
        return view('add_haccounts');
        } 
    }
    public function edit_project($id){

        if(!Session::has('LoggesUser'))
        {
            return redirect('index');
        } else {  
            $editdata=Project::find($id);
            return view('edit_project')->with('edata',$editdata);
        } 

    }

    public function profile($id){

        if(!Session::has('LoggesUser'))
        {
            return redirect('index');
        } else {  
            $editdata=User::find($id);
            return view('profile')->with('edata',$editdata);
        } 

    }

    public function edit_account($id){

        if(!Session::has('LoggesUser'))
        {
            return redirect('index');
        } else {  
            $editadata=Haccounts::find($id);
            return view('edit_account')->with('eadata',$editadata);
        } 

    }


    public function login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
       
        $userinfo = User::where('username','=', $request->username)->first();
        if(!$userinfo){
            return back() -> with('fail','This account is not exist');
        }else {
           // if(Hash::login($request->password,$userinfo->password)){
            if(Hash::check($request->password,$userinfo->password)){
              $request->session()->put('LoggesUser',$userinfo->id);  
              return redirect('home');
             } else {
                return back() -> with('fail','Incorrect Password');
            }
        }

        
    }

    public function save(Request $request){

        $request->validate([
        'name'=>'required',
        'contact'=>'required|numeric|unique:projects',
        'amount'=>'required|numeric',
        'received'=>'required|numeric',
        'balance'=>'required|numeric',
        'country'=>'required|numeric',    

        ]);

        $project=new Project();
        $project->name= $request->name;
        $project->contact= $request->contact;
        $project->country= $request->country;
        $project->type= $request->type;
        $project->amount= $request->amount;
        $project->received= $request->received;
        $project->balance= $request->balance;
        $project->status= $request->status;
        $save=$project->save();
        if($save){
         
            return redirect('projects')->with('sucess','Project added');
           
        } else {
            return back()->with('fail','Something went wrong.Project Not insterted');
        }

    }


    public function save_haccounts(Request $request){

        $request->validate([
        'domain_name'=>'required|unique:haccounts',
        'startdate'=>'required',
        'amount'=>'required|numeric',
        'email'=>'required|unique:haccounts,email|email',    
        'due_amount'=>'required|numeric', 

        ]);

        $haccount=new Haccounts();
        $haccount->domain_name= $request->domain_name;
        $haccount->startdate= date("d-m-Y", strtotime($request->startdate));
        $haccount->amount= $request->amount;
        $haccount->domain= $request->domain;
        $haccount->email= $request->email;
        $haccount->renewal_date=date("d-m-Y", strtotime($request->renewal_date));
        $haccount->due_amount= $request->due_amount;
        $haccount->payment_status= $request->payment_status;
        $haccount->service_with= $request->service_with;
        $haccount->notes= $request->notes;
        $save=$haccount->save();
        if($save){
         
            return redirect('haccounts')->with('sucess','Account added sucessfully');
           
        } else {
            return back()->with('fail','Something went wrong.Account Not insterted');
        }

    }
    

    public function update(Request $request,$id){

        $request->validate([
        'name'=>'required',
        'contact'=>'required|numeric',
        'amount'=>'required|numeric',
        'received'=>'required|numeric',
        'balance'=>'required|numeric',
        'country'=>'required|numeric',      

        ]);

        $project=Project::find($id);
        $project->name= $request->name;
        $project->contact= $request->contact;
        $project->country= $request->country;
        $project->type= $request->type;
        $project->amount= $request->amount;
        $project->received= $request->received;
        $project->balance= $request->balance;
        $project->status= $request->status;
        $update=$project->update();
        if($update){
         
            return redirect('projects')->with('sucess','Project update sucessfully');
           
        } else {
            return back()->with('fail','Something went wrong.Project Not updated');
        }

    }

    public function update_account(Request $request,$id){

        $request->validate([
            'domain_name'=>'required',
            'startdate'=>'required',
            'amount'=>'required|numeric',
            'email'=>'required',    
            'due_amount'=>'required|numeric', 
    
            ]);

        $haccount=Haccounts::find($id);
        $haccount->domain_name= $request->domain_name;
        $haccount->startdate= date("d-m-Y", strtotime($request->startdate));
        $haccount->amount= $request->amount;
        $haccount->domain= $request->domain;
        $haccount->email= $request->email;
        $haccount->renewal_date= date("d-m-Y", strtotime($request->renewal_date));
        $haccount->due_amount= $request->due_amount;
        $haccount->payment_status= $request->payment_status;
        $haccount->service_with= $request->service_with;
        $haccount->notes= $request->notes;
        $update=$haccount->update();
        if($update){
         
            return redirect('haccounts')->with('sucess','Account update sucessfully');
           
        } else {
            return back()->with('fail','Something went wrong.Account Not updated');
        }

    }

    public function change_password(Request $request,$id){

        $request->validate([
            'password'=>'required',
        
    
            ]);

        $user=User::find($id);
        $user->password=Hash::make($request->password);
      
        $update= $user->update();
        if($update){
         
            return Redirect::Route('profile',$id)->with('sucess','Password changed successfully');
           
        } else {
            return back()->with('fail','Something went wrong.Password Not updated');
        }

    }

    public function delete($id){

        $project = Project::find($id);
        $delete=$project->delete();
        if($delete){
         
            return redirect('projects')->with('sucess','Project deleted sucessfully');
           
        } else {
            return back()->with('fail','Something went wrong.Project Not deleted');
        }

    }

    public function delete_account($id){

        $haccount = Haccounts::find($id);
        $delete=$haccount->delete();
        if($delete){
         
            return redirect('haccounts')->with('sucess','Account deleted sucessfully');
           
        } else {
            return back()->with('fail','Something went wrong.Account Not deleted');
        }

    }
    
    public function logout(Request $request) {
    
        Session::flush();
        
        Auth::logout();

        return redirect('index')->with('message', 'You have been logged out');;
    }
 
}
