<?php
require_once "../restful.php";
$url = 'http://api.serri.codefactory.live/random/';
$result = curl_get($url);

$row =json_decode($result);
echo $row->joke;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SerrisAPIJokes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<form action="">
    <input type="text" name="Joke"/>
    <button type="submit"> submit </button>
</form>
<br/>
<!-- <div id="jokes" data-url="<?php if (!empty($url)) echo $url ?>">
  
</div> -->
</body>
</html>