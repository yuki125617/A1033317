<html>
<head>
<title>SendMail</title>
</head>
<body>

<form action="sendmail.php" method="post">
<h2>寄信</h2>
<br/>

寄件人:<input type="text" name="name"><br/>
寄件信箱:<input type="text" name="emailfrom"><br/>
收件人(E-mail):<input type="text" name="emailto"><br/>
<br/>
標題:<input type="text" name="subject"><br/>
<br/>
內容:<br/>
<textarea cols="100" rows="5" name="Message"></textarea><br/>
<br/>
<input type="submit" value="送出">
<input type="reset" value="清除">

</form>

</body>
</html>

