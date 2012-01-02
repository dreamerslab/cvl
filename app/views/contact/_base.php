<div id="contact">
  <div id="contact-wrap">
    <h2 id="contact-title">Contact CVL</h2>
    <p id="contact-info">
      <?=$heading?>
    </p>
  </div>
  <div id="contact-form-wrap">
    <?=form_open('contact/send', array('id' => 'contact-form'))?>
      <div id="corp" class="form-row">
        <label id="corp-title">Coverline</label>
        <label id="corp-email">inquiry@coverline.com.tw</label>
      </div>
      <div class="form-row">
        <label id="contact-email" for="email">Email address*</label>
        <?=form_input(array( 'name' => 'email', 'value' => $email, 'class' => 'contact-input'))?>
        <?=form_error('email', '<label class="error">', '</label>')?>
      </div>
      <div class="form-row">
        <label id="contact-name" for="name">Your name*</label>
        <?=form_input(array( 'name' => 'name', 'value' => $name, 'class' => 'contact-input'))?>
        <?=form_error('name', '<label class="error">', '</label>')?>
      </div>
      <div class="form-row">
        <input id="send" type="image" src="<?=site_url('/img/contact/send.png')?>" />
        <?=form_textarea(array('id' => 'message', 'name' => 'message', 'value' => $message, 'cols' => 30, 'rows' => 10 ))?>
        <?=form_error('message', '<label class="error">', '</label>')?>
      </div>
    <?=form_close()?>
  </div>
</div>