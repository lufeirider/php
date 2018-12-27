<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
$manager = new MongoDBDriverManager("mongodb://localhost:27017");
$dbUsername = null;
$dbPassword = null;
$data = array(
    'username' => $_REQUEST['username'],
    'password' => $_REQUEST['password']
);
$query = new MongoDBDriverQuery($data);
$cursor = $manager->executeQuery('test.users', $query)->toArray();
$doc_failed = new DOMDocument();
$doc_failed->loadHTMLFile("failed.html");
$doc_succeed = new DOMDocument();
$doc_succeed->loadHTMLFile("succeed.html");
if (count($cursor) > 0) {
    echo $doc_succeed->saveHTML();
} else {
    echo $doc_failed->saveHTML();
}
?>
