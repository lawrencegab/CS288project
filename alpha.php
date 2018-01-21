<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://www.microwize.com');
curl_exec($curl);