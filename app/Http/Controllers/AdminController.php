<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\CompanyDetail;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function checklogin(Request $request)
    {
        //$MyFinalResult = array();
        
        $email = $request->input('email');
        $password = $request->input('password');

        $affected = DB::table('admin_details')
              ->where('email', $email)
              ->where('password', $password)
              ->get();

        foreach ($affected as $user) {

                //  $user->email;
                //  $user->password;
                 $com_id =  $user->company_id;

            $affected = DB::table('company_details')
              ->where('id', $com_id)
              ->get();  
              
              $affected->email = $user->email;
              $affected->password = $user->password;

            }         
            
            //$arr = array(1, 2, 3, 4);


        return view('admin.admin_home',['FinalResult' => $affected]); //->with('finaldata',$arr);





        // $row_affected = count($affected);
        // $affected->values('company_id');
        // var_dump($affected);
        
        // if( $row_affected == 1)
        // {
        //     echo "yes";
        // }
         
        // else 
        // {
        //    echo "no";
        // }
            //   foreach ($myArray as $user) {

            //     // echo $user->email;
            //     // echo $user->password;
            //     echo $user->company_id;

            // }
              //var_dump($affected);
    }



    public function admin_home()
    {
        return view('admin.admin_home');
    }

    public function add_company()
    {
        return view('admin.add_company');
    }

    public function insert_company(Request $request)
    {
        $addcomp = new CompanyDetail();
        
        $addcomp->company_name = $request->input('company_name');
        $addcomp->company_address = $request->input('company_address');
        $addcomp->company_phone_number = $request->input('company_phone_number');
        $addcomp->Company_Website = $request->input('Company_Website');
        $addcomp->company_govt_registration_number = $request->input('company_govt_registration_number');
        $addcomp->added_by = 'Neeraj';
        $addcomp->is_Verified = '1';

        if($request->hasFile('company_logo')) {
         
            $file = $request->file('company_logo');
            $name = $file->getClientOriginalName();
            $file->move('uploads/images/companies_logo/',$name);
            $addcomp->company_logo = $name;

        }
        else {
            return $request;
            $addcomp->company_logo = '';
        }
        
        $addcomp->save();
        return view('admin.admin_home');  
            
    }

    public function add_car()
    {
        return view('admin.add_car');
    }

    public function view_cars()
    {
        return view('admin.view_cars');
    }

    public function add_user()
    {
        return view('admin.add_user');
    }

    public function view_users()
    {
        return view('admin.view_users');
    }
}
