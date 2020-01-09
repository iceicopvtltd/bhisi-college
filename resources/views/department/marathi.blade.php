@extends('layouts.app')
@section('title', 'Marathi department')
@section('breadcrumb')
<div class="container">
    <div class="col-12 text-center page-banner">
        <div class="banner-area">
            <h3>Marathi Department</h3>
            <p><b>Department /</b> Marathi Department</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-12 feature-block">
    <h4 class="text-center">MARATHI DEPARTMENT</h4>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img src="{{ asset('images/teaching_staff/marathi/S.M.CHARDE.jpg') }}" class="card-image-top">
                <div class="card-body">
                    <h5 class="card-title mb-0">Dr. Sunanda M. Charde</h5>
                    <p>(HOD) M.A. (Mar) Ph.D.</p>
                </div>
            </div>
        </div>
        
    </div>
    <P class="style_p mt-4">Click below to download courses and syllabus of marathi.</P><br>
    <div class="row style_pdf">
    	<div class="col-md-12">
    		   <a class="style" href="assets/pdf/marathi.pdf" target="_blank">Marathi </a>

    	</div>
    </div>
     <br>
      <div class="row style_pdf">
      	<div class="col-md-12">
      		<a class="style" href="assets/pdf/marathi_literature.pdf" target="_blank">Marathi Literature</a>
      	</div>
         
      </div>
</div>
 @endsection  

