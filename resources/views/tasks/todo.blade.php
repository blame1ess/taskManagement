@extends('layouts.master')

@section('content')
    <div class="table-section container">
        <div class="d-flex justify-content-end m-2">
            <button class="btn btn-success">
                <i class="fa-solid fa-circle-plus me-2"></i>
                Add Task
            </button>
        </div>
        <x-table :columns="$columns" :values="$values"/>
    </div>
@endsection
