@extends('template')


@section('page')
    <div>
    <form method="post">
    {{ csrf_field() }}
    First Name: <input type="text" id="fname" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    Email:<input type="text" name="email"><br>
    Phone:<input type="text" name="phone"><br>
    <input type="submit" value="Submit">
    </form>
    </div>
@endsection
