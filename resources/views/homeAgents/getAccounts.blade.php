@extends('layouts.admin-layouts')
@section('main')
    <div class="row my-3">
        <div class="col-12">
            <h1>Accounts</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Number</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Type</th>
                    <th scope="col">Overdraft</th>
                </tr>
                </thead>
                <tbody>
                @foreach($allData->accounts as $account)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$account->number}}</td>
                        <td>{{$account->balance}}</td>
                        <td>{{$account->type}}</td>
                        <td>{{$account->overdraft}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
