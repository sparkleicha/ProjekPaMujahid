<?php

include_once('connect.php');

$sql = "SELECT * FROM scores, students WHERE scores.students_id = students.id;";
$result = $conn->query($sql);
$data =$result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RANKING XI RPL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
    <nav class="navbar bg-primary h1">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-3 text-white">Website Ranking 11 RPL</span>
                    </div>
                </nav>
        <div class="container mt-3">
            <div class="row">
                <div class="jumbotron bg-primary text-center text-white">
            </div>
            
            <div class="col-4">
                <BR>
                <div class="card">
                    <div class="card-header">
                    <h3>Input Data</h3>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input id="name" type="text" name="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="score">Score</label>
                        <input id="score" type="number" name="score" class="form-control">
                    </div>
                </form>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-8">
                <BR>
                <div class="card">
                    <div class="card-header">
                    <h3>Table Rangking</h3>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered table-stripped text-center" border="1px">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach($data as $key => $d):  ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $d['name'] ?></td>
                                <td><?= $d['score'] ?></td>
                            </tr>
                            <?php endforeach ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Score</th>
                    </tr>
                    </tfoot>
                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <footer class="bg-primary text-white text-center p-2 my-4">
      <p>Copyright ©W/PaMujahidHappyCoding
      </p>
    </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>