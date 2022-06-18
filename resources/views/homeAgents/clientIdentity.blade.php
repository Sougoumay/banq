@extends('layouts.admin-layouts')
@section('main')
    <div class="row">
        <div class="col-12">
            <h1>Client Information</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Id</label>
                <input type="number" value="{{$client->id}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">First Name</label>
                <input type="text" value="{{$client->first_name}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                <input type="text" value="{{$client->last_name}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" value="{{$client->Email}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                <input type="number" value="{{$client->telephone}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Profession</label>
                <input type="text" value="{{$client->profession}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Family Status</label>
                <input type="text" value="{{$client->family_status}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="text" value="{{$client->address}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Birthday</label>
                <input type="date" value="{{$client->birthday}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Advisor</label>
                <input type="number" value="{{$client->advisor}}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
        </div>
    </div>

@endsection
