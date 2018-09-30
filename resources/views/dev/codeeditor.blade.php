@extends('layouts.nav3')

@section('content')

	<main class="coding-practice">
		<div class="editors">
			<div class="editor html">
				HTML
				<textarea id="html"></textarea>
			</div>

			<div class="editor css">
				CSS
				<textarea id="css"></textarea>
			</div>

			<div class="editor js">
				JAVASCRIPT
				<textarea id="js"></textarea>
			</div>
		</div>

		<div id="run">RUN</div>

		<hr>

		<div class="browser">
			<div id="browser">
			</div>
		</div>

		<input value="</script>" class="tag" hidden>
	</main>

	<!-- import jquery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- import bootstrap js -->
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$("#run").click(function() {
				var html = $('#html').val();
				var css = $('#css').val();
				var js = $('#js').val();
				var tag = $('.tag').val();
				var code = '<style>' + css + '</style>' + html + '<script>' + js + tag;
				$("#browser").html(code);
			});
		});
	</script>
@endsection
