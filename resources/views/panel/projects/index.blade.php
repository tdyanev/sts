@extends('layouts.panel')

@section('content')
<h3>Projects</h3>
<a href="{{ route('projects.create') }}">Add new</a>
<table class="table table-bordered table-hover">
<thead>
  <tr>
    <th>#</th>
    <th>Description</th>
    <th>URL</th>
    <th>created at</th>
    <th>last update at</th>
    <th>action</th>
  </tr>
</thead>
<tbody>
  
   @foreach ($projects as $project)
<tr>
    <td>{{ $project->id }}</td>
    <td>{{ $project->description }}</td>
    <td>{{ $project->url }}</td>
    <td>{{ $project->created_at->diffForHumans() }}</td>
    <td>{{ $project->updated_at->diffForHumans() }}</td>

    <td>
    <a href="{{ route('projects.edit', [
        'id' => $project->id,
    ]) }}">edit</a>

    <a href="{{ route('projects.destroy', [
        'id' => $project->id,
    ]) }}" class="delete">delete</a>

  </tr>
    @endforeach

</tbody>
</table>
@endsection