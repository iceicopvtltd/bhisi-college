@extends('layouts.app')
@section('title','Self Declaration')
@section('breadcrumb')
<div class="container">
    <div class="col-12 text-center page-banner">
        <div class="banner-area">
            <h3>Self Declaration</h3>
            <p><b>Home /</b>Self Declaration</p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-12 feature-block">
    <h4>SELF DECLARATION</h4>
    <div class="row">
        <div class="col-md-12">
            <iframe src="{{ asset('pages/pdf/self_declaration.pdf') }}" width="100%" height="600"
                align="center"></iframe>
        </div>
    </div>


</div>
@endsection
