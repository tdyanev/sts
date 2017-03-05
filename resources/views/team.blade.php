@extends('layouts.master')

@section('content')

<section>
    <div class="container team">
        <div class="row">
            <div class="col-sm-4 col-xs-12 person">
                <div class="hovereffect">
                    <img src="/images/silvena.jpg" class="img img-thumbnail img-responsive" />
                    <div class="overlay">
                        <h2><strong>Silvena Miteva</strong></h2>
                        <h3 class="info">Front-end Developer<br/> SEO expert</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 person">
                <div class="hovereffect">
                    <img src="/images/tihomir.jpg" class="img img-thumbnail img-responsive" />
                    <div class="overlay">
                        <h2><strong>Tihomir Yanev</strong></h2>
                        <h3 class="info">Back-end Developer</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 person">
                <div class="hovereffect">
                    <img src="/images/desislava.jpg" class="img img-thumbnail img-responsive" />
                    <div class="overlay">
                        <h2><strong>Desislava Yaneva</strong></h2>
                        <h3 class="info">Designer</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection