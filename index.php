<?php include 'header.php' ?>
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<style type="text/css">
  /*  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');*/

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

.wrapper {
    padding: 30px;
    max-width: 1200px;
    margin: auto
}

.h3 {
    font-weight: 900
}

.views {
    font-size: 0.85rem
}

.btn {
    color: #666;
    font-size: 0.85rem
}

.btn:hover {
    color: #61b15a
}

.green-label {
    background-color: #defadb;
    color: #48b83e;
    border-radius: 5px;
    font-size: 0.8rem;
    margin: 0 3px
}

.radio,
.checkbox {
    padding: 6px 10px
}

.border {
    border-radius: 12px
}

.options {
    position: relative;
    padding-left: 25px
}

.radio label,
.checkbox label {
    display: block;
    font-size: 14px;
    cursor: pointer;
    margin: 0
}

.options input {
    opacity: 0
}

.checkmark {
    position: absolute;
    top: 0px;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #f8f8f8;
    border: 1px solid #ddd;
    border-radius: 50%
}

.options input:checked~.checkmark:after {
    display: block
}

.options .checkmark:after {
    content: "";
    width: 9px;
    height: 9px;
    display: block;
    background: white;
    position: absolute;
    top: 52%;
    left: 51%;
    border-radius: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 300ms ease-in-out 0s
}

.options input[type="radio"]:checked~.checkmark {
    background: #61b15a;
    transition: 300ms ease-in-out 0s
}

.options input[type="radio"]:checked~.checkmark:after {
    transform: translate(-50%, -50%) scale(1)
}

.count {
    font-size: 0.8rem
}

label {
    cursor: pointer
}

.tick {
    display: block;
    position: relative;
    padding-left: 23px;
    cursor: pointer;
    font-size: 0.8rem;
    margin: 0
}

.tick input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0
}

.check {
    position: absolute;
    top: 1px;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #f8f8f8;
    border: 1px solid #ddd;
    border-radius: 3px
}

.tick:hover input~.check {
    background-color: #f3f3f3
}

.tick input:checked~.check {
    background-color: #61b15a
}

.check:after {
    content: "";
    position: absolute;
    display: none
}

.tick input:checked~.check:after {
    display: block;
    transform: rotate(45deg) scale(1)
}

.tick .check:after {
    left: 6px;
    top: 2px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg) scale(2)
}

#country {
    font-size: 0.8rem;
    border: none;
    border-left: 1px solid #ccc;
    padding: 0px 10px;
    outline: none;
    font-weight: 900
}

.close {
    font-size: 1.2rem
}

div.text-muted {
    font-size: 0.85rem
}

#sidebar {
    width: 25%;
    float: left
}

.category {
    font-size: 0.9rem;
    cursor: pointer
}

.list-group-item {
    border: none;
    padding: 0.3rem 0.4rem 0.3rem 0rem
}

.badge-primary {
     background-color: #fadbdb;
    color: #ff0000;
}

.brand .check {
    background-color: #fff;
    top: 3px;
    border: 1px solid #666
}

.brand .tick {
    font-size: 1rem;
    padding-left: 25px
}

.rating .check {
    background-color: #fff;
    border: 1px solid #666;
    top: 0
}

.rating .tick {
    font-size: 0.9rem;
    padding-left: 25px
}

.rating .fas.fa-star {
    color: #ffbb00;
    padding: 0px 3px
}

.brand .tick:hover input~.check,
.rating .tick:hover input~.check {
    background-color: #f9f9f9
}

.brand .tick input:checked~.check,
.rating .tick input:checked~.check {
    background-color: #61b15a
}

#products {
    width: 75%;
    padding-left: 30px;
    margin: 0;
    float: right
}

.card:hover {
    transform: scale(1.1);
    transition: all 0.5s ease-in-out;
    cursor: pointer
}

.card-body {
    padding: 0.5rem
}

.card-body .description {
    font-size: 0.78rem;
    padding-bottom: 8px
}

div.h6,
h6 {
    margin: 0
}

.product .fa-star {
    font-size: 0.9rem
}

.rebate {
    font-size: 0.9rem
}

.btn.btn-primary {
    background-color: #48b83e;
    color: #fff;
    border: 1px solid #008000;
    
    font-weight: 800
}

.btn.btn-primary:hover {
    background-color: #48b83ee8
}

