@extends('layouts.app')
@section('title', 'library-staff')
@section('content')
<div class="col-12 feature-block">
  <h4>LIBRARY STAFF</h4>
  <br>
  <div class="row">
    <div class="col-md-12">
      <table class="table striped border">
        <thead style="background: #333333 ; color: whitesmoke;">
          <th>Designation</th>
          <th>Name</th>
          <th>Qualification</th>
        </thead>
        <tbody style="text-align: left;color: #464646">
          <tr>
            <td style="padding: 0px 15px;">Librarian</td>
            <td>Prof. Sachin Tulshiram Badwaik</td>
            <td>M.L.I.SC., M.PHIL, SET and NET</td>
          </tr>
          <tr>
            <td style="padding: 0px 15px;">Library Attendent</td>
            <td>Shri. Jitndra Mukundrao Nannaware</td>
            <td>HSC and C.LIB.</td>
          </tr>
              
             
              
              
              
            </tbody>
          </table>
                    </div>
                  </div>
                                
                               
                 </div>
<div class="row">
  <div class="col-4">
    <img src="{{ asset('images/library_staff/8S.T.BADWAIK,Librarian.jpg') }}">
  </div>
  <div class="col-8">
    <p><b>Name :</b> Prof. Sachin Tulshiram Badwaik</p>
    <p><b>Designation :</b> Librarian</p>
    <p><b>Qualification :</b>M.L.I.SC., M.PHIL, SET and NET</p>
  </div>
</div>
 @endsection  


