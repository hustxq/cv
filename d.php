<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>
h3 {
	font-weight: 700;
	/* font-size:28px; */
}
</style>
</head>
<body>
<?php
echo "hi";
?>
	<h3>Title</h3>
	<p>
		<a href="javascript:_downloadFile()">download</a>
	</p>

	<script type="text/javascript">
		function _downloadFile() {
			try {
				var elemIF = document.createElement("iframe");
				elemIF.src = "http://xq:801/cv/1.txt";
				elemIF.style.display = "none";
				document.body.appendChild(elemIF);
				alert("finish.");
			} catch (e) {

			}
		}
	</script>
</body>
</html>