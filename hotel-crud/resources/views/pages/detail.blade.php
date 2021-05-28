@extends('layouts.main-layout')
@section('content')
    <div id="card">
        <p><b>Nome: </b>{{ $detail -> firstname }}</p>
        <p><b>Cognome: </b>{{ $detail -> lastname }}</p>
        <p><b>Ruolo: </b>{{ $detail -> role }}</p>
        <p><b>Reddito annuale lordo: </b>{{ $detail -> ral }}</p>
    </div>
@endsection