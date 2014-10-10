<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Recuperar la Contraseña</h2>

		<div>
			Para recuperar su contraseña vaya a la siguiente direccion: {{ URL::to('password/reset', array($token)) }}.<br/>
			Este enlace caducará en {{ Config::get('auth.reminder.expire', 60) }} minutos.
		</div>
	</body>
</html>
