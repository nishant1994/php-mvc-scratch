<?php
$heading = "Notes";
$db = new Database($config['database']);

$query = 'select * from notes';
$posts = $db -> query($query);

include('views/notes.view.php');
?>