<? 
$ch = curl_init ('http://tripadvisor.ru/Hotel_Reviews-d3772172');
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
 
curl_exec ($ch);
 
if (!curl_errno ($ch))
$url = curl_getinfo ($ch, CURLINFO_EFFECTIVE_URL);
 
curl_close ($ch);
 
echo $url.'<hr>';

print_r(parse_url($url));
