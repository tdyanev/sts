@extends('layouts.panel')

@section('content')
  <form action="{{ route('projects.update', [
    'id' => $project->id,
  ]) }}" method="post">

  {{ method_field('PUT') }}
  {{ csrf_field() }}

  @component('form.textarea', [
    'id' => 'description',
    'label' => 'Description',
  ])
  {{ $project->description }}
  @endcomponent

  @component('form.input', [
    'id' => 'url',
    'type' => 'text',
    'label' => 'URL',
  ])
  {{ $project->url }}
  @endcomponent


  <div class="form-group">
    <button type="submit" class="btn btn-default">Update</button>
  </div>
  </form>

@endsection