<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pl">
	<head>
        <meta charset="utf-8" />
        <title>CV</title>
		<link rel="shortcut icon" href="">
        <meta name="author" content="ja pan zniszczenia" />
        <link href="style.css" rel="stylesheet" id="color-opt">
		
		
	</head>
	<body>
		<div>
			<form enctype="multipart/form-data" method="post" action="cv.php">
				<fieldset>
				<legend>dane osobowe</legend>
					<input type="text" placeholder="imie" name='imie' required=""/>
					<input type="text" placeholder="nazwisko" name='nazwisko' required=""/>
					<input type="date" placeholder="data" name='data' required=""/>
				</fieldset>
					
				<fieldset>
				<legend>dane kontaktowe</legend>
					<input type="tel" placeholder="phone" name="phone"  pattern="[0-9]{3}[0-9]{3}[0-9]{3}" required=""/>
					<input type="email" placeholder="e-mail" name="email" required=""/>
					<input type="url" placeholder="www" name="url" />
				</fieldset>
					
				<fieldset>
				<legend>languages</legend>
					<div><label><input type="checkbox" name="ang" /> angielski</label></div>
					<div><label><input type="checkbox" name="niem" /> niemiecki</label></div>
					<div><label><input type="checkbox" name="szw" /> szwedzki</label></div>
					<div><label><input type="checkbox" name="hisz" /> hiszpaniski</label></div>
				</fieldset>
					
				<fieldset>
				<legend>work</legend>
					<div>
						<label><input id="pierwsza" type="radio" name="praca" value="false" onchange="kurno(1)"/>pierwsza</label>
						<label><input id="kolejna" type="radio" name="praca" value="true" onchange="kurno(2)"/>druga</label>
					</div>
					<textarea id="work" name="work" disabled=""></textarea>
				</fieldset>
					
				<fieldset>
					<legend>foto</legend>
					<input type="url" name="file"/>
				</fieldset>
				
				<fieldset>
					<legend>color</legend>
					<input type="color" name="color"/>
				</fieldset>
			<input type="submit" value="xd co ja robie">
			</form>
		</div>
		<script src="index.js" type="text/javascript"></script> 
	</body>
</html>