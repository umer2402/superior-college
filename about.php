<?php
function collegeImage(string $file): string
{
    return 'collegeImages/' . rawurlencode($file);
}

$campusEvents = [
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.32 AM (1).jpeg',
        'tag' => 'Farewell Event',
        'title' => 'Memorable Student Gatherings',
        'text' => 'Our campus life includes meaningful events that celebrate students, teachers, and shared milestones.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.39 AM (1).jpeg',
        'tag' => 'Official Gathering',
        'title' => 'Leadership and Guidance',
        'text' => 'Faculty and management remain closely connected to the student journey and college culture.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.43 AM (1).jpeg',
        'tag' => 'Bonfire Event',
        'title' => 'Community and Celebration',
        'text' => 'Events like bonfires and stage gatherings help create a warmer and more memorable student experience.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.43 AM.jpeg',
        'tag' => 'Campus Life',
        'title' => 'Student Participation',
        'text' => 'Students stay involved not only in academics, but also in collective activities that build confidence and belonging.',
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
    <title>About Us | Superior College Bhakkar</title>
  </head>
  <body>
    <?php include "includes/navbar.php"; ?>

    <section class="page-hero" style="background: url('webImages/abcd.PNG') center/cover no-repeat;">
        <div class="container">
            <div class="page-hero-content">
                <span class="page-tag spinnaker-regular">About Superior College</span>
                <h1 class="spinnaker-regular">A Campus Dedicated to Learning, Character, and Opportunity</h1>
                <p class="lead mt-3">
                    Superior College Bhakkar aims to create an educational experience where students
                    receive quality instruction, meaningful guidance, and the confidence to move toward a brighter future.
                </p>
                <div class="button-row mt-4">
                    <a href="gallery.php" class="btn brand-button btn-lg">View Campus Gallery</a>
                    <a href="contact.php" class="btn brand-outline btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <img src="<?php echo collegeImage('WhatsApp Image 2026-05-10 at 10.01.41 AM.jpeg'); ?>" class="img-fluid content-image" alt="Prize distribution ceremony at Superior College Bhakkar">
                </div>
                <div class="col-lg-6">
                    <div class="soft-panel">
                        <h3 class="spinnaker-regular mb-3">Who We Are</h3>
                        <p>
                            Superior College Bhakkar is committed to helping students grow academically
                            and personally. Our college culture values discipline, communication, inclusive learning,
                            and the kind of support that helps students reach higher goals.
                        </p>
                        <p class="mb-0">
                            We believe education should not only prepare students for exams,
                            but also for leadership, responsibility, and long-term success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section pt-0">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="page-title spinnaker-regular">Our Mission and Vision</h2>
                <p class="page-subtitle">
                    We strive to build a learning environment that is both ambitious and supportive.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="page-card">
                        <h4 class="spinnaker-regular">Our Mission</h4>
                        <p class="mb-0">
                            To provide quality education that develops academic excellence, confidence,
                            and values in every student through focused teaching and supportive mentorship.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-card">
                        <h4 class="spinnaker-regular">Our Vision</h4>
                        <p class="mb-0">
                            To become a trusted center of learning where students are inspired to achieve
                            success, contribute positively to society, and continue growing beyond the classroom.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section pt-0">
        <div class="container">
            <div class="text-center">
                <h2 class="page-title spinnaker-regular">Campus Life and Special Events</h2>
                <p class="section-note">
                    The college environment becomes stronger when students feel part of a lively, respectful, and memorable campus culture.
                </p>
            </div>

            <div class="row g-4">
                <?php foreach ($campusEvents as $item): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="photo-card">
                        <img src="<?php echo collegeImage($item['file']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                        <div class="photo-body">
                            <span class="photo-tag"><?php echo htmlspecialchars($item['tag']); ?></span>
                            <h5 class="spinnaker-regular"><?php echo htmlspecialchars($item['title']); ?></h5>
                            <p><?php echo htmlspecialchars($item['text']); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="page-section pt-0">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="highlight-panel">
                        <h3 class="spinnaker-regular mb-3">Part of a Wider Educational Network</h3>
                        <p>
                            Superior College Bhakkar stands within a broader system of campuses that reflects
                            a shared commitment to educational quality and student progress.
                        </p>
                        <ul class="simple-list mb-0">
                            <li>Lahore Zone</li>
                            <li>Sialkot Zone</li>
                            <li>Gujranwala Zone</li>
                            <li>Bahawalpur Zone</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo collegeImage('WhatsApp Image 2026-05-10 at 10.01.42 AM (1).jpeg'); ?>" class="img-fluid content-image" alt="Award ceremony at Superior College Bhakkar">
                </div>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
