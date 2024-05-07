<?php

function format_xml($xml_string) {
    $xml = new SimpleXMLElement($xml_string);
    $dom = dom_import_simplexml($xml)->ownerDocument;
    $dom->formatOutput = true;
    return $dom->saveXML();
}

function validate_tags($xml_string) {
    $xml = new SimpleXMLElement($xml_string);
    $stack = [];
    foreach ($xml->children() as $child) {
        array_push($stack, $child->getName());
    }
    $xml = preg_replace('/<[^>]+>/', '', $xml_string);
    $tags = array_unique(explode(' ', $xml));
    $tags = array_filter($tags, function($tag) {
        return $tag !== '';
    });
    return count($stack) === count($tags) && empty(array_diff($stack, $tags));
}

$input = '';
while ($line = fgets(STDIN)) {
    $input .= $line;
}

if (!validate_tags($input)) {
    echo "Error: Tags do not match.\n";
    exit();
}

echo format_xml($input);

?>
