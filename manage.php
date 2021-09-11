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
                            <div class="col-sm-4">
                                <h2>Manage Portfolio</h2><br />
                                <form class="row g-3">                                   
                                      <div class="col-12">
                                          <nav class="navbar navbar-light bg-light">
                                              <input style="width: 80%;" class="form-control mr-sm-1" type="search" placeholder="Update Portfolio Name" aria-label="Search">
                                              <button class="btn btn-success my-2 my-sm-0" type="submit">Save Name</button>
                                          </nav>
                                      </div>

                                      <div class="col-12">
                                          <nav class="navbar navbar-light bg-light">
                                            <p>Paste stock tickers separated by a comma.</p>
                                            <input style="width: 80%;" class="form-control mr-sm-2" type="search" placeholder="Search Stock Ticker" aria-label="Search">
                                          </nav>
                                      </div>
                                      
                                      <div class="col-12">
                                            <table class="table table-striped">
                                                  <tbody>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>AAPL</td>
                                                        <td>Technology</td>
                                                        <td><a class="btn btn-sm btn-dark" href="#" role="button">Add</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apple</td>
                                                        <td>AAPL</td>
                                                        <td>Technology</td>
                                                        <td><a class="btn btn-sm btn-dark" href="#" role="button">Add</a></td>
                                                    </tr>
                                                    <tr>
                                                            <td>Apple</td>
                                                            <td>AAPL</td>
                                                            <td>Technology</td>
                                                            <td><a class="btn btn-sm btn-dark" href="#" role="button">Add</a></td>
                                                        </tr>
                                                        <tr>
                                                          <td>Apple</td>
                                                          <td>AAPL</td>
                                                          <td>Technology</td>
                                                          <td><a class="btn btn-sm btn-dark" href="#" role="button">Add</a></td>
                                                      </tr>
                                                      <tr>
                                                        <td>Apple</td>
                                                        <td>AAPL</td>
                                                        <td>Technology</td>
                                                        <td><a class="btn btn-sm btn-dark" href="#" role="button">Add</a></td>
                                                    </tr>
                                                  </tbody>
                                            </table>
                                      </div>
                                      
                                      <div class="col-12 p-2"></div>
                                </form>
                            </div>   
                            
                            <div class="col-sm-1"></div>
                            <div class="col-sm-6">
                                <h2>Manage Assets</h2><br />
                                <div class="col-12 p-2" style="line-height: 1em;">
                                      <div class="row">
                                          <div class="col-6">
                                            <p><b>Portfolio 1</b></p>
                                          </div>
                                          <div class="col-6">
                                            <p><b>7 Stocks Added</b></p>
                                          </div>
                                    </div>   
                                </div>

                                <div class="col-sm-12"></div>
                                <div class="col-12">
                                  <nav class="navbar navbar-light bg-light ">
                                    <input style="width: 80%;" class="form-control mr-sm-2" type="search" placeholder="Search Stock Ticker" aria-label="Search">
                                  </nav>
                                </div>
                                
                                <div class="col-12 p-2"></div>

                                <table class="table table-fixed">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">Stock Ticker</th>
                                                <th scope="col">Sector</th>
                                                <th scope="col">Shares</th>
                                                <th scope="col">Portfolio %</th>
                                                <th scope="col">Open</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>AAPL</td>
                                                <td>Technology</td>
                                                <td>15</td>
                                                <td>5%</td>
                                                <td>$250</td>
                                                <td><a class="btn btn-sm btn-dark" href="#" role="button">Edit Position</a></td>
                                            </tr>
                                            <tr>
                                                <td>NVX</td>
                                                <td>Technology</td>
                                                <td>25</td>
                                                <td>10%</td>
                                                <td>$100</td>
                                                <td><a class="btn btn-sm btn-dark" href="#" role="button">Edit Position</a></td>
                                            </tr>
                                            <tr>
                                                <td>AMZB</td>
                                                <td>Technology</td>
                                                <td>10</td>
                                                <td>3%</td>
                                                <td>$1500</td>
                                                <td><a class="btn btn-sm btn-dark" href="#" role="button">Edit Position</a></td>
                                            </tr>
                                            <tr>
                                              <td>AAPL</td>
                                              <td>Technology</td>
                                              <td>15</td>
                                              <td>5%</td>
                                              <td>$250</td>
                                              <td><a class="btn btn-sm btn-dark" href="#" role="button">Edit Position</a></td>
                                          </tr>
                                          <tr>
                                              <td>NVX</td>
                                              <td>Technology</td>
                                              <td>25</td>
                                              <td>10%</td>
                                              <td>$100</td>
                                              <td><a class="btn btn-sm btn-dark" href="#" role="button">Edit Position</a></td>
                                          </tr>
                                          <tr>
                                              <td>AMZB</td>
                                              <td>Technology</td>
                                              <td>10</td>
                                              <td>3%</td>
                                              <td>$1500</td>
                                              <td><a class="btn btn-sm btn-dark" href="#" role="button">Edit Position</a></td>
                                          </tr>
                                          <tr>
                                            <td>AAPL</td>
                                            <td>Technology</td>
                                            <td>15</td>
                                            <td>5%</td>
                                            <td>$250</td>
                                            <td><a class="btn btn-sm btn-dark" href="#" role="button">Edit Position</a></td>
                                        </tr>
                                        </tbody>
                                  </table>  
                                  
                                  <div class="col-12 p-3"></div>
                                  <div class="col-12" style="text-align: left;">

                                    <button type="submit" class="btn btn-success">Update</button>
                                  </div>  
                            </div>
                      </div>
          </div>
    </div>

      </div>
  </main>
<?php require_once("footer.php"); ?>