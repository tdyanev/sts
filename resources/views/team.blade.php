@extends('layouts.master')

@section('title', __('team.team'))

@section('content')

<section>
    <div class="container team">
        <div class="row">
            <div class="col-sm-4 col-xs-12 person">
                <div class="hovereffect">
                    <img src="/images/silvena.jpg" class="img img-thumbnail img-responsive" />
                    <div class="overlay">
                        <h2><strong>@lang('team.sisi')</strong></h2>
                        <h3 class="info">@lang('team.front')<br/>@lang('team.seo')</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 person">
                <div class="hovereffect">
                    <img src="/images/tihomir.jpg" class="img img-thumbnail img-responsive" />
                    <div class="overlay">
                        <h2><strong>@lang('team.tisho')</strong></h2>
                        <h3 class="info">@lang('team.back')</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 person">
                <div class="hovereffect">
                    <img src="/images/desislava.jpg" class="img img-thumbnail img-responsive" />
                    <div class="overlay">
                        <h2><strong>@lang('team.desi')</strong></h2>
                        <h3 class="info">@lang('team.design')</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection