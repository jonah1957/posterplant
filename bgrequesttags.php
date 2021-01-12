<?php
// Return a list of tags given the category.
$field = $_POST["fields"];
$tags = new stdClass();
$tags->tags = array("canvas", "something", $field, "somethingelse");

$resp = json_encode($tags);
echo $resp;
 ?>
