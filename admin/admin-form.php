<div id="<?php echo 'form_' . $this->get_field_id('title'); ?>">
  <div>
  <label for="<?php echo esc_attr( $this->get_field_id('title')); ?>">Title</label>
  <input 
    type="text" 
    id="<?php echo esc_attr( $this->get_field_id('title')); ?>"
    name="<?php echo esc_attr($this->get_field_name('title')); ?>" 
    value="<?php echo esc_attr($title); ?>"
  />
  </div>
  <br>
  <div id="username-container">
    <label for="<?php echo esc_attr( $this->get_field_id('username')); ?>">Username</label>
    <input 
      type="text" 
      id="<?php echo esc_attr( $this->get_field_id('username')); ?>"
      name="<?php echo esc_attr($this->get_field_name('username')); ?>" 
      value="<?php echo esc_attr($username); ?>"
      placeholder="samsepi0l"
      style="width: 40%;"
    />
    <button id="<?php echo 'button_' . $this->get_field_id('title'); ?>" class="button button-primary" data-formId = "<?php echo 'form_' . $this->get_field_id('title'); ?>">Get ID</button>
  </div>
  <br>
  <div id="userid-container">
    <label for="<?php echo esc_attr( $this->get_field_id('user_id')); ?>">User ID</label>
    <input 
      type="text" 
      id="<?php echo esc_attr( $this->get_field_id('user_id')); ?>"
      name="<?php echo esc_attr($this->get_field_name('user_id')); ?>" 
      value="<?php echo esc_attr($user_id); ?>"
      readonly=""
    />
  </div>
  <br>
  <div>
    <label for="<?php echo esc_attr( $this->get_field_id('num_of_posts')); ?>">Number of posts</label>
    <input 
      type="number" 
      id="<?php echo esc_attr( $this->get_field_id('num_of_posts')); ?>"
      name="<?php echo esc_attr($this->get_field_name('num_of_posts')); ?>" 
      value="<?php echo esc_attr($num_of_posts); ?>"
    />
  </div>
  <br>
</div>
<script type="text/javascript">
  window.DTW_getIDButton = document.getElementById('<?php echo 'button_' . $this->get_field_id('title'); ?>')
  DTW_setButtonEvent(DTW_getIDButton);
</script>
