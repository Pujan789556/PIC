    
@extends('layout.default')
@section('content')
       <center>
            <form action="/login" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                USERNAME : <input type="text" name="username"><br/>
                PASSWORD : <input type="password" name="password"><br/>
                <input type="submit" name="login" value="Login">
            </form>
       </center>
@stop



