<?php
if(isset($_REQUEST['vote'])){
	$vote = $_REQUEST['vote'];
	$fajl = file('poll_result.txt');
	$arr = explode('|', $fajl[0]);
	foreach ($arr as $key=>&$value) {
		if($vote == $key+1){
			$value++;
		}
	}
	$arr = implode('|', $arr);
	$fp = fopen('poll_result.txt', 'w');
	fputs($fp, $arr);
	fclose($fp);
	echo '
		<p>Awesome: '.$arr[0].'</p>
		<p>Good: '.$arr[2].'</p>
		<p>Not bad: '.$arr[4].'</p>
		<p>Horrifiying: '.$arr[6].'</p>
	';
}
?>