<?php
$date_started = date_create('2022-05-27');
$date_started = date_format($date_started, 'd/m/Y (l)');
$date_finished = date_create('2022-06-27');
$date_finished = date_format($date_finished, 'd/m/Y (l)');
echo "Давайте устроим встречу $date_started и потом ещё одну $date_finished "
?>