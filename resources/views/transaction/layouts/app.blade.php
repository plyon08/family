<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('transaction.includes.head')

<body>

    @include('transaction.includes.success')
    
    <main class="container py-3">
        @yield('content')
    </main>

    <div class="container">
        @include('transaction.includes.nav')
    </div>

</body>
</html>
