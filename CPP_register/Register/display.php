
<?php
include("include/config.php");


$select=$dbh->prepare("SELECT * FROM tbldepartment");
$select->execute();

?>
<style type="text/css">

</style>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
</head>

<link rel="stylesheet" type="text/css" href="asset/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


<form id="register_member" class="needs-validation" novalidate>
    <input type="hidden" value="1" id="add_new_member" name="add_new_member">
<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-5" style="background-color:rgba(53,96,175,1);">
        <div style="text-align: center">
            <img  class="img_1" src="image/Backdrop__eventV8_logo.jpg">
        </div>
    </div>
    <div class="col-md-3">
    </div>
</div>
<div class="row">

    <div class="col-md-3">
    </div>
    <div class="col-md-5" style="background-color: #0098db;">
        <div style="text-align: center">
            <img class="img_2" src="image/Backdrop__eventV8_text.jpg">
        </div>
        <div class="row" style="padding-top: 20px;padding: 20px;">
            <div class="col-md-2"></div>
            <div class="col-md-8">

        </div>
        <div class="row"style="padding-top: 20px;padding: 20px;" style="height: 80px;" >
            <div class="card" style="width: 62rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5"> <img src="image/Backdrop__eventV8_logo.jpg" class="img-thumbnail" width="280px" height="180px" alt="..."></div>
                        <div class="col-md-3"> <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a></div>
                        <div class="col-md-3"></div>
                    </div>


                </div>
            </div>




                <div class="col-md-8">

                </div>




        </div>
            <div class="col-md-3"></div>

        </div>
        <div class="row" style="padding-top: 20px;padding: 20px;">
            <div class="col-md-3"></div>


        <div class="col-md-3"></div>
    </div>



    </div>
    <div class="col-md-3">
    </div>
</div>
<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-5" style="background-color:rgba(53,96,175,1);">
        <div style="text-align: center;height: 200px;" class="footer">

        </div>
    </div>
    <div class="col-md-3">
    </div>
</div>
</form>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('change', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
    $(document).ready(function() {
        // $('#department').change(function (){
        //   var department=$('#department').val();
        //     $.ajax({
        //         url: "register_ajax.php",
        //         type: "post",
        //
        //         async: false,
        //         data: {
        //             'datashowmember': 1,
        //             'department': department
        //         },
        //         success: function (data) {
        //             $('#select_member').html(data);
        //         }
        //     });
        // });


    });
</script>

