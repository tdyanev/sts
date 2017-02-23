@extends('layouts.panel')

@section('content')

<h3>{{ ucfirst($table) }}</h3>
<a href="{{ route($table . '.create') }}">Add new</a>
<table class="table table-bordered table-hover">
<thead>
  <tr>
    @for ($i = 0; $i < count($columns); $i++)
        <th>@component('sort.links', [
            'label'  => $labels[$i],
            'column' => $columns[$i],
        ]) @endcomponent</th>
    @endfor

    <th>action</th>
  </tr>
</thead>
<tbody>
  
   @foreach ($data as $item)
<tr>
    

    @foreach ($columns as $field)

    <td>{{ $item[$field] }}</td>

    @endforeach


    <td>
    <a href="{{ route($table . '.edit', [
        'id' => $item->id,
    ]) }}">edit</a>

    <a href="{{ route($table . '.destroy', [
        'id' => $item->id,
    ]) }}" class="delete">delete</a>

  </tr>
    @endforeach

</tbody>
</table>

<div class="center-block">
    {{ $data->appends(['order' => $order, 'type' => $type])->links() }}
</div>
@endsection