@extends('templates.main')

@section('MainContent')

    <div id="FormWrapper">
        <form action="/SignUp" method="POST">
            @csrf
            <h2>Sign Up</h2>
            <label>Name</label>
            <input type="text" name="name" >
            <label>Email</label>
            <input type="Email" name="email">
            <input type="submit" name="submit" value="Sign Up">
        </form>
    </div>

@stop