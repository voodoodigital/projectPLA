<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/bootstrap.bundle.js" defer></script>
    <script src="js/script.js" defer></script>
</head>

<body>

    <!-- main web applicatio UI layout -->
    <!-- develop your UI here -->
    <!-- you only have to main layout of the web application -->
    <!-- use bootstrap for the lay out -->

    <div class="container-fluid d-flex flex-column" style="height:100vh;">
        <div class="col-12 p-0 " style="height:70px">
            <div class="d-flex justify-content-center  m-0 bg-primary h-100 align-item-text-center px-2">

                <div class="d-flex justify-content-center align-items-center">
                    <span class="fw-bold fs-4">LOGO</span>
                </div>

                <div class="d-flex gap-1 w-100 h-100 align-items-center justify-content-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Time Management
                        </button>
                        <ul class="dropdown-menu">
                            <button class="dropdown-item" onclick="secondaryNavigationChanger('timeManagement');" >Time Management</button>
                            <button class="dropdown-item" onclick="secondaryNavigationChanger('financialManagemnt');" >Finacial Managemnet</button>

                        </ul>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Goal setting
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" onclick="secondaryNavigationChanger('goalSetting');" >Goal setting</a></li>
                            <li><a class="dropdown-item" href="#">Educational Content</a></li>

                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Relationalship Management
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Relationalship Management</a></li>
                            <li><a class="dropdown-item" href="#">Health Management</a></li>
                            <li><a class="dropdown-item" href="#">Entertainment</a></li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <i class="fs-3 text-white bi bi-person-circle"></i>
                </div>
            </div>
        </div>
        <div class="col-12 p-0" style="flex:1;">
            <div class="row m-0  h-100">

                <div class="col-2 p-0 bg-danger col-lg-4 ">
                    <div class="row p-2 m-0" id="secondaryNavigationContainer">
                        <section class="col-12  p-0" id="timeManagement" style="display: block;">
                            <div class="row m-0">
                                <button class="my-1 btn btn-primary">project</button>
                                <button class="my-1 btn btn-primary">Task</button>
                                <button class="my-1 btn btn-primary">Todo</button>
                                <button class="my-1 btn btn-primary">Remainder</button>
                            </div>
                        </section>
                        <section class="col-12  p-0" id="financialManagemnt" style="display: none;">
                            <div class="row m-0">
                                <button class="my-1 btn btn-primary">Income</button>
                                <button class="my-1 btn btn-primary">Expence</button>
                                <button class="my-1 btn btn-primary">financial Status</button>
                            </div>
                        </section>
                        <section class="col-12  p-0" id="goalSetting" style="display: none;">
                            <div class="row m-0">
                                <button class="my-1 btn btn-primary">Goal</button>
                                <button class="my-1 btn btn-primary">Milestone</button>
                            </div>
                        </section>

                    </div>
                </div>
                <div class="col-10 bg-success p-0 col-lg-8">
                    <div class="row m-0"></div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>