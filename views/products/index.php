<h1>Products list</h1>

<p>
    <a href="products/create"> <button class="btn btn-success btn-lg">Create Product</button></a>
</p>
    <form>
<div class="input-group mb-3">
  <input type="text" class="form-control" value="<?php echo $search?>" placeholder="Search for products" name="search">
  <button class="btn btn-outline-secondary" type="submit" >Search</button>
</div>
</form>


<table class="table">
  <thead>
   <tbody> 
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
   </tbody> 
  </thead>


    <?php
    foreach($products as $i => $product) { ?>
        <tr>
      <th scope="row"><?php echo $i + 1?></th>
      <td>
        <img src="<?php echo $product["image"]    ?>" class="thumb-image">
      </td>
      <td><?php  echo $product["title"]    ?></td>
      <td><?php  echo $product["price"]    ?></td>
      <td><?php  echo $product["create_date"]   ?></td>
      <td> 
      <a href="/products/update? id= <?php echo $product["id"]?>"  class="btn btn-outline-primary" style="height: 40px; width: 80px; ">Edit</a>            
      <form  method="post" action="/products/delete">
      <input type="hidden" name="id" value="<?php echo $product["id"]   ?>">
      <button type="submit" class="btn btn-outline-danger" style="height: 40px; width: 80px; margin-top: 5px;">Delete</button>
      </form>  
    </td>
    </tr>

    <?php } ?>

    
  </tbody>
</table>
    
