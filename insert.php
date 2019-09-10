<htmml>
<body>

入力内容
<?php
	echo "名前："
	echo htmlspecialchars($_GET['name']);

	echo "年齢"
	echo htmlspecialchars($_GET['age']);



?>
</body>
</html>
