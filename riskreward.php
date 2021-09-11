<?php require_once("header.php"); ?>
<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container-fluid" style="padding: 85px;">            
          <nav class="navbar navbar-expand-lg navbar-light bg-light m-3 rounded shadow-sm">
                <div class="collapse navbar-collapse p-3" id="navbarNav">
                  <ul class="navbar-nav submenu">
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="#">Risk / Reward</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="#">Settings</a>
                    </li>
                  </ul>
                </div>
          </nav>          


          <div class="bg p-2 m-3 rounded">
                        <div class="row">
                              <div class="col-sm-8">
                                    <form class="form-inline">
                                    <p>Paste tickers separated by comma</p>
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search News By Ticker" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form><br />
                              </div>           

                              <div class="col-sm-10">
                                    <div class="row">
                                    <div class="col-sm-8">
                                              <table class="table table-striped scanner-tbl">
                                                <thead>
                                                      <tr>  
                                                            <th scope="col"></th>
                                                            <th scope="col">Ticker</th>
                                                            <th scope="col">Entry</th>
                                                            <th scope="col">Shares</th>
                                                            <th scope="col">Profit Exit</th>
                                                            <th scope="col">Exit Loss</th>
                                                            <th scope="col"></th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                            <td><i class="bi bi-circle-fill good"></i></td>       
                                                            <td>120.35</td>
                                                            <td>121.21</td>
                                                            <td>12</td>
                                                            <td>120.59</td>
                                                            <td>120.59</td>
                                                            <td><button type="button" class="btn btn-success btn-sm">View</button></td>
                                                      </tr>
                                                      <tr>
                                                            <td><i class="bi bi-circle-fill good"></i></td>       
                                                            <td>120.35</td>
                                                            <td>121.21</td>
                                                            <td>12</td>
                                                            <td>120.59</td>
                                                            <td>120.59</td>
                                                            <td><button type="button" class="btn btn-success btn-sm">View</button></td>
                                                      </tr>
                                                      <tr>
                                                            <td><i class="bi bi-circle-fill good"></i></td>       
                                                            <td>120.35</td>
                                                            <td>121.21</td>
                                                            <td>12</td>
                                                            <td>120.59</td>
                                                            <td>120.59</td>
                                                            <td><button type="button" class="btn btn-success btn-sm">View</button></td>
                                                      </tr>
                                                      <tr>
                                                            <td><i class="bi bi-circle-fill good"></i></td>       
                                                            <td>120.35</td>
                                                            <td>121.21</td>
                                                            <td>12</td>
                                                            <td>120.59</td>
                                                            <td>120.59</td>
                                                            <td><button type="button" class="btn btn-success btn-sm">View</button></td>
                                                      </tr>
                                                      <tr>
                                                            <td><i class="bi bi-circle-fill good"></i></td>       
                                                            <td>120.35</td>
                                                            <td>121.21</td>
                                                            <td>12</td>
                                                            <td>120.59</td>
                                                            <td>120.59</td>
                                                            <td><button type="button" class="btn btn-success btn-sm">View</button></td>
                                                      </tr>
                                                      <tr>
                                                            <td><i class="bi bi-circle-fill good"></i></td>       
                                                            <td>120.35</td>
                                                            <td>121.21</td>
                                                            <td>12</td>
                                                            <td>120.59</td>
                                                            <td>120.59</td>
                                                            <td><button type="button" class="btn btn-success btn-sm">View</button></td>
                                                      </tr>
                                                      <tr>
                                                            <td><i class="bi bi-circle-fill good"></i></td>       
                                                            <td>120.35</td>
                                                            <td>121.21</td>
                                                            <td>12</td>
                                                            <td>120.59</td>
                                                            <td>120.59</td>
                                                            <td><button type="button" class="btn btn-success btn-sm">View</button></td>
                                                      </tr>
                                                </tbody>
                                              </table>
                                              <br />
                                              <a class="btn btn-sm btn-success" href="/docs/5.0/components/navbar/" role="button">Export »</a>
                                          </div> <!-- end row col-sm-8 -->

                                          <div class="col-sm-4"> <br />
                                              <div class="card">
                                                        <div class="card-body">
                                                              <table class="table">
                                                                    <tbody>
                                                                            <tr>
                                                                                <th></th>
                                                                                <td><p class="card-text"><b>Stock Ticker</b></p></td>
                                                                                <td class="text-success">AAPL</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th></th>
                                                                                <td><p class="card-text"><b>Upside</b></p></td>
                                                                                <td class="text-success">5%</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th></th>
                                                                                <td><p class="card-text"><b>Loss</b></p></td>
                                                                                <td class="text-danger">2.5%</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th></th>
                                                                                <td><p class="card-text"><b>Profit</b></p></td>
                                                                                <td class="text-success">550 USD</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th></th>
                                                                                <td><p class="card-text"><b>Trade Amount</b></p></td>
                                                                                <td>5000 USD</td>
                                                                            </tr>
                                                                    </tbody>
                                                                </table>   
                                                        </div>
                                                    </div>
                                          </div> <!-- end row col-sm-4 -->
                                    </div>
                              </div>
                        </div><!-- end row 1 -->
            </div> <!-- end rounded div -->
            
            <div class="bg p-2 m-3 rounded">
                        <div class="row">
                              <div class="col-sm-4">
                                    <h4 class="border-bottom">Stock Trading Settings</h4> <br />    
                                    <form class="form-custom">
                                          <div class="form-group">
                                                <label>Budget Per Trade</label>
                                                <input type="text" class="form-control" id="" placeholder="" />
                                          </div>
                                          <div class="form-group">
                                                <label>Target Percentage Profit</label>
                                                <input type="text" class="form-control" id="" placeholder="" />
                                          </div>
                                          <div class="form-group">
                                                <label>Exit Loss</label>
                                                <input type="text" class="form-control" id="" placeholder="" />
                                          </div>
                                          <div class="form-group form-custom-bt">
                                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Save Settings</button>
                                          </div>    
                                    </form><br />
                              </div>
                              <div class="col-sm-1"></div>
                              <div class="col-sm-4">
                                    <h4 class="border-bottom">Cryptocurrency Trading Settings</h4> <br />    
                                    <form class="form-custom">
                                          <div class="form-group">
                                                <label>Budget Per Trade</label>
                                                <input type="text" class="form-control" id="" placeholder="" />
                                          </div>
                                          <div class="form-group">
                                                <label>Target Percentage Profit</label>
                                                <input type="text" class="form-control" id="" placeholder="" />
                                          </div>
                                          <div class="form-group">
                                                <label>Exit Loss</label>
                                                <input type="text" class="form-control" id="" placeholder="" />
                                          </div>
                                          <div class="form-group form-custom-bt">
                                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Save Settings</button>
                                          </div>    
                                    </form><br />
                              </div>           
                        </div><!-- end row 2 -->
            </div> <!-- end rounded div -->

      </div>
  </main>
<?php require_once("footer.php"); ?>