<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Team - Search</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px; }
        .team-card { background: #fff; padding: 20px; margin-top: 20px; border-radius: 10px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
        .team-card img { border-radius: 50%; }
        .social a { margin: 0 5px; text-decoration: none; color: #0077cc; }
    </style>
</head>
<body>

    <h1>Meet Our Team</h1>

    <form method="post" action="">
        <label for="member">Search Member by Name:</label>
        <input type="text" name="member" id="member" placeholder="e.g. Jeffrey, Justin, Jaypee, Ralp">
        <button type="submit">Search</button>
    </form>

    <hr>

    <?php
    $team = [
        "jeffrey" => [
            "name" => "Jeffrey Principe",
            "role" => "Frontend Developer",
            "desc" => "Specializes in creating interactive and visually stunning websites. Passionate about responsive design and user experience.",
            "phone" => "+63 963 878 2564",
            "email" => "principejeffrey_bsit@plmun.edu.ph",
            "website" => "https://github.com/jeffreyprincipe25",
            "image" => "image/image1.jpg",
            "social" => [
                "linkedin" => "#",
                "facebook" => "#",
                "twitter" => "#"
            ]
        ],
        "justin" => [
            "name" => "Justin De lara",
            "role" => "Backend Developer",
            "desc" => "Expert in server-side technologies and database management. Loves building efficient APIs and secure systems.",
            "phone" => "+63 992 447 6162",
            "email" => "delarajustin_bsit@plmun.edu.ph",
            "website" => "https://github.com/Delarajustin/INTPROG-IT3J_Exercises.git",
            "image" => "image/image2.jpg",
            "social" => [
                "linkedin" => "#",
                "facebook" => "#",
                "twitter" => "#"
            ]
        ],
        "jaypee" => [
            "name" => "Jaypee Miranda",
            "role" => "UI/UX Designer",
            "desc" => "Creates user-friendly interfaces with eye-catching visuals. Skilled in Adobe XD, Figma, and modern web design trends.",
            "phone" => "+63 961 901 4645",
            "email" => "mirandajaypee_bsit@plmun.edu.ph",
            "website" => "https://github.com/Jaypee924",
            "image" => "image/image3.jpg",
            "social" => [
                "linkedin" => "#",
                "facebook" => "#",
                "twitter" => "#"
            ]
        ],
        "ralp" => [
            "name" => "Ralp Owen Castillo",
            "role" => "Project Manager",
            "desc" => "Manages projects from start to finish, ensuring smooth communication, teamwork, and on-time delivery. Experienced in organizing tasks, solving problems quickly, and keeping the team focused.",
            "phone" => "+63 960 511 8662",
            "email" => "castilloralphowen_bsit@plmun.edu.ph",
            "website" => "https://github.com/ralphowen1124/Integrative-Programming",
            "image" => "image/image4.jpg",
            "social" => [
                "linkedin" => "#",
                "facebook" => "#",
                "twitter" => "#"
            ]
        ]
    ];

    function showMember($m) {
        ?>
        <div class="team-card">
            <img src="<?= $m['image'] ?>" alt="<?= $m['name'] ?>" width="180" height="180">
            <h2><?= $m['name'] ?></h2>
            <p><strong>Role:</strong> <?= $m['role'] ?></p>
            <p><?= $m['desc'] ?></p>
            <p><strong>Phone:</strong> <?= $m['phone'] ?></p>
            <p><strong>Email:</strong> <a href="mailto:<?= $m['email'] ?>"><?= $m['email'] ?></a></p>
            <p><strong>Website:</strong> <a href="http://<?= $m['website'] ?>" target="_blank"><?= $m['website'] ?></a></p>
            <div class="social">
                <a href="<?= $m['social']['linkedin'] ?>">LinkedIn</a> |
                <a href="<?= $m['social']['facebook'] ?>">Facebook</a> |
                <a href="<?= $m['social']['twitter'] ?>">Twitter</a>
            </div>
        </div>
        <?php
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST['member']) && !empty($_POST['member'])) {
            $search = strtolower(trim($_POST['member']));

            if (array_key_exists($search, $team)) {
                showMember($team[$search]);
            } else {
                echo "<p>No member found with the name: <strong>$search</strong></p>";
            }
        } else {
            echo "<p>Please enter a member name to search.</p>";
        }
    } else {
        echo "<p>Please search for a member above to view details.</p>";
    }
    ?>

</body>
</html>

