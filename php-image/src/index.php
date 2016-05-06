<?php

$host = gethostname();

$redisClient = new Redis();
$conn = $redisClient->connect('redis', 6379);
$cachedData = $redisClient->get('cached');
if (empty($cachedData)) {
    $data = array($host => microtime(true));
} else {
    $data = json_decode($cachedData, true);
    $data[$host] = microtime(true);
}
$redisClient->set('cached', json_encode($data));

echo "<pre>
Host: $host\n
Cached data: " . print_r($cachedData, true) . "
Object data: " . print_r($data, true) . "
</pre>";

phpinfo();

