@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">

            @include('transaction.includes.error')

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form id="transation-form" method="POST" action="{{ route('transactions.store') }}">
                @csrf
                <div class="input-group py-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Amount:</span>
                    </div>
                    <input id="dollar_amount" type="number" class="form-control" name="dollar_amount" placeholder="0.00" step="0.01" required>
                </div>
                <div class="input-group py-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Date:</span>
                    </div>
                    <input id="transaction_date" type="date" class="form-control" name="transaction_date" required>
                </div>
                <div class="input-group py-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Category:</span>
                    </div>
                    <a id="category-button" href="#category-list" class="btn btn-outline-info form-control" data-toggle="collapse"></a>
                </div>
                <div id="category-list" class="input-group btn-group-vertical btn-group-toggle py-3 collapse" data-toggle="buttons">
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Income"> Income
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Interest"> Interest
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Cashback"> Cashback
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Car"> Car
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Car Insurance"> Car Insurance
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Child Care"> Child Care
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Eating Out"> Eating Out
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Entertainment"> Entertainment
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Gas"> Gas
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Groceries"> Groceries
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Household"> Household
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Internet"> Internet
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Medical"> Medical
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Mortgage"> Mortgage
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Other"> Other
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Personal Care"> Personal Care
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Phone"> Phone
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Shopping"> Shopping
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Savings"> Savings
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Savings-Deposit"> Savings-Deposit
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Savings-Withdrawal"> Savings-Withdrawal
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Savings-Interest"> Savings-Interest
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Savings-Cashback"> Savings-Cashback
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Student Loan"> Student Loan
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Utilities-Electric"> Utilities-Electric
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Utilities-Garbage"> Utilities-Garbage
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Utilities-Natural Gas"> Utilities-Natural Gas
                    </label>
                    <label class="btn btn-outline-info">
                        <input type="radio" class="form-check-input" name="category" value="Utilities-Water"> Utilities-Water
                    </label>
                </div>
                <div class="input-group py-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Notes:</span>
                    </div>
                    <input id="notes" type="text" class="form-control" name="notes">
                </div>
                <div class='row justify-content-md-start'>
                    <div class='col col-md-6 col-lg-1'>
                        <div class='text-center'>
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                        </div>
                    </div>
                    <div class='col col-md-6 col-lg-1'>
                        <div class='text-center'>
                            <a class='btn btn-outline-warning' href="{{ route('transactions.index') }}">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection