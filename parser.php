<?php
error_reporting(E_ALL ^ E_NOTICE);

function getResults($_cat="",$_last=false) {

$_url = 'http://88.196.48.87:8888/solr/select?q=*%3A*&rows=20&wt=json';


	$string = file_get_contents($_url);
	$json_a=json_decode($string,true);
	$cnt = count($json_a['response']['docs']);
	$o = "";
	
	
	if($_cat) {
		$result = array();
		
		$o .= "<ul>";
		for($i=0;$i<$cnt;$i++) {
			
			if(in_array($_cat , $json_a['response']['docs'][$i]['category'])) {
			
				$o .= "<li><h4><a href='".$json_a['response']['docs'][$i]['link']."' target='_blank'>".substr($json_a['response']['docs'][$i]['title'],0, 25)."....</a></h4>";
				$o .= "<div>".substr($json_a['response']['docs'][$i]['description'],0, 60)."...</div><p>";
				$o .= "<span style='text-transform:uppercase;'>".date("d. F",strtotime($json_a['response']['docs'][$i]['date']))." | <a href='".$json_a['response']['docs'][$i]['link']."#comments' target='_blank'>".($json_a['response']['docs'][$i]['slash-comments']?$json_a['response']['docs'][$i]['slash-comments']:"0")." COMMENTS</a></span></li>";
			}
		$o .= "</ul>";	
		
		}
				
	}
	
	if($_last) {
		for($i=0;$i<4;$i++) {
		
				$o .= "<h4><a href='".$json_a['response']['docs'][$i]['link']."' target='_blank'>".$json_a['response']['docs'][$i]['title']."</a></h4>";
				$o .= "<p>".substr($json_a['response']['docs'][$i]['description'],0, 50)."...</p>";
				$o .= "<span style='text-transform:uppercase;'>".date("d. F",strtotime($json_a['response']['docs'][$i]['date']))." | <a href='".$json_a['response']['docs'][$i]['link']."#comments' target='_blank'>".($json_a['response']['docs'][$i]['slash-comments']?$json_a['response']['docs'][$i]['slash-comments']:"0")." COMMENTS</a> | Posted by ".$json_a['response']['docs'][$i]['author']." | ".join(",",$json_a['response']['docs'][$i]['category'])."</span><p>";
				
				
				
		}
	
	}
	return $o;
}



?>










