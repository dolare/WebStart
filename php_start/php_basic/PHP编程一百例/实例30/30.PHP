<HTML>
<HEAD>
<TITLE>��̬���ú���</TITLE>
</HEAD>
<BODY>
<FONT SIZE=5>
<?
	function write($text)		//����function write()����
	{
		print($text);		//��ӡ�ַ���
	}

	function writeBold($text)	//����function write()����
	{
		print("<B>$text</B>");	//��ӡ�ַ���
	}

	$myFunction = "write";		//�������
	$myFunction("���!<BR>");	//���ڱ������������ţ�������������ͬ��function����
	print("<BR>\n");
	$myFunction = "writeBold";	//�������
	$myFunction("�ټ�!");		//���ڱ������������ţ�������������ͬ��function����
	print("<BR>\n");
?>
</FONT>
</BODY>
</HTML> 