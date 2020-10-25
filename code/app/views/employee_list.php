<?php include('navigation.php') ?>
<p class="h2">Details of Store</p>
	<div class="col-md-8 mx-auto">
	<!-- <div class="table-responsive"> -->
    <table class="table">
        <tr>
            <th>Item Code</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        
        <?php foreach($item_data as $item){ ?>
          <tr>
              <td>
                  <?php echo "$item->item_id"; ?>
              </td>
              <td>
                  <?php echo "$item->name"; ?>
              </td>
              <td>
                  <?php echo "$item->quantity"; ?>
              </td>
              <td>
                  <?php echo "$item->price"; ?>
              </td>
              <td>
                  <a href="view_item?item_id=<?php echo $item->item_id ?>" name="update" class="btn btn-info">Update</a>
              </td>
              <td>
                  <a href="delete_item?item_id=<?php echo $item->item_id ?>" name="delete" class="btn btn-danger">Delete</a>
              </td>
          </tr>
      <?php } ?>
    </table>
</div>
<!-- </div> -->
</body>
</html>