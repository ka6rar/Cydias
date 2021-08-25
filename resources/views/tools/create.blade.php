@extends('layouts.app')
@section('content')
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="deb">
        <button type="submit">Add</button>
    </form>
@endsection
