<?php
function collegeImage(string $file): string
{
    return 'collegeImages/' . rawurlencode($file);
}

$previewImages = [
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.31 AM (1).jpeg',
        'title' => 'Sports Gala Opening',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.38 AM.jpeg',
        'title' => 'Sports Activity',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.42 AM.jpeg',
        'title' => 'Student Development Campaign',
    ],
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spinnaker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="assets/internal-pages.css">
    <link rel="icon" href="webImages/logo.png" sizes="32x32" />
    <title>Contact Us | Superior College Bhakkar</title>
  </head>
  <body>
    <?php include "includes/navbar.php"; ?>

    <section class="page-hero" style="background: url('webImages/sports.jpg') center/cover no-repeat;">
        <div class="container">
            <div class="page-hero-content">
                <span class="page-tag spinnaker-regular">Contact Superior College</span>
                <h1 class="spinnaker-regular">We Are Here to Help You Take the Next Step</h1>
                <p class="lead mt-3">
                    For admissions guidance, general inquiries, or campus information,
                    feel free to connect with Superior College Bhakkar.
                </p>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="page-title spinnaker-regular">Get in Touch</h2>
                <p class="page-subtitle">
                    We welcome students and families who want to learn more about our academics,
                    admissions process, and campus environment.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box text-center">
                        <div class="icon-badge">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <h5 class="spinnaker-regular">Email</h5>
                        <p class="mb-0"><a href="mailto:info@thepearlgscmi.com">info@thepearlgscmi.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-box text-center">
                        <div class="icon-badge">
                            <span class="fa fa-phone"></span>
                        </div>
                        <h5 class="spinnaker-regular">Phone</h5>
                        <p class="mb-0">+92-XXX-XXXXXXX</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="contact-box text-center">
                        <div class="icon-badge">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <h5 class="spinnaker-regular">Location</h5>
                        <p class="mb-0">Superior College Bhakkar, Pakistan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section pt-0">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="soft-panel">
                        <h3 class="spinnaker-regular mb-3">Admission Support</h3>
                        <p>
                            Our team is available to guide students and parents through the admission process,
                            subject selection, and general academic information.
                        </p>
                        <ul class="simple-list mb-0">
                            <li>General information about the college and campus life.</li>
                            <li>Guidance regarding academic opportunities and student support.</li>
                            <li>Information about co-curricular activities and student development.</li>
                            <li>Help with planning a campus visit or speaking with the administration.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="highlight-panel">
                        <h3 class="spinnaker-regular mb-3">Office Hours</h3>
                        <p class="mb-2">Monday to Saturday</p>
                        <p class="mb-2">9:00 AM to 4:00 PM</p>
                        <p class="mb-4">
                            We recommend reaching out during working hours for quicker assistance.
                        </p>
                        <div class="button-row">
                            <a href="mailto:info@thepearlgscmi.com" class="btn btn-light btn-lg">Send Email</a>
                            <a href="gallery.php" class="btn btn-outline-light btn-lg">View Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section pt-0">
        <div class="container">
            <div class="gallery-banner">
                <div class="row align-items-center mb-4">
                    <div class="col-lg-8">
                        <h3 class="spinnaker-regular mb-2">A Quick Look at Campus Life</h3>
                        <p class="mb-0">
                            From sports activities to student development and special events, our campus environment stays active and student-focused.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="gallery.php" class="btn brand-button btn-lg">Open Full Gallery</a>
                    </div>
                </div>

                <div class="row g-4">
                    <?php foreach ($previewImages as $item): ?>
                    <div class="col-md-4">
                        <div class="photo-card">
                            <img src="<?php echo collegeImage($item['file']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                            <div class="photo-body">
                                <h5 class="spinnaker-regular"><?php echo htmlspecialchars($item['title']); ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
