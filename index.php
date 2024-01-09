<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sector</title>
        <link href="vendor/bootstrap-4.6.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="valid2.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class=" text-center mt-5 ">
                <h3>Sector Registration Form</h3>
            </div>

            <table>
            <div class = "container">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">

                            <form id="contact-form" role="form" method="POST" action="action.php" name="f1" onsubmit="validate()">
                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row was-validated">
                                                <label class="mr-5">Code</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="code" onkeyup="codevalidation()" required="">
                                                    <label name="codeError" id="codeError"></label> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row was-validated">
                                                <label class="mr-lg-1">Description</label>
                                                <div class="col-sm-8">
                                                    <input type="description" class="form-control" name="des" onkeyup="desvalidation()" required="">
                                                    <label name="desError" id="desError"></label> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-8">
                                                <button name="add" class="btn btn-primary">Add</button>
                                                <a href="" type="button" class="btn btn-primary ">Reset</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- comment -->
        </div>
        <?php
        // put your code here
        ?>
        <script src="vendor/bootstrap-4.6.2-dist/jquery.slim.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </body>
</html>
