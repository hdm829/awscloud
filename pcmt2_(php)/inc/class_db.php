<%
Class Db
	private  dbName
	private  uid
	private  pw 
	private  url

	private  conn
	dim  rs
	
	'conn.ConnectionString= "Provider=SQLOLEDB.1;Password=1114h;Persist Security Info=True;User ID=kisoo;Initial Catalog=cdi00;Data Source=."	
'----
	Sub openDb()
		Set conn=Server.CreateObject("ADODB.Connection")
		set rs= Server.CreateObject("ADODB.Recordset")				
		conn.ConnectionString= "Provider=SQLOLEDB.1;Password=1114h;Persist Security Info=True;User ID=kisoo;Initial Catalog=pcmt2;Data Source=."
		'conn.ConnectionString= "Provider=SQLOLEDB.1;Password=1114h;Persist Security Info=True;User ID=kisoo;Initial Catalog=stakeholderModeler;Data Source=creativelab.skku.edu"
		
		conn.open
	End Sub
'----

	Sub closeDb()
		On Error Resume Next
		if (IsEmpty(conn) = false) Then
			If conn.state=conn.adStateOpen Then
				conn.close
			End  If 
				
		End if
	End Sub
'----
	function excuteCmd(ByVal strCdm)
	
		On Error Resume Next
		openDb()		
		conn.execute(strCdm)		
		closeDb()

		If err<>0 Then
			excuteCmd=True
		Else
			excuteCmd=False
		End If 
		
	End Function

	function getRs(strCmd)
		On Error Resume Next
		set rs= Server.CreateObject("ADODB.Recordset")				
		
		rs.open strCmd,conn,1			
		
		If Err <>0 then
			getRs= rs
		Else
			getRs =null
		End if
	End Function
	
	Function closeRs()
		On Error Resume Next 

		If (IsEmpty(rs)=false) Then
			If rs.state=1 Then 
				rs.close
			End If
		End If 
		If err<>0 Then
			excuteCmd=True
		Else
			excuteCmd=False
		End If 					
	End function


'----
End Class 

%>

