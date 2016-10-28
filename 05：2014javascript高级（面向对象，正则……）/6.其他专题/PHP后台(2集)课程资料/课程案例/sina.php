<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
* {margin:0; padding:0;}
#ul1 {width:300px; height:300px; overflow:hidden; border:1px solid black; margin:10px auto;}
#ul1 div {list-style:none; padding:2px; overflow:hidden; border-bottom:1px dashed #999; filter:alpha(opacity:0); opacity:0;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="move.js"></script>
<script src="ajax.js"></script>
<script>
window.onload=function ()
{
	var oTxt=document.getElementById('txt1');
	var oBtn=document.getElementById('btn1');
	var oUl=document.getElementById('ul1');
	var aDiv=oUl.getElementsByTagName('div');
	
	var i=0;
	
	for(i=0;i<aDiv.length;i++)
	{
		aDiv[i].style.filter='alpha(opacity:100)';
		aDiv[i].style.opacity=1;
	}
	
	oBtn.onclick=function ()
	{
		var url='sina_post.php?act=add&content='+oTxt.value;
		ajax(url, function (str){
			
		});
		
		var oLi=document.createElement('div');
		var aLi=oUl.getElementsByTagName('div');
		
		oLi.innerHTML=oTxt.value;
		
		if(aLi.length==0)
		{
			oUl.appendChild(oLi);
		}
		else
		{
			oUl.insertBefore(oLi, aLi[0]);
		}
		
		var iHeight=oLi.offsetHeight;
		oLi.style.height=0;
		
		startMove(oLi, {height: iHeight}, function (){
			startMove(oLi, {opacity: 100});
		});
		
		oTxt.value='';
	};
};
</script>
</head>

<body>
<textarea id="txt1" rows="10" cols="40"></textarea>
<input id="btn1" type="button" value="发布" />
<?php
$sql="SELECT ID, content, posttime FROM message ORDER BY ID DESC";

mysql_connect('localhost', 'root', '');
mysql_select_db('sina');

$res=mysql_query($sql);
?>
<div id="ul1">
	<?php while($row=mysql_fetch_row($res)){ ?>
    <div><?php echo $row[1]; ?></div>
    <?php } ?>
</div>
</body>
</html>