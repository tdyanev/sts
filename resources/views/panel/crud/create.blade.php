@extends('layouts.panel')

@section('content')
  <form action="{{ route('projects.store') }}" method="post">

  {{ csrf_field() }}

  @component('form.textarea', [
    'id' => 'description',
    'label' => 'Description',
  ])

  @endcomponent

  @component('form.input', [
    'id' => 'url',
    'type' => 'text',
    'label' => 'URL',
  ])
  @endcomponent


  <div class="form-group">
    <button type="submit" class="btn btn-default">Create</button>
  </div>
  </form>

@endsection