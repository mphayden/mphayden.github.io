<head>
	<title>Michael Hayden</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale= 1.0">
	<meta name="keywords" content="IT, career, professional, computers, geek, tech, technology, vr, virtual reality, philosophy, personal.">
	<meta name="description" content="A inspired and passionate IT professional.">
	
	<link rel="stylesheet" href="../final.css">
	<script type='text/javascript' src='../JS/final.js'></script>
		
	<?php
		$to = "mhayden.tech@gmail.com"; 
		$from = $_REQUEST['email']; 
		$name = $_REQUEST['name']; 
		$headers = "From: $from"; 
		$subject = "Contact from your site!"; 
		$fields = array(); 
		$fields{"name"} = "name"; 
		$fields{"email"} = "email"; 
		$fields{"message"} = "message";
		$body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
		$send = mail($to, $subject, $body, $headers);
	?>
</head>

<body>
	<div id="wrapper">
		<nav>
			<ul>
				<li>
					<a href="../index.html">Home</a>
				</li>
				
				<li>
					<a href="../personal.html">Bio</a>
				</li>
				
				<li>
					<a href="../inspiration.html">Inspiration</a>
				</li>
				
				<li>
					<a href="../career.html">Career</a>
				</li>
				
				<li>
					<a href="../contact.html">Contact</a>
				</li>
			</ul>
		</nav>
		
	<div id="mobileSocial">
		<a href="https://docs.google.com/document/d/1FDxRMQYpTkosSDICMaXsMk63YjGeyNWP1d7dnls0YLE/edit?usp=sharing"><img src="../images/resume.png"></a>
		<a href="https://www.linkedin.com/in/michael-hayden-42674279"><img src="../images/linkedin.png"></a>
		<a href="https://plus.google.com/105293269433628536545"><img src="../images/googleplus.png"></a>
		<a href="https://twitter.com/foppin"><img src="../images/twitter.png"></a>
	</div>
	
		<header>
			<img src="../images/headername.gif" alt="Michael Hayden">
			<div id="social">
				<a href="https://docs.google.com/document/d/1FDxRMQYpTkosSDICMaXsMk63YjGeyNWP1d7dnls0YLE/edit?usp=sharing"><img src="../images/resume.png"></a>
				<a href="https://www.linkedin.com/in/michael-hayden-42674279"><img src="../images/linkedin.png"></a>
				<a href="https://plus.google.com/105293269433628536545"><img src="../images/googleplus.png"></a>
				<a href="https://twitter.com/foppin"><img src="../images/twitter.png"></a>
			</div>
		</header>

		<main>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
			<h3>Thank you for your submission! I will be contacting you back as soon as possible!</h3>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		</main>
	</div>
		
	<footer>Copyright &copy; 2017 Michael Hayden</footer>
</body>
</html>