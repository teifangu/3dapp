<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">
    <link rel='stylesheet' href="../css/custom.css">
    </link>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel='stylesheet' href="../css/x3dom.css">
    </link>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="//db.onlinewebfonts.com/c/2def107af3e4eeb88b5ca50c3320ae0a?family=TCCC-UnityHeadline" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <link id="page-theme" rel="stylesheet" href="../css/red.css">
    <script src="../js/jquery-3.6.3.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/x3dom.js"></script>
    <script src="https://kit.fontawesome.com/73afdc5ae8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/model_options.js"></script>

    <title>Coca-Cola | About</title>
</head>

<body>
    <nav class="navbar navbar_coca_cola navbar-expand-sm">
        <div class="container">
            <div class="logo">
                <a class="navbar-brand" href="home">
                    <h1>1</h1>
                    <h1>oca</h1>
                    <h2>Cola</h2>
                    <h3>Journey</h3>
                    <p class="text">Savor the Magic of Coca Cola</p>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto text">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Drinks</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="myDropdownItem  dropdown-item-top" href="drinks?d=coke">Coca Cola</a>
                            <a class="myDropdownItem" href="drinks?d=sprite">Sprite</a>
                            <a class="myDropdownItem dropdown-item-bottom" href="drinks?d=drpepper">Dr Pepper</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">About</a>
                        <div class="dropdown-menu dropdown-menu-end ">
                            <a data-bs-toggle="modal" data-bs-target="#aboutModal"
                                class="myDropdownItem dropdown-item-top" href="#">About the Brand</a>
                            <a class="myDropdownItem" href="https://www.coca-cola.co.uk/contact">Contact</a>
                            <a class="myDropdownItem dropdown-item-bottom" href="#">
                            <div>Statement of Originality
								</div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="changeTheme()">
                            <img class="brush" src="../assets/icons/brush.svg" alt="Change Theme">
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal" id="aboutModal">
        <div class="modal-dialog">

            <div class="modal-content myModal">

                <div class="modal-header t1 text">

                    <?php echo $data["home"][0]["title"] ?>

                </div>
                <div class="t2 text">
                    <?php echo $data["home"][0]["subtitle"] ?>
                </div>
                <div class="para text">
                    <?php echo $data["home"][0]["description"] ?>


                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-sm-12">
        <div class="blwch">
            <div class="text t1">
                Statement of Originality
            </div>
            <div class="text para">

                <?php echo $data["formality"][0]["originality"] ?>
            </div>
        </div>
    </div>



    <nav class="navbar navbar-expand-sm footer">
        <div class="container">
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline"></span>&copy 2023 Ifan Edwards for Web 3D Applications</span></p>
            </div>
            <div class="navbar-text float-left">

            </div>
            <div class="navbar-text float-right social">
                <a href="https://www.facebook.com/TheCocaColaCo/"><i
                        class="fab fa-facebook-square fa-3x social-logo"></i></a>
                <a href="https://twitter.com/cocacolaco"><i class="fab fa-twitter fa-3x social-logo"></i></a>
                <a href="https://github.com/teifangu/3dapp/tree/main/assignment"><i class="fab fa-github-square fa-3x social-logo"></i></a>
            </div>
        </div>
    </nav>



</body>

</html>