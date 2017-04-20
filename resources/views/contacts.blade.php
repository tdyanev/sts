@extends('layouts.master')

@section('content')

<section>
    <div class="container contacts">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <form method="POST" action="contacts/send">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="name">
                                @lang('contacts.name')
                            </label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="@lang('contacts.pl-name')" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                @lang('contacts.email')
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email" class="form-control" id="email" placeholder="@lang('contacts.pl-email')" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                @lang('contacts.subject')
                            </label>                            
                            <input type="text" name="subject" class="form-control" id="name" placeholder="@lang('contacts.pl-subject')" required="required" />
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="name">
                                @lang('contacts.message')
                            </label>
                            <textarea name="message" id="message" class="form-control" 
                                      rows="9" cols="25" required="required" placeholder="@lang('contacts.pl-message')">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-custom" id="btnContactUs">
                            @lang('contacts.send')
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid map">
        <div class="row">
            <div class="col-xs-12">
                <div id="googleMap">
                    
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:350px;width:px;'><div id='gmap_canvas' style='height:350px;width:px;'></div><div><small><a href="http://www.googlemapsgenerator.com/en/">Quickly generate and embed a Google Map on your site!									Click here									Visit our website</a></small></div><div><small><a href="https://mrdiscountcode.hk/">expedia voucher</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(42.6730297,23.303720699999985),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(42.6730297,23.303720699999985)});infowindow = new google.maps.InfoWindow({content:'<strong>STS 2017 ltd.</strong><br>zh.k. Strelbishte 88-V, Sofia, Bulgaria<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection