@extends('layouts.master')

@section('content')

<section>
    <div class="container project">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h2>{{ $project->title }}</h2>
                <p>{{ $project->description }}</p>
            </div>
            <div class="col-sm-6 col-xs-12">
                <a href="{{ $project->url }}" target="_blank">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="project-image" class="img img-responsive img-thumbnail"/>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection