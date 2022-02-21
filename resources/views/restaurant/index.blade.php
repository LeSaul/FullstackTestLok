@extends('main')

@section('content')
<restaurant-grid :restaurants="{{ $restaurants }}"  />
@endsection