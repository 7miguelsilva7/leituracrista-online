<?

$versao = $_POST['versao'];	
$livro = $_POST['livro'];
$cap = $_POST['cap'];
$ver = $_POST['ver'];
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
?><br><br>