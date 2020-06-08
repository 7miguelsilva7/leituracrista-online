<?

$versao = $_POST['versao'];	
$livro = $_POST['livro'];
$cap = $_POST['cap'];
$ver = $_POST['ver'];

// Evaluates as true because $var is set
if ($ver > 999) {
	
$html = file_get_contents('https://www.bibliaonline.com.br/'.$versao.'/'.$livro.'/'.$cap.'/'.$ver);
$dom = new DOMDocument();
// $dom->loadHTML($html);
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$div = $xpath->query('//article[@class="jss1"]');
$div = $div->item(0);

$html = $dom->saveXML($div);
//echo $html;
preg_match_all('~<p class="jss161">(.*?)</p>~is', $html, $matches );
//print_r( $matches);
foreach($matches[0] as $vers){
	echo $vers;
}
?>
<p align="right">
<!-- <span style="color:blue">Biblia Online</span> -->
<?php echo '<a target="_blank" href="https://www.bibliaonline.com.br/'.$versao.'/'.$livro.'/'.$cap.'/'.$ver.'">'.$livro.' '.$cap.':'.$ver.'</a>'?>
</p>
<br><br>

<?php
}else{

	$html = file_get_contents('https://www.bibliaonline.com.br/'.$versao.'/'.$livro.'/'.$cap.'/'.$ver);
	$dom = new DOMDocument();
	// $dom->loadHTML($html);
	@$dom->loadHTML($html);
	$xpath = new DOMXPath($dom);
	$div = $xpath->query('//article[@class="jss1"]');
	$div = $div->item(0);
	
	$html = $dom->saveXML($div);
	//echo $html;
	preg_match_all('~<p class="jss161">(.*?)</p>~is', $html, $matches );
	//print_r( $matches);
	foreach($matches[0] as $vers){
		echo $vers;
	}
	?>
	<div align="right" style="width:150px;left:20px" >
	<!-- <span style="color:blue">Biblia Online</span> -->
	<!-- <?php echo '<a target="_blank" href="https://www.bibliaonline.com.br/'.$versao.'/'.$livro.'/'.$cap.'">'.$livro.' '.$cap.'</a>'?> -->
	<?php echo '<a target="_blank" href="https://www.bibliaonline.com.br/'.$versao.'/'.$livro.'/'.$cap.'"><span style="color:blue">Ver mais</span>'.'</a>'?>
	</div>
	<br><br>
	
<?php }	