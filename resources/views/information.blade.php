@extends('template')


@section('page')
    <div>
    <form id="form1" method="post">
    First Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    Email:<input type="text" name="email"><br>
    Phone:<input type="text" name="phone"><br>
    <input type="submit" value="Submit">
    </form>
    </div>
@endsection
