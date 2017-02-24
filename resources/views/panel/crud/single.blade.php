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
      <p>make component with: type = {{ $field->type }} name = {{ $key }}, label = {{ $field->label }}</p>
    @endif

  @endforeach

<!--
  



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
-->
</form>
@endsection