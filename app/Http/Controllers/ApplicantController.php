<?php

namespace App\Http\Controllers;

use App\Applicant, App\EduBackground, App\WorkExp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c=0;
        //id user login
        $idauth = Auth::User()->id;

        // get id_app from applicant
        $check = Applicant::select('id_user')->where('id_user',$idauth)->get();
         foreach ($check as  $value) {
            $c = $value->id_user;
         }

        //validation for personal information 
        if ($c == $idauth){
            $applicants = Applicant::select('id')->where('id_user',$idauth)->get();
            //dd($applicants );
            return view('applicants.dashboard')->with('applicants',$applicants);
        } else {
             $applicants = Applicant::select('id')->where('id_user',$idauth)->get();
             //dd($applicants);
            return redirect(route('applicants.create'))->with('applicants',$applicants);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get id user
        $id = Auth::User()->id;
        
        //return view with id user to create profile
        return view('applicants.create_profile')->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //message
        $message = [
            'regex' => 'Sorry use symbol ( . ) not ( ,) in column GPA !',
            'numeric' => 'only input numeric value in column GPA'
        ];
        //validation for form
        $validation = Validator::make($request->all(), [
            'full_name' => 'required',
            'gender' => 'required',
            'pob' => 'required',
            'phone_numb' => 'required',
            'address' => 'required',
            // 'gpa.*' => 'numeric|regex:/^[^,]*[^ ,][^,]*$/'
        ], $message);
        //if form null, back to form
        if ($validation->fails()){
            return redirect()->back()->withInput()->with('errors', $validation->errors());
        } else {
            $applicant = Applicant::create($request->all());

            //get id applicant 
            $id = $applicant->id;
    
            //request data
            $years = $request->years;
            $yearsw = $request->yearswork;
            $arinstitution = $request->institution;
            $arcompany = $request->company;
            $arlevel = $request->level;
            $arposition = $request->position;
            $argpa = $request->gpa;
    
            //foreach data an save
            if ( !empty($request->years) ){
                foreach ( $years as $key => $year) {
                    $edu = new EduBackground();
                    $edu->id_app = $id;
                    $edu->years = $year;
                    $edu->institution =  $arinstitution[$key];
                    $edu->level =  $arlevel[$key];
                    $edu->gpa =  $argpa[$key];
                    $edu->save();
                }
            }
            
            if (!empty($request->yearswork)){
                //dd($request->yearswork);
                //add value to array
                foreach ( $yearsw as $key => $y) {
                    $WorkEx = new WorkExp();
                    $WorkEx->id_app = $id;
                    $WorkEx->years = $y;
                    $WorkEx->company = $arcompany[$key];
                    $WorkEx->position = $arposition[$key]; 
                    $WorkEx->save();
                }
            }
            Session::flash("notice","You profile has beens saved !! ");
            return view('applicants.dashboard');
        }
        
    }

    public function upload()
    {
        $c=0;
        //id user login
        $idauth = Auth::User()->id;

        // get id_app from applicant
        $applicants = Applicant::select('id')->where('id_user',$idauth)->get();
         
        return view('applicants.upload')->with('applicants',$applicants);

         
        // $applicants = Applicant::with(['EduBackground','WorkExp'])->get();
        //return view('applicants.upload')->with('applicants',$applicants);

    }
    public function storeUpload(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'userfile.*' => 'required|mimes:pdf|max:10000'
        ]);

        if ($validation->fails()){
            return redirect()->back()->withInput()->with('errors', $validation->errors());
        }else {

            //$id = $applicant->id;
            //$applicant = Applicant::all();  
            if ($request->hasFile('userfile')) {
            $files = $request->file('userfile');
            foreach ($files as $file) {
                $destination_path = 'uploads/';
                $filename = str_random(6).'_'.$file->getClientOriginalName();
                $file->move($destination_path, $filename);

                //update
                $applicant = Applicant::find($request->id); 
                $applicant->upload_cv = $destination_path . $filename;
                $applicant->save();   
                    
                }
            }   
            Session::flash("notice","Upload file success ");
            return redirect()->route("applicants.index");
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Eager loading
        $applicants = Applicant::with(['EduBackground','WorkExp'])->get();
        return view('applicants.show')->with('applicants',$applicants);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
