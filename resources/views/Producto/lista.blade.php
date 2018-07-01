@extends('layouts.app')
@section('content')
	{{ Auth::user()->id }} <br>
	{{ Auth::user()->name }} <br>
	{{ Auth::user()->email }} <br>
@endsection