@extends('layouts.app')
@section('title', 'English Department')
@section('breadcrumb')
<div class="container">
    <div class="col-12 text-center page-banner">
        <div class="banner-area">
            <h3>English Department</h3>
            <p><b>Department /</b> English Department</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-12 feature-block">
    <h4>ENGLISH DEPARTMENT</h4>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img src="{{ asset('images/teaching_staff/dummy.jpg') }}" class="card-image-top" height="120px">
                <div class="card-body">
                    <h6 class="card-title">Dr. Rajendra R. Jane</h6>
                    <p>HOD</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img src="{{ asset('images/teaching_staff/dummy.jpg') }}" class="card-image-top" height="120px">
                <div class="card-body">
                    <h6 class="card-title">Dr. Rajesh N. Sonkusare</h6>
                    <p>M.A.(Eng.) Ph.D., NET, SET</p>
                </div>
            </div>
        </div>
    </div>
    <P class="style_p mt-4">Click below to download courses and syllabus of english.</P><br>
    <div class="row ">
    	<div class="col-md-12 style_pdf">
    		<a class="style" href="assets/pdf/english.pdf" target="_blank">Course and syllabus of English </a>
    	</div>
    
    </div>
</div>
 @endsection  


