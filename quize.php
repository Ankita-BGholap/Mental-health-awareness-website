<?php
$host = "localhost";
$user = "root";
$pass = '';
$database = 'healthissue';
$conn = mysqli_connect($host, $user, $pass, $database);
if (!$conn) {
    echo "error";
} 
else {
    $sql = "SELECT * FROM questions_table";
    $ans_sql = "SELECT * FROM answer_table";
    $result = mysqli_query($conn, $sql);
    $ans_result=mysqli_query($conn, $ans_sql);
    $count = mysqli_num_rows($result);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css1.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
    <title>Mental Health Test</title>
    <link rel="icon" href="icon.png" type="image/x-icon">
</head>

<body>
    <?php include 'qheader.php'?>
    <main class="container my-5">
        <div class="bg-light p-5 rounded">
            <h1>Mental Health Test </h1>
            <p class="lead">Talking about your feelings isn’t a sign of weakness. It’s part of taking charge of your wellbeing and doing what you can to stay healthy.</p>
            <a class="btn btn-lg btn-primary" href="#main" role="button" style="
        background-color: #a5c422;
        border-color: #a5c422;
    ">Start Quiz &raquo;</a>
        </div>
    </main>
    <div class="container" id='main'>
        <div class="bg-light p-5 rounded my-1">
            <form action="answer_validate.php" method="post">
                <?php
                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($result)) {


                    

                ?>
                <div class="my-4 ">
                    <ul class="list-group ">
                        <li class="list-group-item active fs-3 ">
                            <?php echo   $rows['que_id'] .". ". $rows['que']; ?>*
                        </li>
                        <?php
                            $ans_sql = "SELECT * FROM answer_table WHERE que_id=". $rows['que_id'];
                            $ans_result=mysqli_query($conn, $ans_sql);
                            
                    while ($rows1 = mysqli_fetch_assoc($ans_result)) {
                    ?>
                        <li class="list-group-item ">
                            <div class="form-check fs-5">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="<?php echo  $rows['que_id']; ?>"
                                        value="<?php echo  $rows1['ans_points']; ?>" required>
                                    <?php echo $rows1['ans'];?>
                                </label>
                            </div>
                        </li>

                        <?php 
                    }
                            ?>

                    </ul>
                </div>

                <?php
            
                }
                }
            }
            ?>

                <div class="d-grid gap-2">
                    <input class="btn btn-primary fs-2" type="submit">
                </div>
            </form>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

</body>

</html>