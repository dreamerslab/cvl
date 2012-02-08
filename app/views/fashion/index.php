<? $prefix = $fashion[$page];?>

<div id="gallery">
  <h2 id="gallery-title"><?=$title.' '.$type?></h2>
  <p>Add something about fashion here</p>
  <img id="first-gallery-img" src="<?=site_url($img_prefix.$prefix[0]['url'])?>" alt="<?=$prefix[0]['desc']?>">
  <img src="<?=site_url($img_prefix.$prefix[1]['url'])?>" alt="<?=$prefix[1]['desc']?>">
  <img id="last-gallery-img" src="<?=site_url($img_prefix.$prefix[2]['url'])?>" alt="<?=$prefix[2]['desc']?>">
  <?$this->view->partial('fashion/_nav')?>
</div>