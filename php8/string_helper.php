<?php

// str_starts_with

// $id = 'inv_asdfasdfasdf';
// $result = stripos($id, 'inv_') === 0;
// $result = str_starts_with($id, 'inv_');
// var_dump($result);

// str_ends_with

//$id = 'asdfasdfasdf_ch';
// $result = stripos(strrev($id), strrev('_ch')) === 0;
// $result = (bool) preg_match('/_ch$/', $id);
// $result = str_ends_with($id, '_inv');
// var_dump($result);

// str_contains
$url = 'https://example.com?foo=bar';

// var_dump(parse_url($url)['query']);
// $result = strpos($url, '?') !== false;
$result = str_contains($url, '?');

var_dump($result);
