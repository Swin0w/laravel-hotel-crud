@extends('layouts.main-layout')
@section('content')
<ul>
    @foreach ($employees as $employee)
        <li>
            <a href="{{ route('detail', $employee -> id) }}">
                <div class="card">
                    <span>{{ $employee -> firstname }}</span>
                    <span>{{ $employee -> lastname }}</span>
                </div>
            </a>
        </li>
    @endforeach
</ul>
@endsection