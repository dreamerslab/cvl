<div id="gallery-nav">
  <div id="gallery-nav-pages">
    <div id="gallery-pager">
      <?$ori_url = site_url("/artists/{$type}")?>
      <?=pre_pager($page, $ori_url)?>
      <?=next_pager($page, $ori_url, $pages)?>
    </div>

    <?for($i = 1; $i <= $pages; $i++):?>
    <a class="gallery-nav-item <?selected($i, $page)?>" href="<?=site_url($url_prefix.$i)?>">
      <?=$i?>
    </a>
    <?endfor?>

  </div>
  <div id="gender-type">
    <a id="homme" class="<?selected('homme', $type)?>" href="<?=site_url("/artists/homme/{$page}")?>">HOMME</a>
    |
    <a id="femme" class="<?selected('femme', $type)?>" href="<?=site_url("/artists/femme/{$page}")?>">FEMME</a>
  </div>
</div>