@extends('layouts.master')

@section('content')
<section>
    <div class="container-fluid section-services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="box">
                        <i class="fa fa-line-chart fa-3x" aria-hidden="true"></i>
                        <h2>@lang('home.seo')</h2>
                        <p>@lang('home.seo-text')</p>
                        <a href="/{{ App::getlocale() }}/seo" title="" class="box-bottom">@lang('home.more')</a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="box">
                        <i class="fa fa-desktop fa-3x" aria-hidden="true"></i>
                        <i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
                        <h2>@lang('home.web')</h2>
                        <p>@lang('home.web-text')</p>
                        <a href="/{{ App::getlocale() }}/web" title="" class="box-bottom">@lang('home.more')</a>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="box">
                        <i class="fa fa-cubes fa-3x" aria-hidden="true"></i>
                        <h2>@lang('home.design')</h2>
                        <p>@lang('home.design-text')</p>
                        <a href="/{{ App::getlocale() }}/design" title="" class="box-bottom">@lang('home.more')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                
            </div>
        </div>
    </div>
</section>
<!--
<section>
    <article class="article-sumed">
        <div class="container">
            <h2>@lang('home.news')</h2>
            <div class="row">
                <div class="col-sm-4">
                    <img src="/images/fuck yeah.png" alt="article-image" />
                </div>
                <div class="col-sm-8">
                    <h3><strong>What to do with your memories?</strong></h3>
                    <p>
                        <?php /*
                        $text = "This problem has existed for a long time but a solution has never been found. The prior disadvantage of
                    all these memories is that you don't know whether they help you or not, will you be able to use them ever or not?                    Scientists say that you should .. This problem has existed for a long time but a solution has never been found. The prior disadvantage of all these memories is that you don't know whether they help you or not, will you be able to use them ever or not?   Scientists say that you should. Scientists say that you should. This problem has existed for a long time but a solution has never been found.";
                        if(strlen($text) > 300) {
                            echo substr($text, 0, 300)." ...";
                        } else {
                            echo $text;
                        }
                        */ ?>
                    </p>
                    <a href="#" title="" class="read-more pull-right">@lang('home.read')</a>
                </div>
            </div>
        </div>
    </article>
    <!--
    <article class="article-sumed">
        <div class="container latest-projects">
            <h2>@lang('home.projects')</h2>
            <div class="row">
                <div class="col-sm-8">
                    <h3><strong>International Business &amp; Consultation</strong></h3>
                    <p>
                        <?php 
                        /*
                        $text = "Company web site for business consultations and administration.Company web site for business consultations and administration.Company web site for business consultations and administration.<br/><br/> Technologies used: Wordpress. Installed
                        plugins: list with plugins to be done.";
                        if(strlen($text) > 300) {
                             echo substr($text, 0, 300)." ...";
                        } else {
                            echo $text;
                        }
                        */
                        ?>  
                    </p>
                    <a href="#" title="" class="read-more pull-left">@lang('home.read')</a>
                </div>
                <div class="col-sm-4">
                    <img src="/images/ibc.png" alt="article-image" />
                </div>
            </div>
        </div>
    </article>
</section>
-->
@endsection
