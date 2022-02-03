<?php

$total = 0;
foreach ($_POST as $key => $value) {
    $total += $value;
}

// echo $total;

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="icon.png" type="image/x-icon">
    <title>Test Result</title>
</head>

<body  >
    <?php include 'qheader.php'; ?>
    <?php
    if ($total >= 10 && $total <= 16) {
    echo '<div class="" tabindex="-1" role="dialog" id="modalSheet">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-6 shadow" style="background-color:#ebeced">
                    <div class="modal-header border-bottom-0" >
                        <h1 class="modal-title">Disorder free</h1>
                        <div class="">
                        Your Points : '.$total.'
                        </div>
                    </div>
                    <div class="modal-body py-0">
                        <p class="fs-6">You don’t seem to be suffering from any symptoms, and overall, you are balanced and happy. Remember that mental health issues affect a lot of people, so keep an eye on your friends and family to make sure They’re well and happy.</p>
                    </div>
                    <div class="modal-footer flex-column border-top-0">
                    <a class="btn btn-primary w-50 mx-0 mb-2 btn-l fs-5" href="index.php" role="button">Ok</a>
                      

                    </div>
                </div>
            </div>
        </div>';
    
    }
    elseif ($total >= 17 && $total <= 24) {
        echo '<div class="" tabindex="-1" role="dialog" id="modalSheet">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-6 shadow" style="background-color:#ebeced">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title">Anxiety</h1>
                        <div class="">
                        Your Points : '.$total.'
                        </div>
                    </div>
                    <div class="modal-body py-0">
                        <p>You are serious worrier, and you fear that a panic attack could strike At any time, this holds you back from living your life to the full. Confiding in those around you and talking about your worries can help, and meditation and breathing exercises may calm your racing mind.</p>
                    </div>
                    <div class="modal-footer flex-column border-top-0">
                    <a class="btn btn-primary w-50 mx-0 mb-2 btn-l fs-5" href="index.php" role="button">Ok</a>

                    </div>
                </div>
            </div>
        </div>';
    }
    elseif ($total >= 25 && $total <= 32) {
        echo '<div class="" tabindex="-1" role="dialog" id="modalSheet">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-6 shadow" style="background-color:#ebeced">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title">Antisocial</h1>
                        <div class="">
                        Your Points : '.$total.'
                        </div>
                    </div>
                    <div class="modal-body py-0">
                        <p>You prefer to be on your own and you struggle to develop relationships with others. you lack empathy and you don’t exhibit any emotions. Getting to the root of this problem will help you to understand it and tackle it, so speak up.</p>
                    </div>
                    <div class="modal-footer flex-column border-top-0">
                    <a class="btn btn-primary w-50 mx-0 mb-2 btn-l fs-5" href="index.php" role="button">Ok</a>

                    </div>
                </div>
            </div>
        </div>';
    }
    elseif ($total >= 33 && $total <= 40) {
        echo '<div class="" tabindex="-1" role="dialog" id="modalSheet">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-6 shadow" style="background-color:#ebeced">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title">Depression</h1>
                        <div class="">
                        Your Points : '.$total.'
                        </div>
                    </div>
                    <div class="modal-body py-0">
                        <p>You are burdened by feelings of hopelessness and helplessness, and you aren’t truly engaged in life. You deserve to be happy and healthy ,and talking to a doctor could go a long way towards getting you to a more content place.</p>
                    </div>
                    <div class="modal-footer flex-column border-top-0">
                    <a class="btn btn-primary w-50 mx-0 mb-2 btn-l fs-5" href="index.php" role="button">Ok</a>

                    </div>
                </div>
            </div>
        </div>';
    }
    else {
        //     echo "Age is greater than 20";
    }
    ?>


    


</body>

</html>