img {
    width: 192px;
    height: 132px;
    object-fit: contain
}

.clear {
    clear: both
}

.btn.btn-success {
    visibility: hidden
}

@media(min-width:992px) {

    .filter,
    #mobile-filter {
        display: none
    }
}

@media(min-width:768px) and (max-width:991px) {

    .radio,
    .checkbox {
        padding: 6px 10px;
        width: 49%;
        float: left;
        margin: 5px 5px 5px 0px
    }

    .filter,
    #mobile-filter {
        display: none
    }
}

@media(min-width:576px) and (max-width:767px) {
    #sidebar {
        width: 35%
    }

    #products {
        width: 65%
    }

    .filter,
    #mobile-filter {
        display: none
    }

    .h3+.ml-auto {
        margin: 0
    }
}

@media(max-width:575px) {
    .wrapper {
        padding: 10px
    }

    .h3 {
        font-size: 1.3rem
    }

    #sidebar {
        display: none
    }

    #products {
        width: 100%;
        float: none
    }

    #products {
        padding: 0
    }

    .clear {
        float: left;
        width: 80%
    }

    .btn.btn-success {
        visibility: visible;
        margin: 10px 0px;
        color: #fff;
        padding: 0.2rem 0.1rem;
        width: 20%
    }

    .green-label {
        width: 50%
    }

    .btn.text-success {
        padding: 0
    }

    .content,
    #mobile-filter {
        clear: both
    }
}
.btn.btn-primary {
    background-color: #ff0000;
    color: #fff;
    border: 1px solid #ff0000;
    border-radius: 20px;
    font-weight: 800;
}
.product .fas.fa-star {
    color: #ffbb00;
    padding: 0px 3px;
}

.options input[type="radio"]:checked~.checkmark {
    background: #ff0000;
    transition: 300ms ease-in-out 0s;
}
.options input[type="radio"]:checked~.checkmark {
    background: #ff0000;
    transition: 300ms ease-in-out 0s;
}
.tick input:checked~.check {
    background-color: #ff0000;
}
.text-success {
    color: #ff0000!important;
}
.spad {
    padding-top: 36px;
    padding-bottom: 19px;
    padding-left: 385px;
}
.brand .tick input:checked~.check, .rating .tick input:checked~.check {
    background-color: #ff0000;
}
</style>
    <!-- Header End -->

    <!-- Hero Section Begin -->
   <!--  <section class="hero-section">
        <div class="container">
          
        </div>
    </section> -->

    <!-- Hero Section End -->

    <!-- Search Section Begin -->
    <section class="search-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h4 style="color:#fff ;">Search Here....!</h4>
                    </div>
                </div>
                <div class="col-lg-5">
                  <!--   <div class="change-btn">
                        <div class="cb-item">
                            <label for="cb-rent" class="active">
                                For Rent
                                <input type="radio" id="cb-rent">
                            </label>
                        </div>
                        <div class="cb-item">
                            <label for="cb-sale">
                                For Sale
                                <input type="radio" id="cb-sale">
                            </label>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="search-form-content">
               
                <form action="#" class="filter-form">
                    <div class="row">
                     <div class="col-lg-7">

                    <input type="text" name="" class="form-control">
                </div>
                 <div class="col-lg-5 text-left">
      
                    <button type="button" class="search-btn sm-width" style="border-radius:10px;">Search</button>
                </div>
            </div>
                </form>
            </div>
            <div class="more-option">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-heading active">
                            <a data-toggle="collapse" data-target="#collapseOne" style="color:#fff;">
                    Advanced Search
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="mo-list">
                                    <div class="ml-column">
                                        <label for="air">Air conditioning
                                            <input type="checkbox" id="air">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="lundry">Laundry
                                            <input type="checkbox" id="lundry">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="refrigerator">Refrigerator
                                            <input type="checkbox" id="refrigerator">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="washer">Washer
                                            <input type="checkbox" id="washer">
                                            <span class="checkbox"></span>
                                        </label>
                                    </div>
                                    <div class="ml-column">
                                        <label for="barbeque">Barbeque
                                            <input type="checkbox" id="barbeque">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="lawn">Lawn
                                            <input type="checkbox" id="lawn">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="sauna">Sauna
                                            <input type="checkbox" id="sauna">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="wifi">Wifi
                                            <input type="checkbox" id="wifi">
                                            <span class="checkbox"></span>
                                        </label>
                                    </div>
                                    <div class="ml-column">
                                        <label for="dryer">Dryer
                                            <input type="checkbox" id="dryer">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="microwave">Microwave
                                            <input type="checkbox" id="microwave">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="pool">Swimming Pool
                                            <input type="checkbox" id="pool">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="window">Window Coverings
                                            <input type="checkbox" id="window">
                                            <span class="checkbox"></span>
                                        </label>
                                    </div>
                                    <div class="ml-column last-column">
                                        <label for="gym">Gym
                                            <input type="checkbox" id="gym">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="shower">OutdoorShower
                                            <input type="checkbox" id="shower">
                                            <span class="checkbox"></span>
                                        </label>
                                        <label for="tv">Tv Cable
                                            <input type="checkbox" id="tv">
                                            <span class="checkbox"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
     <style type="text/css">

