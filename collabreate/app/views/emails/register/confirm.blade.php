<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Welcome to Collabreate</h2>

		<div>
			To confirm your account, click this link: {{ link_to('/register/' . $token, URL::to('/register/' . $token)) }}.
		</div>
	</body>
</html>