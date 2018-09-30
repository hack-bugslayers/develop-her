@extends('layouts.nav2')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

            <div class="container">    
                  <!-- <div class="row"> -->
                      <!-- <div class="panel panel-default"> -->
                      
                    <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-2">
                       <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                    
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
                            <p><a href="{{ $user->portfolio }}">{{ $user->portfolio }}</a></p>
                          
                           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span>{{ $user->username }}</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{ $user->email }}</p></li>
                          </ul>
                          <hr>
                      </div>
                </div>
            </div>
            </div>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        {{-- <div class="list-group"> --}}
        
        <!-- chat now  -->
        {{-- <a href="users.html" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> CHAT NOW! </a> --}}
        {{-- </div> --}}

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

        <!-- skills -->
        <div class="panel-heading" style="background-color:  #48C9B0;">
            <h3 class="panel-title">Skills</h3></div>
        <div class="well">
            
            @if (!empty($myskills))
              <h4>No skills selected.</h4>
            @else
              @foreach ($myskills as $myskill)
                <h4>{{$myskill->name}}</h4>
              @endforeach
            @endif

        </div>


      </div>

    <div class="col-md-8">

        
<!--projects won-->
<div class="panel panel-default">
  <div class="panel-heading"style="background-color:  #48C9B0;">
    <h3 class="panel-title">Projects Won</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover">
      <tr>
        <th>Name</th>
        <th>Project Type</th>
      </tr>
      @foreach ($myprojects as $myproject)
        @if ($myproject->status_id == 3)
          <tr>
            <td><a href="/project/{{ $myproject->id }}">{{ $myproject->name }}</a></td>
            @foreach($types as $type)
              @if($type->id == $myproject->type_id)
                <td>{{$type->name}}</td>
              @endif
            @endforeach
          </tr>
        @endif
      @endforeach
    </table>
  </div>
</div>

<!-- client feedback -->
<div class="panel-heading"style="background-color:  #48C9B0;">
    <h3 class="panel-title">Client Feedback</h3>
  </div>    
    <div class="review-block">
        <div class="row">
            <div class="col-sm-3">
                <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                <div class="review-block-name"><a href="#">Billy</a></div>
                    <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                        </div>
                            <div class="col-sm-9">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">Lorem ipsum keme keme keme 48 years at ang at nang urky antibiotic tamalis ang ano makyonget sa cheapangga emena gushung wiz at ng at nang katagalugan chopopo at ang ang krang-krang.</div>
                        </div>
                    </div>
                <hr>
                
                <div class="row">
                    <div class="col-sm-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="review-block-name"><a href="#">Allan</a></div>
                            <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">Lorem ipsum keme keme keme 48 years at ang at nang urky antibiotic tamalis ang ano makyonget sa cheapangga emena gushung wiz at ng at nang katagalugan chopopo at ang ang krang-krang.</div>
                        </div>
                    </div>
                    <hr/>
                
                <div class="row">
                        <div class="col-sm-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="review-block-name"><a href="#">Peejay</a></div>
                            <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">Lorem ipsum keme keme keme 48 years at ang at nang urky antibiotic tamalis ang ano makyonget sa cheapangga emena gushung wiz at ng at nang katagalugan chopopo at ang ang krang-krang.</div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
                            <div class="review-block-name"><a href="#">Arleigh</a></div>
                            <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">this was nice in buy</div>
                            <div class="review-block-description">Lorem ipsum keme keme keme 48 years at ang at nang urky antibiotic tamalis ang ano makyonget sa cheapangga emena gushung wiz at ng at nang katagalugan chopopo at ang ang krang-krang.</div>
                        </div>
                    </div>
                    
      </div>
    </div>
  </div>
</section>

  <footer id="footer">
    <p>Copyright : Bug Slayers<br>2018</p>
  </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="dist/js/bootstrap.min.js"></script>

@endsection
