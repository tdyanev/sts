@extends('layouts.master')

@section('content')
<section>
    <div class="container-fluid section-services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="box">
                        <i class="fa fa-line-chart fa-3x" aria-hidden="true"></i>
                        <h2>SEO and Local SEO</h2>
                        <p>We optimize your web site or local business. You pay only after you see results!</p>
                        <a href="" title="" class="box-bottom">Learn more</a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="box">
                        <i class="fa fa-desktop fa-3x" aria-hidden="true"></i>
                        <i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
                        <h2>Web Development</h2>
                        <p>We create company web sites, e-shops and everything you want!</p>
                        <a href="" title="" class="box-bottom">Learn more</a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="box">
                        <!--
                        <i class="fa fa-paint-brush" aria-hidden="true"></i>
                        -->
                        <i class="fa fa-cubes fa-3x" aria-hidden="true"></i>
                        <h2>Graphic Design</h2>
                        <p>We design web sites, business cards and logos.</p>
                        <a href="" title="" class="box-bottom">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <article class="article-sumed">
        <div class="container">
            <h2>Latest news:</h2>
            <div class="row">
                <div class="col-sm-4">
                    <img src="/images/memories.jpg" alt="article-image" />
                </div>
                <div class="col-sm-8">
                    <h3>What to do with your memories??</h3>
                    <p>This problem has existed for a long time but a solution has never been found. The prior disadvantage of
                    all these memories is that you don't know whether they help you or not, will you be able to use them ever or not?</p>
                    <p>Scientists say that you should ...</p>
                    <a href="#" title="" class="read-more pull-right">Read more</a>
                </div>
            </div>
        </div>
    </article>
</section>
@endsection
