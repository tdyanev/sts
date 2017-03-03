@extends('layouts.master')

@section('content')

<section>
    <div class="container projects">
        <div class="row">
    	@foreach ($projects as $project)
            <div class="col-sm-6 col-xs-12">
                <a href="{{ route('projects.show', ['id' => $project->id]) }}-{{ $project->slug }}">
                <div class="row">
                    <div class="col-xs-12"> 
                        <img src="{{ asset('storage/' . $project->image) }}" class="img img-responsive" alt="project-image" /> 
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