<HTML>
<HEAD>
<TITLE>������ͣ����</TITLE>
</HEAD>
<BODY>
<?
	print(microtime());
	sleep(10);		//������ͣ10s
	print("<br>\n");
	print(microtime());
	print("<hr>");
	print(microtime());
	usleep(30);		//�ݶ�30ms
	print("<br>\n");
	print(microtime());
?>
</BODY>
</HTML>