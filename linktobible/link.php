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

var str = document.getElementsByTagName('body')[0].innerHTML
res = str
.replace(/1 Co ([0-9]{1,2})\:([0-9]{1,2})/g, "1Co $1:$2")
.replace(/1 Cr ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ch $1:$2")
.replace(/1 Jo ([0-9]{1,2})\:([0-9]{1,2})/g, "1Jn $1:$2")
.replace(/1 Pe ([0-9]{1,2})\:([0-9]{1,2})/g, "1Pe $1:$2")
.replace(/1 Rs ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ki $1:$2")
.replace(/1 Sm ([0-9]{1,2})\:([0-9]{1,2})/g, "1Sa $1:$2")
.replace(/1 Ts ([0-9]{1,2})\:([0-9]{1,2})/g, "1Th $1:$2")
.replace(/1 Tm ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ti $1:$2")
.replace(/1\nCo ([0-9]{1,2})\:([0-9]{1,2})/g, "1Co $1:$2")
.replace(/1\nCr ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ch $1:$2")
.replace(/1\nJo ([0-9]{1,2})\:([0-9]{1,2})/g, "1Jn $1:$2")
.replace(/1\nPe ([0-9]{1,2})\:([0-9]{1,2})/g, "1Pe $1:$2")
.replace(/1\nRs ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ki $1:$2")
.replace(/1\nSm ([0-9]{1,2})\:([0-9]{1,2})/g, "1Sa $1:$2")
.replace(/1\nTs ([0-9]{1,2})\:([0-9]{1,2})/g, "1Th $1:$2")
.replace(/1\nTm ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ti $1:$2")
.replace(/2 Co ([0-9]{1,2})\:([0-9]{1,2})/g, "2Co $1:$2")
.replace(/2 Cr ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ch $1:$2")
.replace(/2 Jo ([0-9]{1,2})\:([0-9]{1,2})/g, "2Jn $1:$2")
.replace(/2 Pe ([0-9]{1,2})\:([0-9]{1,2})/g, "2Pe $1:$2")
.replace(/2 Rs ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ki $1:$2")
.replace(/2 Sm ([0-9]{1,2})\:([0-9]{1,2})/g, "2Sa $1:$2")
.replace(/2 Ts ([0-9]{1,2})\:([0-9]{1,2})/g, "2Th $1:$2")
.replace(/2 Tm ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ti $1:$2")
.replace(/2\nCo ([0-9]{1,2})\:([0-9]{1,2})/g, "2Co $1:$2")
.replace(/2\nCr ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ch $1:$2")
.replace(/2\nJo ([0-9]{1,2})\:([0-9]{1,2})/g, "2Jn $1:$2")
.replace(/2\nPe ([0-9]{1,2})\:([0-9]{1,2})/g, "2Pe $1:$2")
.replace(/2\nRs ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ki $1:$2")
.replace(/2\nSm ([0-9]{1,2})\:([0-9]{1,2})/g, "2Sa $1:$2")
.replace(/2\nTs ([0-9]{1,2})\:([0-9]{1,2})/g, "2Th $1:$2")
.replace(/2\nTm ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ti $1:$2")
.replace(/3 Jo ([0-9]{1,2})\:([0-9]{1,2})/g, "3Jo $1:$2")
.replace(/3\nJo ([0-9]{1,2})\:([0-9]{1,2})/g, "3Jn $1:$2")
.replace(/Ag ([0-9]{1,2})\:([0-9]{1,2})/g, "Hag $1:$2")
.replace(/Am ([0-9]{1,2})\:([0-9]{1,2})/g, "Amo $1:$2")
.replace(/Ap ([0-9]{1,2})\:([0-9]{1,2})/g, "Rev $1:$2")
.replace(/At ([0-9]{1,2})\:([0-9]{1,2})/g, "Act $1:$2")
.replace(/Ct ([0-9]{1,2})\:([0-9]{1,2})/g, "Son $1:$2")
.replace(/Cl ([0-9]{1,2})\:([0-9]{1,2})/g, "Col $1:$2")
.replace(/Dn ([0-9]{1,2})\:([0-9]{1,2})/g, "Dan $1:$2")
.replace(/Dt ([0-9]{1,2})\:([0-9]{1,2})/g, "Deu $1:$2")
.replace(/Ec ([0-9]{1,2})\:([0-9]{1,2})/g, "Ecc $1:$2")
.replace(/Ef ([0-9]{1,2})\:([0-9]{1,2})/g, "Eph $1:$2")
.replace(/ed ([0-9]{1,2})\:([0-9]{1,2})/g, "Ezr $1:$2")
.replace(/Et ([0-9]{1,2})\:([0-9]{1,2})/g, "Est $1:$2")
.replace(/Ex ([0-9]{1,2})\:([0-9]{1,2})/g, "Exo $1:$2")
.replace(/Ez ([0-9]{1,2})\:([0-9]{1,2})/g, "Eze $1:$2")
.replace(/Fl ([0-9]{1,2})\:([0-9]{1,2})/g, "Phm $1:$2")
.replace(/Fp ([0-9]{1,2})\:([0-9]{1,2})/g, "Php $1:$2")
.replace(/Gl ([0-9]{1,2})\:([0-9]{1,2})/g, "Gal $1:$2")
.replace(/Gn ([0-9]{1,2})\:([0-9]{1,2})/g, "Gen $1:$2")
.replace(/Hc ([0-9]{1,2})\:([0-9]{1,2})/g, "Hab $1:$2")
.replace(/Hb ([0-9]{1,2})\:([0-9]{1,2})/g, "Heb $1:$2")
.replace(/Is ([0-9]{1,2})\:([0-9]{1,2})/g, "Isa $1:$2")
.replace(/Jr ([0-9]{1,2})\:([0-9]{1,2})/g, "Jer $1:$2")
.replace(/Jó ([0-9]{1,2})\:([0-9]{1,2})/g, "Job $1:$2")
.replace(/Jo ([0-9]{1,2})\:([0-9]{1,2})/g, "Joh $1:$2")
.replace(/Jl ([0-9]{1,2})\:([0-9]{1,2})/g, "Joe $1:$2")
.replace(/Jn ([0-9]{1,2})\:([0-9]{1,2})/g, "Jon $1:$2")
.replace(/js ([0-9]{1,2})\:([0-9]{1,2})/g, "Jos $1:$2")
.replace(/Jd ([0-9]{1,2})\:([0-9]{1,2})/g, "Jud $1:$2")
.replace(/Jz ([0-9]{1,2})\:([0-9]{1,2})/g, "Jdg $1:$2")
.replace(/Lm ([0-9]{1,2})\:([0-9]{1,2})/g, "Lam $1:$2")
.replace(/Lv ([0-9]{1,2})\:([0-9]{1,2})/g, "Lev $1:$2")
.replace(/Lc ([0-9]{1,2})\:([0-9]{1,2})/g, "Luk $1:$2")
.replace(/Ml ([0-9]{1,2})\:([0-9]{1,2})/g, "Mal $1:$2")
.replace(/Mc ([0-9]{1,2})\:([0-9]{1,2})/g, "Mar $1:$2")
.replace(/Mt ([0-9]{1,2})\:([0-9]{1,2})/g, "Mat $1:$2")
.replace(/Mq ([0-9]{1,2})\:([0-9]{1,2})/g, "Mic $1:$2")
.replace(/Na ([0-9]{1,2})\:([0-9]{1,2})/g, "Nah $1:$2")
.replace(/Ne ([0-9]{1,2})\:([0-9]{1,2})/g, "Neh $1:$2")
.replace(/Nm ([0-9]{1,2})\:([0-9]{1,2})/g, "Num $1:$2")
.replace(/Ob ([0-9]{1,2})\:([0-9]{1,2})/g, "Oba $1:$2")
.replace(/Os ([0-9]{1,2})\:([0-9]{1,2})/g, "Hos $1:$2")
.replace(/Pv ([0-9]{1,2})\:([0-9]{1,2})/g, "Pro $1:$2")
.replace(/Rm ([0-9]{1,2})\:([0-9]{1,2})/g, "Rom $1:$2")
.replace(/Rt ([0-9]{1,2})\:([0-9]{1,2})/g, "Rth $1:$2")
.replace(/Sl ([0-9]{1,2})\:([0-9]{1,2})/g, "Psa $1:$2")
.replace(/Sl ([0-9]{1,2})\:([0-9]{1,2})/g, "Psa $1:$2")
.replace(/Sf ([0-9]{1,2})\:([0-9]{1,2})/g, "Zep $1:$2")
.replace(/Tg ([0-9]{1,2})\:([0-9]{1,2})/g, "Jas $1:$2")
.replace(/Tt ([0-9]{1,2})\:([0-9]{1,2})/g, "Tit $1:$2")
.replace(/Zc ([0-9]{1,2})\:([0-9]{1,2})/g, "Zec $1:$2")


.replace(/1 Co\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Co $1:$2")
.replace(/1 Cr\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ch $1:$2")
.replace(/1 Jo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Jn $1:$2")
.replace(/1 Pe\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Pe $1:$2")
.replace(/1 Rs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ki $1:$2")
.replace(/1 Sm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Sa $1:$2")
.replace(/1 Ts\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Th $1:$2")
.replace(/1 Tm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ti $1:$2")
.replace(/1\nCo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Co $1:$2")
.replace(/1\nCr\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ch $1:$2")
.replace(/1\nJo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Jn $1:$2")
.replace(/1\nPe\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Pe $1:$2")
.replace(/1\nRs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ki $1:$2")
.replace(/1\nSm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Sa $1:$2")
.replace(/1\nTs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Th $1:$2")
.replace(/1\nTm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1Ti $1:$2")
.replace(/2 Co\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Co $1:$2")
.replace(/2 Cr\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ch $1:$2")
.replace(/2 Jo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Jn $1:$2")
.replace(/2 Pe\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Pe $1:$2")
.replace(/2 Rs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ki $1:$2")
.replace(/2 Sm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Sa $1:$2")
.replace(/2 Ts\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Th $1:$2")
.replace(/2 Tm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ti $1:$2")
.replace(/2\nCo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Co $1:$2")
.replace(/2\nCr\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ch $1:$2")
.replace(/2\nJo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Jn $1:$2")
.replace(/2\nPe\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Pe $1:$2")
.replace(/2\nRs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ki $1:$2")
.replace(/2\nSm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Sa $1:$2")
.replace(/2\nTs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Th $1:$2")
.replace(/2\nTm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2Ti $1:$2")
.replace(/3 Jo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "3Jo $1:$2")
.replace(/3\nJo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "3Jn $1:$2")
.replace(/Ag\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Hag $1:$2")
.replace(/Am\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Amo $1:$2")
.replace(/Ap\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Rev $1:$2")
.replace(/At\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Act $1:$2")
.replace(/Ct\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Son $1:$2")
.replace(/Cl\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Col $1:$2")
.replace(/Dn\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Dan $1:$2")
.replace(/Dt\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Deu $1:$2")
.replace(/Ec\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Ecc $1:$2")
.replace(/Ef\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Eph $1:$2")
.replace(/ed\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Ezr $1:$2")
.replace(/Et\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Est $1:$2")
.replace(/Ex\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Exo $1:$2")
.replace(/Ez\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Eze $1:$2")
.replace(/Fl\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Phm $1:$2")
.replace(/Fp\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Php $1:$2")
.replace(/Gl\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Gal $1:$2")
.replace(/Gn\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Gen $1:$2")
.replace(/Hc\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Hab $1:$2")
.replace(/Hb\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Heb $1:$2")
.replace(/Is\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Isa $1:$2")
.replace(/Jr\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Jer $1:$2")
.replace(/Jó\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Job $1:$2")
.replace(/Jo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Joh $1:$2")
.replace(/Jl\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Joe $1:$2")
.replace(/Jn\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Jon $1:$2")
.replace(/js\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Jos $1:$2")
.replace(/Jd\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Jud $1:$2")
.replace(/Jz\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Jdg $1:$2")
.replace(/Lm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Lam $1:$2")
.replace(/Lv\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Lev $1:$2")
.replace(/Lc\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Luk $1:$2")
.replace(/Ml\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Mal $1:$2")
.replace(/Mc\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Mar $1:$2")
.replace(/Mt\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Mat $1:$2")
.replace(/Mq\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Mic $1:$2")
.replace(/Na\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Nah $1:$2")
.replace(/Ne\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Neh $1:$2")
.replace(/Nm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Num $1:$2")
.replace(/Ob\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Oba $1:$2")
.replace(/Os\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Hos $1:$2")
.replace(/Pv\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Pro $1:$2")
.replace(/Rm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Rom $1:$2")
.replace(/Rt\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Rth $1:$2")
.replace(/Sl\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Psa $1:$2")
.replace(/Sl\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Psa $1:$2")
.replace(/Sf\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Zep $1:$2")
.replace(/Tg\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Jas $1:$2")
.replace(/Tt\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Tit $1:$2")
.replace(/Zc\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Zec $1:$2")

console.log(document.getElementsByTagName('body')[0].innerHTML = res);
</script>

<!-- 

Script externo
 -->
 <script> 
 	 var refTagger = {
 	 	 settings: { 
 	 	 	 bibleVersion: "ESV"   
 	 	 }  
 	 }; 
 	 (function(d, t) { 
 	 	 var g = d.createElement(t), s = d.getElementsByTagName(t)[0]; 
 	 	 g.src = '//api.reftagger.com/v2/RefTagger.js'; 
 	 	//  g.src = 'RefTagger.js'; 
 	 	 s.parentNode.insertBefore(g, s); 
      }(document, 'script'));    
 </script>
</body>

<script>
var str = document.getElementsByTagName('body')[0].innerHTML
res = str
.replace(/<(.*?)data-reference="(.*?) ([0-9]{1,3})\.(.*?)"(.*?)<\/a>/g, "<font color='green'>$2_$3:$4</font>")
document.getElementsByTagName('body')[0].innerHTML = res
console.log(res)  
</script>
