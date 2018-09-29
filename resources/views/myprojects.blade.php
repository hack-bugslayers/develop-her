@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	<!-- css: text-transform -->
                <div class="card-header">
                	<strong><h2>MY PROJECTS</h2></strong>
                </div>
               
              

                <div class="card-body">
                   
                  	<table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">DISCUSSION BOARD</th>
					      <th scope="col">STATUS</th>
					      <th scope="col">DEV</th>
					      <th scope="col">OWNER</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">ALING BEBANG'S SPECIALTY CAKES</th>
					      <td>Ongoing</td>
					      <td>Des, Mars</td>
					      <td>Bebang</td>
					    </tr>
					    <tr>
					      <th scope="row">KAINAN SA KANTO</th>
					      <td>Winner</td>
					      <td>Mars</td>
					      <td>Jean</td>
					    </tr>
					    <tr>
					      <th scope="row">MANG LARRY'S IHAW IHAW</th>
					      <td>Runner up</td>
					      <td>Ann, Mars</td>
					      <td>Larry</td>
					    </tr>
					  </tbody>
					</table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
