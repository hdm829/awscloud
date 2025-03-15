<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> 개인 창의성 양상 테스트 - poll </TITLE>

<link rel="StyleSheet" href="inc/StyleSheet.css" type="text/css">
</HEAD>

<BODY>
<TABLE width="700" border="0" cellpadding="0" cellspacing="0">
	<TR>
		<TD colspan="3" height="30" bgcolor="#FFFFFF"></TD>
	</TR>
	<TR>
		<TD colspan="3"><IMG src="images/Main_02.gif" border="0" width="700" height="140"></TD>
	</TR>
	<TR>
		<TD bgcolor="#FFFFFF"><IMG src="images/Main_03.gif" border="0" width="53"></TD>
		<TD align="center" background="images/Main_04.gif"><IMG src="images/Main_04.gif" width="600"><br>
<!-- 문항 : 시작 //-->
 <?php 
$kname =  $_POST['kname']; 
$ename =  $_POST['ename']; 
$tel =    $_POST['tel']; 
$email =  $_POST['email']; 
?>
 
<table border="0" cellpadding="0" cellspacing="0">
<form name="poll" method="post" action="result.php">
<input type="hidden" name="kname" value="<?=$kname?>">
<input type="hidden" name="ename" value="<?=$ename?>">
<input type="hidden" name="tel" value="<?=$tel?>">
<input type="hidden" name="email" value="<?=$email?>">
<input type="hidden" name="pword" value="<?=$pword1?>">
<tr>
	<td height="10"></td>
</tr>
</table>
<table width="500" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td style="font-family:돋움;font-size:15pt;font-weight:bold;">개인성향 선호도 조사</td>
</tr>
<tr>
	<td height="10"></td>
</tr>
<tr>
	<td>이름:&nbsp;(국문)&nbsp;<?=$kname?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(영문)&nbsp;<?=$ename?></td>
</tr>
<tr>
	<td height="2"></td>
</tr>
<tr>
	<td>연락처:&nbsp;<?=$tel?></td>
</tr>
<tr>
	<td height="2"></td>
</tr>
<tr>
	<td>email:&nbsp;<?=$email?></td>
</tr>
<tr>
	<td height="20"></td>
</tr>
</table>

<table width="500" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td>
	다음의 질문의 두가지 대답 중,<br>
	(1) 둘 중 하나가 확실하면 그것을 선택하고,<br>
	(2) 두 개 모두, 비슷하게 해당되면, 두 개 모두를 선택하고,<br>
	(3) 둘다 해당되지 않거나, 질문이 이상하다고 생각되면, 그냥 다음으로 넘어가시요.<br>
	</td>
</tr>
<tr>
	<td height="10"></td>
</tr>
</table>

