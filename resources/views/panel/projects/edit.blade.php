@extends('layouts.panel')

@section('content')
  <form action="{{ route('projects.update', [
    'id' => $projects->id,
  ]) }}" method="post">

  {{ method_field('PUT') }}
  {{ csrf_field() }}

  @component('form.textarea', [
    'id' => 'description',
    'label' => 'Description',
  ])
  {{ $projects->description }}
  @endcomponent

  @component('form.input', [
    'id' => 'url',
    'type' => 'text',
    'label' => 'URL',
  ])
  {{ $projects->url }}
  @endcomponent


  <div class="form-group">
    <button type="submit" class="btn btn-default">Update</button>
  </div>
  </form>

@endsection