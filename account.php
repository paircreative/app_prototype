<?php require_once("header.php"); ?>
<main class="flex-shrink-0">
    <div class="container-fluid" style="padding: 85px;">           
            <nav class="navbar navbar-expand-lg navbar-light bg-light m-3 rounded shadow-sm">
                    <div class="collapse navbar-collapse p-3" id="navbarNav">
                    <ul class="navbar-nav submenu">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Settings</a>
                        </li>
                    </ul>
                    </div>
            </nav>          
            <div class="row div-space"></div>
            <div class="bg p-2 m-3 rounded">
                        <div class="row">
                              <div class="col-sm-4">
                                    <h4 class="border-bottom">Account Settings</h4> <br />    
                                    <form class="form-custom">
                                          <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="" placeholder="" />
                                          </div>
                                          <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" id="" placeholder="" />
                                          </div>
                                          <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" id="" placeholder="" />
                                          </div>
                                          <div class="form-group form-custom-bt">
                                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Save Account Settings</button>
                                          </div>    
                                    </form><br />
                              </div>
                        </div><!-- end row 2 -->
            </div> <!-- end rounded div -->

    </div>
</main>
<?php require_once("footer.php"); ?>