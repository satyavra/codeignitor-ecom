
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <title>header</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="<?= base_url('templatecss/template-style.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('templatecss/slick.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('templatecss/slick-theme.css') ?>" rel="stylesheet" />
</head>

<body> 
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="text-center">Phone No Verification</h5>
                </div>
                <div class=" bg-light pb-3">
                    <p class="pt-5 text-center font-weight-normal">Enter your phone number to<br>
                    Login/Sign up</p>
                    <form class="col-7 mx-auto form-group">
                        <div class=" input-group  mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-mobile"></i></span>
                            </div>
                            <input type="text" class="form-control" id="" aria-describedby="" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary  btn-block mt-3">Next</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2 navbarmain fixed-top" style="  z-index:999">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand text-warning" href="#" >LOGO</a></div>
            <div class="col-sm-1 smallnavigation">
                <span class="smallnav menu" onclick="openNav()">☰</span>
            </div>
            <ul class="navbar-nav mr-auto location ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-map-marker"></i>
                        location
                    </a>
                    
                    <div class="dropdown-menu locationDropdown ">
                        <h6 class="dropdown-header mx-5 text-center">Where do you want the delivery?</h6>
                        <div class="border mx-2 py-2"> 
                            <i class="fa fa-location-arrow fa-2x pl-3 pt-0" ></i>
                            <span>Deliver in <b>New Delhi</b></span>
                            <i class="fa fa-angle-right fa-2x float-right text-danger pr-3"></i>
                        </div>
                        <div class="bg-light mt-3 dropdown-item pt-3" style="padding-left: 50px;
                        padding-right: 50px;">
                        <h5 class="dropdown-header mx-5 text-dark">-------Or Select your city-------</h5>
                        <h6 class="dropdown-header mx-5 text-dark mt-3 text-center">Top Searched Cities</h6>
                        <div class="row d-flex justify-content-between mt-4">
                            <div class="col-md-2 ">
                                <figure class="figure">
                                    <i class="fa fa-globe fa-2x"></i>
                                    <figcaption class="figure-caption pt-2">Mumbai</figcaption>
                                </figure>
                            </div>
                            <div class="col-md-2 ">
                                <figure class="figure">
                                    <i class="fa fa-globe fa-2x"></i>
                                    <figcaption class="figure-caption pt-2">Delhi</figcaption>
                                </figure>
                            </div>
                            <div class="col-md-2 ">
                                <figure class="figure">
                                    <i class="fa fa-globe fa-2x"></i>
                                    <figcaption class="figure-caption pt-2">Pune</figcaption>
                                </figure>
                            </div>
                            <div class="col-md-2 ">
                                <figure class="figure">
                                    <i class="fa fa-globe fa-2x"></i>
                                    <figcaption class="figure-caption pt-2">Banglore</figcaption>
                                </figure>
                            </div>
                            <div class="col-md-2 ">
                                <figure class="figure">
                                    <i class="fa fa-globe fa-2x"></i>
                                    <figcaption class="figure-caption pt-2">Mumbai</figcaption>
                                </figure>
                            </div>
                        </div>
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend ">
                                    <p class="input-group-text bg-white border-right-0" id="inputGroup-sizing-default"><i class="fa fa-search"></i> &nbsp;<span style="font-size: 10px;" class="text-muted"></span></p>
                                </div>
                                <input type="text" class="form-control  border-left-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary " type="button" id="button-addon2"><i class="fa fa-location-arrow "></i> &nbsp;&nbsp;Detect</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
        <div class="input-group d-flex justify-content-center searchbar">
            <div class="input-group-append d-lg-none mr-2 border-0 border border-warning">
                <span class="input-group-text bg-white p-1 border-0 rounded"><a href="#">Categories</a></span>
            </div>
            <input class="form-control col-md-9 col-sm-2 rounded" type="text" placeholder="Search for items..." aria-label="Search">
        </div>
        <div class="collapse navbar-collapse mr-2" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown mr-5">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Account<br>
                        <span  style=" position:relative;position: relative;
                        top: -3px; font-size: 0.7rem !important;">Login/Sign Up</span>
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown" style="    position: absolute;left: -194px;top:70px;width: 276px; "><div>

                        <!-- Button trigger modal -->
                        <button type="button" class="text-center ml-5 btn btn-danger pl-4 pr-4" data-toggle="modal" data-target="#exampleModal">
                            Login or Signup
                        </button>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-chain-broken"></i>&nbsp;&nbsp;FAQs</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-chain-broken"></i>&nbsp;&nbsp;Offers</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-chain-broken"></i>&nbsp;&nbsp;Recipies</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <i class="fa fa-shopping-cart d-inline text-white fa-lg"></i>
    <div id="mySidenav" class="sidenav">
        <div class="container "style="background-color: #FFE298;">
            <div class="row">
                <div class="col-1">
                    <i class="fa fa-user-secret py-4"></i>
                </div>
                <div class="col-9 mt-2">
                    <span class="text-primary font-weight-normal "style="font-size: 16px;">smart bachat club</span><br><span style="font-size: 12px;">Exclusive Wholesale price</span>
                </div>
                <div class="col-1 ml-0 py-4 closenav" style="background-color: #FFD25D;">
                    <a href="javascript:void(0)"   onclick="closeNav()" class="text-muted"><i class="fa fa-angle-right fa-sm"></i></a>
                </div>
            </div>
        </div>
        <p class="sideLinks bg-light text-dark" style="font-size: 14px;">Welcome</p>
        
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-user"></i>&nbsp;&nbsp; Login</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-map-marker"></i>&nbsp;&nbsp; My Addresses</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-list-alt"></i>&nbsp;&nbsp; My Orders</a>
            <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp; My Cart</a>
            <a href="#" class="list-group-item list-group-item-action " tabindex="-1" aria-disabled="true"><i class="fa fa-money"></i>&nbsp;&nbsp; My Wallet</a>
            <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true"><i class="fa fa-chain-broken"></i>&nbsp;&nbsp; My Offers</a>
            <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true"><i class="fa fa-chain-broken"></i>&nbsp;&nbsp; My Offers</a>
            <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true"><i class="fa fa-chain-broken"></i>&nbsp;&nbsp; My Offers</a>
            <a href="#" class="list-group-item list-group-item-action" tabindex="-1" aria-disabled="true"><i class="fa fa-chain-broken"></i>&nbsp;&nbsp; My Offers</a>
        </div>
    </div>
</nav>


