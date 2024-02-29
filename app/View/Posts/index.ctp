<!-- File: /app/View/Posts/index.ctp -->

<script>
  $(document).ready(function () {
    setInterval(function () {
      $('#posts-table').load('/posts/table_ajax');
    }, 2500);
  });
</script>

<h1>Facebook ng matatanda</h1>
<p><?php echo $this->Html->link('Add Posts', array('action' => 'add')); ?></p>
<div id="posts-table">
    <?php echo $this->element('Posts/table', array('posts' => $posts)); ?>
</div>