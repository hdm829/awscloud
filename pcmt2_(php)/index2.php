<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.0 ">
<HTML>
<HEAD <meta http-equiv="Content-Type" content="text/html; charset=utf-8">>
<TITLE> ���� â�Ǽ� ��� �׽�Ʈ - login </TITLE>

<link rel="StyleSheet" href="inc/StyleSheet.css" type="text/css">

<script language="JavaScript">
	function isEmpty(arg) {
		if(arg.value == null || arg.value == "") return false;
		else return true;
	}

	function isOK(){
		var form = document.login;
		if(isEmpty(form.kname) == false) {
			alert("���� �̸��� �Է��� �ֽʽÿ�.");
			return false;
		} else if(isEmpty(form.ename) == false) {
			alert("���� �̸��� �Է��� �ֽʽÿ�.");
			return false;
		} else if(isEmpty(form.email) == false) {
			alert("�̸��� �ּҸ� �Է��� �ֽʽÿ�.");
			return false;
		} else if(isEmpty(form.pword1) == false) {
			alert("��й�ȣ�� �Է��� �ֽʽÿ�.");
			return false;
		} else {
			if(form.pword1.value != form.pword2.value) {
				alert("�ι� �Է��Ͻ� ��й�ȣ�� ���� �ٸ��ϴ�. Ȯ�����ֽʽÿ�.");
				return false;
			} else {
				return true;
			}
		}
	}

	function gotoAnal() {
		var form = document.login;
		form.action = "analysis.php";
		if(isEmpty(form.email) == false) {
			alert("�̸��� �ּҸ� �Է��� �ֽʽÿ�.");
			return false;
		} else if(isEmpty(form.pword1) == false) {
			alert("��й�ȣ�� �Է��� �ֽʽÿ�.");
			return false;
		} else {
			if(form.pword1.value != form.pword2.value) {
				alert("�ι� �Է��Ͻ� ��й�ȣ�� ���� �ٸ��ϴ�. Ȯ�����ֽʽÿ�.");
				return false;
			} else {
				form.submit();
			}
		}
	}
</script>
</HEAD>

<BODY>
<TABLE width="700" border="0" cellpadding="0" cellspacing="0">
<form name="login" method="post" action="poll.php" onSubmit="return isOK()">
	<TR>
		<TD colspan="3" height="30" bgcolor="#FFFFFF"></TD>
	</TR>
	<TR>
		<TD colspan="3"><IMG src="images/Main_02.gif" border="0" width="700" height="140"></TD>
	</TR>
	<TR>
		<TD bgcolor="#FFFFFF"><IMG src="images/Main_03.gif" border="0" width="53"></TD>
		<TD background="images/Main_04.gif"><IMG src="images/Main_04.gif" width="600"><br>
		<!-- ����κ� : ���� //-->
		<center>
		<table border="0" cellpadding="0" cellspacing="0" style="width:400px;">
		<tr>
			<td height="30"></td>
		</tr>
		<tr>
			<td>
			�� ����Ʈ�� ��� ������ ���Ͽ� ����� ���� ������ �м��մϴ�.<br>
			�̷ν� �׷� ������ ��ſ��� ������ ������ ã�� �۾��� ������ �ݴϴ�.<br>
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td style="padding-left:10px;">
			�� ó�� �湮�Ͻô� ���� �Ʒ��� ��� ������ �Է��Ͻð�<br>&nbsp;&nbsp;&nbsp;&nbsp;'���������ϱ�'�� �����Ͻʽÿ�.<br>
			�� ������ �湮�Ͽ� ������ �����ϼ̴� ���� �̸��ϰ� ��й�ȣ��<br>&nbsp;&nbsp;&nbsp;&nbsp;�Է� �� '�����������'�� �����Ͻø� ���� ����� ���� �� �ֽ��ϴ�.<br>
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" style="width:400px;border-style:solid;border-width:1px;text-align:left;border-color:#ACACAC;">
		<tr>
			<td colspan="2" height="20"></td>
		</tr>
		<tr>
			<td width="90" style="padding-left:60px;">��&nbsp;&nbsp;&nbsp;&nbsp;��:&nbsp;(����)&nbsp;</td>
			<td width="320"><input type="text" name="kname" size="10" maxlength="10"></td>
		</tr>
		<tr>
			<td colspan="2" height="2"></td>
		</tr>
		<tr>
			<td style="padding-left:88px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(����)&nbsp;</td>
			<td><input type="text" name="ename" size="30" maxlength="50"></td>
		</tr>
		<tr>
			<td colspan="2" height="2"></td>
		</tr>
		<tr>
			<td style="padding-left:60px;">��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ó:&nbsp;</td>
			<td><input type="text" name="tel" size="15" maxlength="15"></td>
		</tr>
		<tr>
			<td colspan="2" height="2"></td>
		</tr>
		<tr>
			<td style="padding-left:60px;">��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��:&nbsp;</td>
			<td><input type="text" name="email" size="20" maxlength="50"></td>
		</tr>
		<tr>
			<td colspan="2" height="2"></td>
		</tr>
		<tr>
			<td style="padding-left:60px;">��&nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;ȣ:&nbsp;</td>
			<td><input type="password" name="pword1" size="15" maxlength="10"></td>
		</tr>
		<tr>
			<td colspan="2" height="2"></td>
		</tr>
		<tr>
			<td style="padding-left:60px;">��й�ȣȮ��:&nbsp;</td>
			<td><input type="password" name="pword2" size="15" maxlength="10"></td>
		</tr>
		<tr>
			<td colspan="2" height="10"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="button" value="�����������" onClick="gotoAnal()"><input type="submit" value="���������ϱ�"><input type="reset" value="�ٽ��Է��ϱ�"></td>
		</tr>
		<tr>
			<td colspan="2" height="20"></td>
		</tr>
		</table>
		</center>
		<!-- ����κ� : �� //-->
		<br><br><br>
		</TD>
		<TD bgcolor="#FFFFFF"><IMG src="images/Main_03.gif" border="0" width="53"></TD>
	</TR>
	<TR>
		<TD colspan="3">
			<IMG src="images/Main_07.gif" border="0" width="700" height="2"></TD>
	</TR>
	<TR>
		<TD colspan="3" bgcolor="#FFFFFF" height="10"></TD>
	</TR>
	
	<TR>
		<TD bgcolor="#FFFFFF"><IMG src="images/Main_03.gif" border="0" width="53"></TD>
	</TR>
	<TR>
		<TD colspan="3"><IMG src="images/Main_08.gif" border="0" width="700" height="114"></TD>
	</TR>
</TABLE>
</form>
</BODY>
</HTML>
