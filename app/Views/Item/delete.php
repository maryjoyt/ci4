<!-- MASTER PAGE -->
<?=$this->extend('Item/layout/main') ?>

<!-- LOADING THE CONTENT -->
<?=$this->section('content') ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container mt-4 mb-lg-3">

<form action="<?=base_url()?>item/delete/<?=$item->id?>" method="POST">
<div class="container">

  <h2>Are you sure to want to delete this data?</h2> 
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Name</label> 
    <div class="col-0">
      <input id="name" name="name" value="<?=$item->name?>" placeholder="Enter a name" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="container">
  <div class="form-group row">
    <label for="description" class="col-4 col-form-label">Description</label> 
    <div class="col-0">
      <textarea id="description" name="description" cols="40" rows="5" class="form-control">
      <?=$item->description?>
      </textarea>
    </div>
  </div>
</div>
<div class="container">
  <div class="form-group row">
    <label for="price" class="col-4 col-form-label">Price</label> 
    <div class="col-0">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">PHP</div>
        </div> 
        <input id="price" name="price" value="<?=$item->price?>" placeholder="Enter a Price" type="text" class="form-control">
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="form-group row">
    <label for="date_created" class="col-4 col-form-label">Created Date</label> 
    <div class="col-0">
      <input id="date_created" name="date_created" value="<?=$item->created_at?>" placeholder="Enter a name" type="text" class="form-control">
    </div>
  </div>
</div>
<div class="container">
  <div class="form-group row">
    
    <div class="col-0">
    <button name="submit" type="submit" class="btn btn-warning">Delete</button>
    <a class="btn btn-danger" href="<?=base_url()?>item/index" role="button">Back</a>
    </div>
  </div>
  </div>
</form>
</div>

<?=$this->endsection('content') ?>