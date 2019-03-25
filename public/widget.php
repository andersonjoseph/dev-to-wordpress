<div id="DTW_widget">
  <h4 class="widget-title"><?php echo $instance['title']; ?></h4>
  
  <div id="DTW-container">
    <div style="text-align: center;">
      <div class="lds-dual-ring"></div>
    </div>
    <!-- Posts renders here -->
  </div>

</div>

<script type="text/javascript">
  <?php echo "const n = ${instance['num_of_posts']};"?>
  <?php echo "const userID = '${instance['user_id']}';"?>
</script>