<table width="500" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td class="question">1. 어떤 종류의 이벤트를 선호하는가?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q0101" value="yes">&nbsp;계획되지 않은 이벤트<br>
	<input type="checkbox" name="q0102" value="yes">&nbsp;계획된 이벤트
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">2. 어떤 종류의 글을 선호하는가?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q0201" value="yes">&nbsp;비유적인 글<br>
	<input type="checkbox" name="q0202" value="yes">&nbsp;글자그대로의 글
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">3. 다음 중 어떤 것을 선호하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q0301" value="yes">&nbsp;풍부한 동정심<br>
	<input type="checkbox" name="q0302" value="yes">&nbsp;명확한 이치
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">4. 당신에게 접근하기는</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q0401" value="yes">&nbsp;약간 어렵다.<br>
	<input type="checkbox" name="q0402" value="yes">&nbsp;대게 쉽다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">5. 당신은</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q0501" value="yes">&nbsp;기분파다.<br>
	<input type="checkbox" name="q0502" value="yes">&nbsp;합리적으로 생각한다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">6. 당신의 어떤 점이 더 자랑스러운가?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q0601" value="yes">&nbsp;생생한 상상력<br>
	<input type="checkbox" name="q0602" value="yes">&nbsp;강한 현실감
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">7. 당신 스스로는 어떻다고 생각하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q0701" value="yes">&nbsp;부드러운 마음의 소유자다.<br>
	<input type="checkbox" name="q0702" value="yes">&nbsp;강한 마음의 소유자다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">8. 전화벨이 울리면, 당신은 어떻게 하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q0801" value="yes">&nbsp;누구 다른 사람이 받게 내버려둔다.<br>
	<input type="checkbox" name="q0802" value="yes">&nbsp;내가 빨리 먼저 받는다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">9. 어떤 것을 선호하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q0901" value="yes">&nbsp;그냥 일들이 벌어지게 내버려둔다.<br>
 	<input type="checkbox" name="q0902" value="yes">&nbsp;일들이 조정된 대로 행해지게 만반의 준비를 한다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">10. 당신을 설명한다면?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q1001" value="yes">&nbsp;창의적이고 영리하다.<br>
	<input type="checkbox" name="q1002" value="yes">&nbsp;실용적이고 실무적이다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">11. 당신은 어떤 경향이 더 있나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q1101" value="yes">&nbsp;인정에 이끌린다<br>
	<input type="checkbox" name="q1102" value="yes">&nbsp;공평하고, 공정하다
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">12. 낯선 사람들을 만났을 때,</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q1201" value="yes">&nbsp;별로 말을 많이 하지 않는다.<br>
	<input type="checkbox" name="q1202" value="yes">&nbsp;쉽게 장시간 이야기한다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">13. 의사결정이 내려지기 전 또는 내려진 후 중, 언제 더 마음이 편한가?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q1301" value="yes">&nbsp;전<br>
	<input type="checkbox" name="q1302" value="yes">&nbsp;후
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">14. 다음 중 무엇에 더 관심이 끌리나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q1401" value="yes">&nbsp;연구, 조사<br>
	<input type="checkbox" name="q1402" value="yes">&nbsp;생산, 제작
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">15. 다음 중 어떤 것이 더 칭찬이라고 생각하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q1501" value="yes">&nbsp;그 사람 참 정서적이다.<br>
	<input type="checkbox" name="q1502" value="yes">&nbsp;그 사람 참 논리적이다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">16. 친구들과의 경우, 어떤 상황을 더 선호하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q1601" value="yes">&nbsp;소수지만, 오랜 시간 동안 알고 온 친구<br>
	<input type="checkbox" name="q1602" value="yes">&nbsp;오래 접촉하지는 않았지만, 많은 친구들
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">17. 어떤 종류의 일들이 더 편안하게 느껴지나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q1701" value="yes">&nbsp;격식 차리지 않고 하게 되는 일<br>
	<input type="checkbox" name="q1702" value="yes">&nbsp;계약된 일들
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">18. 어떤 것을 따르는 것을 더 선호하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q1801" value="yes">&nbsp;원리 원칙<br>
	<input type="checkbox" name="q1802" value="yes">&nbsp;실제 사실
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">19. 어떤 이슈가 생겨났을 때, 어떤 경우에 더 만족스럽게 느끼나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q1901" value="yes">&nbsp;합의를 도출해 내는 것<br>
	<input type="checkbox" name="q1902" value="yes">&nbsp;철저하게 논의하는 것
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">20. 다른 사람들과의, 새롭고, 일상적이지 않는 상호작용을 하게될 때,</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q2001" value="yes">&nbsp;신중하게된다.<br>
	<input type="checkbox" name="q2002" value="yes">&nbsp;활기찬 자극을 받는다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">21. 어떤 능력을 더 동경하는가?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q2101" value="yes">&nbsp;상황에 적응하며, 실행시키는 능력<br>
	<input type="checkbox" name="q2102" value="yes">&nbsp;일정한 방식에 따라, 조직화하는 능력
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">22. 어린이들이 다음 어떤 일을 더 충분히 해야하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q2201" value="yes">&nbsp;공상능력을 발전시키는 일<br>
	<input type="checkbox" name="q2202" value="yes">&nbsp;유용한 인물이 되도록 하는 일 
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">23, 당신은 의사결정을 내릴 때, 다음 어떤 것을 더 마음 편히 이용하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q2301" value="yes">&nbsp;감정, 기분<br>
	<input type="checkbox" name="q2302" value="yes">&nbsp;기준, 규범
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">24. 사람들을 만나면, 당신은 </td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q2401" value="yes">&nbsp;사람들이 나에게 말을 붙이도록 기다린다.<br>
	<input type="checkbox" name="q2402" value="yes">&nbsp;내가 먼저 대화를 시작한다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">25. 당신은 주변 일들이 어떻게 벌어지는 것을 더 선호하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q2501" value="yes">&nbsp;그냥 우연히<br>
	<input type="checkbox" name="q2502" value="yes">&nbsp;신중한 선택에 의해
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">26. 공상을 많이 하는 사람들은</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q2601" value="yes">&nbsp;매혹적이다<br>
	<input type="checkbox" name="q2602" value="yes">&nbsp;마음에 안든다
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">27. 어떤 것이 더 나쁜가?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q2701" value="yes">&nbsp;인정없이 행동하는 것<br>
	<input type="checkbox" name="q2702" value="yes">&nbsp;불공평하게 행동하는 것
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">28. 전화를 걸때는,</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q2801" value="yes">&nbsp;미리 뭐라고 말할지 생각해보고 전화한다.<br>
	<input type="checkbox" name="q2802" value="yes">&nbsp;그때 그냥 이야기한다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">29. 스스로 어떻다고 생각하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q2901" value="yes">&nbsp;easy-going<br>
	<input type="checkbox" name="q2902" value="yes">&nbsp;serious and determined
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">30. 일상적인 일들을 어떻게 수행하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q3001" value="yes">&nbsp;나만의 방식대로<br>
	<input type="checkbox" name="q3002" value="yes">&nbsp;흔한 방식대로
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">31. 어떤 것이 더 끌리나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q3101" value="yes">&nbsp;조화로운 관계<br>
	<input type="checkbox" name="q3102" value="yes">&nbsp;생각의 일관성
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">32. 당신 주의의 소식들에 대하여, 당신은</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q3201" value="yes">&nbsp;좀 뒤쳐진다.<br>
	<input type="checkbox" name="q3202" value="yes">&nbsp;빠르게 다 알고 있다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">33. 당신은</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q3301" value="yes">&nbsp;종종 시간약속에 늦거나, 이를 때가 있다.<br>
	<input type="checkbox" name="q3302" value="yes">&nbsp;정각에 맞춘다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">34. 어떤 것에 더 관심을 갖게되나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q3401" value="yes">&nbsp;the possible<br>
	<input type="checkbox" name="q3402" value="yes">&nbsp;the actual
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">35. 사람을 평가할 때, 무엇에 더 영향 받는가?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q3501" value="yes">&nbsp;주변상황<br>
	<input type="checkbox" name="q3502" value="yes">&nbsp;규칙
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">36. 파티 등에서, 당신은</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q3601" value="yes">&nbsp;지루해지고, 먼저 슬쩍간다.<br>
	<input type="checkbox" name="q3602" value="yes">&nbsp;열심히, 늦게까지 논다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">37. 마감일자에 대해 어떻게 생각하나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q3701" value="yes">&nbsp;싫어한다.<br>
	<input type="checkbox" name="q3702" value="yes">&nbsp;좋아한다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">38. 당신을 설명하는 말은</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q3801" value="yes">&nbsp;사색적이다.<br>
	<input type="checkbox" name="q3802" value="yes">&nbsp;사실적이다.
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">39. 어떤 것에 더 끌리나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q3901" value="yes">&nbsp;감동적인 사람이나 사실<br>
	<input type="checkbox" name="q3902" value="yes">&nbsp;설득력 있는 사람이나 사실
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td class="question">40. 파티 등 모임에 가면 어떤 사람들과 어울리나?</td>
</tr>
<tr>
	<td class="ex">
	<input type="checkbox" name="q4001" value="yes">&nbsp;소수의 잘 알고있는 사람들<br>
	<input type="checkbox" name="q4002" value="yes">&nbsp;낯선 사람들을 포함해서 많은 사람들
	</td>
</tr>
<tr>
	<td class="space"></td>
</tr>
<tr>
	<td align="center"><input type="submit" value="작성완료"><input type="reset" value="다시쓰기"></td>
</tr>
</form>
</table>
<!-- 문항 : 끝 //-->
		<!-- 내용부분 : 끝 //-->
		<br>
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
</BODY>
</HTML>
