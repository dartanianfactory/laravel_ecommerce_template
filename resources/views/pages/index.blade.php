@extends('layouts.index')

@section('content')
    @include('components.info.description')
    @include('components.store.catalog')
    @include('components.info.partners')
    @include('components.info.reasons')
@endsection
