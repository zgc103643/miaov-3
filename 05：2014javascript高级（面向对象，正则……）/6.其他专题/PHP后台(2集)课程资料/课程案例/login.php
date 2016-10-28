<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="ajax.js"></script>
<script>
window.onload=function ()
{
	var oTxt1=document.getElementById('txt1');
	var oTxt2=document.getElementById('txt2');
	var oBtn=document.getElementById('btn1');
	
	oBtn.onclick=function ()
	{
		var url='login_post.php?user='+oTxt1.value+'&pass='+oTxt2.value;
		ajax(url, function (str){
			if(str=='0')
			{
				alert('用户名或密码有误');
			}
			else
			{
				alert(oTxt1.value+'，欢迎回来');
			}
		});
	};
};
</script>
</head>

<body>
用户名：<input id="txt1" type="text" />
密码：<input id="txt2" type="password" />
<input id="btn1" type="button" value="登陆" />
</body>
</html>