<?php

require_once 'vendor/autoload.php';
use App\classes\Example;

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">Form</div>
                        <div class="card-body">
                            <form action="index.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Start Number:</label>
                                    <div class="col-md-9">
                                        <input type="number" name="s_num" class="form-control" value="<?php echo isset($_POST['btn']) ? $_POST['s_num'] : '';?>" required"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">End Number:</label>
                                    <div class="col-md-9">
                                        <input type="number" name="e_num" class="form-control" value="<?php echo isset($_POST['btn']) ? $_POST['e_num'] : '';?>" required"/>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Result:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control text-success font-weight-bold" readonly><?php if(isset($_POST['btn'])){
                                                $example = new Example($_POST);
                                                $example->index();
                                            }?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Submit:</label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/js/bootstrap.js"></script>

</body>
</html>