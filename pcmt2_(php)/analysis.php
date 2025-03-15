<?
include "./inc/connect_info.php";

$SQL = "select kname, ename, PJ, NS, FT, IE from wilde_result where email = '$email' and password = '$pword1'";
$result = mysqli_query($SQL, $db);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

if($count > 0){
	$PJ = $row[PJ];
	$NS = $row[NS];
	$FT = $row[FT];
	$IE = $row[IE];
	$kname = $row[kname];
	$ename = $row[ename];

	$CGI = 250 + 3 * $NS + $PJ - $IE - 0.5 * $FT;

	if($IE >= 0) $MBTI = "I"; else $MBTI = "E";
	if($NS >= 0) $MBTI = $MBTI . "N"; else $MBTI = $MBTI . "S";
	if($FT >= 0) $MBTI = $MBTI . "F"; else $MBTI = $MBTI . "T";
	if($PJ >= 0) $MBTI = $MBTI . "P"; else $MBTI = $MBTI . "J";

	$pX = $NS;
	$pY = round(($IE - $PJ) / sqrt(2));
	$jX = $FT;
	$jY = round(($IE + $PJ) / sqrt(2));

	$MBTIfactor = array($IE, $NS, $FT, $PJ);
	$RoleStrategist = array(3/8, 2/8, 0, -3/8);
	$RoleVisionary = array(1/8, 6/8, 0, -1/8);
	$RoleInnovator = array(-1/8, 6/8, 0, 1/8);
	$RoleEntrepreneur = array(-3/8, 2/8, 0, 3/8);
	$RoleTestPilot = array(-3/8, -2/8, 0, 3/8);
	$RoleMockupMaker = array(-1/8, -6/8, 0, 1/8);
	$RoleInvestigator = array(1/8, -6/8, 0, -1/8);
	$RoleInspector = array(3/8, -2/8, 0, -3/8);
	$RoleCritic = array(3/8, 0, 2/8, 3/8);
	$RoleNeedfinder = array(1/8, 0, 6/8, 1/8);
	$RoleConciliator = array(-1/8, 0, 6/8, -1/8);
	$RoleDiplomat = array(-3/8, 0, 2/8, -3/8);
	$RoleCoordinator = array(-3/8, 0, -2/8, -3/8);
	$RoleScheduler = array(-1/8, 0, -6/8, -1/8);
	$RoleSimulator = array(1/8, 0, -6/8, 1/8);
	$RoleReviewer = array(3/8, 0, -2/8, 3/8);

	for($i = 0; $i <= 15; $i++){
		$SC[$i] = 0;
	}

	for($i = 0; $i <= 3; $i++){
		$SC[0] = $SC[0] + $MBTIfactor[$i] * $RoleStrategist[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[1] = $SC[1] + $MBTIfactor[$i] * $RoleVisionary[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[2] = $SC[2] + $MBTIfactor[$i] * $RoleInnovator[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[3] = $SC[3] + $MBTIfactor[$i] * $RoleEntrepreneur[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[4] = $SC[4] + $MBTIfactor[$i] * $RoleTestPilot[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[5] = $SC[5] + $MBTIfactor[$i] * $RoleMockupMaker[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[6] = $SC[6] + $MBTIfactor[$i] * $RoleInvestigator[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[7] = $SC[7] + $MBTIfactor[$i] * $RoleInspector[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[8] = $SC[8] + $MBTIfactor[$i] * $RoleCritic[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[9] = $SC[9] + $MBTIfactor[$i] * $RoleNeedfinder[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[10] = $SC[10] + $MBTIfactor[$i] * $RoleConciliator[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[11] = $SC[11] + $MBTIfactor[$i] * $RoleDiplomat[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[12] = $SC[12] + $MBTIfactor[$i] * $RoleCoordinator[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[13] = $SC[13] + $MBTIfactor[$i] * $RoleScheduler[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[14] = $SC[14] + $MBTIfactor[$i] * $RoleSimulator[$i];
	}
	for($i = 0; $i <= 3; $i++){
		$SC[15] = $SC[15] + $MBTIfactor[$i] * $RoleReviewer[$i];
	}

	$maxGap = $SC[0];
	for($i = 1; $i <= 15; $i++) {
		if($SC[$i] > $maxGap) $maxGap = $SC[$i];
	}

	$role = array("Strategist", "Visionary", "Innovator", "Entrepreneur", "Test Pilot", "Mockup Maker", "Investigator", "Inspector", "Critic", "Needfinder", "Conciliator", "Diplomat", "Coordinator", "Scheduler", "Simulator", "Reviewer");

	for($i = 0; $i <= 15; $i++) {
		if($SC[$i] == $maxGap) {
			$candidatePI = $SC[$i];
			if($SC[$i] < 10) {
				if($i < 8) {
					$prinInterest = "Observer";
				} else {
					$prinInterest = "Mediator";
				}
			} else {
				$prinInterest = $role[$i];
			}
			//Principal Interest 결정됨
			if($i < 4) {
				$PCR = $role[$i + 4];
			} else if($i < 8) {
				$PCR = $role[$i - 4];
			} else if($i < 12) {
				$PCR = $role[$i + 4];
			} else {
				$PCR = $role[$i - 4];
			}
			//Principal Complementery 결정됨
		}
	}

	//$OI = 0;
	//$SI = 0;
	$otherInterest = "";
	$slightInterest = "";

	if($maxGap >= 10) {
		for($i = 0; $i <= 15; $i++) {
			if($SC[$i] <> $maxGap) {
				if($SC[$i] > 20) {
					$otherInterest = $otherInterest . $role[$i] . "<br>";
	//				$OI = $OI + 1;
				} else if($SC[$i] > 10) {
					$slightInterest = $slightInterest . $role[$i] . "<br>";
	//				$SI = $SI + 1;
				}
			}
		}
	} else {
		if($prinInterest == "Observer") {
			$otherInterest = "Mediator";
		} else {
			$otherInterest = "Observer";
		}
	}

	$shapeObserver = "hidden";
	$shapeStrategist1 = "hidden";
	$shapeStrategist2 = "hidden";
	$shapeStrategist3 = "hidden";
	$shapeVisionary1 = "hidden";
	$shapeVisionary2 = "hidden";
	$shapeVisionary3 = "hidden";
	$shapeInnovator1 = "hidden";
	$shapeInnovator2 = "hidden";
	$shapeInnovator3 = "hidden";
	$shapeEntrepreneur1 = "hidden";
	$shapeEntrepreneur2 = "hidden";
	$shapeEntrepreneur3 = "hidden";
	$shapeTestPilot1 = "hidden";
	$shapeTestPilot2 = "hidden";
	$shapeTestPilot3 = "hidden";
	$shapeMockupMaker1 = "hidden";
	$shapeMockupMaker2 = "hidden";
	$shapeMockupMaker3 = "hidden";
	$shapeInvestigator1 = "hidden";
	$shapeInvestigator2 = "hidden";
	$shapeInvestigator3 = "hidden";
	$shapeInspector1 = "hidden";
	$shapeInspector2 = "hidden";
	$shapeInspector3 = "hidden";
	$shapeMediator = "hidden";
	$shapeCritic1 = "hidden";
	$shapeCritic2 = "hidden";
	$shapeCritic3 = "hidden";
	$shapeNeedfinder1 = "hidden";
	$shapeNeedfinder2 = "hidden";
	$shapeNeedfinder3 = "hidden";
	$shapeConciliator1 = "hidden";
	$shapeConciliator2 = "hidden";
	$shapeConciliator3 = "hidden";
	$shapeDiplomat1 = "hidden";
	$shapeDiplomat2 = "hidden";
	$shapeDiplomat3 = "hidden";
	$shapeCoordinator1 = "hidden";
	$shapeCoordinator2 = "hidden";
	$shapeCoordinator3 = "hidden";
	$shapeScheduler1 = "hidden";
	$shapeScheduler2 = "hidden";
	$shapeScheduler3 = "hidden";
	$shapeSimulator1 = "hidden";
	$shapeSimulator2 = "hidden";
	$shapeSimulator3 = "hidden";
	$shapeReviewer1 = "hidden";
	$shapeReviewer2 = "hidden";
	$shapeReviewer3 = "hidden";

	if($maxGap >= 10) {
		if($SC[0] >= 5) {
			$shapeStrategist1 = "visible";
			if($SC[0] > 10) {
				$shapeStrategist2 = "visible";
				if($SC[0] > 20) {
					$shapeStrategist3 = "visible";
				}
			}
		}

		if($SC[1] >= 5) {
			$shapeVisionary1 = "visible";
			if($SC[1] > 10) {
				$shapeVisionary2 = "visible";
				if($SC[1] > 20) {
					$shapeVisionary3 = "visible";
				}
			}
		}

		if($SC[2] >= 5) {
			$shapeInnovator1 = "visible";
			if($SC[2] > 10) {
				$shapeInnovator2 = "visible";
				if($SC[2] > 20) {
					$shapeInnovator3 = "visible";
				}
			}
		}

		if($SC[3] >= 5) {
			$shapeEntrepreneur1 = "visible";
			if($SC[3] > 10) {
				$shapeEntrepreneur2 = "visible";
				if($SC[3] > 20) {
					$shapeEntrepreneur3 = "visible";
				}
			}
		}

		if($SC[4] >= 5) {
			$shapeTestPilot1 = "visible";
			if($SC[4] > 10) {
				$shapeTestPilot2 = "visible";
				if($SC[4] > 20) {
					$shapeTestPilot3 = "visible";
				}
			}
		}

		if($SC[5] >= 5) {
			$shapeMockupMaker1 = "visible";
			if($SC[5] > 10) {
				$shapeMockupMaker2 = "visible";
				if($SC[5] > 20) {
					$shapeMockupMaker3 = "visible";
				}
			}
		}

		if($SC[6] >= 5) {
			$shapeInvestigator1 = "visible";
			if($SC[6] > 10) {
				$shapeInvestigator2 = "visible";
				if($SC[6] > 20) {
					$shapeInvestigator3 = "visible";
				}
			}
		}

		if($SC[7] >= 5) {
			$shapeInspector1 = "visible";
			if($SC[7] > 10) {
				$shapeInspector2 = "visible";
				if($SC[7] > 20) {
					$shapeInspector3 = "visible";
				}
			}
		}

		if($SC[8] >= 5) {
			$shapeCritic1 = "visible";
			if($SC[8] > 10) {
				$shapeCritic2 = "visible";
				if($SC[8] > 20) {
					$shapeCritic3 = "visible";
				}
			}
		}

		if($SC[9] >= 5) {
			$shapeNeedfinder1 = "visible";
			if($SC[9] > 10) {
				$shapeNeedfinder2 = "visible";
				if($SC[9] > 20) {
					$shapeNeedfinder3 = "visible";
				}
			}
		}

		if($SC[10] >= 5) {
			$shapeConciliator1 = "visible";
			if($SC[10] > 10) {
				$shapeConciliator2 = "visible";
				if($SC[10] > 20) {
					$shapeConciliator3 = "visible";
				}
			}
		}

		if($SC[11] >= 5) {
			$shapeDiplomat1 = "visible";
			if($SC[11] > 10) {
				$shapeDiplomat2 = "visible";
				if($SC[11] > 20) {
					$shapeDiplomat3 = "visible";
				}
			}
		}

		if($SC[12] >= 5) {
			$shapeCoordinator1 = "visible";
			if($SC[12] > 10) {
				$shapeCoordinator2 = "visible";
				if($SC[12] > 20) {
					$shapeCoordinator3 = "visible";
				}
			}
		}

		if($SC[13] >= 5) {
			$shapeScheduler1 = "visible";
			if($SC[13] > 10) {
				$shapeScheduler2 = "visible";
				if($SC[13] > 20) {
					$shapeScheduler3 = "visible";
				}
			}
		}

		if($SC[14] >= 5) {
			$shapeSimulator1 = "visible";
			if($SC[14] > 10) {
				$shapeSimulator2 = "visible";
				if($SC[14] > 20) {
					$shapeSimulator3 = "visible";
				}
			}
		}

		if($SC[15] >= 5) {
			$shapeReviewer1 = "visible";
			if($SC[15] > 10) {
				$shapeReviewer2 = "visible";
				if($SC[15] > 20) {
					$shapeReviewer3 = "visible";
				}
			}
		}
	} else {
		if($prinInterest == "Observer") {
			$shapeObserver = "visible";
		} else {
			$shapeMediator = "visible";
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> 개인 창의성 양상 테스트 - 결과조회 </TITLE>

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
		<TD align="center" background="images/Main_04.gif"><IMG src="images/Main_04.gif" width="600"><br><br>
		<!-- 내용부분 : 시작 //-->
	<table width="550" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
		<table width="550" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="font-size:15pt; font-weight:bold;"><font style="background-color:#F2F9FF;">&nbsp;<?=$kname?>&nbsp;</font>&nbsp;(<font style="background-color:#F2F9FF;">&nbsp;<?=$ename?>&nbsp;</font>) PCMT Result</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td height="10"></td>
	</tr>
	<tr>
		<td>
		<table width="550" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<!-- 왼쪽 레이아웃 //-->
			<td width="250">
			<table width="250" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td>Principal Interest:</td>
			</tr>
			<tr>
				<td height="15"></td>
			</tr>
			<tr>
				<td height="20" bgcolor="#E6E6E6" style="padding-left:10px;"><?=$prinInterest?></td>
			</tr>
			<tr>
				<td height="10"></td>
			</tr>
			<tr>
				<td>Other Interests:</td>
			</tr>
			<tr>
				<td height="15"></td>
			</tr>
			<tr>
				<td height="150" valign="top" bgcolor="#E6E6E6" style="padding-left:10px;"><?=$otherInterest?></td>
			</tr>
			<tr>
				<td height="28"></td>
			</tr>
			<tr>
				<td style="font-size:14pt; font-weight:bold;">In the Perception Domain:</td>
			</tr>
			<tr>
				<td>(with preference data falling at</td>
			</tr>
			<tr>
				<td align="right">X,Y= (<?=$pX?>,<?=$pY?>))</td>
			</tr>
			<tr>
				<td height="5"></td>
			</tr>
			<tr>
				<td><img src="images/point_back.gif" width="250" height="250" border="0"></td>
			</tr>
			</table>
			</td>
			<!-- 가운데 레이아웃(빈칸) //-->
			<td width="50"></td>
			<!-- 오른쪽 레이아웃 //-->
			<td width="250">
			<table width="250" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td>Principal Complementary Role (aversion):</td>
			</tr>
			<tr>
				<td height="15"></td>
			</tr>
			<tr>
				<td height="20" bgcolor="#E6E6E6" style="padding-left:10px;"><?=$PCR?></td>
			</tr>
			<tr>
				<td height="10"></td>
			</tr>
			<tr>
				<td>Slight Interests:</td>
			</tr>
			<tr>
				<td height="15"></td>
			</tr>
			<tr>
				<td height="150" valign="top" bgcolor="#E6E6E6" style="padding-left:10px;"><?=$slightInterest?></td>
			</tr>
			<tr>
				<td height="28"></td>
			</tr>
			<tr>
				<td style="font-size:14pt; font-weight:bold;">In the Judgement Domain:</td>
			</tr>
			<tr>
				<td>(with preference data falling at</td>
			</tr>
			<tr>
				<td align="right">X,Y= (<?=$jX?>,<?=$jY?>))</td>
			</tr>
			<tr>
				<td height="5"></td>
			</tr>
			<tr>
				<td><img src="images/point_back.gif" width="250" height="250" border="0"></td>
			</tr>
			</table>
			</td>
		</tr>
		</table>
		</td>
	</tr>
	</table>
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

<div style="position:absolute;top:643px;left:167px;visibility:<?=$shapeObserver?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:630px;left:203px;visibility:<?=$shapeStrategist1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:590px;left:202px;visibility:<?=$shapeStrategist2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:557px;left:202px;visibility:<?=$shapeStrategist3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:650px;left:223px;visibility:<?=$shapeVisionary1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:625px;left:240px;visibility:<?=$shapeVisionary2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:606px;left:253px;visibility:<?=$shapeVisionary3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:678px;left:223px;visibility:<?=$shapeInnovator1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:678px;left:240px;visibility:<?=$shapeInnovator2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:678px;left:253px;visibility:<?=$shapeInnovator3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:699px;left:203px;visibility:<?=$shapeEntrepreneur1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:714px;left:202px;visibility:<?=$shapeEntrepreneur2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:727px;left:202px;visibility:<?=$shapeEntrepreneur3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:699px;left:174px;visibility:<?=$shapeTestPilot1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:714px;left:150px;visibility:<?=$shapeTestPilot2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:727px;left:131px;visibility:<?=$shapeTestPilot3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:678px;left:155px;visibility:<?=$shapeMockupMaker1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:678px;left:112px;visibility:<?=$shapeMockupMaker2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:678px;left:80px;visibility:<?=$shapeMockupMaker3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:650px;left:155px;visibility:<?=$shapeInvestigator1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:625px;left:112px;visibility:<?=$shapeInvestigator2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:606px;left:80px;visibility:<?=$shapeInvestigator3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:630px;left:175px;visibility:<?=$shapeInspector1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:590px;left:150px;visibility:<?=$shapeInspector2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:557px;left:131px;visibility:<?=$shapeInspector3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>

<div style="position:absolute;top:643px;left:467px;visibility:<?=$shapeMediator?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:630px;left:503px;visibility:<?=$shapeCritic1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:590px;left:502px;visibility:<?=$shapeCritic2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:557px;left:502px;visibility:<?=$shapeCritic3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:650px;left:523px;visibility:<?=$shapeNeedfinder1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:625px;left:540px;visibility:<?=$shapeNeedfinder2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:606px;left:553px;visibility:<?=$shapeNeedfinder3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:678px;left:523px;visibility:<?=$shapeConciliator1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:678px;left:540px;visibility:<?=$shapeConciliator2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:678px;left:553px;visibility:<?=$shapeConciliator3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:699px;left:503px;visibility:<?=$shapeDiplomat1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:714px;left:502px;visibility:<?=$shapeDiplomat2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:727px;left:502px;visibility:<?=$shapeDiplomat3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:699px;left:474px;visibility:<?=$shapeCoordinator1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:714px;left:450px;visibility:<?=$shapeCoordinator2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:727px;left:431px;visibility:<?=$shapeCoordinator3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:678px;left:455px;visibility:<?=$shapeScheduler1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:678px;left:412px;visibility:<?=$shapeScheduler2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:678px;left:380px;visibility:<?=$shapeScheduler3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:650px;left:455px;visibility:<?=$shapeSimulator1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:625px;left:412px;visibility:<?=$shapeSimulator2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:606px;left:380px;visibility:<?=$shapeSimulator3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>
<div style="position:absolute;top:630px;left:475px;visibility:<?=$shapeReviewer1?>;"><img src="images/dot_01.gif" border="0" width="28" height="27"></div>
<div style="position:absolute;top:590px;left:450px;visibility:<?=$shapeReviewer2?>;"><img src="images/dot_02.gif" border="0" width="52" height="52"></div>
<div style="position:absolute;top:557px;left:431px;visibility:<?=$shapeReviewer3?>;"><img src="images/dot_03.gif" border="0" width="71" height="71"></div>

<div class="text" style="position:absolute;top:671px;left:177px;">Observer</div>
<div class="text" style="position:absolute;top:558px;left:196px;">50</div>
<div class="text" style="position:absolute;top:785px;left:190px;">-50</div>
<div class="text" style="position:absolute;top:671px;left:310px;">50</div>
<div class="text" style="position:absolute;top:671px;left:77px;">-50</div>
<div class="text" style="position:absolute;top:636px;left:84px;">Investigator</div>
<div class="text" style="position:absolute;top:706px;left:84px;">Mockup Maker</div>
<div class="text" style="position:absolute;top:636px;left:255px;">Visionary</div>
<div class="text" style="position:absolute;top:706px;left:255px;">Innovator</div>
<div class="text" style="position:absolute;top:571px;left:125px;">Inspector</div>
<div class="text" style="position:absolute;top:771px;left:125px;">Test Pilot</div>
<div class="text" style="position:absolute;top:571px;left:220px;">Strategist</div>
<div class="text" style="position:absolute;top:771px;left:220px;">Entrepreneur</div>

<div class="text" style="position:absolute;top:671px;left:480px;">Mediator</div>
<div class="text" style="position:absolute;top:558px;left:496px;">50</div>
<div class="text" style="position:absolute;top:785px;left:490px;">-50</div>
<div class="text" style="position:absolute;top:671px;left:610px;">50</div>
<div class="text" style="position:absolute;top:671px;left:377px;">-50</div>
<div class="text" style="position:absolute;top:636px;left:387px;">Simulator</div>
<div class="text" style="position:absolute;top:706px;left:387px;">Scheduler</div>
<div class="text" style="position:absolute;top:636px;left:553px;">Needfinder</div>
<div class="text" style="position:absolute;top:706px;left:553px;">Conciliator</div>
<div class="text" style="position:absolute;top:571px;left:428px;">Reviewer</div>
<div class="text" style="position:absolute;top:771px;left:428px;">Coordinator</div>
<div class="text" style="position:absolute;top:571px;left:535px;">Critic</div>
<div class="text" style="position:absolute;top:771px;left:523px;">Diplomat</div>
</BODY>
</HTML>
<?
} else {
	echo("<script>alert('비밀번호가 일치하지 않거나 해당하는 이메일이 없습니다');history.back();</script>");
}
mysql_free_result($result);
?>