@extends('layouts.app')
@section('title', 'Economic department')
@section('breadcrumb')
<div class="container">
    <div class="col-12 text-center page-banner">
        <div class="banner-area">
            <h3>Economics Department</h3>
            <p><b>Department /</b>Economics Department</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-12 feature-block">
    <h4>ECONOMICS DEPARTMENT</h4>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img src="{{ asset('images/teaching_staff/dummy.jpg') }}" class="card-image-top" height="120px">
                <div class="card-body">
                    <h6 class="card-title">Dr. Vitthal N. Tiwari</h6>
                    <p>HOD, M.A.(Eco., Soc.), M. Com., M. Phil, Ph.D.</p>
                </div>
            </div>
        </div>
    </div>
    <P class="style_p mt-4">Click below to download courses and syllabus of Economics.</P><br>
     <div class="row style_pdf">
     	<div class="col-md-12">
     		<a class="style" href="assets/pdf/economics.pdf" target="_blank">Economics</a>
     	</div>
        
    </div>
 </div>
 @endsection  