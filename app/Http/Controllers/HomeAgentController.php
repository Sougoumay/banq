<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpeningAccountRequest;
use App\Http\Requests\MakeOperationRequest;
use App\Models\Account;
use App\Models\Client;
use App\Models\Planning;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeAgentController extends Controller
{
    /**
     * @param Client $client
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * all information about advisor of the specified client, theirs accounts, theirs contracts
     */
    public function clientSynthesis(Client $client) {

        $allData = Client::with('contracts','accounts','user')->find($client->id);

        return view('homeAgents.synthesisClient',compact('allData'));
    }

    /**
     * @param $name
     * @param $birthday
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * the client with the specified name and birthday
     */
    public function findClient($name, $birthday)
    {
        $client = Client::where('birthday',$birthday)->where('last_name',$name)->first();

        return view('homeAgents.clientIdentity', compact($client));
    }

    public function getAccounts($id)
    {
        $accounts = Account::where('client_id',$id)->first();

        return view('homeAgents.getAccounts', compact('accounts'));
    }

    public function operationPage(Account $account)
    {
        return view('homeAgents.operationPage', compact('account'));
    }

    public function makeOperation(MakeOperationRequest $request, Account $account, $amount)
    {
        try {
            if ($request->get('operation') == 'withdramak') {
                $account->update([
                    'balance' => $account->balance - $amount
                ]);
            } else {
                $account->update([
                    'balance' => $account->balance + $amount
                ]);
            }

            if ($account->wasChanged()) {
                $client = Client::find($account->id_client);
                return redirect()->route('clientSynthesis', $client);
            }


        } catch (\Exception $exception) {
            Log::info($exception);
            return back()->with('The operation is failed');
        }
    }

    public function getAdvisorPlanning(Client $client, $start_week)
    {
        $advisor = User::find($client->user_id);
        $plannings = Planning::where('user_id',$advisor->id)->where('start_week',$start_week)
            ->where('day','>=',$start_week)->where('day','<',$start_week+7);

        return view('homeAgents.getAdvisorPlanning', compact('plannings'));
    }

    public function makeAppointment(Client $client, $start_week)
    {

    }

}
