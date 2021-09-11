<?php require_once("header.php"); ?>
<main class="flex-shrink-0">
  <div class="container-fluid" style="padding: 85px;">    
                <nav class="navbar navbar-expand-lg navbar-light bg-light m-3 rounded shadow-sm">
                      <div class="collapse navbar-collapse p-3" id="navbarNav">
                        <ul class="navbar-nav submenu">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="index.php">My Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="build.php">Build A Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="report.php">Report</a>
                            </li>
                        </ul>
                      </div>
                  </nav>    

                  <div class="bg-light p-5 m-3 rounded">
                              <div class="row">
                                    <div class="col-sm-6">
                                          <h2><a href="#" class="atag">Portfolio 1</a></h2><br />
                                          <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
                                          <a class="btn btn-sm btn-success" href="report.php" role="button">Report »</a>
                                          <a class="btn btn-sm btn-dark" href="manage.php" role="button">Manage »</a>
                                          <a class="btn btn-sm btn-dark" href="#" role="button">Rebalance »</a>
                                    </div>   
                                    <div class="col-sm-2">
                                            <div class="card">
                                                  <div class="card-body">
                                                      <p class="card-text"><b>Sectors</b></p>     
                                                  </div>
                                                  <ul class="list-group list-group-flush">
                                                    <li class="list-group-item fw-light">40% Technology</li>
                                                    <li class="list-group-item fw-light">20% Health Care</li>
                                                    <li class="list-group-item fw-light">10% Consumer</li>
                                                    <li class="list-group-item fw-light">10% Financial</li>
                                                    <li class="list-group-item fw-light">10% Industrial</li>
                                                  </ul>
                                            </div>
                                    </div>
                                
                                    <div class="col-sm-2">
                                          <div class="card">
                                              <div class="card-body">
                                                <p class="card-text"><b>Overall Performance</b></p>
                                                <p class="btn btn-success">14.1% <i class="bi bi-graph-up"></i></p>
                                                <p class="card-text"><b>Current Value</b></p>
                                                <p class="btn btn-success">20,500 USD</h5>
                                              </div>
                                          </div>
                                    </div>

                                    <div class="col-sm-2">
                                          <div class="card">
                                              <div class="card-body">
                                                <p class="card-text"><b>Tradables</b></p>
                                                <p class="btn btn-success">3 Stocks</i></p>
                                                <a class="btn btn-sm btn-dark" href="#" role="button">Rebalance Portfolio</a>
                                              </div>
                                          </div>
                                    </div>
                            </div>
                  </div>
      </div>
  </main>
  <?php require_once("footer.php"); ?>