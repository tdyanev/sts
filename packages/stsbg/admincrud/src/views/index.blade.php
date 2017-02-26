@extends($namespace . '::master')

@section('content')
<h3>{{ ucfirst($table) }}</h3>
<a href="{{ route($table . '.create') }}">Add new</a>
<table class="table table-bordered table-hover">
<thead>
  <tr>
    @foreach ($fields as $field)
        <th>
            @if ($field->sortable())
                @component('sort.links', [
                    'label'  => $field->label,
                    'column' => $field->name,
                ])
                @endcomponent
            @else 
                {{ $field->label }}
            @endif
        </th>
    @endforeach

    <th>action</th>
  </tr>
</thead>
<tbody>
  
   @foreach ($data as $item)
<tr>
    

    @foreach ($fields as $field)

        <td>{{ $field->print($item[$field->name]) }}</td>

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