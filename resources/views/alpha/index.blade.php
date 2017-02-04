@extends('alpha.layout')

@section('banner')

	@include('alpha.includes.index.banner')

@endsection

@section('content')

	@include('alpha.includes.index.major')
	@include('alpha.includes.index.features')
	@include('alpha.includes.index.prices')

@endsection

@section('subscribe')

	@include('alpha.includes.index.subscribe')

@endsection
