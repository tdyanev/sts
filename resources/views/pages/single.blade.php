@extends('layouts.master')

@section('title', $data->title)

@section('content')

<section>
    <div class="container project">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                
                <p>{!! $data->text !!}</p>
            </div>

        </div>
    </div>
</section>

@endsection