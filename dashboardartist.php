<?php include 'header.php' ?>
<style type="text/css">
	.table .thead-dark th {
    color: #fff;
    background-color: #FF0000;
    border-color: #FF0000;
}





         .sv-data-1{background:lightCyan;padding:0;}
         .sv-data-2{background:lightPink;height:40px;white-space:nowrap;}
         .sv-data-3{background:LightGoldenRodYellow;height:40px;white-space:nowrap;}
         .sv-data-4{background:LightSteelBlue;}
         table.sv-data-table{table-layout:fixed;}
         table.sv-data-table tbody tr{font-size:13px;padding:0;}
         table.sv-data-table tbody tr td{height:36px;}
         table.sv-data-table .td-data-item-1{padding:0;text-align:center;vertical-align:middle;}
         table.sv-data-table .td-data-item-2{padding:0;text-align:center;vertical-align:middle;whitespace:no-wrap;}
         table.sv-data-table .td-data-item-3{padding:0;text-align:center;vertical-align:middle;}
         table.sv-data-table .td-data-item-4{padding:0;text-align:right;vertical-align:middle;}
         table.sv-data-table input[type=number]{border:solid 1px #ccc;max-width:50px;}
         .edit-parameters{margin:3px;}
         table.sv-data-table .card{}
         .parameters-container .row{}
         .parameter-pg-col{background:lightBlue;margin:0;padding:0;}
         @media (max-width: 872px){table.sv-data-table{}
         div.parameter-pg-col{min-width:100%!important;padding:0;}
         .card{display:block;margin:10px auto!important;min-width:100%!important;}
         }
         @media (min-width: 872px){
            .parameters-container{background:lightPink;margin:0 auto;max-width:840px;padding:10px;}
         .card{width:195px;}
         }
         /* Vertical Tabs */
         .vertical-tabs{font-size:14px;padding:10px;color:#000000}
        .vertical-tabs .nav-tabs .nav-link{background:#000000;border:1px solid transparent;color:#fff;height:56px}
        .vertical-tabs .nav-tabs .nav-link.active{background-color:#FF0000!important;border-color:transparent !important;color:#fff;}
        .vertical-tabs .nav-tabs .nav-link{border:1px solid transparent;border-top-left-radius:0rem!important;}
        .vertical-tabs .tab-content>.active{background:#fff;display:block;}
        .vertical-tabs .nav.nav-tabs{border-bottom:0;border-right:1px solid transparent;display:block;float:left;margin-right:20px;padding-right:15px;}
        .vertical-tabs div.tab-content{border:solid 1px #fff!important;max-height:200px;}
        .vertical-tabs .sv-tab-panel{background:#fff;height:145px;padding-top:10px;}
        .vertical-tabs div#home-v.tab-pane .sv-tab-panel{background:#fff}
        .vertical-tabs div#profile-v.tab-pane .sv-tab-panel{background:#fff;}
        .vertical-tabs div#messages-v.tab-pane .sv-tab-panel{background:#fff}
        .vertical-tabs div#settings-v.tab-pane .sv-tab-panel{background:#fff}

        /* Vertical Tabs */

 .horizontal-tabs{font-size:14px;padding:10px;color:#008000}
            .horizontal-tabs .sv-tab-panel{background:#fff;height:145px;padding-top:10px;}
        .horizontal-tabs .nav-tabs .nav-link{background:#4CAF50;border:1px solid transparent;color:#fff}
        .horizontal-tabs .nav-tabs .nav-link.active{background-color:#009900!important;border-color:transparent !important;color:#fff;}
        .horizontal-tabs .nav-tabs .nav-link{border:1px solid transparent;border-top-left-radius:0rem!important;border-top-right-radius:0rem!important;}
        .horizontal-tabs .tab-content>.active{background:#fff;display:block;}
        .horizontal-tabs .nav.nav-tabs{border-bottom:0;border-right:1px solid transparent;background:#33ad33}
        .horizontal-tabs  div.tab-content{border:solid 1px #4CAF50!important;max-height:150px;}
        .horizontal-tabs  .sv-tab-panel{background:#fff;height:110px;padding-top:10px;}
        .horizontal-tabs  div#home-h.tab-pane .sv-tab-panel{background:#a6dba6}
        .horizontal-tabs  div#profile-h.tab-pane .sv-tab-panel{background:#99d699;}
        .horizontal-tabs  div#messages-h.tab-pane .sv-tab-panel{background:#8cd18c}
        .horizontal-tabs  div#settings-h.tab-pane .sv-tab-panel{background:#80cc80}
.horizontal-tabs .sv-tab-panel{padding:10px}
@media (max-width: 967px) {
      .nav.nav-tabs{border-bottom:0;border-right:1px solid transparent;display:block; margin-right:20px; wodth:100%!important}
.horizontal-tabs .nav-tabs{width:100%;padding:0}
}
     
</style>
   <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Dashboard </h4>
                        <div class="bt-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Dashboard</a>
                            <span>User</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb Section End -->
     <!-- <section class="about-section spad">
        <div class="container">
        	<div class="section-title">
    	<h4>List of Contracts</h4><br><br>
    
    </div>
    </div>
    </section> -->
   

<div class="container" >
         <div class="row">
             <div class="col-md-12	 col-sm-12">
               <div class="vertical-tabs">
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home-v" role="tab" aria-controls="home">List Of Contracts</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile-v" role="tab" aria-controls="profile">Profile</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages-v" role="tab" aria-controls="messages">Messages</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings-v" role="tab" aria-controls="settings">Settings</a>
                     </li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="home-v" role="tabpanel">
                        <div class="sv-tab-panel">	<h4>Contracts</h4></div>
                     </div>
                     <div class="tab-pane" id="profile-v" role="tabpanel">
                        <div class="sv-tab-panel"><h4>Profile Panel</h4></div>
                     </div>
                     <div class="tab-pane" id="messages-v" role="tabpanel">
                        <div class="sv-tab-panel"><h4>Messages  Panel</h4></div>
                     </div>
                     <div class="tab-pane" id="settings-v" role="tabpanel">
                        <div class="sv-tab-panel"><h4>Settings Panel</h4></div>
                     </div>
                  </div>
               </div>
            </div>
        </div>
        </div>
        <br>
<?php include 'footer.php' ?>
