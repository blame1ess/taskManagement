@extends('layouts.master')

@section('content')
    <div class="table-section container">
        <x-table :columns="$columns" :values="$values"/>
    </div>

@endsection
