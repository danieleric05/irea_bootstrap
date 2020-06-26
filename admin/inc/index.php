<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Admin Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- fontawesome only -->


    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family-Montserrat">

    <link href="style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark">
        <button class="navbar-toggler ml-auto mb-2 bg-dark" type="button" data-toggle="collapse"
            data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="container-fluid">
                <div class="row">
                    <!-- sidebar-->
                    <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                        <a href="#"
                            class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">CodeAndCreate</a>
                        <div class="bottom-border pb-3">
                            <img src="images/admin.png" alt="" width="150" class="rounded-circle mr-3">
                            <a href="#" class="text-white">Marie France Krégbé</a>
                        </div>
                        <ul class="navbar-nav flex-column mt-4">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white p-3 mb-2 current">
                                    <i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                    <i class="fas fa-user text-light fa-lg mr-3"></i>Profil</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                    <i class="fas fa-envelope text-light fa-lg mr-3"></i>Inbox</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                    <i class="fas fa-shopping-cart text-light fa-lg mr-3"></i>Ventes</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                    <i class="fas fa-chart-line text-light fa-lg mr-3"></i>Analytics</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                    <i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Charts</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                    <i class="fas fa-table text-light fa-lg mr-3"></i>Tables</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                    <i class="fas fa-wrench text-light fa-lg mr-3"></i>Settings</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
                                    <i class="fas fa-file-alt text-light fa-lg mr-3"></i>Documentation</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End sidebar-->
                    <!-- top-nav-->
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h4 class="text-light text-uppercase mb-0">dashboard</h4>
                            </div>
                            <div class="col-md-5">
                                <form>
                                    <div class="input-group">
                                        <input class="form-control search-input" type="text" placeholder="Search...">
                                        <button type="button" class="btn btn-white search-button">
                                            <i class="fas fa-search text-danger"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item icon-parent">
                                        <a href="#" class="nav-link icon-bullet">
                                            <i class="fas fa-comments text-muted fa-lg">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="nav-item icon-parent">
                                        <a href="#" class="nav-link icon-bullet">
                                            <i class="fas fa-bell text-muted fa-lg">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="nav-item ml-md-auto">
                                        <a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out">
                                            <i class="fas fa-sign-out-alt text-danger fa-lg">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End top-nav-->
                </div>
            </div>
        </div>


    </nav>
    <!-- End Navbar -->
    <!-- Modal -->
    <div class="modal fade" id="sign-out">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="model-title">Want to leave</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Press LogOut to leave
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">
                        Stay Here
                    </button>
                    <button class="btn btn-danger" data-dismiss="modal">
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    <!--Cards-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row pt-md-5 mt-md-3 mb-5">
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Sales</h5>
                                            <h3>$135,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Update Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Expenses</h5>
                                            <h3>$135,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Update Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-users fa-3x text-info"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Users</h5>
                                            <h3>15,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Update Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-chart-line fa-3x text-danger"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Visitors</h5>
                                            <h3>35,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Update Now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- EndCards-->

    <!-- Table-->
    <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row align-items-center">
                        <div class=" col-xl-6 col-12 mb-4 mb-xl-0">
                            <h3 class="text-muted text-center mb-3">
                                Staff Salary
                            </h3>
                            <table class="table table-striped bg-light text-center">
                                <thead>
                                    <tr class="text-muted">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Date</th>
                                        <th>Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>John</td>
                                        <td>$2000</td>
                                        <td>05/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Ann</td>
                                        <td>$2000</td>
                                        <td>05/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Mark</td>
                                        <td>$2000</td>
                                        <td>05/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Mary</td>
                                        <td>$2000</td>
                                        <td>05/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Bob</td>
                                        <td>$2000</td>
                                        <td>05/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Pagination-->
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link py-2 px-3">
                                            1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- End Pagination-->
                        </div>
                        <div class="col-xl-6 col-12">
                            <h3 class="text-muted text-center mb-3">
                                Recent Payments
                            </h3>
                            <table class="table table-dark table-hover text-center">
                                <thead>
                                    <tr class="text-muted">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Statuts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>2</th>
                                        <td>Nick</td>
                                        <td>$2000</td>
                                        <td>05/05/2018</td>
                                        <td><span class="badge badge-success w-75 py-2">Approuved</span></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Alex</td>
                                        <td>$2000</td>
                                        <td>05/05/2018</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Christiane</td>
                                        <td>$2000</td>
                                        <td>05/05/2018</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Daniel</td>
                                        <td>$2000</td>
                                        <td>05/05/2018</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td>Monica</td>
                                        <td>$2000</td>
                                        <td>05/05/2018</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Pagination-->
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link py-2 px-3">
                                            1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- End Pagination-->
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Tables-->

    <!--Progress / task list-->

    <section>
        <div class="container-fluid">
            <div class="rom">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row mb-4 align-items-center">
                        <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                            <div class="bg-dark text-white p-4 rounded">
                                <h4 class="mb-5">Conversion Rates</h4>
                                <h6 class="mb-3">Google Chrome</h6>
                                <div class="progress mb-4" style="height:20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold" style="width:91%">
                                        91%
                                    </div>
                                </div>

                                <h6 class="mb-3">Mozilla Firefox</h6>
                                <div class="progress mb-4" style="height:20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-success"
                                        style="width:82%">
                                        82%
                                    </div>
                                </div>

                                <h6 class="mb-3">Safari</h6>
                                <div class="progress mb-4" style="height:20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-danger"
                                        style="width:67%">
                                        67%
                                    </div>
                                </div>

                                <h6 class="mb-3">IE</h6>
                                <div class="progress mb-4" style="height:20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-info"
                                        style="width:10%">
                                        10%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <h4 class="text-muted p-3 mb-3">Tasks</h4>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem odio atque
                                        libero delectus, voluptate assumenda aut? Fuga autem, aspernatur sapiente animi
                                        officiis mollitia quod tempora facilis facere magni nostrum fugiat!
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true"
                                            data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true"
                                            data-placement="top"><i
                                                class="fas fa-trash-alt fa-lg text-danger mr-2"></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem odio atque
                                        libero delectus, voluptate assumenda aut? Fuga autem, aspernatur sapiente animi
                                        officiis mollitia quod tempora facilis facere magni nostrum fugiat!
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true"
                                            data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true"
                                            data-placement="top"><i
                                                class="fas fa-trash-alt fa-lg text-danger mr-2"></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem odio atque
                                        libero delectus, voluptate assumenda aut? Fuga autem, aspernatur sapiente animi
                                        officiis mollitia quod tempora facilis facere magni nostrum fugiat!
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true"
                                            data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true"
                                            data-placement="top"><i
                                                class="fas fa-trash-alt fa-lg text-danger mr-2"></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem odio atque
                                        libero delectus, voluptate assumenda aut? Fuga autem, aspernatur sapiente animi
                                        officiis mollitia quod tempora facilis facere magni nostrum fugiat!
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true"
                                            data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true"
                                            data-placement="top"><i
                                                class="fas fa-trash-alt fa-lg text-danger mr-2"></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem odio atque
                                        libero delectus, voluptate assumenda aut? Fuga autem, aspernatur sapiente animi
                                        officiis mollitia quod tempora facilis facere magni nostrum fugiat!
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true"
                                            data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true"
                                            data-placement="top"><i
                                                class="fas fa-trash-alt fa-lg text-danger mr-2"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Progress / task list-->
    <!-- Activities / Quick post-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-mb-8 ml-auto">
                    <div class="row align-items-center mb-5">
                        <div class="col-xl-7">
                            <h4 class="text-muted mb-4">Recent Customer Activites</h4>
                            <div id="accordian">
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left"
                                            data-toggle="collapse" data-target="#collapseOne">
                                            <img src="images/cust1.jpeg" width="50" class="mr-3 rounded" alt="">
                                            John posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse show" id="collapseOne" data-parent="#accordian">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dolorum error
                                            totam praesentium quaerat adipisci aperiam rerum vitae! Labore ipsa id cum
                                            molestiae facere ab culpa, perferendis possimus vitae reprehenderit.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left"
                                            data-toggle="collapse" data-target="#collapseTwo">
                                            <img src="images/cust2.jpeg" width="50" class="mr-3 rounded" alt="">
                                            Daniel posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseTwo" data-parent="#accordian">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dolorum error
                                            totam praesentium quaerat adipisci aperiam rerum vitae! Labore ipsa id cum
                                            molestiae facere ab culpa, perferendis possimus vitae reprehenderit.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left"
                                            data-toggle="collapse" data-target="#collapseThree">
                                            <img src="images/cust3.jpeg" width="50" class="mr-3 rounded" alt="">
                                            Paul posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseThree" data-parent="#accordian">
                                        <div class="card-body">e
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dolorum error
                                            totam praesentium quaerat adipisci aperiam rerum vitae! Labore ipsa id cum
                                            molestiae facere ab culpa, perferendis possimus vitae reprehenderit.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left"
                                            data-toggle="collapse" data-target="#collapseFour">
                                            <img src="images/cust4.jpeg" width="50" class="mr-3 rounded" alt="">
                                            Penny posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseFour" data-parent="#accordian">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dolorum error
                                            totam praesentium quaerat adipisci aperiam rerum vitae! Labore ipsa id cum
                                            molestiae facere ab culpa, perferendis possimus vitae reprehenderit.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left"
                                            data-toggle="collapse" data-target="#collapseFive">
                                            <img src="images/cust5.jpeg" width="50" class="mr-3 rounded" alt="">
                                            Paterne posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseFive" data-parent="#accordian">
                                        <div class="ca rd-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dolorum error
                                            totam praesentium quaerat adipisci aperiam rerum vitae! Labore ipsa id cum
                                            molestiae facere ab culpa, perferendis possimus vitae reprehenderit.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left"
                                            data-toggle="collapse" data-target="#collapseSix">
                                            <img src="images/cust6.jpeg" width="50" class="mr-3 rounded" alt="">
                                            Richardposted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseSix" data-parent="#accordian">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dolorum error
                                            totam praesentium quaerat adipisci aperiam rerum vitae! Labore ipsa id cum
                                            molestiae facere ab culpa, perferendis possimus vitae reprehenderit.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 mt-5">
                            <div class="card rounded">
                                <div class="card-body">
                                    <h5 class="text-muted text-center mb-4">Quick Statuts Post</h5>

                                    <ul class="list-inline text-center py-3">
                                        <li class="list-inline-item mr-4">
                                            <a href="#">
                                                <i class="fas fa-pencil-alt text-success"></i>
                                                <span class="h6 text-muted">Status</span>
                                            </a>

                                        </li>
                                        <li class="list-inline-item mr-4">
                                            <a href="#">
                                                <i class="fas fa-camera text-info"></i>
                                                <span class="h6 text-muted">Photo</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fas fa-map-marker text-primary"></i>
                                                <span class="h6 text-muted">Check-In</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <form action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control py-2 mb-3 placeholder=" what's your
                                                Status...">
                                            <button type="button"
                                                class="btn btn-bloc text-uppercase font-weight-bold text-light bg-info py-2 mb-5">Submit
                                                Post</button>
                                        </div>

                                    </form>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card bg-light">
                                                <i
                                                    class="far fa-calendar-alt fa-8x text-warning d-block m-auto py-3"></i>
                                                <div class="card-body">
                                                    <p class="card-text text-center font-weight text-uppercase">Mon,
                                                        may,26</p>
                                                </div>

                                            </div>
                                            
                                        </div>
                                        <div class="col-6">
                                            <div class="card bg-light">
                                                <i
                                                    class="far fa-clock fa-8x text-danger d-block m-auto py-3"></i>
                                                <div class="card-body">
                                                    <p class="card-text text-center font-weight text-uppercase">3:50 am</p>
                                                </div>

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Activities / Quick post-->
   <!-- footert-->
<footer>
    <div class="container-fluid">
        <div class="row border-top pt-3">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item mr-2">
                                <a href="#" class="text-dark">CodeAnceCreate</a>
                            </li>
                            <li class="list-inline-item mr-2">
                                <a href="#" class="text-dark">About</a>
                            </li>
                            <li class="list-inline-item mr-2">
                                <a href="#" class="text-dark">Support</a>
                            </li>
                            <li class="list-inline-item mr-2">
                                <a href="#" class="text-dark">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center">
                        <p>&copy; 2019 Copyright. Made With <i class="fas fa-heart text-danger"></i> by 
                    <span class="text-success">Daertech</span></p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer-->









    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

</body>

</html>