<?php
switch($_GET['act'])
{
	case 'add':
		$content=$_GET['content'];
		$t=time();
		
		$sql="INSERT INTO message (ID, content, posttime) VALUES(0, '{$content}', {$t})";
		
		mysql_connect('localhost', 'root', '');
		mysql_select_db('sina');
		
		mysql_query($sql);
		break;
}
?>