@extends('layouts.app')
@section('title', 'library-gallery')
@section('customcss')
    <link rel="stylesheet" href="{{ asset('pages/css/baguetteBox.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('pages/css/compact-gallery.css') }}">
@endsection

@section('content')
<div class="col-12 feature-block">
                    <h3 class="text-center">Library Gallery</h3>
                     <div class="row no-gutters">

                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('pages/images/LG1.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('pages/images/LG1.jpg') }}">
                        
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('pages/images/LG2.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('pages/images/LG2.jpg') }}">
                       
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('pages/images/LG3.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('pages/images/LG3.jpg') }}">
                       
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('pages/images/LG4.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('pages/images/LG4.jpg') }}">
                        
                        </a>
                    </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('pages/images/LG5.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('pages/images/LG5.jpg') }}">
                        
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('pages/images/LG6.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('pages/images/LG6.jpg') }}">
                        
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('pages/images/LG7.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('pages/images/LG7.jpg') }}" style=" height: 132px;    width: 202px;">
                        
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('pages/images/LG8.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('pages/images/LG8.jpg') }}">
                        
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('pages/images/LG9.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('pages/images/LG9.jpg') }}">
                       
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('pages/images/LG10.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('pages/images/LG10.jpg') }}">
                        
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
