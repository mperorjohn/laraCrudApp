<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogV9 | Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @include('layouts.header')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 justify-content-center">
                <form action="" method="post">
                    <h4 class="text-center">Result Page With Laravel</h4>
                    <!-- Post Title and description -->
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="Blog">Student Name<span class="text-danger fw-bold">*</span></label><br>
                            <input type="text" class="form-control" id="blogTitle" name="post_title" placeholder="Post Title" required>
                        </div>
                        <div class="col-md-6">
                            <label for="Blog">Level<span class="text-danger fw-bold">*</span></label><br>
                            <input type="text" class="form-control" id="blogTitle" name="post_description" placeholder="Post Description" required>
                        </div>
                    </div>
                    <!-- Post title and description -->
                    <div class="col-md-6">
                            <label for="Blog">Score<span class="text-danger fw-bold">*</span></label><br>
                            <input type="text" class="form-control" id="blogTitle" name="post_description" placeholder="Post Description" required>
                        </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary form-control">Upload Result</button>
                    </div>

                </form>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- SCRIPT -->
</body>
</html>
