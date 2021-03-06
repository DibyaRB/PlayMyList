<html>
<?php echo $this->tag->stylesheetLink('css/sidebar.css'); ?>
<?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
	<?php echo $this->tag->stylesheetLink('css/font-awesome.min.css'); ?>
<?php echo $this->tag->stylesheetLink('css/playlist.min.css'); ?>

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
                        <a href="http://localhost/playmylist/login">Login</a>
                    </li>
		    <li>
                        <a href="http://localhost/playmylist/register">Register</a>
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

 
<div class="container" >
    <div class="row profile" >
		<div class="col-md-3">
			<div class="profile-sidebar" style="background-color:#E8E8E8">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="../img/user-icon-dark.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					
<center>					
<button type="button" class="btn btn-success btn-sm"> CREATE NEW</button>
</br>
</br>
<button type="button" class="btn btn-warning btn-sm">MY PLAYLISTS</button>
</center>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Home </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-play"></i>
							Play All </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
</div>
		<div class="col-md-9" >

<body style="background-color:#f9f9f9">
<center><h1><p class="lead"> Enter Playlist Information</p> </h1></center>
Playlist Name: <input class="form-control input-sm" type="text" name="pname" value="" id="box1" />
</br>
Playlist Description: <textarea class="form-control" rows="5" id="comment"></textarea>
<script type="text/javascript" src="//code.jquery.com/jquery-latest.js"></script>
<style type="text/css">
<!--
#main {
    max-width: 800px;
    margin: 0 auto;
}
-->
</style>
</head>
<div id="main">
    <h3><p class="lead">Add Audio Links</p></h3>
    <div class="my-form">
        <form role="form" method="post" style="display:inline;">
            <p class="text-box">
                <label for="box1" >Audio Link <span class="box-number">1</span></label>
                <input class="form-control input-sm" type="text" name="boxes[]" value="" id="box1"  /> <a class="add-box" href="#"><img src="http://findicons.com/files/icons/1007/crystal_like/256/plus.png" height="3.5%" width="3.5%" /></a>
                
            </p>
            <p><input type="submit" class="btn btn-info" value="Submit" /></p>
        </form>
    </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('.my-form .add-box').click(function(){
        var n = $('.text-box').length + 1;
        if( 20 < n ) {
            alert('Cannot Add more than 20 Links at Once!');
            return false;
        }
        var box_html = $('<p class="text-box"><label for="box' + n + '">Audio Link <span class="box-number">' + n + '</span></label> <input type="text" class="form-control input-sm" name="boxes[]" value="" id="box' + n + '" /> <a href="#" class="remove-box"><img src="http://www.clker.com/cliparts/q/H/W/T/w/U/red-minus-md.png" height="3%" width="3%"/></a></p>');
        box_html.hide();
        $('.my-form p.text-box:last').after(box_html);
        box_html.fadeIn('slow');
        return false;
    });
    $('.my-form').on('click', '.remove-box', function(){
        $(this).parent().css( 'background-color', '#FF6C6C' );
        $(this).parent().fadeOut("slow", function() {
            $(this).remove();
            $('.box-number').each(function(index){
                $(this).text( index + 1 );
            });
        });
        return false;
    });
});
</script>
</div>
</body>
</html>
