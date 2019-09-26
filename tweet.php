<?php

// tweet.php?id=3

// tweet?id=<script>alert("xss")</script>

//$tweetId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$tweetId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

include 'include/dbinfo.php';
include 'include/db.php';


$sth = $dbh->prepare('SELECT * FROM tweet
            JOIN users
            ON tweet.user_id = $users.id
            WHERE tweet.id = . $tweetId');
$sth->execute();
$row = $sth->fetch(PDO::FETCH_ASSOC);

echo "hejsan";

print_r($row,1);

include 'views/tweet.php';

?>