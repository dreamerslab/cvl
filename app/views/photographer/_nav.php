<div id="photographer-nav">
  <div id="photographer-nav-pages">
    
    <?for($i = 1; $i <= $pages; $i++):?>
    <a class="photographer-nav-item <?selected($i, $page)?>" href="<?=site_url($url_prefix.$i)?>">
      <?=$i?>
    </a>
    <?endfor?>
    
  </div>
  <div id="portfolio-type">
    <a id="homme" class="<?selected('homme', $type)?>" href="<?portfolio_type($nav_selected, 'homme', $page)?>">HOMME</a> 
    |
    <a id="femme" class="<?selected('femme', $type)?>" href="<?portfolio_type($nav_selected, 'femme', $page)?>">FEMME</a>
  </div>
</div>