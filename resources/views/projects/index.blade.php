@extends('layouts.master')

@section('content')


<section>
    <div class="container">
    	@foreach ($projects as $project)
        <div class="row" style="background: #dedede; margin: 10px 0;">
            <div class="col-sm-8 col-xs-12">
                <h2>{{ $project->title }}</h2>
            </div>


            <div class="col-sm-8 col-xs-12">
                <img src="{{ asset('storage/' . $project->image) }}" height="100" />
            </div>

            <div class="col-sm-8 col-xs-12">
                <i>{{ $project->created_at->diffForHumans() }}</i>
            </div>

            <div class="col-sm-8 col-xs-12">
                <a href="{{ route('projects.show', ['id' => $project->id]) }}-{{ $project->slug }}">link</a>
            </div>
        </div>
        @endforeach 
    </div>
</section>



{{ $projects->links() }}


@endsection