<!DOCTYPE html>
<html>
	<head>
    <style>
			/* html {
				font-family: Arial, Helvetica, sans-serif;
				font-size: 13px;
			}
			form div {
				padding: .5em;
            } */
            div {margin: 50}
		
	</style>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<p><p>
<div style="float:right;">
<button class="btn btn-primary" onclick="copyDivToClipboard()">Copy text</button><p>
</div>

<?php
?>



<div id="divText">
<?
echo nl2br($_POST["text"]);
?>
</div>









<script>
 function copyDivToClipboard() {
                    var range = document.createRange();
                    range.selectNode(document.getElementById("divText"));
                    window.getSelection().removeAllRanges(); // clear current selection
                    window.getSelection().addRange(range); // to select text
                    document.execCommand("copy");
                    window.getSelection().removeAllRanges();// to deselect
                    alert('Texto Copiado!')
                }
</script>    



<script>
 	 var refTagger = {
 	 	 settings: { 
 	 	 	 bibleVersion: "ESV"   
 	 	 }  
 	 }; 
 	 (function(d, t) { 
 	 	 var g = d.createElement(t), s = d.getElementsByTagName(t)[0]; 
 	 	 g.src = '//api.reftagger.com/v2/RefTagger.js'; 
 	 	 s.parentNode.insertBefore(g, s); 
 	 }(document, 'script')); 
</script> 
