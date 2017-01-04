<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Nathaniel Larrimore</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- reCAPTCHA Script-->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

    <div class="brand">Nathaniel Larrimore</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
       <?php include 'nav.php'?>
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Nathaniel</strong>
                    </h2>
                    <hr>
                </div>
                
                <div class="col-md-6">
                    <p>Phone:
                        <strong>302-220-6885</strong>
                    </p>
                    <p>Email:
						<strong><a href='mai&#108;t&#111;&#58;&#110;%65l%35%3&#55;54&#64;&#114;&#37;&#54;9t&#46;&#101;d&#117;'>nel575&#52;&#64;rit&#46;&#101;d&#117;</a></strong>
                    </p>
                    <p>Address 1:
                        <strong>21 Charring Lane
                            <br>New Castle, Delaware 19720</strong>
                    </p>
					<p>Address 2:
                        <strong>6000 Reynolds Dr #694
                            <br>Rochester, NY 14623</strong>
                    </p>
                </div>
				 <div class="col-lg-6">
                    <form name='contactForm' role="form" onsubmit='return validateForm()' action='email.php'>

                                <label>Name</label>
								<div id='nameError'></div>
                                <input type="text" name='name' class="form-control">
  
                                <label>Email Address</label>
								<div id='emailError'></div>
                                <input type="email" name='email' class="form-control">

                                <label>Phone Number</label>
								<div id='nameError'></div>
                                <input type="tel" name='tel' class="form-control">
   
                                <label>Message</label>
								<div id='textError'></div>
                                <textarea class="form-control" name='text' rows="6"></textarea>

                                <div class="g-recaptcha" data-sitekey="6Lc-8g8UAAAAAFSK91QpWK0wiR4irTMuY6o4yQ6z"></div>

                                <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <?php include 'footer.php'?>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!--Custom JS -->
	<script src='js/main.js'></script>

</body>

</html>
