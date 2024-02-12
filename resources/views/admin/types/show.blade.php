@extends('layouts.admin')

@section('content')
    <h2 class="my-3">{{ $type->name }}</h2>
    <p>slug: {{ $type->slug }}</p>
    <a href="{{ route('admin.types.index') }}" class="btn btn-info text-light">Torna alla lista delle tipologie</a>
@endsection
