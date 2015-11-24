<?
    $text = "Vivamus #tristique non elit eu iaculis.";
    $text = preg_replace('/#(\w+)/', ' <a href="tag/$1">$1</a>', $text);
	echo $text;
	
	<?
   $tweet = "this has a #hashtag a  #badhash-tag and a #goodhash_tag #hashtag";
   function getHashtags($string) {  
    $hashtags= FALSE;  
    preg_match_all("/(#\w+)/u", $string, $matches);  
    if ($matches) {
        $hashtagsArray = array_count_values($matches[0]);
        $hashtags = array_keys($hashtagsArray);
    }
    return $hashtags;
}

echo var_dump(getHashtags($tweet));
?>
?>