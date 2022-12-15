@extends('templates.main')

@section('MainContent')

    <div id="FormWrapper">
        <div id="AlertWrapper">
            <p>{{ session('success') }}</p> 
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