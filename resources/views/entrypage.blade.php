@extends('layouts.nav2')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- css: text-transform -->
                <div class="card-header">
                    <h2 style="display: inline-block;"><strong>{{ $project->name }}</strong></h2>

                    <button value="" id="joinProject" type="button" class="btn btn-success" style="display: inline; float: right; width: 100px;">Approved</button>

                    <div class="row">

                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <img src="https://images.pexels.com/photos/1449844/pexels-photo-1449844.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="100%" height="auto">

                            <h6>Link to Prototype:</h6>
                            <a href="#">www.prototype.com</a>

                            <h6>Developers:</h6>
                            @foreach($project->devs as $dev)
                            <h6><a href={{ url("/profile/$dev->id") }}>{{ $dev->first_name . ' ' . $dev->last_name }}</a></h6>
                            @endforeach

                            <h6>Client:</h6>
                            @foreach($project->clients as $client)
                            <a href={{ url("/profile/$client->id") }}><h6>{{ $client->business_name }}</h6></a>
                            @endforeach

                            <textarea class="form-control" placeholder="type a message"></textarea>
                          </div>
  

                        <div class="col-lg-7 col-md-7 col-sm-6">


                            <div class="chat_container">
                                <div class="chat_container2">
                                    <div class="col-sm-12 chat_sidebar">
                                        <div class="row">
                                            <div class="col-sm-12 message_section">
                                                <div class="row">
                                                    <div class="new_message_head">
                                                        <div class="pull-left"><button><i class="fa fa-plus-square-o" aria-hidden="true"></i> New Message</button>
                                                        </div>
                                                        <div class="pull-right">
                                                            <div class="dropdown">
                                                                <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fa fa-cogs" aria-hidden="true"></i>  Setting
                                                                    <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                                                    <li><a href="#">Action</a></li>
                                                                    <li><a href="#">Profile</a></li>
                                                                    <li><a href="#">Logout</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="chat_area">
                                                        <ul class="list-unstyled">
                                                            <li class="left clearfix">
                                                                <span class="chat-img1 pull-left">
                                                                    <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                                                                </span>
                                                                <div class="chat-body1 clearfix">
                                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                                                    <div class="chat_time pull-right">09:40PM</div>
                                                                </div>
                                                            </li>
                                                            <li class="left clearfix">
                                                                <span class="chat-img1 pull-left">
                                                                    <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                                                                </span>
                                                                <div class="chat-body1 clearfix">
                                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                                                    <div class="chat_time pull-right">09:40PM</div>
                                                                </div>
                                                            </li>
                                                            <li class="left clearfix">
                                                                <span class="chat-img1 pull-left">
                                                                    <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                                                                </span>
                                                                <div class="chat-body1 clearfix">
                                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                                                    <div class="chat_time pull-right">09:40PM</div>
                                                                </div>
                                                            </li>
                                                            <li class="left clearfix admin_chat">
                                                                <span class="chat-img1 pull-right">
                                                                    <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                                                                </span>
                                                                <div class="chat-body1 clearfix">
                                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                                                    <div class="chat_time pull-left">09:40PM</div>
                                                                </div>
                                                            </li>
                                                            <li class="left clearfix admin_chat">
                                                                <span class="chat-img1 pull-right">
                                                                    <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                                                                </span>
                                                                <div class="chat-body1 clearfix">
                                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                                                    <div class="chat_time pull-left">09:40PM</div>
                                                                </div>
                                                            </li>




                                                        </ul>
                                                    </div><!--chat_area-->
                                                    <div class="message_write">
                                                        <textarea class="form-control" placeholder="type a message"></textarea>
                                                        <div class="clearfix"></div>
                                                        <div class="chat_bottom"><a href="#" class="pull-left upload_btn"><i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                                        Add Files</a>
                                                        <a href="#" class="pull-right btn btn-success">
                                                        Send</a></div>
                                                    </div>
                                                </div>
                                            </div> <!--message_section-->
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- chatbox -->


                        </div>


                    </div>

                </div>
            </div>
        </div>


        @endsection