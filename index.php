<html>
<head>
	<title>Muda Bergerak</title>
	<meta property="fb:admins" content="wahyu.rismawan"/>
	<meta property="fb:app_id" content="994933280533371"/>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
		<div id="logo"><img src="assets/logo.png" height="150px"></div>
		<div id="demo"><img src="assets/demo.png" height="150px"></div>
		<form id="form" method="POST" action="result.php" enctype="multipart/form-data">
			<p class="file">
				<input type="file" name="foto" id="foto">
				<label for="foto">UPLOAD FOTO KAMU</label>
				<input type="submit">
				<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
			</p>
		</form>

		<div id="output" style="text-align:center">
			
		</div>


		<!-- facebook comment -->
		<div id="comments">

			<p style="text-align: left; margin-left: 23px;"> Berikan Dukunganmu </p>
			
			<div id="fb-root"></div>
			<div class="fb-comments" data-href="http://apps.wrismawan.me/" data-numposts="5" data-colorscheme="light">
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=994933280533371&version=v2.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<script type="text/javascript">
	function process(formObj, docObj){
		var formURL = formObj.attr("action");
		var formData = new FormData(docObj);
		$.ajax({
			async: false,
			url  : formURL,
			mimeType : "multipart/form-data",
			contentType : false,
			processData: false,
			cache : false,
			type : "POST",
			data : formData,
			success: function(data){
				$('#output').html(data);
			},
			error: function(e){
				console.log('ans : '+e);
			}
		})
	}

	document.getElementById("foto").onchange = function() {
		var docObj = document.getElementById("form");
		process($("#form"),docObj);
	};

	</script>

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-57259955-1', 'auto');
	ga('send', 'pageview');

	</script>
</body>



</html>

