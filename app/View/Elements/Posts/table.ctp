<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>
  <?php foreach ($posts as $post): ?>
      <tr>
          <td><?php echo $post['Post']['id']; ?></td>
          <td>
            <?php
            echo $this->Html->link(
              $post['Post']['title'],
              array('action' => 'view', $post['Post']['id'])
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->postLink(
              'Delete',
              ['action' => 'delete', $post['Post']['id']],
              ['confirm' => 'Are you sure?']
            );
            ?>
            <?php
            echo $this->Html->link(
              'Edit', array('action' => 'edit', $post['Post']['id'])
            );
            ?>
          </td>
          <td>
            <?php echo $post['Post']['created']; ?>
          </td>
      </tr>
  <?php endforeach; ?>
</table>
