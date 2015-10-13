<?php
$con=pg_connect ("host=v-ie.uek.krakow.pl dbname= user=s181356 password=UranuS1s1");
$query="select * from pracownicy order by nazwisko";
$result=pg_exec($con, $query);
?>
