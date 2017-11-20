<h3>File index tidak ditemukan!</h3>
<h4>Pilih file statis html.</h4>
<?php 
foreach ($directory as $dir): 
$linkfile = base_url().$mysite.'/'.$dir;
$linkfile = str_replace('.html', '', $linkfile);
?>
<a href="<?= $linkfile;?>"><?= $dir; ?></a><br/>
<?php endforeach; ?>