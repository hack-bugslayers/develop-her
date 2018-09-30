@extends('layouts.nav2')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">

        <!-- view profile link  -->
        <a href={{ url('/profile') }} class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> VIEW MY PROFILE {{$user->username}}</a>

        <div class="well">
            <h4>Average Rating</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
            </div>
        </div>
      </div>

    <div class="col-md-9">
        <!-- my projects -->
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #48C9B0;">
            <h3 class="panel-title">My Projects</h3></div>
        <div class="panel-body">

        <div class="col-md-3">
            <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>12</h2>
                <h4>On-Going</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>25</h2>
                <h4>Finished</h4>
            </div>
       </div>

   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>126</h2>
       <h4>Approved</h4>
     </div>
   </div>

   <div class="col-md-3">
     <div class="well dash-box">
       <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>129</h2>
       <h4>Rejected</h4>
     </div>
   </div>
  </div>
</div>

<!--community developers-->
<div class="panel panel-default">
  <div class="panel-heading"style="background-color:  #48C9B0;">
    <h3 class="panel-title">Community Developers</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover">
      <tr>
        <th>Name</th>
        <th><!-- Position --></th>
      </tr>

    <tr>
      <td>Mars Trizha</td>
      <td>JavaScript Developer</td>
    </tr>
    <tr>
      <td>Des Pineda</td>
      <td>PHP Developer</td>
    </tr>
    <tr>
      <td>Ann Matias</td>
      <td>Java Developer</td>
    </tr>
    <tr>
      <td>Chellie Illustre</td>
      <td>JavaScript Developer</td>
    </tr>
    <tr>
      <td>Betty Bondoc</td>
      <td>PHP Developer</td>
    </tr>
    </table>

  </div>
</div>

      </div>
    </div>
  </div>
</section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>

@endsection
