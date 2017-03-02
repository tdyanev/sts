@extends('layouts.master')

@section('content')

<section>
    <div class="container services">
        <div class="row">
            <p>На този етап предлагаме създаване на уникален дизайн на:</p>
            
            <!-- TODO: Replace images with real ones and when they become more -> gallery -->
            
            <div class="col-sm-3 col-xs-12">
                <div class="title"><strong>Logo</strong></div>
                <img src="/images/design-logo.png" class="img img-responsive img-thumbnail" />
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="title"><strong>Business Card</strong></div>
                <img src="/images/design-card.png" class="img img-responsive img-thumbnail" />
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="title"><strong>Brochure</strong></div>
                <img src="/images/design-brochure.jpg" class="img img-responsive img-thumbnail" />
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="title"><strong>Website Design</strong></div>
                <img src="/images/design-site.jpg" class="img img-responsive img-thumbnail" />
            </div>
        </div>
    </div>
</section>

@endsection