@extends('template')


@section('page')
    <img src="{{ $files[0] }}" id="photo"/>
    <div id="thumbwrapper">
    @foreach ($files as $file)
        <img src="{{ $file }}" onclick="swap(this)" class="thumb" />
    @endforeach
    </div>
@endsection
