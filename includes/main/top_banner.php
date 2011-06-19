	<div class="header">
		<div class="header_top">
			<div class="clock_box">
			<table border="0" cellspacing="5" cellpadding="0" style="padding-top:5px;">
			  <tr>
					<td>
						<ul id="clock1">	
							<li id="sec1"></li>
							<li id="hour1"></li>
							<li id="min1"></li>
						</ul>
					</td>
					<td>
						<ul id="clock2">	
							<li id="sec2"></li>
							<li id="hour2"></li>
							<li id="min2"></li>
						</ul>
					</td>
					<td>
						<ul id="clock3">	
							<li id="sec3"></li>
							<li id="hour3"></li>
							<li id="min3"></li>
						</ul>
					</td>
			  	<td>
					<ul id="clock4">	
						<li id="sec4"></li>
				   	<li id="hour4"></li>
						<li id="min4"></li>
					</ul>
					</td>
			  </tr>  
			  <tr align="center">
				<td>
				Mauritius
				</td>
				<td>
				London
				</td>
				<td>
				Singapore
				</td>
			  <td>
				San Francisco
				</td>
			  </tr>  
			</table>
			</div>
			<div class="login_container">
        <?php
          $sub_logged_in = isSubscriberLoggedIn();
          
          if ($sub_logged_in == true)
          {
          ?>
            <div class="login_box" style="background:url('images/logout_icon.jpg') top left no-repeat;">
          <?php
          }
          else
          {
          ?>
          	<div class="login_box" style="background:url('images/login_icon.jpg') top left no-repeat;">
          <?php
          }
          ?>
					<a href="#">&nbsp;</a>		
				</div>
				<div style="display: none;" class="logbox">
					<div class="close_box"><a class="close" href="#">Close X</a></div>
					<h2>Members login here</h2>
					<form action="client_login.php" method="post">
					<table cellspacing="0" cellpadding="0" border="0">
					  <tr>
						<th>Registered Mail:</th>
						<td><input name="username" type="text" /></td>
					  </tr>
					  <tr>
						<th>Password:</th>
						<td><input name="password" type="password" /></td>
					  </tr>
					  <tr>
						<td colspan="2" class="send_btn"><input name="" type="submit" value="Login" /></td>
					  </tr>
					  <tr>
						<?php
            
            if ($sub_logged_in == true){ ?>
              <td class="pass_forgot" colspan="2">Welcome <?=$_SESSION['subscriber_firstame']?> - <a href="logout.php">Logout</a></td>
						<?php
						}
						else
						{
              ?>
							<td class="pass_forgot" colspan="2"><a href="forgotpassword.php">Forgot Password?</a> - <a href="signin.php">Apply for membership</a></td>
							<?php
						}
						?>
					  </tr>
					</table>
					</form>
				</div>
			</div>	
			<div class="search_box">
				<form action="search.php" method="post">
				<table border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td><input name="search" type="text" value="Search" onfocus="this.value = this.value=='Search'?'':this.value;" onblur="this.value = this.value==''?'Search':this.value;"/></td>
					<td class="search_btn"><input name="" type="submit" value="" /></td>
				  </tr>
				</table>
				</form>
			</div>
			<script type="text/javascript">
				$('div.login_box a').click(function(){
					$('.logbox').show(450);
					return false;
				});
					
				$('.close_box,.close a').click(function(){
					$('.logbox').hide(450);
					return false;
				});	
			</script>
			<div class="cleaner"></div>
		</div>
		<?php include("top_menu.php"); ?>
		<div class="banner">
			<div class="banner_btm"><img src="images/banner_bg_btm.png" alt="" /></div>
			<div class="logo"><a href="#"><img src="images/logo_itl.jpg" alt="" /></a></div>
		</div>
	</div>