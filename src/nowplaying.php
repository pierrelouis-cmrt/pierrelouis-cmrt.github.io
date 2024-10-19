<?php
header('Content-Type: application/json');

$api_key = '';
$user = 'pierrelouis-c';

$url = 'http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=' . $user . '&api_key=' . $api_key . '&format=json';

$response = file_get_contents($url);

if ($response === FALSE) {
    http_response_code(500);
    echo json_encode(array('error' => 'Failed to fetch data from Last.fm'));
} else {
    echo $response;
}
?>
