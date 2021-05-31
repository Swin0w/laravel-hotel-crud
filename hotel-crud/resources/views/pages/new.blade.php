@extends('layouts.main-layout')
@section('content')
<h1>Crea impiegato:</h1>
<form method="POST" action="{{ route('store') }}">

    @csrf
    @method('POST')
    
    <input type="text" placeholder="Il tuo nome..." name="firstname">
    <input type="text" placeholder="Il tuo cognome..." name="lastname">
    <input type="text" placeholder="Ruolo..." name="role">
    <input type="number" placeholder="Reddito lordo annuale..." name="ral">
    <input type="submit" value="Crea">
</form>
    
@endsection