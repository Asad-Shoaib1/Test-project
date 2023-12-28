@extends('layouts.sidebar')
@section('dashboard')

  <h1>Welcome   {{Auth::user()->name}}</h1> 
@endsection