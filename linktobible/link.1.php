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

<button onclick="esword()">E-Sword</button>

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
.replace(/1 Co ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Co $1:$2")
.replace(/1 Cr ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ch $1:$2")
.replace(/1 Jo ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Jo $1:$2")
.replace(/1 Pe ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Pe $1:$2")
.replace(/1 Rs ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ki $1:$2")
.replace(/1 Sm ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Sa $1:$2")
.replace(/1 Ts ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Th $1:$2")
.replace(/1 Tm ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ti $1:$2")
.replace(/1\nCo ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Co $1:$2")
.replace(/1\nCr ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ch $1:$2")
.replace(/1\nJo ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Jn $1:$2")
.replace(/1\nPe ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Pe $1:$2")
.replace(/1\nRs ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ki $1:$2")
.replace(/1\nSm ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Sa $1:$2")
.replace(/1\nTs ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Th $1:$2")
.replace(/1\nTm ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ti $1:$2")
.replace(/2 Co ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Co $1:$2")
.replace(/2 Cr ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ch $1:$2")
.replace(/2 Jo ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Jo $1:$2")
.replace(/2 Pe ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Pe $1:$2")
.replace(/2 Rs ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ki $1:$2")
.replace(/2 Sm ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Sa $1:$2")
.replace(/2 Ts ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Th $1:$2")
.replace(/2 Tm ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ti $1:$2")
.replace(/2\nCo ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Co $1:$2")
.replace(/2\nCr ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ch $1:$2")
.replace(/2\nJo ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Jn $1:$2")
.replace(/2\nPe ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Pe $1:$2")
.replace(/2\nRs ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ki $1:$2")
.replace(/2\nSm ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Sa $1:$2")
.replace(/2\nTs ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Th $1:$2")
.replace(/2\nTm ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ti $1:$2")
.replace(/3 Jo ([0-9]{1,2})\:([0-9]{1,2})/g, "3 Jo $1:$2")
.replace(/3\nJo ([0-9]{1,2})\:([0-9]{1,2})/g, "3 Jo $1:$2")
.replace(/Ag ([0-9]{1,2})\:([0-9]{1,2})/g, "Hag $1:$2")
.replace(/Am ([0-9]{1,2})\:([0-9]{1,2})/g, "Amos $1:$2")
.replace(/Ap ([0-9]{1,2})\:([0-9]{1,2})/g, "Rev $1:$2")
.replace(/At ([0-9]{1,2})\:([0-9]{1,2})/g, "Act $1:$2")
.replace(/Ct ([0-9]{1,2})\:([0-9]{1,2})/g, "Song $1:$2")
.replace(/Cl ([0-9]{1,2})\:([0-9]{1,2})/g, "Col $1:$2")
.replace(/Dn ([0-9]{1,2})\:([0-9]{1,2})/g, "Dan $1:$2")
.replace(/Dt ([0-9]{1,2})\:([0-9]{1,2})/g, "Dt $1:$2")
.replace(/Ec ([0-9]{1,2})\:([0-9]{1,2})/g, "Ecc $1:$2")
.replace(/Ef ([0-9]{1,2})\:([0-9]{1,2})/g, "Eph $1:$2")
.replace(/Ed ([0-9]{1,2})\:([0-9]{1,2})/g, "Ezr $1:$2")
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
.replace(/Js ([0-9]{1,2})\:([0-9]{1,2})/g, "Jos $1:$2")
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
.replace(/Ob ([0-9]{1,2})\:([0-9]{1,2})/g, "Obad $1:$2")
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


.replace(/1 Co\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Co $1:$2")
.replace(/1 Cr\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ch $1:$2")
.replace(/1 Jo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Jo $1:$2")
.replace(/1 Pe\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Pe $1:$2")
.replace(/1 Rs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ki $1:$2")
.replace(/1 Sm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Sa $1:$2")
.replace(/1 Ts\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Th $1:$2")
.replace(/1 Tm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ti $1:$2")
.replace(/1\nCo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Co $1:$2")
.replace(/1\nCr\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ch $1:$2")
.replace(/1\nJo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Jo $1:$2")
.replace(/1\nPe\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Pe $1:$2")
.replace(/1\nRs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ki $1:$2")
.replace(/1\nSm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Sa $1:$2")
.replace(/1\nTs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Th $1:$2")
.replace(/1\nTm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ti $1:$2")
.replace(/2 Co\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Co $1:$2")
.replace(/2 Cr\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ch $1:$2")
.replace(/2 Jo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Jo $1:$2")
.replace(/2 Pe\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Pe $1:$2")
.replace(/2 Rs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ki $1:$2")
.replace(/2 Sm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Sa $1:$2")
.replace(/2 Ts\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Th $1:$2")
.replace(/2 Tm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ti $1:$2")
.replace(/2\nCo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Co $1:$2")
.replace(/2\nCr\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ch $1:$2")
.replace(/2\nJo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Jn $1:$2")
.replace(/2\nPe\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Pe $1:$2")
.replace(/2\nRs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ki $1:$2")
.replace(/2\nSm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Sa $1:$2")
.replace(/2\nTs\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Th $1:$2")
.replace(/2\nTm\. ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ti $1:$2")
.replace(/3 Jo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "3 Jo $1:$2")
.replace(/3\nJo\. ([0-9]{1,2})\:([0-9]{1,2})/g, "3 Jo $1:$2")
.replace(/Ag\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Hag $1:$2")
.replace(/Am\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Amos $1:$2")
.replace(/Ap\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Rev $1:$2")
.replace(/At\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Act $1:$2")
.replace(/Ct\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Song $1:$2")
.replace(/Cl\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Col $1:$2")
.replace(/Dn\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Dan $1:$2")
.replace(/Dt\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Dt $1:$2")
.replace(/Ec\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Ecc $1:$2")
.replace(/Ef\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Eph $1:$2")
.replace(/Ed\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Ezr $1:$2")
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
.replace(/Js\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Jos $1:$2")
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
.replace(/Ob\. ([0-9]{1,2})\:([0-9]{1,2})/g, "Obad $1:$2")
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

.replace(/1 Cor ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Co $1:$2")
.replace(/1 Cro ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ch $1:$2")
.replace(/1 Ped ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Pe $1:$2")
.replace(/1\nCor ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Co $1:$2")
.replace(/1\nCro ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ch $1:$2")
.replace(/1\nPed ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Pe $1:$2")
.replace(/2 Cor ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Co $1:$2")
.replace(/2 Cro ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ch $1:$2")
.replace(/2 Ped ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Pe $1:$2")
.replace(/2\nCor ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Co $1:$2")
.replace(/2\nCro ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ch $1:$2")
.replace(/2\nPed ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Pe $1:$2")
.replace(/Age ([0-9]{1,2})\:([0-9]{1,2})/g, "Hag $1:$2")
.replace(/Amo ([0-9]{1,2})\:([0-9]{1,2})/g, "Amos $1:$2")
.replace(/Apo ([0-9]{1,2})\:([0-9]{1,2})/g, "Rev $1:$2")
.replace(/Ecl ([0-9]{1,2})\:([0-9]{1,2})/g, "Ecc $1:$2")
.replace(/Efe ([0-9]{1,2})\:([0-9]{1,2})/g, "Eph $1:$2")
.replace(/Exo ([0-9]{1,2})\:([0-9]{1,2})/g, "Exo $1:$2")
.replace(/Eze ([0-9]{1,2})\:([0-9]{1,2})/g, "Eze $1:$2")
.replace(/Fl ([0-9]{1,2})\:([0-9]{1,2})/g, "Phm $1:$2")
.replace(/Fm ([0-9]{1,2})\:([0-9]{1,2})/g, "Phm $1:$2")

// de nome completo português para inglês
.replace(/1 Coríntios ([0-9]{1,2})/g, "1 Corinthians $1")
.replace(/1 Crônicas ([0-9]{1,2})/g, "1 Chronicles $1")
.replace(/1 João ([0-9]{1,2})/g, "1 John $1")
.replace(/1 Pedro ([0-9]{1,2})/g, "1 Peter $1")
.replace(/1 Reis ([0-9]{1,2})/g, "1 Kings $1")
.replace(/1 Samuel ([0-9]{1,2})/g, "1 Samuel $1")
.replace(/1 Tessalonicenses ([0-9]{1,2})/g, "1 Thessalonians $1")
.replace(/1 Timóteo ([0-9]{1,2})/g, "1 Timothy $1")
.replace(/2 Coríntios ([0-9]{1,2})/g, "2 Corinthians $1")
.replace(/2 Crônicas ([0-9]{1,2})/g, "2 Chronicles $1")
.replace(/2 João ([0-9]{1,2})/g, "2 John $1")
.replace(/2 Pedro ([0-9]{1,2})/g, "2 Peter $1")
.replace(/2 Reis ([0-9]{1,2})/g, "2 Kings $1")
.replace(/2 Samuel ([0-9]{1,2})/g, "2 Samuel $1")
.replace(/2 Tessalonicenses ([0-9]{1,2})/g, "2 Thessalonians $1")
.replace(/2 Timóteo ([0-9]{1,2})/g, "2 Timothy $1")
.replace(/3 João ([0-9]{1,2})/g, "3 John $1")

.replace(/1\nCoríntios ([0-9]{1,2})/g, "1 Corinthians $1")
.replace(/1\nCrônicas ([0-9]{1,2})/g, "1 Chronicles $1")
.replace(/1\nJoão ([0-9]{1,2})/g, "1 John $1")
.replace(/1\nPedro ([0-9]{1,2})/g, "1 Peter $1")
.replace(/1\nReis ([0-9]{1,2})/g, "1 Kings $1")
.replace(/1\nSamuel ([0-9]{1,2})/g, "1 Samuel $1")
.replace(/1\nTessalonicenses ([0-9]{1,2})/g, "1 Thessalonians $1")
.replace(/1\nTimóteo ([0-9]{1,2})/g, "1 Timothy $1")
.replace(/2\nCoríntios ([0-9]{1,2})/g, "2 Corinthians $1")
.replace(/2\nCrônicas ([0-9]{1,2})/g, "2 Chronicles $1")
.replace(/2\nJoão ([0-9]{1,2})/g, "2 John $1")
.replace(/2\nPedro ([0-9]{1,2})/g, "2 Peter $1")
.replace(/2\nReis ([0-9]{1,2})/g, "2 Kings $1")
.replace(/2\nSamuel ([0-9]{1,2})/g, "2 Samuel $1")
.replace(/2\nTessalonicenses ([0-9]{1,2})/g, "2 Thessalonians $1")
.replace(/2\nTimóteo ([0-9]{1,2})/g, "2 Timothy $1")
.replace(/3\nJoão ([0-9]{1,2})/g, "3 John $1")

.replace(/Ageu ([0-9]{1,2})/g, "Haggai $1")
.replace(/Amós ([0-9]{1,2})/g, "Amos $1")
.replace(/Apocalipse ([0-9]{1,2})/g, "Revelation $1")
.replace(/Atos ([0-9]{1,2})/g, "Acts $1")
.replace(/Cantares de Salomão ([0-9]{1,2})/g, "Song of Solomon $1")
.replace(/Colossenses ([0-9]{1,2})/g, "Colossians $1")
.replace(/Daniel ([0-9]{1,2})/g, "Daniel $1")
.replace(/Deutoronômio ([0-9]{1,2})/g, "Deuteronomy $1")
.replace(/Eclesiastes ([0-9]{1,2})/g, "Ecclesiastes $1")
.replace(/Efésios ([0-9]{1,2})/g, "Ephesians $1")
.replace(/Esdras ([0-9]{1,2})/g, "Ezra $1")
.replace(/Ester ([0-9]{1,2})/g, "Esther $1")
.replace(/Êxodo ([0-9]{1,2})/g, "Exodus $1")
.replace(/Ezequiel ([0-9]{1,2})/g, "Ezekiel $1")
.replace(/Filemon ([0-9]{1,2})/g, "Philemon $1")
.replace(/Filipenses ([0-9]{1,2})/g, "Philippians $1")
.replace(/Gálatas ([0-9]{1,2})/g, "Galatians $1")
.replace(/Gênesis ([0-9]{1,2})/g, "Genesis $1")
.replace(/Habacuque ([0-9]{1,2})/g, "Habakkuk $1")
.replace(/Hebreus ([0-9]{1,2})/g, "Hebrews $1")
.replace(/Isaías ([0-9]{1,2})/g, "Isaiah $1")
.replace(/Jeremías ([0-9]{1,2})/g, "Jeremiah $1")
.replace(/Jó ([0-9]{1,2})/g, "Job $1")
.replace(/João ([0-9]{1,2})/g, "John $1")
.replace(/Joel ([0-9]{1,2})/g, "Joel $1")
.replace(/Jonas ([0-9]{1,2})/g, "Jonah $1")
.replace(/Josué ([0-9]{1,2})/g, "Joshua $1")
.replace(/Judas ([0-9]{1,2})/g, "Jude $1")
.replace(/Juízes ([0-9]{1,2})/g, "Judges $1")
.replace(/Lamentações ([0-9]{1,2})/g, "Lamentations $1")
.replace(/Levítico ([0-9]{1,2})/g, "Leviticus $1")
.replace(/Lucas ([0-9]{1,2})/g, "Luke $1")
.replace(/Malaquias ([0-9]{1,2})/g, "Malachi $1")
.replace(/Marcos ([0-9]{1,2})/g, "Mark $1")
.replace(/Mateus ([0-9]{1,2})/g, "Matthew $1")
.replace(/Miquéias ([0-9]{1,2})/g, "Micah $1")
.replace(/Naum ([0-9]{1,2})/g, "Nahum $1")
.replace(/Neemias ([0-9]{1,2})/g, "Nehemiah $1")
.replace(/Números ([0-9]{1,2})/g, "Numbers $1")
.replace(/Obadias ([0-9]{1,2})/g, "Obadiah $1")
.replace(/Oséias ([0-9]{1,2})/g, "Hosea $1")
.replace(/Provérbios ([0-9]{1,2})/g, "Proverbs $1")
.replace(/Romanos ([0-9]{1,2})/g, "Romans $1")
.replace(/Rute ([0-9]{1,2})/g, "Ruth $1")
.replace(/Salmos ([0-9]{1,2})/g, "Psalm $1")
.replace(/Salmos ([0-9]{1,2})/g, "Psalm $1")
.replace(/Sofonias ([0-9]{1,2})/g, "Zephaniah $1")
.replace(/Tiago ([0-9]{1,2})/g, "James $1")
.replace(/Tito ([0-9]{1,2})/g, "Titus $1")
.replace(/Zacarias ([0-9]{1,2})/g, "Zechariah $1")

.replace(/I Co ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Co $1:$2")
.replace(/I Cr ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ch $1:$2")
.replace(/I Jo ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Jo $1:$2")
.replace(/I Pe ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Pe $1:$2")
.replace(/I Rs ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ki $1:$2")
.replace(/I Sm ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Sa $1:$2")
.replace(/I Ts ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Th $1:$2")
.replace(/I Tm ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ti $1:$2")
.replace(/I\nCo ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Co $1:$2")
.replace(/I\nCr ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ch $1:$2")
.replace(/I\nJo ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Jn $1:$2")
.replace(/I\nPe ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Pe $1:$2")
.replace(/I\nRs ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ki $1:$2")
.replace(/I\nSm ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Sa $1:$2")
.replace(/I\nTs ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Th $1:$2")
.replace(/I\nTm ([0-9]{1,2})\:([0-9]{1,2})/g, "1 Ti $1:$2")
.replace(/II Co ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Co $1:$2")
.replace(/II Cr ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ch $1:$2")
.replace(/II Jo ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Jo $1:$2")
.replace(/II Pe ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Pe $1:$2")
.replace(/II Rs ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ki $1:$2")
.replace(/II Sm ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Sa $1:$2")
.replace(/II Ts ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Th $1:$2")
.replace(/II Tm ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ti $1:$2")
.replace(/II\nCo ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Co $1:$2")
.replace(/II\nCr ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ch $1:$2")
.replace(/II\nJo ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Jn $1:$2")
.replace(/II\nPe ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Pe $1:$2")
.replace(/II\nRs ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ki $1:$2")
.replace(/II\nSm ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Sa $1:$2")
.replace(/II\nTs ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Th $1:$2")
.replace(/II\nTm ([0-9]{1,2})\:([0-9]{1,2})/g, "2 Ti $1:$2")
.replace(/III Jo ([0-9]{1,2})\:([0-9]{1,2})/g, "3 Jo $1:$2")
.replace(/III\nJo ([0-9]{1,2})\:([0-9]{1,2})/g, "3 Jo $1:$2")


.replace(/I Coríntios ([0-9]{1,2})/g, "1 Corinthians $1")
.replace(/I Crônicas ([0-9]{1,2})/g, "1 Chronicles $1")
.replace(/I João ([0-9]{1,2})/g, "1 John $1")
.replace(/I Pedro ([0-9]{1,2})/g, "1 Peter $1")
.replace(/I Reis ([0-9]{1,2})/g, "1 Kings $1")
.replace(/I Samuel ([0-9]{1,2})/g, "1 Samuel $1")
.replace(/I Tessalonicenses ([0-9]{1,2})/g, "1 Thessalonians $1")
.replace(/I Timóteo ([0-9]{1,2})/g, "1 Timothy $1")
.replace(/II Coríntios ([0-9]{1,2})/g, "2 Corinthians $1")
.replace(/II Crônicas ([0-9]{1,2})/g, "2 Chronicles $1")
.replace(/II João ([0-9]{1,2})/g, "2 John $1")
.replace(/II Pedro ([0-9]{1,2})/g, "2 Peter $1")
.replace(/II Reis ([0-9]{1,2})/g, "2 Kings $1")
.replace(/II Samuel ([0-9]{1,2})/g, "2 Samuel $1")
.replace(/II Tessalonicenses ([0-9]{1,2})/g, "2 Thessalonians $1")
.replace(/II Timóteo ([0-9]{1,2})/g, "2 Timothy $1")
.replace(/III João ([0-9]{1,2})/g, "3 John $1")

.replace(/I\nCoríntios ([0-9]{1,2})/g, "1 Corinthians $1")
.replace(/I\nCrônicas ([0-9]{1,2})/g, "1 Chronicles $1")
.replace(/I\nJoão ([0-9]{1,2})/g, "1 John $1")
.replace(/I\nPedro ([0-9]{1,2})/g, "1 Peter $1")
.replace(/I\nReis ([0-9]{1,2})/g, "1 Kings $1")
.replace(/I\nSamuel ([0-9]{1,2})/g, "1 Samuel $1")
.replace(/I\nTessalonicenses ([0-9]{1,2})/g, "1 Thessalonians $1")
.replace(/I\nTimóteo ([0-9]{1,2})/g, "1 Timothy $1")
.replace(/II\nCoríntios ([0-9]{1,2})/g, "2 Corinthians $1")
.replace(/II\nCrônicas ([0-9]{1,2})/g, "2 Chronicles $1")
.replace(/II\nJoão ([0-9]{1,2})/g, "2 John $1")
.replace(/II\nPedro ([0-9]{1,2})/g, "2 Peter $1")
.replace(/II\nReis ([0-9]{1,2})/g, "2 Kings $1")
.replace(/II\nSamuel ([0-9]{1,2})/g, "2 Samuel $1")
.replace(/II\nTessalonicenses ([0-9]{1,2})/g, "2 Thessalonians $1")
.replace(/II\nTimóteo ([0-9]{1,2})/g, "2 Timothy $1")
.replace(/III\nJoão ([0-9]{1,2})/g, "3 John $1")


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
 	 	//  g.src = '//api.reftagger.com/v2/RefTagger.js'; 
 	 	 g.src = 'RefTagger.js'; 
 	 	 s.parentNode.insertBefore(g, s); 
      }(document, 'script'));    
 </script>


</body>

<script>
function esword(){
var str = document.getElementsByTagName('body')[0].innerHTML
res = str
.replace(/<(.*?)data-reference="(.*?) ([0-9]{1,3})\.(.*?)"(.*?)<\/a>/g, "<font color='green'>$2_$3:$4</font>")
.replace(/([0-9]{1,2}) (.*?)(_[0-9]{1,2}:)([0-9]{1,2})/g, "$1$2$3$4")
document.getElementsByTagName('body')[0].innerHTML = res
console.log(res)  }

// function BibliaOnline(){
// var str = document.getElementsByTagName('body')[0].innerHTML
// res = str
// .replace(/<(.*?)data-reference="(.*?) ([0-9]{1,3})\.(.*?)"(.*?)<\/a>/g, "<font color='green'>$2_$3:$4</font>")
// document.getElementsByTagName('body')[0].innerHTML = res
// console.log(res)  }
</script>