.set-bg :hover  {
        transition: all 0.5s ease-in-out 0s;
    transform: scale(1.3);
}

 </style>
   <!--   <section class="categories-section">
        <div class="container">
         <div class="row">
                <div class="col-lg-12">
                      <center>
                    <div class="section-title">
                      <h3> Artist Category</h3>
                    </div>
                    </center>
                </div>
            </div>
               </div>

        <div class="cs-item-list">
            <div class="cs-item set-bg hover12 " data-setbg="img/category/category6.jpg">
                <div class="cs-text ">
                    <h5>Wedding</h5>
                   
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="img/category/category1.jpg">
                <div class="cs-text">
                    <h5>Pre Wedding</h5>
                    
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="img/category/category3.jpg">
                <div class="cs-text">
                    <h5>Product Shoot</h5>
                   
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="img/category/category4.jpg">
                <div class="cs-text">
                    <h5>Fashion </h5>
                 
                </div>
            </div>
            <div class="cs-item set-bg" data-setbg="img/category/category5.jpg">
                <div class="cs-text">
                    <h5>Sports</h5>
                   
                </div>
            </div>
        </div>

    </section> -->
    <!-- Search Section End -->

    <!-- Property Section Begin -->
   
    <div class="wrapper">
   <!--  <div class="d-md-flex align-items-md-center">
        <div class="h3">Search Result</div>
        <div class="ml-auto d-flex align-items-center views"> <span class="btn text-success"> <span class="fas fa-th px-md-2 px-1"></span><span>Grid view</span> </span> <span class="btn"> <span class="fas fa-list-ul"></span><span class="px-md-2 px-1">List view</span> </span> <span class="green-label px-md-2 px-1">428</span> <span class="text-muted">Products</span> </div>
    </div> -->
    <!-- <div class="d-lg-flex align-items-lg-center pt-2">
        <div class="form-inline d-flex align-items-center my-2 mr-lg-2 radio bg-light border"> <label class="options">Most Popular <input type="radio" name="radio"> <span class="checkmark"></span> </label> <label class="options">Cheapest <input type="radio" name="radio" checked> <span class="checkmark"></span> </label> </div>
        <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label class="tick">Farm <input type="checkbox" checked="checked"> <span class="check"></span> </label> <span class="text-success px-2 count"> 328</span> </div>
        <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label class="tick">Bio <input type="checkbox"> <span class="check"></span> </label> <span class="text-success px-2 count"> 72</span> </div>
        <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2"> <label class="tick">Czech republic <input type="checkbox"> <span class="check"></span> </label> <span class="border px-1 mx-2 mr-3 font-weight-bold count"> 12</span> <select name="country" id="country" class="bg-light">
                <option value="" hidden>Country</option>
                <option value="India">India</option>
                
            </select> </div>
    </div> -->
    <!-- <div class="d-sm-flex align-items-sm-center pt-2 clear">
        <div class="text-muted filter-label">Applied Filters:</div>
        <div class="green-label font-weight-bold p-0 px-1 mx-sm-1 mx-0 my-sm-0 my-2">Selected Filtre <span class=" px-1 close">&times;</span> </div>
        <div class="green-label font-weight-bold p-0 px-1 mx-sm-1 mx-0">Selected Filtre <span class=" px-1 close">&times;</span> </div>
    </div> -->
    <div class="filters"> <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filter<span class="px-1 fas fa-filter"></span></button> </div>
    <div id="mobile-filter">
        <div class="py-3">
            <h5 class="font-weight-bold">Categories</h5>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Wedding <span class="badge badge-primary badge-pill">3128</span> </li>
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Per-wedding <span class="badge badge-primary badge-pill">112</span> </li>
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Product Shoot <span class="badge badge-primary badge-pill">32</span> </li>
                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Sports <span class="badge badge-primary badge-pill">48</span> </li>
            </ul>
        </div>
        <div class="py-3">
            <h5 class="font-weight-bold">Brands</h5>
            <form class="brand">
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Royal Fields <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Crasmas Fields <input type="checkbox" checked> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma Farm <input type="checkbox" checked> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field Eve <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar Steve <input type="checkbox"> <span class="check"></span> </label> </div>
            </form>
        </div>
        <div class="py-3">
            <h5 class="font-weight-bold">Rating</h5>
            <form class="rating">
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> 
               
                </div>
            
            </form>

        </div>
    </div>
    <div class="content py-md-0 py-3">
        <section id="sidebar">
            <div class="py-3">
                <h5 class="font-weight-bold">Categories</h5>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Wedding <span class="badge badge-primary badge-pill">328</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Per-wedding <span class="badge badge-primary badge-pill">112</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Product Shoot <span class="badge badge-primary badge-pill">32</span> </li>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Sports <span class="badge badge-primary badge-pill">48</span> </li>
                </ul>
            </div>
            <div class="py-3">
                <h5 class="font-weight-bold">Location</h5>
                <form class="brand">
                    <div class="form-inline d-flex align-items-center py-1"> <input type="text" name="" class="form-control" placeholder="Search Location"> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <!-- <div class="btn btn-primary">Search</div> </div> -->
                    <!-- <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma Farm <input type="checkbox" checked> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field Eve <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar Steve <input type="checkbox"> <span class="check"></span> </label> </div> -->
                </form>
            </div>
            <div class="py-3">
                <h5 class="font-weight-bold">Rating</h5>
                <form class="rating">
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                </form>
            </div>
             <div class="btn btn-primary">Search</div>
        </section> <!-- Products Section -->
        <section id="products">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card"> <img class="card-img-top" src="img/artist/artist1.jpg">
                            <div class="card-body">

                                <h6 class="font-weight-bold pt-1"><img class="rounded-circle" style="width: 40px; height: 40px;" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">Shramik Vaibhav</h6><i class="fas fa-badge"></i>
                                <div class="text-muted description">Space for small product description</div>
                                <div class="d-flex align-items-center product"> 4.5/5 <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                <div class="d-flex align-items-center justify-content-between pt-3">
                                    <div class="d-flex flex-column">
                                        <div class="h6 font-weight-bold">36.99 USD</div>
                                        <div class="text-muted rebate">48.56</div>
                                    </div>
                                    <div class="btn btn-primary">View Profile</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-md-0 pt-4">
                        <div class="card"> <img class="card-img-top" src="img/artist/artist2.jpg">
                            <div class="card-body">
                                <h6 class="font-weight-bold pt-1"> <img class="rounded-circle" style="width: 40px; height: 40px;" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">Shramik Vaibhav</h6>
                                <div class="text-muted description">Space for small product description</div>
                                <div class="d-flex align-items-center product"> 4.5/5 <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                <div class="d-flex align-items-center justify-content-between pt-3">
                                    <div class="d-flex flex-column">
                                        <div class="h6 font-weight-bold">36.99 USD</div>
                                        <div class="text-muted rebate">48.56</div>
                                    </div>
                                    <div class="btn btn-primary">View Profile</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-0 pt-4">
                        <div class="card"> <img class="card-img-top" src="img/artist/artist3.jpg">
                            <div class="card-body">
                                <h6 class="font-weight-bold pt-1"><img class="rounded-circle" style="width: 40px; height: 40px;" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">Shramik Vaibhav</h6>
                                <div class="text-muted description">Space for small product description</div>
                                <div class="d-flex align-items-center product"> 4.5/5 <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                <div class="d-flex align-items-center justify-content-between pt-3">
                                    <div class="d-flex flex-column">
                                        <div class="h6 font-weight-bold">36.99 USD</div>
                                        <div class="text-muted rebate">48.56</div>
                                    </div>
                                   <div class="btn btn-primary">View Profile</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                        <div class="card"> <img class="card-img-top" src="img/artist/artist4.jpg">
                            <div class="card-body">
                                <h6 class="font-weight-bold pt-1"><img class="rounded-circle" style="width: 40px; height: 40px;" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">Shramik Vaibhav</h6>
                                <div class="text-muted description">Space for small product description</div>
                                <div class="d-flex align-items-center product"> 4.5/5 <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                <div class="d-flex align-items-center justify-content-between pt-3">
                                    <div class="d-flex flex-column">
                                        <div class="h6 font-weight-bold">36.99 USD</div>
                                        <div class="text-muted rebate">48.56</div>
                                    </div>
                                   <div class="btn btn-primary">View Profile</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                        <div class="card"> <img class="card-img-top" src="img/artist/artist5.jpg">
                            <div class="card-body">
                                <h6 class="font-weight-bold pt-1"><img class="rounded-circle" style="width: 40px; height: 40px;" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">Shramik Vaibhav</h6>
                                <div class="text-muted description">Space for small product description</div>
                                <div class="d-flex align-items-center product"> 4.5/5  <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                <div class="d-flex align-items-center justify-content-between pt-3">
                                    <div class="d-flex flex-column">
                                        <div class="h6 font-weight-bold">36.99 USD</div>
                                        <div class="text-muted rebate">48.56</div>
                                    </div>
                                  <div class="btn btn-primary">View Profile</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                        <div class="card"> <img class="card-img-top" src="img/artist/artist6.jpg">
                            <div class="card-body">
                                <h6 class="font-weight-bold pt-1"><img class="rounded-circle" style="width: 40px; height: 40px;" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">Shramik Vaibhav</h6>
                                <div class="text-muted description">Space for small product description</div>
                                <div class="d-flex align-items-center product"> 4.5/5<span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                <div class="d-flex align-items-center justify-content-between pt-3">
                                    <div class="d-flex flex-column">
                                        <div class="h6 font-weight-bold">36.99 USD</div>
                                        <div class="text-muted rebate">48.56</div>
                                    </div>
                                    <div class="btn btn-primary">View Profile</div>     
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                        <div class="card"> <img class="card-img-top" src="img/artist/artist6.jpg">
                            <div class="card-body">
                                <h6 class="font-weight-bold pt-1"><img class="rounded-circle" style="width: 40px; height: 40px;" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">Shramik Vaibhav</h6>
                                <div class="text-muted description">Space for small product description</div>
                                <div class="d-flex align-items-center product"> 4.5/5<span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                <div class="d-flex align-items-center justify-content-between pt-3">
                                    <div class="d-flex flex-column">
                                        <div class="h6 font-weight-bold">36.99 USD</div>
                                        <div class="text-muted rebate">48.56</div>
                                    </div>
                                    <div class="btn btn-primary">View Profile</div>     
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                        <div class="card"> <img class="card-img-top" src="img/artist/artist6.jpg">
                            <div class="card-body">
                                <h6 class="font-weight-bold pt-1"><img class="rounded-circle" style="width: 40px; height: 40px;" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">Shramik Vaibhav</h6>
                                <div class="text-muted description">Space for small product description</div>
                                <div class="d-flex align-items-center product"> 4.5/5<span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                <div class="d-flex align-items-center justify-content-between pt-3">
                                    <div class="d-flex flex-column">
                                        <div class="h6 font-weight-bold">36.99 USD</div>
                                        <div class="text-muted rebate">48.56</div>
                                    </div>
                                    <div class="btn btn-primary">View Profile</div>     
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 pt-lg-4 pt-4">
                        <div class="card"> <img class="card-img-top" src="img/artist/artist6.jpg">
                            <div class="card-body">
                                <h6 class="font-weight-bold pt-1"><img class="rounded-circle" style="width: 40px; height: 40px;" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">Shramik Vaibhav</h6>
                                <div class="text-muted description">Space for small product description</div>
                                <div class="d-flex align-items-center product"> 4.5/5<span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                <div class="d-flex align-items-center justify-content-between pt-3">
                                    <div class="d-flex flex-column">
                                        <div class="h6 font-weight-bold">36.99 USD</div>
                                        <div class="text-muted rebate">48.56</div>
                                    </div>
                                    <div class="btn btn-primary">View Profile</div>     
                                </div>
                            </div>
                        </div>
                    </div>  
                     
                </div>
            </div>
        </section>
    </div>
</div>
   





