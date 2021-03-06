<div class="row">
    <nav id="main-navbar" class="navbar fixed-bottom navbar-expand-xs navbar-dark bg-dark">
        <div class="col-12">
            @auth
            <div class="collapse navbar-collapse mb-sm-3" id="filter-form">
                <form class='form-inline' method='GET' action="{{ route('index') }}">
                    @csrf
                    <div class='form-group mx-auto'>
                        <select name="category" id="category" class='custom-select custom-select-sm'>
                            <option value="">Category</option>
                            <option value="Income">Income</option>
                            <option value="Interest">Interest</option>
                            <option value="Cashback">Cashback</option>
                            <option value="Car">Car</option>
                            <option value="Car Insurance">Car Insurance</option>
                            <option value="Child Care">Child Care</option>
                            <option value="Eating Out">Eating Out</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Gas">Gas</option>
                            <option value="Groceries">Groceries</option>
                            <option value="Household">Household</option>
                            <option value="Internet">Internet</option>
                            <option value="Medical">Medical</option>
                            <option value="Mortgage">Mortgage</option>
                            <option value="Other">Other</option>
                            <option value="Personal Care">Personal Care</option>
                            <option value="Phone">Phone</option>
                            <option value="Shopping">Shopping</option>
                            <option value="Savings-All">Savings-All</option>
                            <option value="Savings">Savings</option>
                            <option value="Savings-Deposit">Savings-Deposit</option>
                            <option value="Savings-Withdrawal">Savings-Withdrawal</option>
                            <option value="Savings-Interest">Savings-Interest</option>
                            <option value="Savings-Cashback">Savings-Cashback</option>
                            <option value="Student Loan">Student Loan</option>
                            <option value="Utilities-Electric">Utilities-Electric</option>
                            <option value="Utilities-Garbage">Utilities-Garbage</option>
                            <option value="Utilities-Natural Gas">Utilities-Natural Gas</option>
                            <option value="Utilities-Water">Utilities-Water</option>
                        </select>
                    </div>
                    <div class='form-group mx-auto'>
                        <select name="month" id="month" class="custom-select custom-select-sm">
                            <option value="">Month</option>
                            <option value=01>January</option>
                            <option value=02>February</option>
                            <option value=03>March</option>
                            <option value=04>April</option>
                            <option value=05>May</option>
                            <option value=06>June</option>
                            <option value=07>July</option>
                            <option value=08>August</option>
                            <option value=09>September</option>
                            <option value=10>October</option>
                            <option value=11>November</option>
                            <option value=12>December</option>
                        </select>
                    </div>
                    <div class='form-group mx-auto'>
                        <select name="year" id="year" class="custom-select custom-select-sm">
                            <option value="">Year</option>
                            @php
                                $date = getdate();
                            @endphp
                            @for ($i = 2018; $i <= $date['year']; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <button type='submit' class='btn btn-outline-success mx-auto'>Submit</button>
                </form>
            </div>
            @endauth

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav text-right">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">View Transactions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('create') }}">Add Transaction</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li> --}}
                    @endauth
                </ul>
            </div>

            <ul class="nav justify-content-between">
                <li class="nav-item">
                    <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#filter-form" aria-controls="filter-form" aria-expanded="false" aria-label="Toggle navigation">
                        Filter
                    </button>
                </li>
                <li class="nav-item">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </li>
            </ul>
            
        </div>
    </nav>
</div>