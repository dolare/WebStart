<HTML>
<HEAD>
<TITLE>for�ĸ߼�����</TITLE>
</HEAD>
<BODY>
<?
	/* 
	** ��ӡ��Ҫ��˵������ 
	*/
	print("<B>��������һ���м��죿</B>\n");
	print("<OL>\n");
	for($currentDate = date("U"); 			//����$currentDateʱ���ʽ
		date("l", $currentDate) != "Monday"; 	//�ж��ǲ��ǵ�ǰϵͳʱ����Monday
		$currentDate += (60 * 60 * 24))		//��ǰʱ�����1��
	{
		/* 
		** ��ӡʱ������ 
		*/
		print("<LI>" . date("l", $currentDate) . "\n");
	}

	print("</OL>\n");
?>
</BODY>
</HTML>