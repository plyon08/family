@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">

            @include('transaction.includes.error')

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form class='mb-3' method="POST" action="{{ route('transactions.update', $transaction->id) }}">
                @method('PATCH')
                @csrf
                <div class="input-group py-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Amount:</span>
                    </div>
                    <input id="dollar_amount" type="number" class="form-control" name="dollar_amount" placeholder="0.00" step="0.01" value="{{ $transaction->dollar_amount }}" required>
                </div>
                <div class="input-group py-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Date:</span>
                    </div>
                    <input id="transaction_date" type="date" class="form-control" name="transaction_date" value="{{ $transaction->transaction_date->toDateString() }}" required>
                </div>
                <div class="input-group py-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Category:</span>
                    </div>
                    <a id="category-button" href="#category-list" class="btn btn-outline-info form-control" data-toggle="collapse">{{ $transaction->category }}</a>
                </div>
                <div id="category-list" class="input-group btn-group-vertical btn-group-toggle py-3 collapse" data-toggle="buttons">
                    <label class="btn btn-outline-info @if ('Income' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Income" @if ('Income' === $transaction->category) checked @endif> Income
                    </label>
                    <label class="btn btn-outline-info @if ('Interest' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Interest" @if ('Interest' === $transaction->category) checked @endif> Interest
                    </label>
                    <label class="btn btn-outline-info @if ('Cashback' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Cashback" @if ('Cashback' === $transaction->category) checked @endif> Cashback
                    </label>
                    <label class="btn btn-outline-info @if ('Car' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Car" @if ('Car' === $transaction->category) checked @endif> Car
                    </label>
                    <label class="btn btn-outline-info @if ('Car Insurance' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Car Insurance" @if ('Car Insurance' === $transaction->category) checked @endif> Car Insurance
                    </label>
                    <label class="btn btn-outline-info @if ('Child Care' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Child Care" @if ('Child Care' === $transaction->category) checked @endif> Child Care
                    </label>
                    <label class="btn btn-outline-info @if ('Eating Out' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Eating Out" @if ('Eating Out' === $transaction->category) checked @endif> Eating Out
                    </label>
                    <label class="btn btn-outline-info @if ('Entertainment' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Entertainment" @if ('Entertainment' === $transaction->category) checked @endif> Entertainment
                    </label>
                    <label class="btn btn-outline-info @if ('Gas' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Gas" @if ('Gas' === $transaction->category) checked @endif> Gas
                    </label>
                    <label class="btn btn-outline-info @if ('Groceries' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Groceries" @if ('Groceries' === $transaction->category) checked @endif> Groceries
                    </label>
                    <label class="btn btn-outline-info @if ('Household' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Household" @if ('Household' === $transaction->category) checked @endif> Household
                    </label>
                    <label class="btn btn-outline-info @if ('Internet' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Internet" @if ('Internet' === $transaction->category) checked @endif> Internet
                    </label>
                    <label class="btn btn-outline-info @if ('Medical' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Medical" @if ('Medical' === $transaction->category) checked @endif> Medical
                    </label>
                    <label class="btn btn-outline-info @if ('Mortgage' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Mortgage" @if ('Mortgage' === $transaction->category) checked @endif> Mortgage
                    </label>
                    <label class="btn btn-outline-info @if ('Other' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Other" @if ('Other' === $transaction->category) checked @endif> Other
                    </label>
                    <label class="btn btn-outline-info @if ('Personal Care' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Personal Care" @if ('Personal Care' === $transaction->category) checked @endif> Personal Care
                    </label>
                    <label class="btn btn-outline-info @if ('Phone' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Phone" @if ('Phone' === $transaction->category) checked @endif> Phone
                    </label>
                    <label class="btn btn-outline-info @if ('Shopping' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Shopping" @if ('Shopping' === $transaction->category) checked @endif> Shopping
                    </label>
                    <label class="btn btn-outline-info @if ('Savings' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Savings" @if ('Savings' === $transaction->category) checked @endif> Savings
                    </label>
                    <label class="btn btn-outline-info @if ('Savings-Deposit' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Savings-Deposit" @if ('Savings-Deposit' === $transaction->category) checked @endif> Savings-Deposit
                    </label>
                    <label class="btn btn-outline-info @if ('Savings-Withdrawal' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Savings-Withdrawal" @if ('Savings-Withdrawal' === $transaction->category) checked @endif> Savings-Withdrawal
                    </label>
                    <label class="btn btn-outline-info @if ('Savings-Interest' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Savings-Interest" @if ('Savings-Interest' === $transaction->category) checked @endif> Savings-Interest
                    </label>
                    <label class="btn btn-outline-info @if ('Savings-Cashback' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Savings-Cashback" @if ('Savings-Cashback' === $transaction->category) checked @endif> Savings-Cashback
                    </label>
                    <label class="btn btn-outline-info @if ('Student Loan' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Student Loan" @if ('Student Loan' === $transaction->category) checked @endif> Student Loan
                    </label>
                    <label class="btn btn-outline-info @if ('Utilities-Electric' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Utilities-Electric" @if ('Utilities-Electric' === $transaction->category) checked @endif> Utilities-Electric
                    </label>
                    <label class="btn btn-outline-info @if ('Utilities-Garbage' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Utilities-Garbage" @if ('Utilities-Garbage' === $transaction->category) checked @endif> Utilities-Garbage
                    </label>
                    <label class="btn btn-outline-info @if ('Utilities-Natural Gas' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Utilities-Natural Gas" @if ('Utilities-Natural Gas' === $transaction->category) checked @endif> Utilities-Natural Gas
                    </label>
                    <label class="btn btn-outline-info @if ('Utilities-Water' === $transaction->category) active @endif">
                        <input type="radio" class="form-check-input" name="category" value="Utilities-Water" @if ('Utilities-Water' === $transaction->category) checked @endif> Utilities-Water
                    </label>
                </div>
                <div class="input-group py-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Notes:</span>
                    </div>
                    <input id="notes" type="text" class="form-control" name="notes" value="{{ $transaction->notes }}">
                </div>
                <div class='row justify-content-md-start mb-3'>
                    <div class='col col-md-2 col-lg-1'>
                        <div class='text-center'>
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                        </div>
                    </div>
                    <div class='col col-md-2 col-lg-1'>
                        <div class='text-center'>
                            <a class='btn btn-outline-warning' href='{{ url()->previous() }}'>Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection