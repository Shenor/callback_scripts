<?php
mb_internal_encoding("UTF-8");
$strHost = "127.0.0.1";
$strUser = "bx24";
$strSecret = "i8z3peuogxk";
$strChannel = "local/200@ext-group/n";
$strContext = "from-internal";
$strWaitTime = "60000";
$strPriority = "1";
$strExten = $_POST['txtphonenumber'];
$strCallerId = "Web Callback";
$length = strlen($strExten);

if ($length == 11 && is_numeric($strExten))
{
$oSocket = fsockopen($strHost, 5038, $errnum, $errdesc) or die("Connection to host failed");
fputs($oSocket, "Action: login\r\n");
fputs($oSocket, "Events: off\r\n");
fputs($oSocket, "Username: $strUser\r\n");
fputs($oSocket, "Secret: $strSecret\r\n\r\n");
fputs($oSocket, "Action: originate\r\n");
fputs($oSocket, "Channel: $strChannel\r\n");
fputs($oSocket, "Timeout: $strWaitTime\r\n");
fputs($oSocket, "CallerId: $strCallerId\r\n");
fputs($oSocket, "Exten: $strExten\r\n");
fputs($oSocket, "Context: $strContext\r\n");
fputs($oSocket, "Priority: $strPriority\r\n\r\n");
fputs($oSocket, "Action: Logoff\r\n\r\n");
sleep (1);
fclose($oSocket,128);
?>
?>
<p>
<table width="300" border="1" bordercolor="#630000" cellpadding="3" cellspacing="0">
<tr><td>
<font size="2" face="verdana,georgia" color="#630000">������������ �����. ��������� ���� ��� ������� ��������!<br>���� ������� �� �������� � ������� ������, ���������� ��� ���.<br><a href="<?php echo $_SERVER['PHP_SELF'] ?>">��� ���</a>$
</td></tr>
</table>
</p>
<?php
}
else
{
?>
<p>
<table width="300" border="1" bordercolor="#630000" cellpadding="3" cellspacing="0">
<tr><td>
<font size="2" face="verdana,arial,georgia" color="#630000">������� ��� ����� ( 87XXXXXXXXX ).</font>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<input type="text" size="20" maxlength="12" name="txtphonenumber"><br>
<input type="submit" value="���������!">
</form>
</td></tr>
</table>
</p>
<?php
}
