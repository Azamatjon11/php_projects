
<?php
function getDefinition($search="hello"){
	$curl = curl_init();
	curl_setopt_array($curl, [
	CURLOPT_URL => "https://lingua-robot.p.rapidapi.com/language/v1/entries/en/$search",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: lingua-robot.p.rapidapi.com",
		"x-rapidapi-key: 9f7fea130emsh6027b66e6122a8ap1e5e1ejsn70ef541cbc02"
	],
]);

$dictionary = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

return json_decode($dictionary, 1);
}
$dictionary = getDefinition($search);
