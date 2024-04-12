<?php if (isset($_POST['btn'])){
    $name   = $_POST['std_name'];
    $id     = $_POST['std_id'];
    $email  = $_POST['std_email'];
    $phone  = $_POST['std_phone'];
    //$phone  = $_POST['course'];
    $batch  = $_POST['std_batch'];
}?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <table class="table shadow bg-light">
                <thead>
                <tr>
                    <th colspan="8" class="text-center">Students ID</th>
                </tr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Img</th>
                    <th scope="col">Name</th>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Course</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Batch</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php if (isset($name)){echo $name;}?></td>
                    <td><img height="80" src="https://a.storyblok.com/f/191576/1200x800/faa88c639f/round_profil_picture_before_.webp" class="img-thumbnail" alt=""></td>
                    <td><?php if (isset($id)){echo $id;}?></td>
                    <td><?php if (isset($id)){echo $email;}?></td>
                    <td></td>
                    <td><?php if (isset($id)){echo $phone;}?></td>
                    <td><?php if (isset($id)){echo $batch;}?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>