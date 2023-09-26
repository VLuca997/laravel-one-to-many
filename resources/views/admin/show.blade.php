@extends('layouts.app')

@section('page-title', 'Project')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col">

            <h3>
                {{$project->title}}
            </h3>
        </div>
    </div>
</div>
@endsection
