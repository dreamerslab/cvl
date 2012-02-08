<?
if(!isset($nav_selected)) {
  $nav_selected = '';
}
?>
<nav>
  <ul>
    <li id="fashion">
      <h2 id="fashion-title">Fashion</h2>
      <h3>
        <a class="<?selected('fashion', $nav_selected)?>" id="fashion-subtitle" href="<?=site_url('fashion/1')?>">
          Boutique, Advertising
        </a>
      </h3>
    </li>
    <li id="photographer">
      <h2 id="photographer-title">Photographer</h2>
      <ul id="photographer-subtitle">
        <li>
          <h3>
            <a class="<?selected('loki-tsai', $nav_selected)?>" id="loki-tsai" href="<?=site_url('photographer/loki-tsai/homme/1')?>">
              Loki Tsai
            </a>
          </h3>
        </li>
        <li>
          <h3>
            <a class="<?selected('minshi-jiang', $nav_selected)?>" id="minshi-jiang" href="<?=site_url('photographer/minshi-jiang/homme/1')?>">
              Minshi Jiang
            </a>
          </h3>
        </li>
        <li>
          <h3>
            <a class="<?selected('jack-wang', $nav_selected)?>" id="jack-wang" href="<?=site_url('photographer/jack-wang/homme/1')?>">
              Jack Wang
            </a>
          </h3>
        </li>
      </ul>
    </li>
    <li id="casting">
      <h2 id="casting-title">Casting</h2>
      <h3>
        <a class="<?selected('casting', $nav_selected)?>" id="casting-subtitle" href="<?=site_url('casting')?>">
          Runway, Commercial model
        </a>
      </h3>
    </li>
    <li id="artists">
      <h2 id="artists-title">Artist</h2>
      <h3>
        <a class="<?selected('artists', $nav_selected)?>" id="artists-subtitle" href="<?=site_url('artists/homme/1')?>">
          The Stylist, beauty
        </a>
      </h3>
    </li>
    <li id="film">
      <h2 id="film-title">Film</h2>
      <h3>
        <a class="<?selected('film', $nav_selected)?>" id="film-subtitle" href="<?=site_url('film')?>">
          Art Video, Behind the Scenes
        </a>
      </h3>
    </li>
  </ul>
</nav>