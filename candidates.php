<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add candidates</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>

<body>

    <?php include("nav.php"); ?>

    <div class="container" style="padding-top:150px;">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4" style="border:2px solid gray;padding:50px;">

                <div class="page-header">
                    <h2 class="specialHead">Add Candidates</h2>
                </div>
                <form action="candidates1.php" method="POST">
                    <div class="form-group">
                        <label for="">Name</label><br>
                        <input type="text" name="name" required placeholder="Enter Name" class="form-control"><br>

                        <label for="">Address</label><br>
                        <input type="text" name="address" required placeholder="Enter Address" class="form-control"><br>

                        <label for="">Phone Number</label><br>
                        <input type="text" name="phone" required placeholder="Enter Phone no." class="form-control"><br>

                        <label for="">Branch</label><br>
                        <input type="text" name="branch" required class="form-control" placeholder="Enter Branch"><br>

                        <label for="">Applying for: </label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="apply" value="gen_sec" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                General Secretary
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="apply" value="sports_sec">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Sports Secretary
                            </label>
                        </div>

                        <!-- <label for="">Image</label><br>
                        <input type="file" name="" id=""> -->


                        <button type="submit" name = "save_data" class="btn btn-block span btn-primary "><span class="glyphicon glyphicon-user"></span> Add Candidate</button>

                        <label id="error"></label>
                    </div>

                </form>
                <br>

            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>

</html>