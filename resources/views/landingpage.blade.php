@extends('layouts.nav')

@section('content')


<div class="first-section carousel-wrapper full-height">
	<div class="carousel-section">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-app-prevent-settings data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-app-prevent-settings data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-app-prevent-settings data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="https://images.pexels.com/photos/532563/pexels-photo-532563.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="First slide">
					<div class="new_html_code d-block w-100"></div>
					<div class="carousel-caption d-none d-md-block ">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 text-right first-text">
		    				<h2 class="first-title"><span style="font-size: 60;">Make Way for More Women in Tech</span></h2>
		   					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<button class="btn btn-read">READ MORE</button>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 first-image-wrap">
		    				<!-- <img class="d-block first-image" src="https://meiert.com/de/publications/books/978-1491942574/978-1491942574-s.png" width="300" alt="First slide"> -->
							</div>
						</div>
  				</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="https://images.pexels.com/photos/268487/pexels-photo-268487.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Second slide">
					<div class="new_html_code d-block w-100"></div>
					<div class="carousel-caption d-none d-md-block ">
   					<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 text-right first-text">
		    				<h2 class="first-title"><span style="font-size: 60;">Forgetting Women in Tech History</span></h2>
		   					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<button class="btn btn-read">READ MORE</button>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 first-image-wrap">
		    				<!-- <img class="d-block first-image" src="https://www.packtpub.com/sites/default/files/B05781_cover.png" width="300" alt="First slide"> -->
							</div>
						</div>
  				</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="https://images.pexels.com/photos/921322/pexels-photo-921322.png?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
					<div class="new_html_code d-block w-100"></div>
					<div class="carousel-caption d-none d-md-block ">
   					<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 text-right first-text">
		    				<h2 class="first-title"><span style="font-size: 60;">33 Must Know Facts About Women in Tech</span></h2>
		   					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<button class="btn btn-read">READ MORE</button>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 first-image-wrap">
		    				<!-- <img class="d-block first-image" src="https://images-na.ssl-images-amazon.com/images/I/41IksxVsniL._SX353_BO1,204,203,200_.jpg" width="300" alt="First slide"> -->
							</div>
						</div>
  				</div>
				</div>

			</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>

<!-- <div class="second-section flex-center position-ref full-height">
	<div id="color-overlay"></div>
	<div class="second-content content">
		
		<img class="laptop img-fluid" src="{{ asset('images/laptop.png') }}" alt="">
		<div class="article title m-b-md absolute">
			< LEFT<b>WORK</b> >
		</div>

		<div class="links container text-center absolute">
			<a href="https://laravel.com/docs">Link 1</a>
			<a href="https://laracasts.com">Link 2</a>
			<a href="https://laravel-news.com">Link 3</a>
			<a href="https://forge.laravel.com">Link 4</a>
			<a href="https://github.com/laravel/laravel">Link 4</a>
			<ul id="nav">
				<li><a>Link 1</a>
					<section>
						<p>Link # 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt pellentesque lorem, id suscipit dolor rutrum id. Morbi facilisis porta volutpat. Fusce adipiscing, mauris quis congue tincidunt, sapien purus suscipit odio, quis dictum odio tortor in sem. Ut sit amet libero nec orci mattis fringilla. Praesent eu ipsum in sapien tincidunt molestie sed ut magna. Nam accumsan dui at orci rhoncus pharetra tincidunt elit ullamcorper. Sed ac mauris ipsum. Nullam imperdiet sapien id purus pretium id aliquam mi ullamcorper.</p>
					</section>
				</li>
				<li><a>Link 2</a>
					<section>
						<p>Link # 2 Ut laoreet augue et neque pretium non sagittis nibh pulvinar. Etiam ornare tincidunt orci quis ultrices. Pellentesque ac sapien ac purus gravida ullamcorper. Duis rhoncus sodales lacus, vitae adipiscing tellus pharetra sed. Praesent bibendum lacus quis metus condimentum ac accumsan orci vulputate. Aenean fringilla massa vitae metus facilisis congue. Morbi placerat eros ac sapien semper pulvinar. Vestibulum facilisis, ligula a molestie venenatis, metus justo ullamcorper ipsum, congue aliquet dolor tortor eu neque. Sed imperdiet, nibh ut vestibulum tempor, nibh dui volutpat lacus, vel gravida magna justo sit amet quam. Quisque tincidunt ligula at nisl imperdiet sagittis. Morbi rutrum tempor arcu, non ultrices sem semper a. Aliquam quis sem mi.</p>
					</section>
				</li>
				<li><a>Link 3</a>
					<section>
						<p>Link # 3 Donec mattis mauris gravida metus laoreet non rutrum sem viverra. Aenean nibh libero, viverra vel vestibulum in, porttitor ut sapien. Phasellus tempor lorem id justo ornare tincidunt. Nulla faucibus, purus eu placerat fermentum, velit mi iaculis nunc, bibendum tincidunt ipsum justo eu mauris. Nulla facilisi. Vestibulum vel lectus ac purus tempus suscipit nec sit amet eros. Nullam fringilla, enim eu lobortis dapibus, quam magna tincidunt nibh, sit amet imperdiet dolor justo congue turpis.</p>    
					</section>
				</li>
				<li><a>Link 4</a>
					<section>
						<p>Link # 4 Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus dui urna, mollis vel suscipit in, pharetra at ligula. Pellentesque a est vel est fermentum pellentesque sed sit amet dolor. Nunc in dapibus nibh. Aliquam erat volutpat. Phasellus vel dui sed nibh iaculis convallis id sit amet urna. Proin nec tellus quis justo consequat accumsan. Vivamus turpis enim, auctor eget placerat eget, aliquam ut sapien.</p>
					</section>
				</li>
			</ul>
		</div>

		<div class="description container absolute">
			<h5 class="text-center">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</h5>
		</div>

	</div>
