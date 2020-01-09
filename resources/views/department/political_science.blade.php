@extends('layouts.app')
@section('title','Political Science Department')
@section('breadcrumb')
<div class="container">
    <div class="col-12 text-center page-banner">
        <div class="banner-area">
            <h3>Political Science Department</h3>
            <p><b>Department /</b> Political Science Department</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-12 feature-block">
    <h4>POLITICAL SCIENCE DEPARTMENT</h4>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img src="{{ asset('images/teaching_staff/dummy.jpg') }}" class="card-image-top" height="120px">
                <div class="card-body">
                    <h6 class="card-title">Dr. Dinkar R. Choudhari</h6>
                    <p>HOD, M.A.(Pol.), B. ed, Ph.D.</p>
                </div>
            </div>
        </div>
    </div>
    <P class="style_p mt-4">Click below to download courses and syllabus of Political Science.</P><br>
   <div class="row style_pdf">
   	<div class="col-md-12">
   		 <a class="style" href="assets/pdf/political_science.pdf" target="_blank">Political Science</a>
   	</div>
    
   </div>
</div>
 @endsection  

