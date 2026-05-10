<?php
function collegeImage(string $file): string
{
    return 'collegeImages/' . rawurlencode($file);
}

$academicAwards = [
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.29 AM.jpeg',
        'tag' => 'Prize Distribution',
        'title' => 'Student Recognition',
        'text' => 'Academic effort is celebrated publicly so students stay motivated and proud of their progress.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.30 AM.jpeg',
        'tag' => 'Achievement Moment',
        'title' => 'Individual Appreciation',
        'text' => 'We believe recognition matters because it encourages consistency, discipline, and healthy competition.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.38 AM (1).jpeg',
        'tag' => 'Certificate Award',
        'title' => 'Performance with Confidence',
        'text' => 'Students are acknowledged for strong performance through certificates and public appreciation.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.39 AM.jpeg',
        'tag' => 'Stage Recognition',
        'title' => 'Achievement on Stage',
        'text' => 'Our academic culture values both learning outcomes and the confidence students gain through recognition.',
    ],
];

$academicPosters = [
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.31 AM.jpeg',
        'tag' => 'Result Highlight',
        'title' => 'Outstanding Exam Result',
        'text' => 'Our result highlights reflect a strong academic environment and focused preparation.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.36 AM (1).jpeg',
        'tag' => 'District Positions',
        'title' => 'Merit and Excellence',
        'text' => 'Top positions and outstanding merit are part of the academic story we continue to build.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.42 AM.jpeg',
        'tag' => 'Student Development',
        'title' => 'Learn to Earn',
        'text' => 'Beyond academics, we also encourage practical growth, ambition, and future-facing thinking.',
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
    <title>Academics | Superior College Bhakkar</title>
  </head>
  <body>
    <?php include "includes/navbar.php"; ?>

    <section class="page-hero" style="background: url('webImages/homeheaderimg.jpg') center/cover no-repeat;">
        <div class="container">
            <div class="page-hero-content">
                <span class="page-tag spinnaker-regular">Academic Excellence</span>
                <h1 class="spinnaker-regular">Academics That Build Knowledge, Discipline, and Confidence</h1>
                <p class="lead mt-3">
                    At Superior College Bhakkar, our academic environment is designed to help students
                    achieve strong results while developing the habits and confidence needed for future success.
                </p>
                <div class="button-row mt-4">
                    <a href="contact.php" class="btn brand-button btn-lg">Talk to Admissions</a>
                    <a href="gallery.php" class="btn brand-outline btn-lg">View Gallery</a>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="page-title spinnaker-regular">Our Academic Approach</h2>
                <p class="page-subtitle">
                    We focus on quality teaching, interactive learning, and continuous guidance
                    so every student can progress with clarity and purpose.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="page-card text-center">
                        <div class="icon-badge">
                            <span class="fa fa-book"></span>
                        </div>
                        <h4 class="spinnaker-regular">Strong Foundations</h4>
                        <p>
                            Our academic system emphasizes conceptual understanding, disciplined study habits,
                            and the ability to perform with confidence in examinations.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="page-card text-center">
                        <div class="icon-badge">
                            <span class="fa fa-users"></span>
                        </div>
                        <h4 class="spinnaker-regular">Interactive Classrooms</h4>
                        <p>
                            We encourage participation, healthy discussion, and teacher-student engagement
                            to make learning more active and meaningful.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="page-card text-center">
                        <div class="icon-badge">
                            <span class="fa fa-line-chart"></span>
                        </div>
                        <h4 class="spinnaker-regular">Progress Monitoring</h4>
                        <p>
                            Regular assessments, feedback, and academic support help students stay on track
                            and improve steadily throughout the year.
                        </p>
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
                        <h3 class="spinnaker-regular mb-3">Learning Areas We Prioritize</h3>
                        <ul class="simple-list">
                            <li>Intermediate-level academic preparation with focused classroom instruction.</li>
                            <li>Science, commerce, and general education pathways built around student goals.</li>
                            <li>Communication skills that prepare students for presentations, interviews, and university life.</li>
                            <li>Co-curricular exposure that supports all-round development alongside academics.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo collegeImage('WhatsApp Image 2026-05-10 at 10.01.40 AM.jpeg'); ?>" class="img-fluid content-image" alt="Students taking part in an academic gathering">
                </div>
            </div>
        </div>
    </section>

    <section class="page-section pt-0">
        <div class="container">
            <div class="text-center">
                <h2 class="page-title spinnaker-regular">Academic Highlights and Recognition</h2>
                <p class="section-note">
                    These moments reflect the way Superior College Bhakkar values academic performance,
                    student confidence, and visible recognition for hard work.
                </p>
            </div>

            <div class="row g-4">
                <?php foreach ($academicAwards as $item): ?>
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
            <div class="text-center">
                <h2 class="page-title spinnaker-regular">Merit Boards and Growth Campaigns</h2>
                <p class="section-note">
                    Posters and result boards help communicate achievement clearly and build a culture where students aim higher.
                </p>
            </div>

            <div class="row g-4">
                <?php foreach ($academicPosters as $item): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="photo-card poster-card">
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

    <section class="page-section">
        <div class="container">
            <div class="highlight-panel">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3 class="spinnaker-regular mb-3">Why Students Learn Better Here</h3>
                        <p class="mb-0">
                            We combine academic discipline with support, communication, and student motivation.
                            This creates a learning environment where students are guided not just to pass exams,
                            but to grow in confidence and ambition.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="gallery.php" class="btn btn-light btn-lg">See Full Academic Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
