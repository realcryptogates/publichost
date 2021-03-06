<?

require_once 'homeheader.php';

echo <<<_END
	<script>
		function checkUser(user){
			document.getElementById('userid2').style.color = 'white';
			$.post(
				'checkuser.php',
				{user : user.value},
				function(data){ $('#used').html(data) }
      		)
		}
	</script>
_END;


echo <<<_END
<section class='sec-register' >
	  <form method="post" action='signup.php'  onsubmit='return formValidation(this)'>
		  <fieldset id='formfieldset'>
			  <legend><span id='firstname1'>R</span><span id='lastname1'>e</span><span id='userid1'>gi</span><span id='password1'>st</span><span id='email1'>e</span><span id='accept1'>r</span></legend>
					<span id='firstname2'>First Name:</span><br>
					<input maxlength='20' type="text" name="firstname" id='firstname' required='required' onfocus="focus1()" onblur="blur1()">
					<br><br>
					<span id='lastname2'>Last Name:</span>
					<br>
					<input  maxlength='20' id='lastname0' type="text" name="lastname" required='required' onfocus="focus2()" onblur="blur2()">
					<br><br>
					<span id='userid2'>ID (username): </span>
					<br>
					<input  maxlength='20' id='userid0' type="text" name="user" required='required' onBlur='checkUser(this)' onfocus="focus3()" onchange="blur3()" >
					<div id='used'></div>
					<br>
					<span  id='password2'>Password:</span>
					<br>
					<input  maxlength='20' minlength='6' id='password0' type="password" name="password" required='required' onfocus="focus4()" onblur="blur4()">
					<br><br>
					<span id='email2'>Email:</span>
					<br>
					<input maxlength='20' id='email0' type="text" name="email" required='required' onfocus="focus5()" onblur="blur5()">
					<br><br>
					<a href='terms.html'><b><u>Terms & Conditions</u></b></a>: <input type='radio' id='accept0' name='terms' value='Accept' onfocus='focus6()'> <span id='accept2'>Accept </span> <input id='deny0' name='terms' checked='checked' type='radio' value='Deny'> <span id='deny1'>Deny </span><br><br>
					<input id='submitbutton' type="submit" name="submit" value="Submit">
			</fieldset>
	  </form>
</section>
 <section class='sec-logobanner'>
		<h1 class='logo'>PublicHost.<span>io</span></h1> <br>
		<div class='box-logobanner'>
		  <p>Free Public Server to host websites/blogs/web applications in html/css/Javascript format.</p>
	   </div>
 </section>
<section class='sec-features' id='features'>
	<h1>Features</h1>
	<div class='featurebox'>
		<div class='featurebox-box'>
			<img src="backgrounds/vector-computer.png" alt="">
			<p>Host your website/blog/web applications onto the public server, with their own url's (in html format only).</p>
		</div>
		<div class='featurebox-box'>
			<img src="backgrounds/vector-clouds.png" alt="">
			<p>Upload and save additional text or html files onto the server, with their own url's.</p>
		</div>
		<div class='featurebox-box'>
			<img src="backgrounds/vector-cloud_computing.png" alt="">
			<p>Upload your images onto the server, and with their own url's, post on your website.</p>
		</div>
		<div class='featurebox-box'>
			<img src="backgrounds/vector-check.png" alt="">
			<p>**This is an unfunctional application for practice purposes.</p>
		</div>
	</div>
</section>
<section class='sec-howsteps' id='how'>
  <h1><span id='howsteptitle'><span style='color:orange'>5</span>-Easy-<span style='color:orange'>Steps</span>:</span></h1><br>
  <div id='howstepbox'>
		<div id='howsteps'>
		  <p><span id='howsteps'>Step 1:</span> Register & log in (<b>the url of your website will be:</b> <span style='color:orange'>www.publichost.io/www/your username</span>)</p>
		  <p><span id='howsteps'>Step 2:</span> Paste in your HTML/CSS/Javascript codes and press submit. </p>
		  <p><span id='howsteps'>Step 3:</span> If you wish to post images or additional pages, upload them and link them with their url's. </p>
		  <p><span id='howsteps'>Step 4:</span> Go check out your new website/blog/application. </p>
		  <p><span id='howsteps'>Step 5:</span> If it looks good, share. </p>
	   </div>
  </div>
</section>

_END;



include_once 'footer.php';




?>
