@extends('layouts.admin-layouts')
@section('main')
    <div class="row">
        <div class="col-12">
            <form action="#" method="post">
                <div class="selected my-3">
                    <label for="exampleFormControlInput1" class="form-label">Operation Type</label>
                    <select class="form-select" name="operation">
                        <option selected>Open this select menu</option>
                        <option value="Deposit">Deposit</option>
                        <option value="Withdrawal">Withdrawal</option>
                    </select>
                </div>
                <div class="selected my-3">
                    <label for="exampleFormControlInput1" class="form-label">Amount</label>
                    <select class="form-select" name="amount">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">40</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                    </select>
                </div>

                <div class="input-group my-5">
                    <input type="submit" value="Submit" class="form-control" aria-describedby="inputGroup-sizing-default">
                </div>

            </form>

        </div>
    </div>
@endsection
