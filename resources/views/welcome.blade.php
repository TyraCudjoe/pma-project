@extends('layouts.app')

@section('content')
<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <div class="row featurette">
        <div class="card-body mbo">
            <div class="display-3">
                MBO Utrecht, ICT Academie.
            </div>
        </div>
    </div>

    <div class="row featurette f-home">
        <div class="col-md-7">
            <h2 class="featurette-heading">Progressie Monitor App.</h2>
            <p class="lead">Welkom bij de <strong>Progressie Monitor App</strong> waar jij als student jouw lessen en
                cijfers kan zien, en waar u als leraar uw cursussen en planningen voor die cursussen kunt aanmaken
                doormiddel van inloggen.</p>
        </div>
        <div class="col-md-5">
            <img class="daltonlaan" src="/img/Daltonlaan-opti.jpg" alt="">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card home-card" style="margin-right: auto;">
                <div class="card-body">
                    <p class="">Click the button below to login.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card home-card" style=" margin-left: auto;">
                <div class="card-body">
                    <p class="">Click the button below to register</p>
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </div>



    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
@endsection