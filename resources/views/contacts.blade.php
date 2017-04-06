@extends('layouts.master')

@section('content')

<section>
    <div class="container contacts">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <form>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="name">
                                @lang('contacts.name')
                            </label>
                            <input type="text" class="form-control" id="name" placeholder="@lang('contacts.pl-name')" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                @lang('contacts.email')
                            </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="@lang('contacts.pl-email')" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                @lang('contacts.subject')
                            </label>                            
                            <input type="text" class="form-control" id="name" placeholder="@lang('contacts.pl-subject')" required="required" />
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
                    
                    <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=bg&amp;geocode=&amp;q=%D1%83%D0%BB%D0%B8%D1%86%D0%B0+%E2%80%9E%D0%9F%D0%B8%D1%80%D0%BE%D1%82%D1%81%D0%BA%D0%B0%E2%80%9C+11&amp;aq=&amp;sll=42.699545,23.319928&amp;sspn=0.001167,0.002642&amp;g=%D1%83%D0%BB%D0%B8%D1%86%D0%B0+%E2%80%9E%D0%9F%D0%B8%D1%80%D0%BE%D1%82%D1%81%D0%BA%D0%B0%E2%80%9C+11&amp;ie=UTF8&amp;hq=&amp;hnear=%D1%83%D0%BB%D0%B8%D1%86%D0%B0+%E2%80%9E%D0%9F%D0%B8%D1%80%D0%BE%D1%82%D1%81%D0%BA%D0%B0%E2%80%9C+11,+1000+%D0%A1%D0%BE%D1%84%D0%B8%D1%8F,+%D0%91%D1%8A%D0%BB%D0%B3%D0%B0%D1%80%D0%B8%D1%8F&amp;t=m&amp;ll=42.703159,23.321056&amp;spn=0.011038,0.028324&amp;z=15&amp;iwloc=A&amp;output=embed" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="350" frameborder="0"></iframe>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection