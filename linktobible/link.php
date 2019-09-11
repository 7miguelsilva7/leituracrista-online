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

<button onclick="bibliaOnline()">From E-Sword To BibliaOn</button>

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

var books = document.getElementsByTagName('body')[0].innerHTML;

var mapObj = {

'1co_':	'1Co ',
'1ch_':	'1Ch ',
'1jn_':	'1Jn ',
'1pe_':	'1Pe ',
'1ki_':	'1Ki ',
'1sa_':	'1Sa ',
'1th_':	'1Th ',
'1ti_':	'1Ti ',
'2co_':	'2Co ',
'2ch_':	'2Ch ',
'2jn_':	'2Jn ',
'2pe_':	'2Pe ',
'2ki_':	'2Ki ',
'2sa_':	'2Sa ',
'2th_':	'2Th ',
'2ti_':	'2Ti ',
'3jn_':	'3Jn ',
'hag_':	'Hag ',
'amo_':	'Amos ',
'rev_':	'Rev ',
'act_':	'Act ',
'son_':	'Song ',
'col_':	'Col ',
'dan_':	'Dan ',
'deu_':	'Deut ',
'ecc_':	'Ecc ',
'eph_':	'Eph ',
'ezr_':	'Ezr ',
'est_':	'Est ',
'exo_':	'Exo ',
'eze_':	'Eze ',
'phm_':	'Phm ',
'php_':	'Php ',
'gal_':	'Gal ',
'gen_':	'Gen ',
'hab_':	'Hab ',
'heb_':	'Heb ',
'isa_':	'Isa ',
'jer_':	'Jer ',
'job_':	'Job ',
'joh_':	'Joh ',
'joe_':	'Joe ',
'jon_':	'Jon ',
'jos_':	'Jos ',
'jud_':	'Jud ',
'jdg_':	'Jdg ',
'lam_':	'Lam ',
'lev_':	'Lev ',
'luk_':	'Luk ',
'mal_':	'Mal ',
'mar_':	'Mar ',
'mat_':	'Mat ',
'mic_':	'Mic ',
'nah_':	'Nah ',
'neh_':	'Neh ',
'num_':	'Num ',
'oba_':	'Obad ',
'hos_':	'Hos ',
'pro_':	'Pro ',
'rom_':	'Rom ',
'rth_':	'Rth ',
'psa_':	'Psa ',
'zep_':	'Zep ',
'jas_':	'Jas ',
'tit_':	'Tit ',
'zec_':	'Zec ',
};

var re = new RegExp(Object.keys(mapObj).join("|"),"gi");
res = books.replace(re, function(matched){
  return mapObj[matched.toLowerCase()];
});

document.getElementsByTagName('body')[0].innerHTML = res
</script>

<script>
function bibliaOnline(){
var str = document.getElementsByTagName('body')[0].innerHTML
res = str
.replace(/biblia.com\/bible\/esv\/1Co%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/1co/$1/")
.replace(/biblia.com\/bible\/esv\/1Ch%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/1cr/$1/")
.replace(/biblia.com\/bible\/esv\/1Jo%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/1jo/$1/")
.replace(/biblia.com\/bible\/esv\/1Pe%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/1pe/$1/")
.replace(/biblia.com\/bible\/esv\/1Ki%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/1rs/$1/")
.replace(/biblia.com\/bible\/esv\/1Sa%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/1sm/$1/")
.replace(/biblia.com\/bible\/esv\/1Th%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/1ts/$1/")
.replace(/biblia.com\/bible\/esv\/1Ti%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/1tm/$1/")
.replace(/biblia.com\/bible\/esv\/2Co%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/2co/$1/")
.replace(/biblia.com\/bible\/esv\/2Ch%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/2cr/$1/")
.replace(/biblia.com\/bible\/esv\/2Jo%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/2jo/$1/")
.replace(/biblia.com\/bible\/esv\/2Pe%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/2pe/$1/")
.replace(/biblia.com\/bible\/esv\/2Ki%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/2rs/$1/")
.replace(/biblia.com\/bible\/esv\/2Sa%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/2sm/$1/")
.replace(/biblia.com\/bible\/esv\/2Th%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/2ts/$1/")
.replace(/biblia.com\/bible\/esv\/2Ti%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/2tm/$1/")
.replace(/biblia.com\/bible\/esv\/3Jo%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/3jo/$1/")
.replace(/biblia.com\/bible\/esv\/Hag%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/ag/$1/")
.replace(/biblia.com\/bible\/esv\/Amo%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/am/$1/")
.replace(/biblia.com\/bible\/esv\/Rev%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/ap/$1/")
.replace(/biblia.com\/bible\/esv\/Act%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/atos/$1/")
.replace(/biblia.com\/bible\/esv\/Son%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/ct/$1/")
.replace(/biblia.com\/bible\/esv\/Col%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/cl/$1/")
.replace(/biblia.com\/bible\/esv\/Dan%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/dn/$1/")
.replace(/biblia.com\/bible\/esv\/Deu%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/dt/$1/")
.replace(/biblia.com\/bible\/esv\/Ecc%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/ec/$1/")
.replace(/biblia.com\/bible\/esv\/Eph%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/ef/$1/")
.replace(/biblia.com\/bible\/esv\/Ezr%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/ed/$1/")
.replace(/biblia.com\/bible\/esv\/Est%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/et/$1/")
.replace(/biblia.com\/bible\/esv\/Exo%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/ex/$1/")
.replace(/biblia.com\/bible\/esv\/Eze%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/ez/$1/")
.replace(/biblia.com\/bible\/esv\/Phm%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/fm/$1/")
.replace(/biblia.com\/bible\/esv\/Php%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/fp/$1/")
.replace(/biblia.com\/bible\/esv\/Gal%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/gl/$1/")
.replace(/biblia.com\/bible\/esv\/Gen%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/gn/$1/")
.replace(/biblia.com\/bible\/esv\/Hab%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/hc/$1/")
.replace(/biblia.com\/bible\/esv\/Heb%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/hb/$1/")
.replace(/biblia.com\/bible\/esv\/Isa%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/is/$1/")
.replace(/biblia.com\/bible\/esv\/Jer%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/jr/$1/")
.replace(/biblia.com\/bible\/esv\/Job%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/jó/$1/")
.replace(/biblia.com\/bible\/esv\/Joh%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/jo/$1/")
.replace(/biblia.com\/bible\/esv\/Joe%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/jl/$1/")
.replace(/biblia.com\/bible\/esv\/Jon%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/jn/$1/")
.replace(/biblia.com\/bible\/esv\/Jos%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/js/$1/")
.replace(/biblia.com\/bible\/esv\/Jud%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/jd/$1/")
.replace(/biblia.com\/bible\/esv\/Jdg%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/jz/$1/")
.replace(/biblia.com\/bible\/esv\/Lam%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/lm/$1/")
.replace(/biblia.com\/bible\/esv\/Lev%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/lv/$1/")
.replace(/biblia.com\/bible\/esv\/Luk%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/lc/$1/")
.replace(/biblia.com\/bible\/esv\/Mal%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/ml/$1/")
.replace(/biblia.com\/bible\/esv\/Mar%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/mc/$1/")
.replace(/biblia.com\/bible\/esv\/Mat%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/mt/$1/")
.replace(/biblia.com\/bible\/esv\/Mic%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/mq/$1/")
.replace(/biblia.com\/bible\/esv\/Nah%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/na/$1/")
.replace(/biblia.com\/bible\/esv\/Neh%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/ne/$1/")
.replace(/biblia.com\/bible\/esv\/Num%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/nm/$1/")
.replace(/biblia.com\/bible\/esv\/Oba%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/ob/$1/")
.replace(/biblia.com\/bible\/esv\/Hos%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/os/$1/")
.replace(/biblia.com\/bible\/esv\/Pro%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/pv/$1/")
.replace(/biblia.com\/bible\/esv\/Rom%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/rm/$1/")
.replace(/biblia.com\/bible\/esv\/Rut%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/rt/$1/")
.replace(/biblia.com\/bible\/esv\/Psa%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/sl/$1/")
.replace(/biblia.com\/bible\/esv\/Zep%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/sf/$1/")
.replace(/biblia.com\/bible\/esv\/Jam%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/tg/$1/")
.replace(/biblia.com\/bible\/esv\/Tit%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/tt/$1/")
.replace(/biblia.com\/bible\/esv\/Zec%20([0-9]{1,3})./g, "bibliaonline.com.br/acf/zc/$1/")
document.getElementsByTagName('body')[0].innerHTML = res

var books = document.getElementsByTagName('body')[0].innerHTML;

var mapObj = {

	'>1co ':	'>1 Co ',
'>1ch ':	'>1 Cr ',
'>1jn ':	'>1 Jo ',
'>1pe ':	'>1 Pe ',
'>1ki ':	'>1 Rs ',
'>1sa ':	'>1 Sm ',
'>1th ':	'>1 Ts ',
'>1ti ':	'>1 Tm ',
'>2co ':	'>2 Co ',
'>2ch ':	'>2 Cr ',
'>2jn ':	'>2 Jo ',
'>2pe ':	'>2 Pe ',
'>2ki ':	'>2 Rs ',
'>2sa ':	'>2 Sm ',
'>2th ':	'>2 Ts ',
'>2ti ':	'>2 Tm ',
'>3jn ':	'>3 Jo ',
'>hag ':	'>Ag' ,
'>amos ':	'>Amós ',
'>rev ':	'>Apo ',
'>act ':	'>Atos ',
'>song ':	'>Ct ',
'>ecc ':	'>Ec ',
'>eph ':	'>Ef ',
'>ezr ':	'>ed ',
'>phm ':	'>Fl ',
'>php ':	'>Fp ',
'>job ':	'>Jó ',
'>joh ':	'>Jo ',
'>jdg ':	'>Jz ',
'>lam ':	'>Lm ',
'>lev ':	'>Lv ',
'>luk ':	'>Lc ',
'>mic ':	'>Mq ',
'>nah ':	'>Na ',
'>neh ':	'>Ne ',
'>hos ':	'>Os ',
'>pro ':	'>Pv ',
'>rth ':	'>Rt ',
'>psa ':	'>Sl ',
'>zep ':	'>Sf ',
'>jas ':	'>Tg ',
'>zec ':	'>Zc ',


};

var re = new RegExp(Object.keys(mapObj).join("|"),"gi");
res = books.replace(re, function(matched){
  return mapObj[matched.toLowerCase()];
});

document.getElementsByTagName('body')[0].innerHTML = res 


 }

</script>
