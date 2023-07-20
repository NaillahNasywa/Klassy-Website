@extends('layout.db')

@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome to Klassy</h3>
            <h6 class="font-weight-normal mb-0">Instead of building walls, we can help build bridges<span class="text-primary"> ☆☆☆☆</span></h6>
          </div>
          <div class="col-12 col-xl-4">
           <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                <a class="dropdown-item" href="#">January - March</a>
                <a class="dropdown-item" href="#">March - June</a>
                <a class="dropdown-item" href="#">June - August</a>
                <a class="dropdown-item" href="#">August - November</a>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          {{-- <div class="card-people mt-auto"> --}}
            <img src="https://img.freepik.com/free-vector/hand-drawn-coloured-chalk-blackboard_1308-110253.jpg?w=900&t=st=1675913783~exp=1675914383~hmac=e890dd3e144b141e91319bba35846d4cedb243eaab27511cdcb1c670238d90a0" alt="people">
            <div class="weather-info">
              <div class="d-flex">
                {{-- <div>
                  <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                </div> --}}
                <div class="ml-2">
                  {{-- <h4 class="location font-weight-normal">Klassy</h4>
                  <h6 class="font-weight-normal">Korean Food</h6> --}}
                {{-- </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">● SALE</p>
                <p class="fs-30 mb-2">500++</p>
                <!-- <p>10.00% (30 days)</p> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">NEW FOLLOWER</p>
                <p class="fs-30 mb-2">613</p>
                <!-- <p>22.00% (30 days)</p> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">● NEW COMMENT</p>
                <p class="fs-30 mb-2">340++</p>
                <!-- <p>2.00% (30 days)</p> -->
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">● ORDER</p>
                <p class="fs-30 mb-2">99++</p>
                <!-- <p>0.22% (30 days)</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card position-relative">
          <div class="card-body">
            <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                      <div class="ml-xl-4 mt-3">
                      <p class="card-title">Detailed Reports</p>
                        <h1 class="text-primary">$34040</h1>
                        <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                        <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                      </div>  
                      </div>
                    <div class="col-md-12 col-xl-9">
                      <div class="row">
                        <div class="col-md-6 border-right">
                          <div class="table-responsive mb-3 mb-md-0 mt-3">
                            <table class="table table-borderless report-table">
                              <tr>
                                <td class="text-muted">Illinois</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">713</h5></td>
                              </tr>
                              <tr>
                                <td class="text-muted">Washington</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">583</h5></td>
                              </tr>
                              <tr>
                                <td class="text-muted">Mississippi</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">924</h5></td>
                              </tr>
                              <tr>
                                <td class="text-muted">California</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">664</h5></td>
                              </tr>
                              <tr>
                                <td class="text-muted">Maryland</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">560</h5></td>
                              </tr>
                              <tr>
                                <td class="text-muted">Alaska</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">793</h5></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-6 mt-3">
                          {{-- <canvas id="north-america-chart"></canvas> --}}
                          <div id="north-america-legend"></div>
                          <tr>
                          <td class="py-1">
                            <img src="https://img.freepik.com/free-vector/hand-drawn-korean-street-food-element-collection_52683-95131.jpg?w=1060&t=st=1676013941~exp=1676014541~hmac=668a223bbbdf2605ae8ff26748c45311906c57b33fc80a5b1f9bd771dfa9ea9d" alt="image"/>
                          </td>
                          {{-- <td><p class="mb-0"><span class="font-weight-bold mr-2"></span>Bibimpap</p></td>
                          <td class="text-muted">upto 45% off</td>
                          <td class="font-weight-medium"><div class="badge badge-danger">DETAILS</div></td> --}}
                        </tr>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                      <div class="ml-xl-4 mt-3">
                      <p class="card-title">Detailed Reports</p>
                        <h1 class="text-primary">$34840</h1>
                        <h3 class="font-weight-500 mb-xl-4 text-primary">North America</h3>
                        <p class="mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etccjdkvjodnwvwdvnnnnnnnkkkkvnjfhuhdkmsmkc</p>
                      </div>  
                      </div>
                    <div class="col-md-12 col-xl-9">
                      <div class="row">
                        <div class="col-md-6 border-right">
                          <div class="table-responsive mb-3 mb-md-0 mt-3">
                            <table class="table table-borderless report-table">
                              <tr>
                                <td class="text-muted">Illinois</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">713</h5></td>
                              </tr>
                              <tr>
                                <td class="text-muted">Washington</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">583</h5></td>
                              </tr>
                              <tr>
                                <td class="text-muted">Mississippi</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">924</h5></td>
                              </tr>
                              <tr>
                                <td class="text-muted">California</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">664</h5></td>
                              </tr>
                              <tr>
                                <td class="text-muted">Maryland</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">560</h5></td>
                              </tr>
                              <tr>
                                <td class="text-muted">Alaska</td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><h5 class="font-weight-bold mb-0">793</h5></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-6 mt-3">
                          <canvas id="south-america-chart"></canvas>
                          <div id="south-america-legend"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">TOP MENU</p>
            <div class="table-responsive">
              <table class="table table-striped table-borderless">
                <thead>
                  <tr>
                    <th>Menu</th>
                    <th>Top</th>
                    <th>Bought</th>
                    <th>Action</th>
                  </tr>  
                </thead>
                <tbody>
                  <tr>
                    <td>Topoki</td>
                    <td class="font-weight-bold">1</td>
                    <td>500++</td>
                    <td class="font-weight-medium"><div class="badge badge-danger">EDIT  |   DELETE</div></td>
                  </tr>
                  <tr>
                    <td>Sushi</td>
                    <td class="font-weight-bold">2</td>
                    <td>334</td>
                    <td class="font-weight-medium"><div class="badge badge-danger">EDIT  |   DELETE</div></td>
                  </tr>
                  <tr>
                    <td>Bibimpap</td>
                    <td class="font-weight-bold">3</td>
                    <td>234</td>
                    <td class="font-weight-medium"><div class="badge badge-danger">EDIT  |  DELETE</div></td>
                  </tr>
                  <tr>
                    <td>Korean bbq</td>
                    <td class="font-weight-bold">4</td>
                    <td>123</td>
                    <td class="font-weight-medium"><div class="badge badge-danger">EDIT  |   DELETE</div></td>
                  </tr>
                  <tr>
                    <td>Crondog</td>
                    <td class="font-weight-bold">5</td>
                    <td>99++</td>
                    <td class="font-weight-medium"><div class="badge badge-danger">EDIT  |  DELETE</div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title">To Do Lists</h4>
                              <div class="list-wrapper pt-2">
                                  <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                      <li>
                                          <div class="form-check form-check-flat">
                                              <label class="form-check-label">
                                                  <input class="checkbox" type="checkbox">
                                                  ● New Data Updates
                                              </label>
                                          </div>
                                          <i class="remove ti-close"></i>
                                      </li>
                                      <li class="completed">
                                          <div class="form-check form-check-flat">
                                              <label class="form-check-label">
                                                  <input class="checkbox" type="checkbox" checked>
                                                  -------------------
                                              </label>
                                          </div>
                                          <i class="remove ti-close"></i>
                                      </li>
                                      <li>
                                          <div class="form-check form-check-flat">
                                              <label class="form-check-label">
                                                  <input class="checkbox" type="checkbox">
                                                --------------------
                                              </label>
                                          </div>
                                          <i class="remove ti-close"></i>
                                      </li>
                                      <li class="completed">
                                          <div class="form-check form-check-flat">
                                              <label class="form-check-label">
                                                  <input class="checkbox" type="checkbox" checked>
                                                -------------------
                                              </label>
                                          </div>
                                          <i class="remove ti-close"></i>
                                      </li>
                                  </ul>
            </div>
            <div class="add-items d-flex mb-0 mt-2">
                                  <input type="text" class="form-control todo-list-input"  placeholder="Add new task">
                                  <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="icon-circle-plus"></i></button>
                              </div>
                          </div>
                      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">BEST SELLER</p>
            <div class="table-responsive">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th class="pl-0  pb-2 border-bottom">Photo</th>
                    <th class="border-bottom pb-2">Theme</th>
                    <th class="border-bottom pb-2">Persen</th>
                    <th class="border-bottom pb-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1">
                      <img src="https://i.pinimg.com/564x/4f/b7/04/4fb70443111a5f7f0c1045ac99a867a1.jpg" alt="image"/>
                    </td>
                    <td><p class="mb-0"><span class="font-weight-bold mr-2"></span>Bibimpap</p></td>
                    <td class="text-muted">upto 45% off</td>
                    <td class="font-weight-medium"><div class="badge badge-danger">DETAILS</div></td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="https://i.pinimg.com/564x/ff/78/63/ff7863d45caab506c3fb27a47cbe5520.jpg" alt="image"/>
                    </td>
                    <td><p class="mb-0"><span class="font-weight-bold mr-2"></span>Corndog</p></td>
                    <td class="text-muted">upto 30% off</td>
                    <td class="font-weight-medium"><div class="badge badge-danger">DETAILS</div></td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="https://i.pinimg.com/564x/dc/8c/fd/dc8cfddcf975a83622992cd900732d56.jpg" alt="image"/>
                    </td>
                    <td><p class="mb-0"><span class="font-weight-bold mr-2"></span>Topoki</p></td>
                    <td class="text-muted">upto 40% off</td>
                    <td class="font-weight-medium"><div class="badge badge-danger">DETAILS</div></td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="https://i.pinimg.com/564x/19/cb/e1/19cbe170e284301fc583bc5d47d8e7a6.jpg" alt="image"/>
                    </td>
                    <td><p class="mb-0"><span class="font-weight-bold mr-2"></span> Soybean pulp</p></td>
                    <td class="text-muted">upto 45% of</td>
                    <td class="font-weight-medium"><div class="badge badge-danger">DETAILS</div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 stretch-card grid-margin">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title">CATEGORIES</p>
                <div class="charts-data">
                  <div class="mt-3">
                    <p class="mb-0">Heavy food</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="progress progress-md flex-grow-1 mr-4">
                        <div class="progress-bar bg-inf0" role="progressbar" style="width: 75%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-3">
                    <p class="mb-0">Snack</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="progress progress-md flex-grow-1 mr-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 95%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-3">
                    <p class="mb-0">Drink</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="progress progress-md flex-grow-1 mr-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>

                </div>  
              </div>
            </div>
          </div>
          <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
            <div class="card data-icon-card-primary">
              <div class="card-body">
                <p class="card-title text-white">POPULAR</p>                      
                <div class="row">
                  <div class="col-8 text-white">
                    <h3>34040</h3>
                    <p class="text-white font-weight-500 mb-0">The total number of sessions within the date range.It is calculated as the sum . </p>
                  </div>
                  <div class="col-4 background-icon">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <p class="card-title">NOTIFICATIONS</p>
            <ul class="icon-data-list">
              <li>
                <div class="d-flex">
                  <img src="images/faces/face1.jpg" alt="user">
                  <div>
                    <p class="text-info mb-1">Isabella Becker</p>
                    <p class="mb-0">this is good</p>
                    <small>9:30 am</small>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="images/faces/face2.jpg" alt="user">
                  <div>
                    <p class="text-info mb-1">Adam Warren</p>
                    <p class="mb-0">I love koreanfood and i found it yes it's very good place</p>
                    <small>10:30 am</small>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                <img src="images/faces/face3.jpg" alt="user">
               <div>
                <p class="text-info mb-1">Leonard Thornton</p>
                <p class="mb-0">☆☆☆☆☆ I like it</p>
                <small>11:30 am</small>
               </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="images/faces/face4.jpg" alt="user">
                  <div>
                    <p class="text-info mb-1">George Morrison</p>
                    <p class="mb-0">Undread Message</p>
                    <small>8:50 am</small>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img src="images/faces/face5.jpg" alt="user">
                  <div>
                  <p class="text-info mb-1">Ryan Cortez</p>
                  <p class="mb-0">Message 2++</p>
                  <small>9:00 am</small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

          
        </div>
      </div>
  </div>
@endsection