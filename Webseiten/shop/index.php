<!DOCTYPE html>
<html lang="en">
<head>
<title>Loading...</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript">
function weiterl (querystring) {
  if (querystring == '') {
	window.location.href = "https://suchtgaming.buycraft.net";
  return;
  }
  var wertestring = querystring.slice(1);
  var paare = wertestring.split("&");
  
  
  var paar = paare[0].split("=");
  var type = paar[0];
  var wert = paar[1];
  
  if(wert == 'SuchtGamingYT' || wert == 'SuchtGamingYT') {
	window.location.href = "https://suchtgaming.buycraft.net";
  } else if(wert == 'GTS11YT') {
	window.location.href = "https://suchtgaming.buycraft.net";
  }
}

weiterl(location.search);
</script>
</head>
</html>