<?php

namespace App\Http\Controllers;

use App\Models\UserEntity\Owner;
use App\Models\UserEntity\OwnerCategory;
use App\Models\UserEntity\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class OwnerController extends Controller
{
    public function index(User $user)
    {
//        $user=$user->all();
        return view('panel.partials.main_content');
//        return 'everything is ok';
    }

    public function getOwners()
    {
        $user=(new User())->all();
        $owners=(new Owner())->all();
     return view('panel.partials.owners',compact('owners','user'));
    }

    public function getRegister()
    {
        if(Gate::denies('view',User::class))
        {
            abort(403,'access denied');
        }else
            {
                $owner_categories=(new OwnerCategory())->all(['title','id']);
                return view('panel.partials.register_form',compact('owner_categories'));

            }


    }

    public function postStore(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'              => 'required|unique:owners|min:3',
            'owner_category'    => 'required',
            'latitude'          => 'required',
            'longitude'         => 'required',
            'mobile'            => 'required|unique:owners|regex:/^09[0-9]{9}$/',
            'tel'               => 'required|regex:/^[1-9]{1}[0-9]{7}$/',
            'email'             => 'required|email|unique:owners',
            'address'           => 'required',
            'password'          => 'required|confirmed',
            'logo_path'         => 'nullable|file|mimes:jpg,jpeg,png',
            'activation_status' => ['required',Rule::in(Owner::$activation_status)]

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $owner=new Owner();

        $owner->name=request('name');
        $owner->owner_category_id=request('owner_category');
        $owner->latitude=request('latitude');
        $owner->longitude=request('longitude');
        $owner->mobile=request('mobile');
        $owner->tel=request('tel');
        $owner->email=request('email');
        $owner->address=request('address');
        $owner->password=request('password');
        $owner->logo_path=request('logo_path');
        $owner->activation_status=request('activation_status');

        $owner->save();

         return redirect()->route('dashboard.index');



    }
}
