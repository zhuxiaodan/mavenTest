<?
include ('head.php');
require ('dbconnect.php');
// 查询书不需要登录
?>
<script language="javascript"> 
	function checksearch(){
		if (form1.id.value=="" && form1.title.value=="" && form1.author.value=="" && form1.publisher.value=="" && form1.year.value==""){
			// 没有输入查询信息
			alert("没有输入查询信息!");
	         return false;	
		}
		return true;
	}
</script>
<html>
<body>

<form name="form1" method="post" action="search_result.php" onsubmit="return checksearch()">
  <table width="60%" border="0" cellspacing="1" cellpadding="3" align="center">
    <tr> 
      <th colspan="2">图 书 查 询</th>
    </tr>
    <tr> 
      <td width="26%" align="right">图书编号：</td>
      <td width="74%"> 
        <input type="text" name="id" size="10">
      </td>
    </tr>
    <tr> 
      <td width="26%" align="right">书名：</td>
      <td height="25" width="74%"> 
        <input type="text" name="title" size="50">
      </td>
    </tr>
    <tr> 
      <td height="25" width="26%" align="right">作者：</td>
      <td width="74%"> 
        <input type="text" name="author" size="50" maxlength="100">
      </td>
    </tr>
    <tr> 
      <td width="26%" align="right">出版社：</td>
      <td width="74%"> 
        <input type="text" name="publisher" size="50" maxlength="100">
      </td>
    </tr>
    <tr> 
      <td width="26%" align="right">出版年份：</td>
      <td width="74%"> 
        <input type="text" name="year" size="10">
      </td>
    </tr>
    <tr> 
      <td width="26%" align="right"> 
        <input type="submit" name="Submit" value="提交">
      </td>
      <td width="74%"> 
        <input type="reset" name="Submit2" value="重置">
      </td>
    </tr>
  </table>
</form>


</body>
</html>