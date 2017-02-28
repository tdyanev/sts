@extends($namespace . '::master')

@section('content')
  @php
    if ($edit) {
      $route = route($table . '.update', [
        'id' => $data->id
      ]);

      $method_field = method_field('PUT');

    } else {
      $route = route($table. '.store');
      $method_field = '';

    }

  @endphp

  @component($namespace . '::errors', [
    'errors' => $errors,
  ])
  @endcomponent



  <form action="{{ $route }}" method="post"@if ($hasUpload) enctype="multipart/form-data">@else > @endif

  {{ $method_field }}
  {{ csrf_field() }}


  @foreach ($fields as $field)
    @if ($field->editable())
      @component($namespace . '::form.' . $field->view(), $field->params())
      	{{ $data[$field->name] }}
      @endcomponent

    @endif

  @endforeach




  <div class="form-group">
    <button type="submit" class="btn btn-default">Save</button>
  </div>
</form>


@endsection