<div id="gallery-nav">
  <div id="gallery-nav-pages">
    <div id="photo-switcher">
      <?=pre_photo($page, $nav_selected, $type)?>
      <?=next_photo($page, $nav_selected, $type, $pages)?>
      <!--<a id="photo-next" href="#">Next</a>-->
    </div>

    <?for($i = 1; $i <= $pages; $i++):?>
    <a class="gallery-nav-item <?selected($i, $page)?>" href="<?=site_url($url_prefix.$i)?>">
      <?=$i?>
    </a>
    <?endfor?>

  </div>
  <div id="gender-type">
    <a id="homme" class="<?selected('homme', $type)?>" href="<?=site_url("/photographer/{$nav_selected}/homme/{$page}")?>">
      HOMME
    </a>
    |
    <a id="femme" class="<?selected('femme', $type)?>" href="<?=site_url("/photographer/{$nav_selected}/femme/{$page}")?>">
      FEMME
    </a>
  </div>
</div>