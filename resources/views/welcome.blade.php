@extends('layouts.app')

@section('content')
<!-- Marketing messaging and featurettes
  ================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <div class="card">
        <div class="card-body">
            MBO Utrecht, ICT Academie.
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Progressie Monitor App.</h2>
            <p class="lead">Welkom bij de <strong>Progressie Monitor App</strong> waar jij als student jouw lessen en
                cijfers kan zien, en waar u als leraar uw cursussen en planningen voor die cursussen kunt aanmaken
                doormiddel van inloggen.</p>
        </div>
        <div class="col-md-5">
            <img style="width: 100%; height: auto; margin-bottom: 30px; box-shadow: 7px 10px 5px grey;" src="/img/Daltonlaan-opti.jpg" alt="">
        </div>
    </div>

    <div class="row">
        <div class="col-6 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card" style="width: 100%; height: auto; margin-right: auto;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-6 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card" style="width: 100%; height: auto;  margin-left: auto;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>        
    </div>


    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
@endsection