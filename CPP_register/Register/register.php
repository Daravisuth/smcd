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
            <img class="img-fluid" src="image/Backdrop__eventV8_text.jpg">
        </div>
        <div class="row" style="padding-top: 20px;padding: 20px;">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <select   class="form-control  " name="department" id="department" data-size="5" style="height: 50px !important;font-family: 'Khmer OS Battambang';" >
                    <option value=""  style="font-family: 'Khmer OS Battambang';" >ជ្រើសរើសនាយកដ្ឋាន ឬ អង្គភាព</option>
                   <?php while ($row=$select->fetch(PDO::FETCH_ASSOC)){?>
                       <option style="font-family: 'Khmer OS Battambang';" value="<?php echo $row['id'];?>"><?php echo $row['short_dept_kh']?></option>
               <?php    }?>
                </select></div>
        </div>
        <div class="row"style="padding-top: 20px;padding: 20px;" style="height: 50px;" >
            <div class="col-md-2"></div>



                <div class="col-md-8">
                    <input type="text" class="form-control" id="name_member" name="name_member" style="height: 50px;font-family: 'Khmer OS Battambang';" aria-label="Default select example" placeholder="បញ្ចូលឈ្មោះ"  required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>




        </div>
        <div class="row" style="padding-top: 20px;padding: 20px;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <input  class="form-control " id="phone_number" name="phone_number" type="number"  style="height: 50px;font-family: 'Khmer OS Battambang';" aria-label="Default select example" placeholder="លេខទូរស័ព្ទ" >
            </div>
        </div>
        <div class="row" style="padding-top: 20px;padding: 20px;">
            <div class="col-md-3"></div>
            <div class="col-md-8">
                <input type="file" id="file_upload" name="file_upload"  placeholder="បញ្ចូលរូបភាព" style="font-family: 'Khmer OS Battambang';" class="btn btn-success" autocomplete="off"  >
            </div>
        </div>
        <div class="row" style="padding-top: 20px;padding: 20px;">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <button type="submit" class="btn btn-primary"   style="width: 310px;height: 80px;font-family: 'Khmer OS Battambang';">បញ្ជូន</button>
            </div>

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
        $('#name_member').change(function (){
          var department=$('#department').val();
            $.ajax({
                url: "register_ajax.php",
                type: "post",

                async: false,
                data: {
                    'datashowmember': 1,
                    'department': department
                },
                success: function (data) {
                    $('#select_member').html(data);
                }
            });
        });
        $("#register_member").on('submit',(function(e) {
            e.preventDefault();
            $.ajax({
                url: "register_ajax.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data)
                {

                },
                error: function(e) {
                }
            });
        }));

    });
</script>

