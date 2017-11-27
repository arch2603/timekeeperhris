<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title as Title;

class UsersController extends Controller
{
    //

    public function __construct(Title $titles)
    {
        //storing titles pass as a parameter from the Titles library-class and store in user_controller
        //object variable called titles;
        $this->titles = $titles->all();
    }

    public function di()
    {
        dd("test");
    }

    public function index()
    {
        $data = [];
        $obj = new \stdClass;
        $obj->id = 1;
        $obj->user_name = 'johnc';
        $obj->name = 'john';
        $obj->last_name = 'doe';
        $obj->mobile = '0415745222';
        $obj->email = 'john@domain.com';
        $data['users'][] = $obj;//assigning user objects to array data

        $obj = new \stdClass;
        $obj->id = 2;
        $obj->user_name = 'janedoe';
        $obj->name = 'jane';
        $obj->last_name = 'doe';
        $obj->mobile = '0415745233';
        $obj->email = 'jane@another-domain.com';
        $data['users'][] = $obj;//assigning user objects to array data

        return view('users/index', $data);
    }

    public function newUser(Request $request)
    {
        $data = [];
        //$data ['title'] = $request->input('title');
        $data ['user_name'] = $request->input('user_name');
        $data ['name'] = $request->input('name');
        $data ['last_name'] = $request->input('last_name');
        $data ['mobile'] = $request->input('mobile');
        //$data ['zip_code'] = $request->input('zip_code');
        //$data ['city'] = $request->input('city');
        $data ['email'] = $request->input('title');

        $data['titles'] = $this->titles;//from the titles Library define above
        $data['modify'] = 0;

        if($request->isMethod('post'))
        {
            //dd($data);
            $this->validate(
                $request,
                [
                    'user_name' => 'required | min:4',
                    'name' => 'required | min:2',
                    'last_name' => 'required',
                    'mobile' => 'required',
                    'email'=> 'required',

                ]
            );
            return redirect('users');
        }

        return view('users/form', $data);
    }

    public function createUser()
    {

        return view('users/create');
    }

    public function show($user_id)
    {
        $data = [];
        //$data['titles'] = $this->titles;//from the titles Library define above
        $data['modify'] = 1;
        return view('users/form', $data);
    }

}
