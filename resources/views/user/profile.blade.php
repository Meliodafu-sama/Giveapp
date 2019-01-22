<!DOCTYPE html>
<html>
<head>
  <title>GiveApp | Profile</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Homepage styles and js -->
<link rel="stylesheet" type="text/css" href={{asset('css/home/home.css')}}>
<script src={{URL::asset('js/home/home.js')}}></script>
<link rel="stylesheet" type="text/css" href={{asset('css/profile/profile.css')}}>
<!-- <script src={{URL::asset('js/profile/profile.js')}}></script> -->
<link rel="stylesheet" type="text/css" href={{asset('css/all.css')}}>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


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
                    
                    <button type="button" class="btn btn-outline-secondary"><a href="/user/profile/donateitem">Donate Item</a></button>
        
                </div>
            </nav>
     
    <!-- Profile Content         -->
<div class="rela-block container">
    <div class="rela-block profile-card">
        <div class="profile-pic" id="profile_pic"></div>
            <div class="rela-block profile-name-container">
                <div class="rela-block user-name" id="user_name">Meliodas</div>
                <div class="rela-block user-desc" id="user_description">Nanatsu no Taizai - Captain</div>
            </div>
            
            <div class="rela-block profile-card-stats">
            	<!-- approved -->
                <div class="floated profile-stat works" id="num_works">1<br></div>
                <!-- for checking -->
                    <div class="floated profile-stat followers" id="num_followers">Sample<br></div>
                    <!-- received items -->
                        <div class="floated profile-stat following" id="num_following">Sample<br></div>
            </div>
    </div>
</div>

		<!-- images -->
		<div class="card-deck">
		  <div class="card" data-toggle="modal" data-target="#exampleModal">
		    <img class="card-img-top" src="/images/meliodas.png" alt="Card image cap">
		    <div class="card-body">
		      <h5 class="card-title">Sample</h5>
		      <p class="card-text">Sample</p>
		      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
		    </div>
		  </div>

		</div>
            <!-- end of file -->
        </div>

    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>