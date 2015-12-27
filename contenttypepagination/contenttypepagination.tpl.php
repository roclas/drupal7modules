<?php //print_r($variables['contenttypepagination']['items']) ?>
<?php //print_r(get_defined_vars())?>

<?php 
	$r=$variables['contenttypepagination']; 
	$npages=round($r['count']/$r["limit"]);
	$currentpage=1+round($r['start']/$r['limit']);
	$islastpage=($currentpage>=$npages);
	$isfirstpage=($currentpage<2);
	$isonlypage=($isfirstpage && $islastpage);
?>
<?php foreach($r['items'] as $e){ ?>
	<a href="/node/<?=$e->nid?>"><?=$e->title?></a><br />
<?php } ?><br />
showing <?=count($r['items'])?> items from <?=$r['count']?><br/>
<?php if(!$isonlypage){?>
<?php if(!$isfirstpage){?>
<a href="/contenttypepagination/<?=$r['type']?>/0/<?=$r['limit']?>">
<?php }?>
&lt;&lt; 
<?php if(!$isfirstpage){?>
</a>
<a href="/contenttypepagination/<?=$r['type']?>/<?=$r['limit']*($currentpage-2)?>/<?=$r['limit']?>">
<?php }?>
	previous
<?php if(!$isfirstpage){?>
</a> 
<?php }?>
<?php for($i=1;$i<=$npages;$i++){
?><a href="/contenttypepagination/<?=$r['type']?>/<?=$r['limit']*($i-1)?>/<?=$r['limit']?>">
<?php 
	if($i==$currentpage)echo " <strong>$i</strong> ";
	else echo " $i ";
?></a>
<?php }?>
<?php if(!$islastpage){?>
<a href="/contenttypepagination/<?=$r['type']?>/<?=$r['limit']*$currentpage?>/<?=$r['limit']?>">
<?php }?>
	next
<?php if(!$islastpage){?>
</a> 
<a href="/contenttypepagination/<?=$r['type']?>/<?=$r['limit']*($i-2)?>/<?=$r['limit']?>">
<?php }?>
&gt;&gt; 
<?php if(!$islastpage){?>
</a>
<?php }?>
<?php }?>
