<!-- MASTER PAGE -->
<?=$this->extend('Item/layout/main') ?>

<!-- LOADING THE CONTENT -->
<?=$this->section('content') ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">

<div class="container mt-5 mb-lg-3">

    <h1><?php if (session ()->get('isAdminLoggedIn')):?>
                Welcome <?=session()->get('name')?>
            <?php endif; ?>
    </h1>
</div>
<div class="container mb-lg-3">
    <a class="btn btn-primary" href="<?=base_url()?>item/add" role="button">Add New Item</a>
</div>

    <div class="container">
        <form action="<?= base_url() ?>item/index" method="get" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="searchButton" name="query" value="<?= esc($query) ?>">
                <button class="btn btn-outline-secondary" type="submit" id="searchButton">Search</button>
            </div>
        </form>
    </div>

<div class="container">
    <table class="table table-primary table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($items as $item) : ?>
                <tr>
                    <td><?=$item->id?></td>
                    <td><?=$item->name?></td>
                    <td><?=$item->description?></td>
                    <td><?=$item->price?></td>
                    <td>
                    <a class="btn btn-primary" href="<?=base_url()?>item/view/<?=$item->id?>" role="button">View</a>
                    <a class="btn btn-warning" href="<?=base_url()?>item/edit/<?=$item->id?>" role="button">Edit</a>
                    <a class="btn btn-danger" href="<?=base_url()?>item/delete/<?=$item->id?>" role="button">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    
    </table>
</div>
</div>

<?=$this->endsection('content') ?>
