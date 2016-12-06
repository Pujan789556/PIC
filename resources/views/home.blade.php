
@extends('layout.default')
@section('content')
       <center>
            <button type="button" onclick="window.location='{{ url("/transaction") }}'">Transaction Entry
            </button><br/>
            <button>Attendance</button><br/>
            <button>Reports</button>
       </center>
@stop
