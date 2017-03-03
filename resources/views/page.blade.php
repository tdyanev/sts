@extends('layouts.master')

@section('content')

<section>
    <div class="container services">
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <div class="line">
                    {{ $data->title }}
                </div>
                {{ $data->text }}
            </div>
            <div class="col-sm-4 col-xs-12">
            
            </div>
        </div>
    </div>
</section>

@endsection