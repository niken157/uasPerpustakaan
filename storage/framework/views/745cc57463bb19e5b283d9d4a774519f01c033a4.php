<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <div class="container-fluid">
          <a class="navbar-brand" href="/buku">Library</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/aboutus">About Us</a>
              </li>
            </ul>
                <form action="/logout" method="POST">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger"><?php echo e(auth()->user()->name); ?> Logout</button>
                </form>
          </div>
        </div>
</nav>
<!-- End of Topbar -->
<?php /**PATH C:\xampp\htdocs\uasweb\resources\views/navbar.blade.php ENDPATH**/ ?>