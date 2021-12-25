

<?php if($errors):?>
<div class="alert alert-danger">
    <?php foreach($errors as $error):?>
        <div><?php echo $error ?></div>
    <?php endforeach?>
</div>
<?php endif ?>


<form action="" method="post" enctype="multipart/form-data">
    <?php if($product["image"]):?>
        <img src="/<?php echo $product["image"]?>" class="update-image">
        <?php endif; ?>

        
    
    <div class="form-group">
     <label>Product Image</label> <br>
     <input type="file" name="image">
    </div>
    <div class="form-group">
     <label style="margin-top: 20px;">Product Title</label>
     <input type="text"  name="title" class="form-control" value="<?php echo $product["title"] ?>">
    </div>
    <div class="form-group">
     <label>Product Description </label>
     <textarea class="form-control" name ="description" ><?php echo $product["description"] ?></textarea>
    </div>
    <div class="form-group">
     <label>Product Price</label>
     <input type="number" step="0.1" name="price" class="form-control" value="<?php echo $product["price"] ?>">

    </div>
    
    <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 20px;">Submit</button>
    
</form>
