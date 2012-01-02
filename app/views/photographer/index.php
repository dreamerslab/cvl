<? $prefix = $photographer['portfolio'][$type][$page];?>

<div id="gallery">
  <h2 id="gallery-title"><?=$photographer['name']?></h2>
  <p><?=$photographer['desc']?></p>
  <a id="<?=$photographer['id'].$type?>" class="gallery-desc" href="<?=$photographer['url']?>">
    <?=$photographer['name']?>
  </a>
  <img id="first-gallery-img" src="<?=site_url($img_prefix.$prefix[0]['url'])?>" alt="<?=$prefix[0]['desc']?>">
  <img src="<?=site_url($img_prefix.$prefix[1]['url'])?>" alt="<?=$prefix[1]['desc']?>">
  <img id="last-gallery-img" src="<?=site_url($img_prefix.$prefix[2]['url'])?>" alt="<?=$prefix[2]['desc']?>">
  <?$this->view->partial('photographer/_nav')?>
</div>