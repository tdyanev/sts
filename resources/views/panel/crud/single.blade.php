@extends('layouts.panel')

@section('content')
  @php
    if ($edit) {
      $route = route($table . '.update', [
        'id' => $data->id
      ]);

      $method_field = method_field('PUT');

    } else {
      $route = route($table. '.create');
      $method_field = '';

    }

  @endphp

  <form action="{{ $route }}" method="post">

  {{ $method_field }}
  {{ csrf_field() }}


  @foreach ($fields as $key => $field) 
    @if ($field->editable())

      @component($field->path(), $field->form($data[$field->name]))
      @endcomponent

    @endif

  @endforeach




  <div class="form-group">
    <button type="submit" class="btn btn-default">Save</button>
  </div>
  </form>

</form>
@endsection