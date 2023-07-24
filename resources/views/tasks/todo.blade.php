@extends('layouts.master')

@section('content')
    <div class="table-section">
        <div class="d-flex align-items-end">
            <button class="btn btn-success">
                Add
            </button>
        </div>
        <x-table :columns="$columns" :values="$values"/>
    </div>
@endsection
