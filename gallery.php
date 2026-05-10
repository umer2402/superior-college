<?php
function collegeImage(string $file): string
{
    return 'collegeImages/' . rawurlencode($file);
}

$achievementPosters = [
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.31 AM.jpeg',
        'tag' => 'Result Highlight',
        'title' => 'Board Position Promotion',
        'text' => 'A result poster reflecting academic performance and student achievement.',
        'poster' => true,
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.36 AM (1).jpeg',
        'tag' => 'District Positions',
        'title' => 'Top 3 Positions',
        'text' => 'A visual highlight of top-performing students and district-level merit.',
        'poster' => true,
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.37 AM.jpeg',
        'tag' => 'Sports Promotion',
        'title' => 'Sports Gala Poster',
        'text' => 'A promotional poster for the Superior Sports Gala and student participation.',
        'poster' => true,
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.42 AM.jpeg',
        'tag' => 'Student Development',
        'title' => 'Learn to Earn',
        'text' => 'A campaign-style poster encouraging skill development and practical growth.',
        'poster' => true,
    ],
];

$prizeDistribution = [
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.29 AM.jpeg',
        'tag' => 'Prize Distribution',
        'title' => 'Recognition for Excellence',
        'text' => 'Students are publicly recognized to celebrate their effort and encourage future achievement.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.30 AM.jpeg',
        'tag' => 'Award Moment',
        'title' => 'Student Appreciation',
        'text' => 'A proud academic recognition moment shared on campus.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.32 AM.jpeg',
        'tag' => 'Award Ceremony',
        'title' => 'Mentorship and Encouragement',
        'text' => 'Recognition also becomes a moment of guidance and motivation for students.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.38 AM (1).jpeg',
        'tag' => 'Certificate',
        'title' => 'Academic Certificate Award',
        'text' => 'Certificates reflect effort, consistency, and visible academic progress.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.39 AM.jpeg',
        'tag' => 'Stage Recognition',
        'title' => 'Public Acknowledgment',
        'text' => 'Recognition on stage helps students feel seen and motivated.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.41 AM.jpeg',
        'tag' => 'Ceremony',
        'title' => 'Prize Distribution Ceremony',
        'text' => 'A ceremony that reflects the importance of celebrating academic achievement.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.42 AM (1).jpeg',
        'tag' => 'Award Event',
        'title' => 'Special Recognition',
        'text' => 'Students and guests gather around formal award distribution moments.',
    ],
];

$sportsHighlights = [
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.31 AM (1).jpeg',
        'tag' => 'Sports Gala',
        'title' => 'Opening of Sports Activities',
        'text' => 'The sports program starts with energy, ceremony, and team spirit.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.36 AM.jpeg',
        'tag' => 'House Activity',
        'title' => 'Red House Representation',
        'text' => 'House-based participation adds excitement, teamwork, and identity to sports events.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.38 AM (2).jpeg',
        'tag' => 'Team Spirit',
        'title' => 'Student Sports Team',
        'text' => 'Sports encourage collaboration, discipline, and healthy competition.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.38 AM.jpeg',
        'tag' => 'Sports Action',
        'title' => 'Activity on the Ground',
        'text' => 'On-ground participation builds confidence and keeps campus life active.',
    ],
];

$campusEvents = [
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.32 AM (1).jpeg',
        'tag' => 'Farewell',
        'title' => 'Farewell Gathering',
        'text' => 'A formal farewell event that reflects the emotional side of student life.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.39 AM (1).jpeg',
        'tag' => 'Official Visit',
        'title' => 'Management and Guests',
        'text' => 'Leadership presence adds strength and guidance to major campus events.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.40 AM.jpeg',
        'tag' => 'Academic Gathering',
        'title' => 'Large Student Gathering',
        'text' => 'A wide student gathering showing scale, participation, and academic engagement.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.43 AM (1).jpeg',
        'tag' => 'Bonfire Event',
        'title' => 'Bonfire with Faculty',
        'text' => 'Social and celebratory events build a stronger sense of campus community.',
    ],
    [
        'file' => 'WhatsApp Image 2026-05-10 at 10.01.43 AM.jpeg',
        'tag' => 'Bonfire Participation',
        'title' => 'Students at Bonfire',
        'text' => 'Student gatherings help build memories beyond classroom learning.',
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
    <title>Gallery | Superior College Bhakkar</title>
  </head>
  <body>
    <?php include "includes/navbar.php"; ?>

    <section class="page-hero" style="background: url('collegeImages/WhatsApp%20Image%202026-05-10%20at%2010.01.43%20AM%20%281%29.jpeg') center/cover no-repeat;">
        <div class="container">
            <div class="page-hero-content">
                <span class="page-tag spinnaker-regular">College Gallery</span>
                <h1 class="spinnaker-regular">Moments from Academics, Sports, Awards, and Campus Events</h1>
                <p class="lead mt-3">
                    This gallery brings together the image collection you added and organizes it into the story of Superior College Bhakkar.
                </p>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="text-center">
                <h2 class="page-title spinnaker-regular">Achievement Posters and Promotions</h2>
                <p class="section-note">
                    These posters highlight academic positions, student performance, sports promotions, and development-focused campaigns.
                </p>
            </div>
            <div class="row g-4">
                <?php foreach ($achievementPosters as $item): ?>
                <div class="col-lg-3 col-md-6">
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

    <section class="page-section pt-0">
        <div class="container">
            <div class="text-center">
                <h2 class="page-title spinnaker-regular">Prize Distribution and Academic Recognition</h2>
                <p class="section-note">
                    A major part of the college culture is to celebrate academic performance and encourage student confidence through recognition.
                </p>
            </div>
            <div class="row g-4">
                <?php foreach ($prizeDistribution as $item): ?>
                <div class="col-lg-4 col-md-6">
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
                <h2 class="page-title spinnaker-regular">Sports and Student Participation</h2>
                <p class="section-note">
                    Sports activities, team spirit, and house competitions contribute strongly to a lively student environment.
                </p>
            </div>
            <div class="row g-4">
                <?php foreach ($sportsHighlights as $item): ?>
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
                <h2 class="page-title spinnaker-regular">Campus Events and Student Life</h2>
                <p class="section-note">
                    Farewell programs, large student gatherings, and bonfire events add warmth and memorable experiences to campus life.
                </p>
            </div>
            <div class="row g-4">
                <?php foreach ($campusEvents as $item): ?>
                <div class="col-lg-4 col-md-6">
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

    <?php include "includes/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
