@extends('layouts.main-layout')
@section('content')
<a href="{{ route('new') }}">Crea nuovo impiegato</a>
<ul>
    @foreach ($employees as $employee)
        <li>
            <a href="{{ route('detail', $employee -> id) }}">
                <div class="card">
                    <span>{{ $employee -> firstname }}</span>
                    <span>{{ $employee -> lastname }}</span>
                    <a href="{{ route('edit', $employee -> id) }}">&#9998;</a>
                    <a href="{{ route('destroy', $employee -> id) }}">&#10060;</a>
                </div>
            </a>
        </li>
    @endforeach
</ul>
@endsection