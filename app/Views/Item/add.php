<!-- MASTER PAGE -->
<?=$this->extend('Item/layout/main') ?>

<!-- LOADING THE CONTENT -->
<?=$this->section('content') ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container mt-5 mb-lg-3">
<form id="addForm" action="<?=base_url()?>item/add" method="POST">
  <div class="container">
    <div class="form-group row">
      <label for="name" class="col-4 col-form-label">Name</label> 
      <div class="col-0">
        <input id="name" name="name" value="<?=set_value('name')?>" placeholder="Enter a name" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="form-group row">
      <label for="description" class="col-4 col-form-label">Description</label> 
      <div class="col-0">
        <textarea id="description" name="description" cols="40" rows="5" class="form-control"><?=set_value('description')?></textarea>
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
          <input id="price" name="price" value="<?=set_value('price')?>" placeholder="Enter a Price" type="text" class="form-control">
        </div>
      </div>
    </div> 
  </div>

  <div class="container">
    <div class="form-group row">
      <div class="offset-0 col-0">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmAddModal">Submit</button>
        <a class="btn btn-secondary" href="<?=base_url()?>item/index" role="button">Back</a>
      </div>
    </div>
  </div>
</form>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmAddModal" tabindex="-1" aria-labelledby="confirmAddModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmAddModalLabel">Confirm Addition</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to add this item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="confirmAddButton">Add</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  document.getElementById('confirmAddButton').addEventListener('click', function() {
    document.getElementById('addForm').submit();
  });
</script>

<div class="container">
    <?php if(isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>
</div>
<?=$this->endsection('content') ?>
