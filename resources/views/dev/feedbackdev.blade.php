@extends('layouts.nav2')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
<!-- Rating -->
    <div class="container">     
        <div class="row">
            <div class="col-sm-3">
                <div class="rating-block">
                    @foreach($ratings as $rating)
                    <h4>{{$rating->name}}</h4>
                    <button type="button" class="btn btn-default btn-sm" aria-label="Left Align" onclick="setRating('{{$rating->id}}', 1)">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-default btn-sm" aria-label="Left Align" onclick="setRating('{{$rating->id}}', 2)">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button id="{{$rating->name}}-3" type="button" class="btn btn-default btn-sm" aria-label="Left Align" onclick="setRating('{{$rating->id}}', 3)">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align" onclick="setRating('{{$rating->id}}', 4)">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align" onclick="setRating('{{$rating->id}}', 5)">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                    <input name="{{$rating->id}}" id="{{$rating->id}}" type="text" val="">
                    @endforeach
                </div>
            </div>                    
        </div>      
    </div> <!-- /container -->
<br>

<!--Feedback Form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Feedback Form</div>

                <div class="card-body">
                    <div class="panel-group" id="accordion">
                   
                        <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                             <form role="form" class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Select User Type</label>
                    <div class="controls">
                        <select id="enquiry" class="form-control" name="enquiry" class="input-xlarge">
                            <option value="" selected="selected">(please select)</option>
                            <option value="">Developer</option>
                            <option value="">Business Owner</option>
                        </select>
                    </div>
                </div>
                
 <div class="form-group">
    <label for="nameoftheorganisation">Project Name</label>
    <input type="name" class="form-control" id="nameoftheorganisation" placeholder="Organisation Name">
  </div>
   <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" id="name" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Leave a Review</label>
    <textarea type="text" class="form-control" id="text" placeholder="Write your query here"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<!-- import jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- import bootstrap js -->
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
    // $(document).ready(function () {
    //     $("#run").click(function() {
    //         var html = $('#html').val();
    //         var css = $('#css').val();
    //         var js = $('#js').val();
    //         var tag = $('.tag').val();
    //         var code = '<style>' + css + '</style>' + html + '<script>' + js + tag;
    //         $("#browser").html(code);
    //     });
    // });

    function setRating(id, val) {
        // var value = val;
        var id = id;
        console.log(val);
        console.log(id);

        $("#"+id).val(val);

        // var quantity = $('#itemQuantity' + id).val();
        // var price = $('#itemPrice' + id).val();
        // if (quantity == 0) {
        //     $('.add-error').show().delay(2000).fadeOut(1500);
        // } else {
        //     $.post('assets/add_to_cart.php',
        //         {
        //             item_id: id,
        //             item_quantity: quantity,
        //             item_price: price
        //         },
        //             function(data, status) {
        //                 $('.cart-nav-icon').html('<img src="assets/img/icons/icons8-shopping-bag-50.png">' + data);
        //                 $('.cart-nav-text').html('CART' + data);
        //                 $('.added').show().delay(500).fadeOut(1500);
        //         });
        // }
    }

    // $("button").click(function() {
    //     var val = $(this).next().val();
    //     $("")
    // });
</script>

@endsection
