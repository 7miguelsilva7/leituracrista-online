<?
function file_get_contents_curl($url)
	{
		$ch = curl_init();
	
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	
		$data = curl_exec($ch);
		curl_close($ch);
	
		return $data;
	}

$html = file_get_contents('https://www.bibliaonline.com.br/acf/zc/1/18-20');
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