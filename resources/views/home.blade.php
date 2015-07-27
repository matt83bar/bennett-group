@extends('master')

@section('headScripts')
    <link href="{{ asset('css/home.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" type="text/css" rel="stylesheet">
    @endsection

@section('pageContent')
    <div class="swiggity">
        <div class="big-gray">
            <div class="content-block">
                <img src="{{ asset('images/headline1.jpg') }}" alt="Why Choose Bennett Group?" class="main-headline" />
                This is is serious text, explaining why Bennett Group is the shizzle and not working with us will result in the inevitable destruction of their business and probably their whole life.  This should be brief, no more than a single paragraph, that sets up the outstanding and overwhelming advantage of partnering with Bennett Group.  The end could be a Call To Action inviting the visitor to click on one of the service images below to find out more about how much hotter his next mistress could be if only he'd work with Bennett Group.
            </div>
        </div>
    </div>
    <div class="big-light">
        <div class="content-block content-section">
            <img src="{{ asset('images/headline2.jpg') }}" alt="Available Services" />
            <div class="row">

                <div class="column-50">
                    <div class="row">
                        <div class="column-50">
                            <img src="{{ asset('images/service1.jpg') }}" alt="Human Resources" />
                        </div>
                        <div class="column-50">
                            <img src="{{ asset('images/service2.jpg') }}" alt="Marketing" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="column-50">
                            <img src="{{ asset('images/service3.jpg') }}" alt="Graphic Design" />
                        </div>
                        <div class="column-50">
                            <img src="{{ asset('images/service4.jpg') }}" alt="IT Services" />
                        </div>
                    </div>
                </div>
                <div class="column-50">
                    <div class="column-50">
                        <img src="{{ asset('images/service5.jpg') }}" alt="Legal Services" />
                    </div>
                    <div class="column-50">
                        <img src="{{ asset('images/service6.jpg') }}" alt="Tissue & Biofluid" />
                        <img src="{{ asset('images/service7.jpg') }}" alt="Clinical Trials" />
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="big-light">
        <div class="content-block content-section">
            <img src="/images/headline3.jpg" alt="Meet The Team" />
            <div class="row">
                <div class="column-25">
                    <img src="/images/team-blank.jpg" alt="team">
                </div>
                <div class="column-25">
                    <img src="/images/team-blank.jpg" alt="team">
                </div>
                <div class="column-25">
                    <img src="/images/team-blank.jpg" alt="team">
                </div>
                <div class="column-25">
                    <img src="/images/team-blank.jpg" alt="team">
                </div>
            </div>
            <div class="row">
                <div class="column-25">
                    <img src="/images/team-blank.jpg" alt="team">
                </div>
                <div class="column-25">
                    <img src="/images/team-blank.jpg" alt="team">
                </div>
                <div class="column-25">
                    <img src="/images/team-blank.jpg" alt="team">
                </div>
                <div class="column-25">
                    <img src="/images/team-blank.jpg" alt="team">
                </div>
            </div>

        </div>
    </div>
@endsection

@section('footerContent')
    @include('partials.mainFooter')
@endsection