<?php

namespace App\Http\Controllers;

use App\Http\Requests\Director\UpdateEmployeeIdentifier;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\UserRequest;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class DirectorController extends Controller
{

    public function getCreateUserPage()
    {
        return view('directors.getCreateUserPage');
    }

    public function createUser(UserRequest $userRequest)
    {
        try {
            if(Auth::user()->status==="director") {
                DB::transaction(function () use ($userRequest) {
                    $director = Auth::id();

                    $newUser = User::create([
                        'first_name'=>$userRequest->get('first_name'),
                        'last_name'=>$userRequest->get('last_name'),
                        'profession'=>$userRequest->get('profession'),
                        'telephone'=>$userRequest->get('telephone'),
                        'email'=>$userRequest->get('email'),
                        'password'=>Hash::make($userRequest->get('password')),
                        'family_status'=>$userRequest->get('family_status'),
                        'birthday'=>$userRequest->get('birthday'),
                        'address'=>$userRequest->get('address'),
                        'status'=>$userRequest->get('status'),
                    ]);

                    Employee::create([
                        'director_id'=>$director,
                        'employee_id'=>$newUser
                    ]);

                    return view('directors.viewEmployee', compact('newUser','director'));
                });


            }
        } catch (\Exception $e) {
            Log::info($e);
        }
    }

    public function updateEmployeeIdentifier(User $user, UpdateEmployeeIdentifier $request)
    {
        try {
            $user->update($request->validated());
            $director = Auth::id();
            return view('directors.viewEmployee', compact('user','director'));
        } catch (\Exception $exception) {
            Log::info($exception);
        }
    }

}
