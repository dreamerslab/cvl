<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <?$this->view->metas()?>
  <?$this->view->title()?>
  <?$this->view->asset('css')?>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <div id="view-port">
    <div id="wrap">
      <header>
        <h1><a href="<?=site_url()?>" id="logo">Coverline Production Agency</a></h1>
      </header>
      <?$this->view->partial('common/_nav')?>
      <div id="content">
        <?=$yield?>
      </div>
      <footer>
        <p id="address">1F., NO.97-1, LANE 11, GUANGFU N. RD.,SONGSHAN DIST., TAIPEI CITY 10560, TAIWAN R.O.C TEL + 886 2 2747 7658</p>
        <p id="copyright">Coverline Production Agency</p>
        <?=contact($contact_url, $from, $contact_text)?>
      </footer>
    </div>
  </div>
</body>
</html>