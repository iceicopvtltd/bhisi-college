@extends('layouts.app')
@section('title', 'Facilities for divyang')
@section('customcss')

    <link rel="stylesheet" href="{{ asset('pages/css/baguetteBox.min.css') }}" >
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
            <h3>Facilities for Divyangan</h3>
            <p><b>About /</b>Facilities for Divyangan</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-12 feature-block">
                    <h4 class="text-center">GALLERY</h4>
                     <div class="row no-gutters">

                
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('pages/images/D1.jpg') }}">
                        <img class="img-fluid image" src=" {{ asset('pages/images/D1.jpg') }}">
                       
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href=" {{ asset('pages/images/D2.jpg') }}">
                        <img class="img-fluid image" src=" {{ asset('pages/images/D2.jpg') }}">
                       
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href=" {{ asset('pages/images/D3.jpg') }}">
                        <img class="img-fluid image" src=" {{ asset('pages/images/D3.jpg') }}">
                        
                        </a>
                    </div>
                
                
               
                
            </div>
                 </div>
 @endsection  

@section('scripts')
 <script src="{{ asset('pages/js/baguetteBox.min.js') }}"></script>
 <script>
        baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
    </script>
     <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
@endsection




