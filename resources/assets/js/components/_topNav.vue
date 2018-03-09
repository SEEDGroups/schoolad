<template>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar default-color" id="sg-navbar">
  <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
  <a class="navbar-brand" href="#">
   <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" height="30" class="d-inline-block align-top" alt="">
   School Ad
</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
               <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="#">Features</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="#">Pricing</a>
           </li>
           <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
               </a>
               <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <a class="dropdown-item" href="#">Something else here</a>
               </div>
           </li>
       </ul>
       <form class="form-inline">
                   <div class="md-form mt-0">
                       <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                   </div>
               </form>
   </div>
</nav>
</template>