@extends('layouts.app')
@section('title', 'History department')
@section('breadcrumb')
<div class="container">
    <div class="col-12 text-center page-banner">
        <div class="banner-area">
            <h3>History Department</h3>
            <p><b>Department /</b> History Department</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-12 feature-block">
    <h4>HISTORY DEPARTMENT</h4>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img src="{{ asset('images/teaching_staff/dummy.jpg') }}" class="card-image-top" height="120px">
                <div class="card-body">
                    <h6 class="card-title">Dr. Natthu S. Girde</h6>
                    <p>HOD, M.A.(History), M. Phill, Ph.D.</p>
                </div>
            </div>
        </div>
    </div>
    <P class="style_p mt-4">Click below to download courses and syllabus of History.</P><br>
    <div class="row style_pdf">
    	<div class="col-md-12">
    		 <a class="style" href="assets/pdf/history.pdf" target="_blank">History</a>
    	</div>
   
    </div>
</div>
 @endsection  

