@extends('layouts.main-layout')
@section('content')
<h1>Modifica impiegato:</h1>
<form method="POST" action="{{ route('edit') }}">

    @csrf
    @method('POST')
    <input type="text">
    <input type="text">
    <input type="text">
    <input type="number">
    <input type="submit" value="Modify">
</form>
    
@endsection