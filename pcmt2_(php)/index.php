<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> 개인 창의성 양상 테스트 - login </TITLE>

<link rel="StyleSheet" href="inc/StyleSheet.css" type="text/css">

<script language="JavaScript">
	function isEmpty(arg) {
		if(arg.value == null || arg.value == "") return false;
		else return true;
	}

	function isOK(){
		var form = document.login;
		if(isEmpty(form.kname) == false) {
			alert("국문 이름을 입력해 주십시오.");
			return false;
		} else if(isEmpty(form.ename) == false) {
			alert("영문 이름을 입력해 주십시오.");
			return false;
		} else if(isEmpty(form.email) == false) {
			alert("이메일 주소를 입력해 주십시오.");
			return false;
		} else if(isEmpty(form.pword1) == false) {
			alert("비밀번호를 입력해 주십시오.");
			return false;
		} else {
			if(form.pword1.value != form.pword2.value) {
				alert("두번 입력하신 비밀번호가 서로 다릅니다. 확인해주십시오.");
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
			alert("이메일 주소를 입력해 주십시오.");
			return false;
		} else if(isEmpty(form.pword1) == false) {
			alert("비밀번호를 입력해 주십시오.");
			return false;
		} else {
			if(form.pword1.value != form.pword2.value) {
				alert("두번 입력하신 비밀번호가 서로 다릅니다. 확인해주십시오.");
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
		<!-- 내용부분 : 시작 //-->
		<center>
		<table border="0" cellpadding="0" cellspacing="0" style="width:400px;">
		<tr>
			<td height="30"></td>
		</tr>
		<tr>
			<td>
			본 사이트는 몇가지 설문을 통하여 당신의 개인 성향을 분석합니다.<br>
			이로써 그룹 내에서 당신에게 적합한 역할을 찾는 작업에 도움을 줍니다.<br>
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td style="padding-left:10px;">
			① 처음 방문하시는 분은 아래의 모든 사항을 입력하시고<br>&nbsp;&nbsp;&nbsp;&nbsp;'설문참여하기'를 선택하십시오.<br>
			② 이전에 방문하여 설문에 응답하셨던 분은 이메일과 비밀번호를<br>&nbsp;&nbsp;&nbsp;&nbsp;입력 후 '지난결과보기'를 선택하시면 지난 결과를 보실 수 있습니다.<br>
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
			<td width="90" style="padding-left:60px;">이&nbsp;&nbsp;&nbsp;&nbsp;름:&nbsp;(국문)&nbsp;</td>
			<td width="320"><input type="text" name="kname" size="10" maxlength="10"></td>
		</tr>
		<tr>
			<td colspan="2" height="2"></td>
		</tr>
		<tr>
			<td style="padding-left:88px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(영문)&nbsp;</td>
			<td><input type="text" name="ename" size="30" maxlength="50"></td>
		</tr>
		<tr>
			<td colspan="2" height="2"></td>
		</tr>
		<tr>
			<td style="padding-left:60px;">연&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;락&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;처:&nbsp;</td>
			<td><input type="text" name="tel" size="15" maxlength="15"></td>
		</tr>
		<tr>
			<td colspan="2" height="2"></td>
		</tr>
		<tr>
			<td style="padding-left:60px;">이&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;메&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일:&nbsp;</td>
			<td><input type="text" name="email" size="20" maxlength="50"></td>
		</tr>
		<tr>
			<td colspan="2" height="2"></td>
		</tr>
		<tr>
			<td style="padding-left:60px;">비&nbsp;&nbsp;&nbsp;밀&nbsp;&nbsp;&nbsp;번&nbsp;&nbsp;호:&nbsp;</td>
			<td><input type="password" name="pword1" size="15" maxlength="10"></td>
		</tr>
		<tr>
			<td colspan="2" height="2"></td>
		</tr>
		<tr>
			<td style="padding-left:60px;">비밀번호확인:&nbsp;</td>
			<td><input type="password" name="pword2" size="15" maxlength="10"></td>
		</tr>
		<tr>
			<td colspan="2" height="10"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="button" value="지난결과보기" onClick="gotoAnal()"><input type="submit" value="설문참여하기"><input type="reset" value="다시입력하기"></td>
		</tr>
		<tr>
			<td colspan="2" height="20"></td>
		</tr>
		</table>
		</center>
		<!-- 내용부분 : 끝 //-->
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
