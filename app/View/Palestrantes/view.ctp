<b><?php echo ($palestrante['Palestrante']['nome']);?></b>
<br/>
<?php $site = $palestrante['Palestrante']['site']; ?><br/>

<a href="http://<?php echo $site ?>"><?php echo $site; ?></a><br/>
<br/>
<h1><?php echo ($palestrante['Palestrante']['descricao']); ?></h1> 

<!--dentro da view tem: $palestrante ['Palestrante']['nome']-->