@extends('templates.main')

@section('MainContent')

    <div id="FormWrapper">
        <div id="AlertWrapper">
            @foreach ($errors->all() as $error)
                <h3>{{ $error }}</h3>
            @endforeach

            @if(session('success'))
                    <h3>{{ session('success') }}</h3>
            @endif
        </div>
        <form action="/SignUp" method="POST">
            @csrf
            <h2>Sign Up</h2>
            <input type="text" name="name" placeholder="Name" >
            <input type="Email" name="email" placeholder="Email">
            <input type="submit" name="submit" value="Sign Up">
        </form>
    </div>

@stop