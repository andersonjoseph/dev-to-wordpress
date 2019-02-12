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
  <div>
    <label for="<?php echo esc_attr( $this->get_field_id('user_id')); ?>">UserID</label>
    <input 
      type="text" 
      id="<?php echo esc_attr( $this->get_field_id('user_id')); ?>"
      name="<?php echo esc_attr($this->get_field_name('user_id')); ?>" 
      value="<?php echo esc_attr($user_id); ?>"
      placeholder="user_1234"
    />
  </div>
  <div>
    <label for="<?php echo esc_attr( $this->get_field_id('num_of_posts')); ?>">Number of posts</label>
    <input 
      type="number" 
      id="<?php echo esc_attr( $this->get_field_id('num_of_posts')); ?>"
      name="<?php echo esc_attr($this->get_field_name('num_of_posts')); ?>" 
      value="<?php echo esc_attr($num_of_posts); ?>"
    />
  </div>
</div>