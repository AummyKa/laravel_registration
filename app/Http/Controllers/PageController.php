<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Input;
use App\Http\Controllers\Controller;
use Request;
use App\Http\Models\User;


class PageController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile()
    {
        $user = Profile::all();
        return view('profile')->with('user', $user);
    }

     public function showRegist()
    {
        
        return view('lala_register');
    }

  
    public function index(){
        $result = User::getData();
        return view('data_table')->with('results', $result);
    }


  
    public function update($id)
    {
      try{
      $interest = implode(",",Request::input('interest'));

      }catch(Exception $e){

      }
     

       User::where('id', $id)->update(array('name'=> Request::input('name')
                                            , 'lastname' => Request::input('lastname')
                                            , 'username' => Request::input('username')
                                            , 'password' => Request::input('password')
                                            , 'sex' => Request::input('sex')
                                            , 'date_of_birth' => Request::input('date_of_birth')
                                            , 'interest' => $interest));
      
       return redirect('data_table');
    }

    public function destroy()
    {
        $id = Request::input('user_id');
       User::find($id)->delete();
       return redirect('data_table');
    }

    public function edit($id){
       $result=User::find($id);

       // Sex radio
       if ($result->sex == 'female')
          $result->status_f = 'checked';
        if ($result->sex == 'male')
          $result->status_m = 'checked';

        // Interest checkbox
        if (strpos($result,'Games') !== false){
          $result->status_g = 'checked';
        }
        if (strpos($result,'Sport') !== false){
          $result->status_s = 'checked';
        }
        if (strpos($result,'Music') !== false){
          $result->status_mu = 'checked';
        }


        return view('edit-form',compact('result'));
    }

    public function insert(){

       try{
      $interest = implode(",",Request::input('interest'));

      }catch(Exception $e){

      }
      User::create(['name'      => Request::input('name'),
                    'lastname'      => Request::input('lastname'),
                    'username'      => Request::input('username'), 
                    'password'      => Request::input('password'), 
                    'sex'           => Request::input('sex'), 
                    'date_of_birth' => Request::input('date_of_birth'),
                    'interest'      => $interest
                    ]);
      // $user = new User;

      // $user->username = Request::input('name');
      // $user->lastname = Request::input('lastname');
      // $user->username = Request::input('username');
      // $user->password = Request::input('password');
      // $user->sex = Request::input('sex');
      // $user->date_of_birth = Request::input('date_of_birth');
      // $user->interest = Request::input('interest');

      // $user->save();

      return redirect('data_table');
    }
    


}