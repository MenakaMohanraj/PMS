<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/0f4e2bc10d.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">

    <!-- Include Summernote CSS and JS from CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-lite.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin-left: 250px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 0;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .form-group-stud {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            width: calc(50% - 10px);
            padding: 0 5px;
        }
        .full-width {
            width: 100%;
        }
        label {
            margin-bottom: 5px;
            color: #555;
            text-align: left;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        input[type="file"],
        textarea,
        select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            .form-group-stud {
                width: 100%;
            }
            .full-width {
                width: 100%;
            }
        }
        button {
            padding: 5px;
            border-radius: 7px;
            color: #fff;
        }
        .btn{
            width: 100%;
            background-color: #594f8d;
            font-size: medium;
            cursor: pointer;
        }
        .main-content {
            margin-top: 100px;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <img src="assets/img/girlprofile.png" alt="" width="100px"/>
        <h2 class="profile-name">Vaishali</h2>
        <h2 class="profile-roll">21CS053</h2>
        <ul>
            <li><a href="stud_dash.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="stud_profiles.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="stud_projects.php"><i class="fas fa-address-card"></i>Projects</a></li>
            <li><a href="stud_mentors.php"><i class="fas fa-project-diagram"></i>Mentors</a></li>
            <li><a href="stud_submission.php"><i class="fas fa-blog"></i>Submission</a></li>
            <li><a href="create_teams.php"><i class="fas fa-address-book"></i>Teams</a></li>
        </ul>
    </div>

    <div class="main_header">
        <div class="header">
            <h1>SUBMISSION PAGE</h1>
            <div class="header_icons">
                <div class="search">
                    <input type="text" placeholder="Search..." />
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>
        <br>
        <hr>
    </div>
</div>
<section class="main-content">
    <div class="container">
        <form id="submissionForm" action="stud_submit.php" method="POST" enctype="multipart/form-data" onsubmit="submitForm(event)">
            <div class="form-group-stud">
                <label for="title">Project Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group-stud">
                <label for="team">Team Name:</label>
                <input type="text" id="team" name="team" required>
            </div>
            <div class="form-group-stud">
                <label for="status">Status</label>
                <select name="status" id="status" class="custom-select custom-select-sm">
                    <option value="" disabled selected>Select Status</option>    
                    <option value="0">Pending</option>
                    <option value="3">On-Hold</option>
                    <option value="5">Done</option>
                </select>
            </div>
            <div class="form-group-stud">
                <label for="leader">Project Leader:</label>
                <input type="text" id="leader" name="leader" required>
            </div>
            <div class="form-group-stud">
                <label for="members">Project Members:</label>
                <input type="text" id="members" name="members" required>
            </div>
            <div class="form-group-stud">
                <label for="mentor">Project Mentor:</label>
                <input type="text" id="mentor" name="mentor" required>
            </div>
            <div class="form-group-stud">
                <label for="mentor_id">Mentor ID:</label>
                <input type="text" id="mentor_id" name="mentor_id" required placeholder="Enter mentor's email or ID">
            </div>
            <div class="form-group-stud">
                <label for="ppt">Upload:</label>
                <input type="file" id="ppt" name="ppt" accept=".ppt, .pptx, .jpg, .jpeg, .png, .mp4">
            </div>

            <!-- Summernote Textarea for Project Abstract -->
            <div class="form-group-stud full-width">
                <label for="abstract">Description:</label>
                <textarea id="abstract" name="abstract" required></textarea>
            </div>

            <button class="btn"  type="submit" id="submit-btn">Submit</button>

        </form>
    </div>
</section>

<script>
    // Initialize Summernote on document ready
    $(document).ready(function() {
        $('#abstract').summernote({
            height: 400,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });

    // AJAX form submission
    function submitForm(event) {
        event.preventDefault(); // Prevent the form from submitting the normal way

        // Create a new FormData object from the form
        var formData = new FormData(document.getElementById("submissionForm"));

        // Send the form data via AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "stud_submit.php", true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Show success alert
                alert("Submission successful!");
                document.getElementById("submissionForm").reset();
                $('#abstract').summernote('reset');

            } else {
                // Show error alert
                alert("There was an error with your submission.");
            }
        };
        xhr.send(formData);
    }
</script>

</body>
</html>