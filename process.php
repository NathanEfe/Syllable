<?php
// process.php

header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

require 'Hyphenator.php'; // Include the Hyphenator library

$inputText = $data['inputText'] ?? '';
$color1 = $data['color1'] ?? '#0000ff';
$color2 = $data['color2'] ?? '#ff0000';

$hyphenator = new Hyphenator();
$highlightedText = $hyphenator->highlightSyllables($inputText, $color1, $color2);

echo $highlightedText;
