@extends('layouts.panel')

@section('content')
  @php
    if ($edit) {
      $route = route($table . '.update', [
        'id' => $data->id
      ]);

      $method_field = method_field('PUT');

    } else {

      $method_field = '';

    }

  @endphp

  <form action="{{ $route }}" method="post">

  {{ $method_field }}
  {{ csrf_field() }}


  @foreach ($fields as $key => $field) 
    @if ($field->visible)

      @component('form.' . $field->type, [
        'id' => $key,
        'label' => $field->label,
      ])

      {{ $data[$key] }}
      @endcomponent



    @endif

  @endforeach




  <div class="form-group">
    <button type="submit" class="btn btn-default">Create</button>
  </div>
  </form>

</form>
@endsection