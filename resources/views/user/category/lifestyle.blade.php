<!DOCTYPE html>
<html>
<head>
  <title>GiveApp | Home & Lifestyle</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href={{asset('css/home/home.css')}}>
<link rel="stylesheet" type="text/css" href={{asset('css/all.css')}}>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<script src={{URL::asset('js/home/home.js')}}></script>

<body>

<!-- Sidebar Start -->
<div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Giveapp</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Welcome, User</p>

                <li>
                    <a href="/user/home"><i class="fas fa-home"> Home</i></a>
                    <a href="/user/profile"><i class="fas fa-user-alt">  Profile</i></a>
                    <a href="/user/about"><i class="fas fa-info-circle"> About</i></a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-folder-open"> Categories</i></a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="/user/category/electronicdevices">Electronic Devices</a>
                        </li>
                        <li>
                            <a href="/user/category/electronicaccessories">Electronic Accessories</a>
                        </li>
                        <li>
                            <a href="/user/category/appliances">TV & Home Appliances</a>
                        </li>
                        <li>
                            <a href="/user/category/health">Health & Beauty</a>
                        </li>
                        <li>
                            <a href="/user/category/babies">Babies & Toys</a>
                        </li>
                        <li>
                            <a href="/user/category/groceries">Groceries & Pets</a>
                        </li>
                        <li>
                            <a href="/user/category/lifestyle">Home & Lifestyle</a>
                        </li>
                        <li>
                            <a href="/user/category/womens">Women's Fashion</a>
                        </li>
                        <li>
                            <a href="/user/category/mens">Men's Fashion</a>
                        </li>
                        <li>
                            <a href="/user/category/accessories">Fashion Accessories</a>
                        </li>
                        <li>
                            <a href="/user/category/sports">Sports & Travel</a>
                        </li>
                        <li>
                            <a href="/user/category/automotive">Automotive & Motorcycles</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-phone"> Contact</i></a>
                </li>
                <li>
                    <a href="/Giveapp.com"><i class="fas fa-sign-out-alt"> Log Out</i></a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 50%; margin-left:36%">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        
                    </div>
                </div>
            </nav>
            
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="/images/meliodas.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Meliodas</h5>
                    <p class="card-text">Dragon Sin of Wrath</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        <div class="card">
                <img class="card-img-top" src="/images/imashime no fukkatsu.jpg" alt="Card image cap">
        <div class="card-body">
                <h5 class="card-title">Nanatsu no Taizai Poster</h5>
                    <p class="card-text">Poster</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
        <div class="card">
                <img class="card-img-top" src="/images/sagiri.png" alt="Card image cap">
        <div class="card-body">
                <h5 class="card-title">Sagiri-chan</h5>
                <p class="card-text">Loli Please Call FBI if violated</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
        </div>

        <br> <!--  Break from card of decks from pagination -->

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                 <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        </div>
    </div>


</body>
</html>