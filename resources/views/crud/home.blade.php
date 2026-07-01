@extends('layouts.app')

@section('content')
    <div>
        Home Page

        {{ $user->name }} {{ $user->email }} {{ $user->password }}

    </div>
@endsection
