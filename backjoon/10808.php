<?php
$S="aweadgewaweaweiutrhniweugfnaiouwenfaak";
$r=[];
for($i=0,$l=strlen($S);$i<$l;$i++){
	if( !isset($r[$S[$i]]) ){
		$r[$S[$i]] = 1;
	}else{
		$r[$S[$i]] = $r[$S[$i]] + 1;
	}
}

for($k=0;$k<26;$k++){
	$b[]=isset($r[chr($k+97)])?$r[chr($k+97)]:0;
}
echo implode(" ",$b);