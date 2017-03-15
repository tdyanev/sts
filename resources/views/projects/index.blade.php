@extends('layouts.master')

@section('content')

<section>
    <div class="container projects">
        <div class="row">
    	@foreach ($projects as $project)
            <div class="col-sm-6 col-xs-12">
                <a href="projects/{{ $project->id }}-{{ $project->slug }}">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="hovereffect">
                            <img src="{{ asset('storage/' . $project->image) }}" class="img img-thumbnail img-responsive" alt="project-image" />
                            <div class="overlay">
                                <h2><strong>Name of Project</strong></h2>
                                <p class="info">See more</p>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</section>

{{ $projects->links() }}

@endsection