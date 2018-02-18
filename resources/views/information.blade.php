@extends('template')


@section('page')
    <div>
    @if (isset($success) and $success)
        Thanks!
    @else
        <form method="post">
        {{ csrf_field() }}
        First Name: <input type="text" id="fname" name="fname" value=""><br>
        Last Name: <input type="text" name="lname"><br>
        Email:<input type="text" name="email"><br>
        Phone:<input type="text" name="phone"><br>
        <input type="submit" value="Submit">
        </form>
    @endif
    </div>
@endsection
