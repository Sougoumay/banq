@extends('layouts.admin-layouts')
@section('main')
    <div class="row">
        <div class="col-12">
            <h1>Client Information</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Id</label>
                <input type="number" value="{{$allData->id}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">First Name</label>
                <input type="text" value="{{$allData->first_name}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                <input type="text" value="{{$allData->last_name}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" value="{{$allData->Email}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                <input type="number" value="{{$allData->telephone}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Profession</label>
                <input type="text" value="{{$allData->profession}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Family Status</label>
                <input type="text" value="{{$allData->family_status}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="text" value="{{$allData->address}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Birthday</label>
                <input type="date" value="{{$allData->birthday}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Advisor</label>
                <input type="number" value="{{$allData->advisor}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
        </div>
    </div>
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
    <div class="row">
        <div class="col-12">
            <h1>Contracts</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($allData->contracts as $contract)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$contract->name}}</td>
                        <td>{{$contract->price}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
