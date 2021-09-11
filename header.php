<!doctype html>
<html lang="en" class="h-100">
  <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="">
          <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
          <meta name="generator" content="Hugo 0.82.0">
          <title>Stock Oh - Portfolio Manager</title>

          <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;500;700&display=swap" rel="stylesheet"> 

          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

          <!-- Bootstrap core CSS -->
          <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

          <style>
            .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              user-select: none;
            }

            @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                font-size: 3.5rem;
              }
            }
          </style>
          <script type="text/javascript">
                window.onload = function () {
                  var chart = new CanvasJS.Chart("chartContainer",
                  {
                    title:{
                      text: "Stock Oh"
                    },
                    zoomEnabled: true,
                    axisY: {
                      includeZero:false,
                      title: "Prices",
                      prefix: "$ "
                    },
                    axisX: {
                      interval:2,
                      intervalType: "month",
                      valueFormatString: "MMM-YY",
                      labelAngle: -45
                    },
                    data: [
                    {
                      type: "candlestick",
                      dataPoints: [
                        {x: new Date(2012,01,01),y:[5198, 5629, 5159, 5385]},
                        {x: new Date(2012,02,01),y:[5366, 5499, 5135, 5295]},
                        {x: new Date(2012,03,01),y:[5296, 5378, 5154, 5248]},
                        {x: new Date(2012,04,01),y:[5254, 5279, 4788, 4924]},
                        {x: new Date(2012,05,01),y:[4910, 5286, 4770, 5278]},
                        {x: new Date(2012,06,01),y:[5283, 5348, 5032, 5229]},
                        {x: new Date(2012,07,01),y:[5220, 5448, 5164, 5258]},
                        {x: new Date(2012,08,01),y:[5276, 5735, 5215, 5703]},
                        {x: new Date(2012,09,01),y:[5704, 5815, 4888, 5619]},
                        {x: new Date(2012,10,01),y:[5609, 5885, 5548, 5879]},
                        {x: new Date(2012,11,01),y:[5878, 5965, 5823, 5905]},
                        {x: new Date(2013,00,01),y:[5937, 6111, 5935, 6034]},
                        {x: new Date(2013,01,01),y:[6040, 6052, 5671, 5693]},
                        {x: new Date(2013,02,01),y:[5702, 5971, 5604, 5682]},
                        {x: new Date(2013,03,01),y:[5697, 5962, 5477, 5930]},
                        {x: new Date(2013,04,01),y:[5911, 6229, 5910, 5985]},
                        {x: new Date(2013,05,01),y:[5997, 6011, 5566, 5842]},
                        {x: new Date(2013,06,01),y:[5834, 6093, 5675, 5742]},
                        {x: new Date(2013,07,01),y:[5776, 5808, 5118, 5471]},
                        {x: new Date(2013,08,01),y:[5480, 6142, 5318, 5735]},
                        {x: new Date(2013,09,01),y:[5756, 6309, 5700, 6299]},
                        {x: new Date(2013,10,01),y:[6289, 6342, 5972, 6176]},
                        {x: new Date(2013,11,01),y:[6171, 6415, 6129, 6304]}
                      ]
                    }
                    ]
                  });
                  chart.render();
                }
          </script>
          <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>          
          <!-- Custom styles for this template -->
          <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
  <header>
          <!-- Fixed navbar -->
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <div class="container-fluid">
                              <a class="navbar-brand rounded" href="#" style="margin-right: 10px;"><i class="bi bi-chevron-bar-expand"></i> STOCK OH</a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarCollapse">                                      
                                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                            <li class="nav-item" style="padding: 0px 10px;">
                                                <a class="nav-link" href="scanner.php"><i class="bi bi-search"></i> Scanner</a>
                                            </li>
                                            <li class="nav-item" style="padding: 0px 10px;">
                                                <a class="nav-link" href="stockstotrade.php"><i class="bi bi-arrow-up-right-square"></i> Stocks To Trade</a>
                                            </li>
                                            <li class="nav-item" style="padding: 0px 10px;">
                                                <a class="nav-link" href="insights"><i class="bi bi-chat-right-text"></i> News and Insights</a>
                                            </li>
                                            <li class="nav-item" style="padding: 0px 10px;">
                                                <a class="nav-link" href="riskreward.php"><i class="bi bi-calculator"></i> Risk Reward</a>
                                            </li>
                                            <!--<li class="nav-item" style="padding: 0px 10px;">
                                                <a class="nav-link" aria-current="page" href="index"><i class="bi bi-clipboard-data"></i></i> Portfolio</a>
                                            </li> -->                         
                                        </ul>
                                        <form class="d-flex">
                                          <input class="form-control me-2" type="search" placeholder="Search a ticker" aria-label="Search">
                                          <button class="btn btn-outline-success" type="submit">Go</button>
                                        </form>
                                        <a href="account">
                                          <button class="btn btn-success navmargin" type="submit">Account Settings</button>
                                        </a>
                                        <!--<a href="logout?logout=true">
                                          <button class="btn btn-success navmargin" type="submit">Logout</button>
                                        </a>-->
                              </div>
                    </div>
          </nav>
  </header>