<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<script language="JavaScript">
	function ClickCheckAll(vol)
	{
	
		var i=1;
		for(i=1;i<=document.frmMain.hdnCount.value;i++)
		{
			if(vol.checked == true)
			{
				eval("document.frmMain.Chk"+i+".checked=true");
			}
			else
			{
				eval("document.frmMain.Chk"+i+".checked=false");
			}
		}
	}
</script>
<form action="" method="post" name="frmMain" id="frmMain">
  <table width="531" border="1">
    <tr>
      <td width="34"><div align="center">
        <input name="CheckAll" type="checkbox" id="CheckAll" value="Y" onClick="ClickCheckAll(this);">
      </div></td>
      <td width="117"><div align="center">Customer ID </div></td>
      <td width="134"><div align="center">Name</div></td>
      <td width="218"><div align="center">Surname</div></td>
    </tr>
    <tr>
      <td><div align="center">
        <input name="Chk1" type="checkbox" id="Chk1" value="C001">
      </div></td>
      <td> <div align="center">C001 </div></td>
      <td> Win Weerachai  </td>
      <td> win.weerachai@thaicreate.com </td>
    </tr>
    <tr>
      <td><div align="center">
        <input name="Chk2" type="checkbox" id="Chk2" value="C002">
      </div></td>
      <td> <div align="center">C002</div></td>
      <td> John Smith </td>
      <td> john.smith@thaicreate.com </td>
    </tr>
    <tr>
      <td><div align="center">
        <input name="Chk3" type="checkbox" id="Chk3" value="C003">
      </div></td>
      <td> <div align="center">C003</div></td>
      <td> Jame Born </td>
      <td> jame.born@thaicreate.com </td>
    </tr>
    <tr>
      <td><div align="center">
        <input name="Chk4" type="checkbox" id="Chk4" value="C004">
      </div></td>
      <td> <div align="center">C004</div></td>
      <td> Chalee Angel </td>
      <td> chalee.angel@thaicreate.com </td>
    </tr>
  </table>
  <input type="hidden" name="hdnCount" value="4">
</form>
</body>
</html>
