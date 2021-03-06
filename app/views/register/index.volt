<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <!-- CSS -->
{{ stylesheet_link('css/bootstrap.min.css') }}
{{ stylesheet_link('css/font-awesome.min.css') }}
{{ stylesheet_link('css/form-elements.css') }}
{{ stylesheet_link('css/style.css') }}

      

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->

    </head>



    <body background="img/23.jpg">

	
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">PlayMyList</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
		    <li>
                        <a href="login">Login</a>
                    </li>
		    <li>
                        <a href="register">Register</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        <!-- Top content -->
</br>
</br>
        <div class="top-content">
        	
            
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1>Signup with <strong>PlayMyList</strong></h1>
                            <div class="description">
                            <h2 color="white"><strong> Register at PlayMyList to Gain instant access to a Plethora of Music.  </strong></h2>
                            </div>
                          
                        </div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Sign up now</h3>
                            		<p>Fill in the form below to get instant access:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="register/add/" method="post" class="registration-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-email">First name</label>
			                        	<input type="text" name="fname" placeholder="First name..." class="form-email form-control"/>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Last name</label>
			                        	<input type="text" name="lname" placeholder="Last name..." class="form-email form-control">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="email" name="email" placeholder="Email..." class="form-email form-control" >
			                        </div>
						<div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="date" name="dob" class="form-email form-control" id="form-email" required>
			                        </div>
						<div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-email form-control" id="form-email">
			                        </div>
			                       
			                        {{ submit_button("Sign Me Up", "class": "btn btn-success") }}
			                    {{ end_form() }}
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
    <footer>
            <div class="row">
                <div class="col-lg-12">
		</br>
		</br>
                    <p>Copyright PlayMyList 2015</p>
                </div>
            </div>
        </footer>


        <!-- Javascript -->
     
{{ javascript_include("js/jquery-1.11.1.min.js") }}
        
{{ javascript_include("js/bootstrap.min.js") }}
       
{{ javascript_include("js/jquery.backstretch.min.js") }}
        
{{ javascript_include("js/retina-1.1.0.min.js") }}
        
{{ javascript_include("js/scripts.js") }}
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
