<div>
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
  </div>
  <br>
  <div>
    <label for="<?php echo esc_attr( $this->get_field_id('num_of_posts')); ?>">Number of posts</label>
    <input 
      type="number" 
      id="<?php echo esc_attr( $this->get_field_id('num_of_posts')); ?>"
      name="<?php echo esc_attr($this->get_field_name('num_of_posts')); ?>" 
      value="<?php echo esc_attr($num_of_posts); ?>"
      max = 30
      min = 1
    />
  </div>
  <br>
</div>
