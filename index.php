<?php
include 'include/dbinfo.php';
include 'include/db.php';
$sth = $dbh->prepare('SELECT * FROM tweet
            JOIN users
            ON tweet.user_id = users.id');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
include 'views/index_layout.php';
?>
