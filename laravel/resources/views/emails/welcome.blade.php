<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
</head>
<body style="text-align: center; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; letter-spacing: normal; margin-bottom: 30px">
	<img src="http://www.michaelester.at/gruppenlogo.png" style="max-width: 100%; max-height: 250px">
	<h2>Hallo {{ $firstname }} {{ $lastname }}!</h2>
	<p>Herzlich Willkommen bei <a href="www.g5bot.eu" target="_blank">www.g5bot.eu</a>. Dein Account wird in Kürze überprüft und freigeschaltet.</p>
	<p>Bitte bestätige hier Deine Email-Adresse:</p>
	<a class="cta-button" href="{{ url($url) }}" target="_blank" style="-webkit-border-radius: 3px; -webkit-text-size-adjust: none; background: #4183C4; border-radius: 3px; box-shadow: 0px 3px 0px #25588c; color: #ffffff; display: inline-block; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 17px; font-weight: bold; letter-spacing: normal; margin: 0 auto; padding: 12px 24px; text-align: center; text-decoration: none; width: auto !important">Email-Adresse bestätigen</a>
</body>
</html>