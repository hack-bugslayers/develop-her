@extends('layouts.nav3')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!-- original navbar -->
<!--     <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TechnoGeeK</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Dashboard</a></li>
            <li><a href="pages.html">Pages</a></li>
            <li><a href="posts.html">Posts</a></li>
            <li><a href="users.html">Users</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Welcome, Madhav</a></li>
            <li><a href="login.html">Logout</a></li>

          </ul>
        </div>
      </div>
    </nav> -->

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">

        <!-- view profile link  -->
        <a href="profile" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> VIEW MY PROFILE {{$user->username}}</a>

        <!-- practice coding link -->
        <a href="/code-editor" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> PRACTICE CODING </a>
        </div>

        <div class="well">
            <h4>Success Rate</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$success_rate}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$success_rate}}%;">{{$success_rate}}%</div>
            </div>

            <h4>Average Rating</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
            </div>
        </div>
      </div>

    <div class="col-md-9">
        <!-- stats -->
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #48C9B0;">
            <h3 class="panel-title">My Projects</h3></div>
        <div class="panel-body">

        <div class="col-md-3">
            <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>{{$ongoing}}</h2>
                <h4>On-Going</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="well dash-box">
                <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>{{$winner+$runnerup}}</h2>
                <h4>Finished</h4>
            </div>
       </div>

       <div class="col-md-3">
         <div class="well dash-box">
           <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>{{$winner}}</h2>
           <h4>Winner</h4>
         </div>
       </div>

       <div class="col-md-3">
         <div class="well dash-box">
           <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>{{$runnerup}}</h2>
           <h4>Runner-up</h4>
         </div>
       </div>

       <!-- projects -->
        <div class="col-md-12">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">PROJECT</th>
                  <th scope="col">STATUS</th>
                  <th scope="col">FEEDBACK</th>
                </tr>
              </thead>
              <tbody>
                @foreach($myprojects as $myproject)
                  <tr>
                    <td scope="row"><a href={{ url("/entry/$myproject->id") }}>{{$myproject->name}}</a></td>
                    @foreach($statuses as $status)
                      @if($myproject->status_id == $status->id)
                        <td>{{$status->name}}</td>
                      @endif
                    @endforeach
                    <td><a href="/feedback">Add</a></td>
                  </tr>
                @endforeach
                <!-- <tr>
                  <th scope="row">ALING BEBANG'S SPECIALTY CAKES</th>
                  <td>Ongoing</td>
                  <td>Bebang</td>
                </tr>
                <tr>
                  <th scope="row">KAINAN SA KANTO</th>
                  <td>Winner</td>
                  <td>Jean</td>
                </tr>
                <tr>
                  <th scope="row">MANG LARRY'S IHAW IHAW</th>
                  <td>Runner up</td>
                  <td>Larry</td>
                </tr> -->
              </tbody>
            </table>
        </div>
  </div>
</div>

<!--community projects-->
<div class="panel panel-default">
  <div class="panel-heading"style="background-color:  #48C9B0;">
    <h3 class="panel-title">Community Projects</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover">
      <tr>
        <th>Name</th>
        <th>Project Type</th>
      </tr>

      @foreach($projects as $project)
      <tr>
          <td><a href="/project/{{$project->id}}">{{$project->name}}</a></td>
          <td>
            @foreach($types as $type)
              @if($type->id == $project->type_id)
                {{$type->name}}
              @endif
            @endforeach
          </td>
      </tr>
      @endforeach
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
