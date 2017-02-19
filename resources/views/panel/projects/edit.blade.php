@extends('layouts.panel')

@section('content')
<form action="{{ route('projects.update', [
  'id' => $project->id,
]) }}" method="post">
{{ method_field('PUT') }}
{{ csrf_field() }}

<div class="form-group">
    <label for="description">Description</label>
    <textarea id="description" name="description" class="form-control" rows="3">{{ $project->description }}</textarea>
</div>

<div class="form-group">
    <label for="url">URL</label>
    <input type="text" value="{{ $project->url }}" name="url" class="form-control" id="url" />
</div>

<div class="form-group">
  <button type="submit" class="btn btn-default">Update</button>
</div>
</form>

@endsection