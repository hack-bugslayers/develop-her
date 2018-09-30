@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-5s">
            <div class="card">
            	{{-- <h2 style="padding: 2.5%">Resources</h2> --}}

                <div class="card-body" style="float: left, width:50%">        

                    <table class="table">
                      <thead class="thead-dark text centered">
                        <tr>
                          <th scope="col">BOOTCAMPS</th>
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                              <th scope="row">
                                <a href=>
                                    <h4>Tuitt Coding Bootcamp PH</h4>
                                </a>     
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    </p>
                              </th>
                            </tr>
                            <tr>
                              <th scope="row">
                                <a href=>
                                    <h4>Hngg Academy</h4>
                                </a>     
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    </p>
                              </th>
                            </tr>
                            <tr>
                              <th scope="row">
                                <a href=>
                                    <h4>Something Bootcamp</h4>
                                </a>     
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    </p>
                              </th>
                            </tr>
                          
                      </tbody>
                    </table>

                </div>
      </div>
    </div>
  </div>

      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-5s">
            <div class="card">
              {{-- <h2 style="padding: 2.5%">Resources</h2> --}}
                	
                <div class="card-body" >          

                    <table class="table">
                      <thead class="thead-dark text centered">
                        <tr>
                          <th scope="col">ONLINE RESOURCES</th>
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                              <th scope="row">
                                <a href=>
                                    <h4>W3 Schools</h4>
                                </a>     
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    </p>
                              </th>
                            </tr>
                            <tr>
                              <th scope="row">
                                <a href=>
                                    <h4>Something Else</h4>
                                </a>     
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    </p>
                              </th>
                            </tr>
                            <tr>
                              <th scope="row">
                                <a href=>
                                    <h4>Something Bootcamp</h4>
                                </a>     
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    </p>
                              </th>
                            </tr>
                          
                      </tbody>
                    </table>

                </div>
            
                    
  

                </div>
            </div>
        </div>
    </div>
    <a href="../code-editor"><button type="button" class="btn btn-dark" style="display: block; background-color: #212529; ali">Practice Coding!</button></a>
</div>
@endsection
