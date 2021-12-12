<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Final (copy) (copy)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/inventoryeditstyles.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/background-page.css">
<link rel="stylesheet" href="fontawesome-free-5.15.4-web\fontawesome-free-5.15.4-web\css\all.css">
</head>

<body style="background: var(--bs-dark);">
    <?php
        $Product=$_GET['product'];
        $ProductNumber= $_GET['product'];
        $itemstock_doc = new DOMDocument();
        $itemstock_doc->preserveWhiteSpace = false;
        $itemstock_doc->load("itemstock.xml");

        $items = $itemstock_doc->documentElement;
            
            foreach (($itemstock_doc->childNodes)[0]->childNodes as $node)
            {
                if ($ProductNumber == ($node->GetElementsByTagname("ProductNumber"))[0]->nodeValue)
                {
                    
                    $ProductName= ($node->GetElementsByTagname("ProductName"))[0]->nodeValue;
                    $ProductBrand= ($node->GetElementsByTagname("ProductBrand"))[0]->nodeValue;
                    $ProductCategory= ($node->GetElementsByTagname("ProductCategory"))[0]->nodeValue;
                    $ProductQuantityPerUnit= ($node->GetElementsByTagname("ProductQuantityPerUnit"))[0]->nodeValue;
                    $ProductUnitPrice = ($node->GetElementsByTagname("ProductUnitPrice"))[0]->nodeValue;
                    $ProductAvailableStock= ($node->GetElementsByTagname("ProductAvailableStock"))[0]->nodeValue;
                    $ProductMaximumStock= ($node->GetElementsByTagname("ProductMaximumStock"))[0]->nodeValue;
                    $ProductDescription = ($node->GetElementsByTagname("ProductDescription"))[0]->nodeValue;
                }
                
            }

    ?>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="color: var(--bs-white);background: rgb(0,0,0);">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">THE FRESH MARKET</a><a class="navbar-brand" href="#" style="color: var(--bs-success);">Backstore</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="color: rgb(255,255,255);"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon">V</span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="P7.html" style="color: rgb(255,255,255);">Inventory</a></li>
                    <li class="nav-item"><a class="nav-link" href="P9.html" style="color: rgb(255,255,255);">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="P11.html" style="color: rgb(255,255,255);">Orders</a></li>
                </ul><span class="navbar-text actions"> </span>
            </div>
        </div>
    </nav>
    <form action="editProduct.php?product=<?php echo $ProductNumber; ?>" method="post" class="needs-validation">
        <div style="height: 150px;margin: 18px;">
            <div style="margin: 0px;height: 100px;color: var(--bs-dark);border-radius: 4px;">
                <h1 style="text-align: center;color: var(--bs-white);">Create/Edit Item</h1>
                <div class="btn-toolbar" style="/*position: absolute;*//*left: 50%;*//*-ms-transform: translateX(-50%);*/transform: translateX(42%);">
                    <div class="btn-group" role="group"><input type=submit class="btn btn-primary" role="button" style="margin: 2px;background: var(--bs-success);border-color: var(--bs-success);font-weight: bold;" name="add" value="SAVE">SAVE</input><a class="btn btn-primary" role="button" style="margin: 2px;background: var(--bs-red);border-color: var(--bs-red);font-weight: bold;" href="P7.html">CANCEL</a></div>
                </div>
            </div>
        </div>
        <div style="height: 400;background: rgba(0,0,0,0.1);margin: 10px;display: block;">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card mb-3" style="border-color: rgb(0,0,0);background: rgb(0,0,0);">
                            <div class="card-body text-center shadow" style="height: 389px;background: #000000;border-color: rgb(0,0,0);"><img class="rounded-circle mb-3 mt-4" src="assets/img/gabi-miranda-dxb_HSjoQ40-unsplash%20(1).jpg" width="160" height="160" style="width: 100%;height: 70%;">
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                            </div>
                        </div>
                        <div class="card shadow mb-4" style="background: rgb(0,0,0);">
                            <div class="card-header py-3" style="background: rgb(0,0,0);">
                                <h6 class="text-primary fw-bold m-0">Trackinng</h6>
                            </div>
                            <div class="card-body" style="background: var(--bs-gray-dark);color: var(--bs-white);border-color: #222222;">
                                <h4 class="small fw-bold">Stock<span class="float-end">20%</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="visually-hidden">20%</span></div>
                                </div>
                                <h4 class="small fw-bold">Profile completeness<span class="float-end">40%</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="visually-hidden">40%</span></div>
                                </div>
                                <h4 class="small fw-bold">Description capacity<span class="float-end">60%</span></h4>
                                <div class="progress progress-sm mb-3">
                                    <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="visually-hidden">60%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card textwhite bg-primary text-white shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card textwhite bg-success text-white shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col" style="color: var(--bs-light);border-color: #222222;">
                                <div class="card shadow mb-3" style="border-color: rgb(0,0,0);background: var(--bs-gray-dark);">
                                    <div class="card-header py-3" style="background: black;border-color: rgb(0,0,0);">
                                        <p class="text-primary m-0 fw-bold" style="color: var(--bs-white);">Product Information</p>
                                    </div>
                                    <div class="card-body" style="background: var(--bs-gray-dark);color: var(--bs-white);border-color: var(--bs-gray-dark);">
                                        
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="productname"><strong>Product Name</strong></label><input class="form-control" type="text" id="username-1" value="<?php echo $ProductName; ?>" name="name" style="background: rgb(0,0,0);border-color: rgb(0,0,0);border-top-color: rgb(33,;border-right-color: 37,;border-bottom-color: 41);border-left-color: 37,;"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="productbrand"><strong>Product Brand</strong></label><input class="form-control" type="text" id="email-1" value="<?php echo $ProductBrand; ?>" name="brand" style="border-color: rgb(0,0,0);background: rgb(0,0,0);"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="productnumber"><strong>Product Number</strong></label><input class="form-control" type="text" id="first_name-1" value="<?php echo $ProductNumber; ?>" name="pn" style="border-color: rgb(0,0,0);background: rgb(0,0,0);"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="productquantityperunit"><strong>Quantity Per Product</strong></label><input class="form-control" type="text" id="last_name-1" value="<?php echo $ProductQuantityPerUnit; ?>" name="quant_per_product" style="border-color: rgb(0,0,0);background: rgb(0,0,0);"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="productcategory"><strong>Product Category</strong></label><select class="form-select" name="product_category" value="<?php echo $ProductCategory; ?>" style="background: rgb(0,0,0);border-color: rgb(0,0,0);">
                                                                <option value="Dairy">Dairy</option>
                                                                <option value="Fruits">Fruits</option>
                                                                <option value="Meat">Meat</option>
                                                                <option value="Seafood products">Seafood products</option>
                                                                <option value="Vegetables">Vegetables</option>
                                                        </select></div>
                                                </div>
                                                <div class="col"></div>
                                            </div>
                                            <div class="mb-3"></div>
                                        
                                    </div>
                                </div>
                                <div class="card shadow" style="border-color: var(--bs-gray-dark);background: rgb(0,0,0);">
                                    <div class="card-header py-3" style="background: rgb(0,0,0);border-color: rgb(0,0,0);">
                                        <p class="text-primary m-0 fw-bold" style="color: var(--bs-white);">Contact Settings</p>
                                    </div>
                                    <div class="card-body" style="background: var(--bs-gray-dark);">
                                        
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="productunitprice" for="city"><strong>Unit Price</strong></label><input class="form-control" type="text" id="city-1" value="<?php echo $ProductUnitPrice; ?>" name="uprice" style="background: rgb(0,0,0);border-color: rgb(0,0,0);"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="producttotalprice" for="country"><strong>Total Price</strong></label><input class="form-control" type="text" id="country-1" placeholder="CAD" name="price" style="background: rgb(0,0,0);border-color: rgb(0,0,0);"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="productavailablestock" for="city"><strong>Available Stock</strong></label><input class="form-control" type="text" id="city-2" value="<?php echo $ProductAvailableStock; ?>" name="productavailablestock" style="background: rgb(0,0,0);border-color: rgb(0,0,0);"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="productmaximumstock" for="city"><strong>Maximum Stock</strong></label><input class="form-control" type="text" id="pmaxstoc-1" value="<?php echo $ProductMaximumStock; ?>" name="maxstock" style="background: rgb(0,0,0);border-color: rgb(0,0,0);"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-5" style="border-color: rgb(0,0,0);background: rgb(0,0,0);">
                    <div class="card-header py-3" style="background: rgb(0,0,0);border-color: rgb(0,0,0);">
                        <p class="text-primary m-0 fw-bold">Product Details</p>
                    </div>
                    <div class="card-body" style="background: var(--bs-gray-dark);color: rgb(255,255,255);border-color: rgb(0,0,0);">
                        <div class="row">
                            <div class="col-md-6">
                                <form>
                                    <div class="mb-3"><label class="form-label" for="productdescription"><strong>Product Description</strong><br></label><textarea class="form-control" id="signature-1" rows="4" name="productdescription" style="background: rgb(0,0,0);border-color: rgb(0,0,0);" value="<?php echo $ProductDescription; ?>"></textarea></div>
                                    <div class="mb-3"></div>
                                    <div class="mb-3"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
