@extends('layouts.master')

@section('title', __('projects.title'))

@section('content')

<section>
    <div class="container projects">
        <div class="row">
    	@foreach ($projects as $project)
            <div class="col-sm-6 col-xs-12">
                <!--
                <a href="projects/{{ $project->id }}-{{ $project->slug }}">
                <a href="{{ $project->url }}" target="_blank" rel="nofollow">
                -->
                    <div class="hovereffect">
                        <img src="{{ asset('storage/' . $project->image) }}" class="img img-thumbnail img-responsive" alt="project-image" />
                        <div class="overlay">
                            <h2><strong>{{ $project->title }}</strong></h2>
                            <!--
                            <p class="info">@lang('projects.see')</p>
                            -->
                        </div>
                    </div>
                <!--
                </a>
                </a>
                -->
            </div>
        @endforeach
        </div>
    </div>
</section>

{{ $projects->links() }}

@endsection