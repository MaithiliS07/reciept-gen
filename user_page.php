<?php

include "config.php";

if(isset($_POST['generatebtn'])){


    $fname=$_POST['firmname'];
    $faddress=$_POST['firmaddress'];
    $billto=$_POST['billto'];
    $baddress=$_POST['billaddress'];
    $discount=$_POST['discount'];
    $sdiscount=$_POST['subtotaldiscount'];
    $tax=$_POST['taxrate'];
    $shiphandle=$_POST['shipping'];

    $discription=$_POST['discp'];
    $quantity=$_POST['qty'];
    $unitprice=$_POST['uprice'];



    $sql = "INSERT INTO `receipt_details`(`FirmName`, `FirmAddress`, `BillTo`, `BillToAddress`, `Discount`, `SubtotalDiscount`, `TaxRate`, `Shipping`) VALUES ('$fname','$faddress','$billto','$baddress','$discount','$sdiscount','$tax','$shiphandle')";
    $sqli = "INSERT INTO `reciept_items`(`Discription`, `Quantity`, `UnitPrice`) VALUES ('$discription','$quantity','$unitprice')";
    


if(mysqli_multi_query($conn, $sql)){
       echo "New record created successfully !";
    } else {
       echo "Error: " . $sql . " " . mysqli_error($conn);
    }

if(mysqli_multi_query($conn, $sqli))
{ 
       echo "New record created successfully !";
    } else {
       echo "Error: " . $sql . " " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>forvedanshi (2)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Boostrap-Tabs.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background: var(--bs-pink);">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="color: rgba(255,255,255,0.9);font-family: Poppins, sans-serif;">Receipt Generator</a></div>
        <div><a href="logout.php"><button type="button" class="btn btn-primary me-4">LogOut</button></a></div>

    </nav>
    <div class="card" style="margin: 14px;">
        <div class="card-body" style="padding: 31px;">
            <div>
                <ul class="nav nav-pills nav-fill" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="pill" href="#tab-1">Receipt Details</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link " role="tab" data-bs-toggle="pill" href="#tab-2">Receipt Items</a></li>
                </ul>
                <div class="tab-content" style="padding: 0px;margin-top: 21px;">
                    <div class="tab-pane fade show active" role="tabpanel" id="tab-1">
                        <form action="user_page.php" method="POST">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6"><label class="col-form-label">Firm Name</label></div>
                                    <div class="col-md-6"><input class="form-control" type="text" name="firmname"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label class="col-form-label">Firm Address</label></div>
                                    <div class="col-md-6"><input class="form-control" type="text" name="firmaddress"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label class="col-form-label">Bill to</label></div>
                                    <div class="col-md-6"><input class="form-control" type="text" name="billto"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label class="col-form-label">Bill to-Address</label></div>
                                    <div class="col-md-6"><input class="form-control" type="text" name="billaddress"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label class="col-form-label">Discount</label></div>
                                    <div class="col-md-6"><input class="form-control" type="text" name="discount"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label class="col-form-label">Subtotal Discount</label></div>
                                    <div class="col-md-6"><input class="form-control" type="text" name="subtotaldiscount"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label class="col-form-label">Tax Rate</label></div>
                                    <div class="col-md-6"><input class="form-control" type="text" name="taxrate"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label class="col-form-label">Shipping &amp; Handling</label></div>
                                    <div class="col-md-6"><input class="form-control" type="text" name="shipping"></div>
                                </div>
                            </div>
                      
                    </div>
                    <div class="tab-pane fade " role="tabpanel" id="tab-2">
                        
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6"><label class="col-form-label">Discription</label></div>
                                    <div class="col-md-6"><input class="form-control" type="text" name="discp"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label class="col-form-label">Qty</label></div>
                                    <div class="col-md-6"><input class="form-control" type="text" name="qty"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label class="col-form-label">Unit price</label></div>
                                    <div class="col-md-6"><input class="form-control" type="text" name="uprice"></div>
                                </div>
                            </div>
                        <div style="margin-top: 21px;"><button class="btn btn-primary" type="submit" style="height: 36px;border-style: none;border-color: var(--bs-pink);background: var(--bs-pink);">Add Item</button></div>
                     

                    </div>
                </div>
            </div>
        </div><button class="btn btn-primary" type="submit" name="generatebtn" style="margin: 14px;border-style: none;background: var(--bs-pink);">Generate Receipt&nbsp;</button>
        </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
