<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Type\Integer;

class AdminController extends Controller
{
    

//show all employee 
    function index(){

    

        $employees = Employee::all();

        

        return view('listemp',compact('employees'));
    }

    function store (Request $request){

            $emp = Employee::create([

                'name'=> $request->name ,
                'email' => $request->email,
                'age' => $request->age,
                'poste'=> $request->poste,
                'salaire'=>$request->salaire ,
        ]);

     
     

      return redirect()->intended('admin');
    }

    //show users 
   public function indexo(){

    //ad is for user

   $ad  =  User::all();


        return view('admin',compact('ad'));
    }


    

    public function showinfo(){

        $total = 0 ; 
        $countPost = 0 ;
        $ad = Employee::all();

        $coun = count($ad);

        foreach($ad as $em){
        $total = $total + $em->salaire;
        }
       // $cc = money_format('%i',$total);

       $label = $ad->pluck('name');
       $salary = $ad->pluck('salaire');
      
  

       $posst = DB::table('employees')
                        ->select('poste')
                        //->pluck('poste')
                        ->groupBy('poste')
                        ->get();

                        $post = $posst->pluck('poste');

                           
                        $post_c = DB::table('employees')
                        ->selectRaw('count(poste)')
                        ->groupBy('poste')
                        ->get();

                        //po is for post 

                        $po = $post_c->pluck('count(poste)');
                         

                          

                       
       
        return view('admin',compact('coun','total','label','salary','post','po'));

    }
    


    public function showEmpRegisterForm()
    {
        return view('navbar');
    }

    public function delete($id){

        //emp for employee 
        $emp = Employee::findOrFail($id);

        $emp->delete();

         
        
        return redirect()->intended('/employee');
    }

    public function showemp($id){

        



        $emps = Employee::all()->where('id','=',$id);

        return view('showemp',compact('emps'));
    }


    public function update(Request $request,$id){

        //Update User depend on His Id 

    $emp = Employee::findOrfail($id);

    $emp->name = $request->name ;
    $emp->email = $request->email ; 
    $emp->age = $request->age ; 
    $emp->poste = $request->poste ; 
    $emp->salaire = $request->salaire ; 

    $emp->save();

    return back()->with(['alert'=>'Successfuly saved']);
    }


    public function contact_us(){

        return view('contact');
    }

} 
