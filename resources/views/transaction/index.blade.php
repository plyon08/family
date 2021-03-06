@extends('layouts.app')

@section('content')
    <div class="row income text-center">
        <div class="col">
            <h5>Income:</h5>
        </div>
        <div class="col">
            <h5>${{ $income }}</h5>
        </div>
    </div>
    <div class="row expense text-center">
        <div class="col">
            <h5>Expense:</h5>
        </div>
        <div class="col">
            <h5>${{ $expense }}</h5>
        </div>
    </div>
    <div class="row @if ($balance < 0) {{ 'negative-balance' }} @else {{ 'positive-balance' }} @endif text-center">
        <div class="col">
            <h5>Balance:</h5>
        </div>
        <div class="col">
            <h5>${{ $balance }}</h5>
        </div>
    </div>
    <div class="row savings text-center">
        <div class="col">
            <h5>Savings:</h5>
        </div>
        <div class="col">
            <h5>${{ $total_savings }}</h5>
        </div>
    </div>

    <div class="row mt-4 mb-3 column-headings">
        <div class="col">
            <h6>Date</h6>
        </div>
        <div class="col">
            <h6>Category</h6>
        </div>
        <div class="col text-right">
            <h6>Amount</h6>
        </div>
    </div>

    <div class="row">
        <div class="col">
        @foreach ($transactions as $t)
            <a class='transaction-link' href="{{ route('show',$t->id) }}">
                <div class="row @if ('Income' == $t->category || 'Interest' == $t->category || 'Cashback' == $t->category) {{ '' }} @elseif ('Savings' == $t->category || 'Savings-Deposit' == $t->category || 'Savings-Withdrawal' == $t->category || 'Savings-Interest' == $t->category || 'Savings-Cashback' == $t->category) {{ 'savings' }} @else {{ 'expense' }} @endif">
                    <div class="col">
                        {{ $t->transaction_date->toFormattedDateString() }}
                    </div>
                    <div class="col">
                        {{ $t->category }}
                    </div>
                    <div class="col text-right">
                        ${{ $t->dollar_amount }}
                    </div>
                </div>
            </a>        
        @endforeach
        </div>
    </div>
@endsection