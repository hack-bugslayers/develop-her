@extends('layouts.nav')

@section('content')


<div class="first-section carousel-wrapper">
	<div class="carousel-section">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-app-prevent-settings data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-app-prevent-settings data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-app-prevent-settings data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="../../img/java.jpeg" width=>
					<div class="new_html_code d-block w-100"></div>
					<div class="carousel-caption d-none d-md-block ">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 text-right first-text">
		    				<h2 class="first-title"><span style="font-size: 60;">You didn't get this far to only get this far.</span></h2>
		   					<p class="text-right first-title"> Build your portfolio and confidence by working on real world problems.</p>
								<button class="btn btn-read" style="">READ MORE</button>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 first-image-wrap">
		    				<!-- <img class="d-block first-image" src="https://meiert.com/de/publications/books/978-1491942574/978-1491942574-s.png" width="300" alt="First slide"> -->
							</div>
						</div>
  				</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="../../img/realclients.jpeg">
					<div class="new_html_code d-block w-100"></div>
					<div class="carousel-caption d-none d-md-block ">
   					<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 text-right first-text">
		    				<h2 class="first-title"><span style="font-size: 60;">Learn to work in teams</span></h2>
		   					<p class="text-right first-title">Collaborate with fellow beginner coders to complete a project. Find your support network!</p>
								<button class="btn btn-read">READ MORE</button>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 first-image-wrap">
		    				<!-- <img class="d-block first-image" src="https://www.packtpub.com/sites/default/files/B05781_cover.png" width="300" alt="First slide"> -->
							</div>
						</div>
  				</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="../../img/techwoman.jpeg"> 
					<div class="new_html_code d-block w-100"></div>
					<div class="carousel-caption d-none d-md-block ">
   					<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 text-right first-text">
		    				<h2 class="first-title"><span style="font-size: 60;">Gauge your marketability.</span></h2>
		   					<p class="text-right first-title">Expose yourself to a real market and get feedback from real clients.</p>
								<button class="btn btn-read">READ MORE</button>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 first-image-wrap">
		    				<!-- <img class="d-block first-image" src="https://images-na.ssl-images-amazon.com/images/I/41IksxVsniL._SX353_BO1,204,203,200_.jpg" width="300" alt="First slide"> -->
							</div>
						</div>
  				</div>
				</div>

			</div>

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

<div class="third-section flex-center position-ref" style="width: 70%">
	<div class="content">

		<div class="title m-b-md container text-center why-join">
			<h2>Why join the community</h2>
		</div>

		<div class="row container"  style="width: 100%">			
			<div class="col-lg-3 col-md-3">
				<a href=><img src="../../img/hands.svg" width="80%"></a>
				<p>Find fellow beginner developers, collaborate and get updated with your network's progress.</p>
			</div>

			<div class="col-lg-3 col-md-3">
				<a href=><img src="../../img/customer-review.svg" width="80%"></a>
				<p>Work with small business owners who are looking to launch their brand in the digital space.
				</p>
			</div>

			<div class="col-lg-3 col-md-3">
				<a href=><img src="../../img/friendship.svg" width="80%"></a>
				<p>Chat a sister out, reach out for help when in need and pay it forward!</p>
			</div>

			<div class="col-lg-3 col-md-3">
				<a href=><img src="../../img/job-search.svg" width="80%"></a>
				<p>Get a glimpse of the job market and see how your skill level compares to the demands of a real project</p>
			</div>
		</div>

	</div>
</div>

<div class="fourth-section">
	<div class="title m-b-md container text-center">
		<h2>HOW TO USE</h2>
	</div>

	<div class="row how-to-use container text-center">
		<div class="col-lg-2 col-md-2 icon">
			<img src="../../img/web.svg">
			<p class="how-label">Create an account</p>
		</div>

		<div class="col-lg-2 col-md-2 icon">
			<img src="../../img/looking-for-love.svg">
			<p class="how-label">Look for projects you'd like to work on and look forfriends and coders you'd like to work with</p>
		</div>

		<div class="col-lg-2 col-md-2 icon">
			<img src="../../img/speech-bubble.svg">
			<p class="how-label">Get in touch with the client to discuss the vision of their website, requirements and timeline</p>
		</div>

		<div class="col-lg-2 col-md-2 icon">
			<img src="../../img/upload.svg">
			<p class="how-label">Send your output to your client and add it to your portfolio and experience</p>
		</div>

		<div class="col-lg-2 col-md-2 icon">
			<img src="../../img/rating.svg">
			<p class="how-label">Get real feedback and testimonial from your client and have the option to add it to your portfolio</p>
		</div>
	</div>
</div>
	
<!-- <div class="fifth-section carousel-wrapper full-height">
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
</div> -->




@endsection