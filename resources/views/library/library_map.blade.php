@extends('layouts.app')
@section('title', 'Library Map')
@section('customcss')
<link rel="stylesheet" href="{{ asset('pages/css/baguetteBox.min.css') }}">
<link rel="stylesheet" href="{{ asset('pages/css/compact-gallery.css') }}">
@endsection


@section('content')
<div class="col-12 feature-block">
    <h4 class="text-center">LIBRARY MAP</h4>
    <div class="row no-gutters">
        <P class="style_p">Click below to load Library Map.</P><br>
        <div class="col-md-12 col-lg-12 item ">
            <a class="lightbox" href="pages/images/library_map.jpg">
                <img class="img-fluid image" src="pages/images/library_map.jpg">

            </a>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="{{ asset('pages/js/baguetteBox.min.js') }}"></script>
<script>
    baguetteBox.run('.compact-gallery', {
        animation: 'slideIn'
    });

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
