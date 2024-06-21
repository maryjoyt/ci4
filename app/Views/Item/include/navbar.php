<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url()?>item/index">Inventory System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>

      <div class="navbar-nav mb-lg-0">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" aria-expanded="false">
            <a class="nav-link" href="#" id="logoutButton">Logout</a>
          </a>
      </div>
    </div>
  </div>
</nav>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Confirm Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="<?=base_url()?>admin/logout" class="btn btn-primary">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript to Trigger Modal -->
<script>
  document.getElementById('logoutButton').addEventListener('click', function() {
    var myModal = new bootstrap.Modal(document.getElementById('logoutModal'));
    myModal.show();
  });
</script>