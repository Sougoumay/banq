<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpeningAccountRequest;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\SellContractRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdvisorController extends Controller
{
    public function getClientRegisterPage()
    {
        return view('advisors.getRegisterPage');
    }

    public function register(ClientRequest $clientRequest)
    {
        try {
            $newClient = Client::create([
                'first_name'=>$clientRequest->get('first_name'),
                'last_name'=>$clientRequest->get('last_name'),
                'profession'=>$clientRequest->get('profession'),
                'telephone'=>$clientRequest->get('telephone'),
                'email'=>$clientRequest->get('email'),
                'password'=>Hash::make($clientRequest->get('password')),
                'family_status'=>$clientRequest->get('family_status'),
                'birthday'=>$clientRequest->get('birthday'),
                'address'=>$clientRequest->get('address'),
                'user_id'=>Auth::id()
            ]);

            return redirect()->route('advisor.viewClient',$newClient);
        } catch (\Exception $e) {
            Log::info($e);
        }
    }

    public function viewClient(Client $client)
    {
        return view('advisors.viewClient', compact('client'));
    }

    public function sellContract(SellContractRequest $contractRequest, Client $client)
    {

    }

    public function openingAccount(OpeningAccountRequest $accountRequest)
    {

    }

    public function updateOverdraftValue()
    {

    }
}
