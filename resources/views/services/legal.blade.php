@extends('master')

@section('headScripts')
    <link href="{{ asset('css/legal.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" type="text/css" rel="stylesheet">
    @endsection

@section('pageContent')
    <div class="big-light small-padding">
        <div class="content-block">
            <div class="row">
                <div class="column-main-2">
                    <div id="services-click">
                        <div id="services-link" class="fade-box"><img src="{{ asset('images/dark300.png') }}" alt="Legal Services" /></div>
                    </div>
                    <div id="team-click">
                        <div id="team-link" class="fade-box"><img src="{{ asset('images/dark300.png') }}" alt="Our Legal Team" /></div>
                    </div>
                </div>
                <div class="column-main-2">
                    <div id="choose-click">
                        <div id="choose-link" class="fade-box"><img src="{{ asset('images/dark600.png') }}" alt="Choose Bennett" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiggity" id="choose-content">
        <div class="big-gray">
            <div class="content-block">
                <img src="{{ asset('images/headline1.jpg') }}" alt="Why Choose Bennett Group?" class="main-headline" />
                This is is serious text, explaining why Bennett Group is the shizzle and not working with us will result in the inevitable destruction of their business and probably their whole life.  This should be brief, no more than a single paragraph, that sets up the outstanding and overwhelming advantage of partnering with Bennett Group.  The end could be a Call To Action inviting the visitor to click on one of the service images below to find out more about how much hotter his next mistress could be if only he'd work with Bennett Group.
            </div>
        </div>
    </div>

    <div class="big-light" id="services-content">
        <div class="content-block">
            <img src="{{ asset('images/Services.png') }}" width="300px" alt="Legal Services" id="services-inline-img" />
            <h2>Comprehensive Legal Services</h2>
            Membership in the Bennett Group SMO conveys substantial cost savings on professional legal services.  Most surgical centers have a limited need for legal services, and it can be cost-prohibitive to engage top talent for the routine matters.  Bennett Group allows members to share these costs, resulting in priority access to highly experienced attorneys and paralegals for a fraction of the cost.  Some common services include:
            <ul>
                <li>This is where we'd list the services</li>
                <li>This is where we'd list the services</li>
                <li>This is where we'd list the services</li>
                <li>This is where we'd list the services</li>
                <li>This is where we'd list the services</li>
            </ul>
        </div>
    </div>

@endsection

@section('footerContent')
    @include('partials.mainFooter')
@endsection

@section('footerScripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('js/legal.js') }}"></script>
@endsection