<div id="gallery-nav">
  <div id="gallery-nav-pages">
  <div id="photo-switcher">
    <a id="photo-previous" href="#">Pre</a>
    <a id="photo-next" href="#">Next</a>
  </div>

    <?for($i = 1; $i <= $pages; $i++):?>
    <a class="gallery-nav-item <?selected($i, $page)?>" href="<?=site_url($url_prefix.$i)?>">
      <?=$i?>
    </a>
    <?endfor?>

  </div>
</div>