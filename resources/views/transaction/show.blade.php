@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h4>Transaction Date: {{ $transaction->transaction_date->toFormattedDateString() }}</h4>
            <h4 class="@unless ('Income' == $transaction->category || 'Interest' == $transaction->category || 'Cashback' == $transaction->category){{ 'expense' }}@endunless">Amount: ${{ $transaction->dollar_amount }}</h4>
            <h4>Category: {{ $transaction->category }}</h4>
            <h4>Notes: {{ $transaction->notes }}</h4>
        </div>
    </div>
    <div class='row justify-content-md-start mt-3'>
        <div class='col col-md-2 col-lg-1'>
            <div class='text-center'><a class='btn btn-outline-success' href="{{ route('transactions.edit', $transaction->id) }}">Update</a></div>
        </div>
        <div class='col col-md-2 col-lg-1'>
            <div class='text-center'>
            <form method='POST' action="{{ route('transactions.destroy',$transaction->id) }}">
                @method('DELETE')
                @csrf
                <button type='submit' class='btn btn-outline-danger'>Delete</button>
            </form>
            </div>
        </div>
        <div class='col col-md-2 col-lg-1'>
            <div class='text-center'>
                <a class='btn btn-outline-warning' href="{{ route('transactions.index') }}">Transactions</a>
            </div>
        </div>
    </div>
@endsection