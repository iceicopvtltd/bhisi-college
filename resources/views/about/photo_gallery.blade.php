@extends('layouts.app')
@section('title','Photo Gallery')
@section('customcss')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<link rel="stylesheet" href="{{ asset('pages/css/compact-gallery.css') }}">
<style>
.img-fluid {
    max-width: 100%;
    height: 101px;
    width: 100%;
}
</style>
@endsection
@section('breadcrumb')
<div class="container">
    <div class="col-12 text-center page-banner">
        <div class="banner-area">
            <h3>Photo Gallery</h3>
            <p><b>About /</b> Photo Gallery</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-md-12 feature-block">
    <h4 class="text-center">PHOTO GALLERY</h4>
    <div class="gallery-block compact-gallery">
    <div class="row no-gutters">

        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G1.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G1.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G2.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G2.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G3.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G3.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G4.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G4.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G5.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G5.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G6.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G6.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G7.jpg') }}">
                <img class=" about_gallery img-fluid image" src="{{ asset('pages/images/G7.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G8.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G8.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G9.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G9.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G10.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G10.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G11.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G11.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('assets/images/G12.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G12.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('assets/images/G13.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G13.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('assets/images/G14.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G14.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G15.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G15.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/G16.jpg') }}">
                <img class="img-fluid image" src="{{ asset('pages/images/G16.jpg') }}">

            </a>
        </div>
        <div class="col-md-6 col-lg-4 item zoom-on-hover">
            <a class="lightbox" href="{{ asset('pages/images/Bulding-Inaguration-V-C-Kalyankar-001-470x302.jpg') }}">
                <img class="img-fluid image"
                    src="{{ asset('pages/images/Bulding-Inaguration-V-C-Kalyankar-001-470x302.jpg') }}">

            </a>
        </div>
</div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
    </script>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }

</script>
@endsection
