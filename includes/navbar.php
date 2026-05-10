<?php $currentPage = $currentPage ?? ''; ?>
<nav class="navbar navbar-dark navbar-expand-lg site-navbar sticky-top">
  <div class="container">
    <a class="navbar-brand d-lg-none" href="index.php">
      <img src="webImages/logo.png" alt="Superior College Bhakkar logo" class="site-logo">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-lg-auto align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link <?php echo $currentPage === 'home' ? 'active' : ''; ?>" <?php echo $currentPage === 'home' ? 'aria-current="page"' : ''; ?> href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $currentPage === 'academic' ? 'active' : ''; ?>" <?php echo $currentPage === 'academic' ? 'aria-current="page"' : ''; ?> href="academic.php">Academics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $currentPage === 'about' ? 'active' : ''; ?>" <?php echo $currentPage === 'about' ? 'aria-current="page"' : ''; ?> href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $currentPage === 'contact' ? 'active' : ''; ?>" <?php echo $currentPage === 'contact' ? 'aria-current="page"' : ''; ?> href="contact.php">Contact</a>
        </li>
      </ul>

      <a class="navbar-brand d-none d-lg-block mx-lg-4" href="index.php">
        <img src="webImages/logo.png" alt="Superior College Bhakkar logo" class="site-logo">
      </a>

      <div class="d-flex flex-column flex-lg-row gap-3 align-items-lg-center ms-lg-auto pt-3 pt-lg-0">
        <a class="btn btn-brand-outline btn-sm px-4" href="contact.php#admission">Admission Form</a>
      </div>
    </div>
  </div>
</nav>
