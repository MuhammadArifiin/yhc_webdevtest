@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
<h1>Test</h1>
<a href="{{ URL::to('projects') }}">Go to Project's Page</a> <br>
@endsection