</div> -->

<div class="third-section flex-center position-ref full-height">
	<div class="content">

		

		<div class="title m-b-md container text-center">
			<h2>WHY JOIN THE COMMUNITY</h2>
		</div>

		<div class="row container">			
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="https://images.pexels.com/photos/355988/pexels-photo-355988.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" target="_blank">
						<img class="third-image" height="300" src="https://images.pexels.com/photos/355988/pexels-photo-355988.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Lights" style="width:100%">
					</a>
					<div class="caption">
						<p>Lorem ipsum keme keme keme 48 years keme bella keme keme chipipay na jowabelles emena gushung na ang kasi na katagalugan bakit chipipay kasi at antibiotic chuckie chuckie kasi ang ano mabaho makyonget majubis dites otoko urky planggana quality control.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="thumbnail">
					<a href="https://images.pexels.com/photos/533189/pexels-photo-533189.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" target="_blank">
						<img class="third-image" height="300" src="https://images.pexels.com/photos/533189/pexels-photo-533189.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Nature" style="width:100%">
					</a>
					<div class="caption">
						<p>Bokot tamalis warla buya ano shala chipipay lorem ipsum keme keme shogal buya pamentos fayatollah kumenis kabog at ang nakakalurky ang warla na ang shongaers ng at bakit at ang shokot conalei bigalou urky ng fayatollah kumenis tamalis ano ang kirara shogal waz kirara shogal balaj.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="thumbnail">
					<a href="https://images.pexels.com/photos/356043/pexels-photo-356043.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" target="_blank">
						<img class="third-image" height="300" src="https://images.pexels.com/photos/356043/pexels-photo-356043.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Fjords" style="width:100%">
					</a>
					<div class="caption">
						<p>Ng nang effem planggana kasi bakit klapeypey-klapeypey shonga sa warla na ang at bakit ano planggana shontis shala 48 years doonek jutay otoko kemerloo nang daki at nang at ang at ang emena gushung shontis boyband bakit at ang shonga-shonga antibiotic tamalis.</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="fourth-section flex-center position-ref full-height">

		
	<div class="container demo">
<div class="title m-b-md container text-center">
			<h2>HOW TO USE</h2>
		</div>
    
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Learn More #1
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Learn More #2
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Learn More #3
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>

    </div><!-- panel-group -->
    
    
</div><!-- container -->
</div>
	
<div class="fifth-section carousel-wrapper full-height">
	<div class="carousel-section">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner full-height">
				<div class="carousel-item active">
					<img class="d-block w-100" src="http://cedef5600b5bf9d810e3-4c393a7cc270bf099576656e3d1662dd.r81.cf3.rackcdn.com/wp-content/uploads/2017/05/women-in-tech-2-1.jpg" alt="First slide">
					<div class="carousel-caption d-none d-md-block">
    				<h5>Slide 1</h5>
   					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  				</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="http://www.mibusinessmag.com/wp-content/uploads/2017/04/IMG_2314.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
    				<h5>Slide 2</h5>
   					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  				</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="https://www.womenintech.co.uk/wp-content/uploads/2017/07/woman-tech.jpg" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
    				<h5>Slide 3</h5>
   					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  				</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>




@endsection