<?php include('../../includes/topo.php'); ?>
<?php include('../../includes/barra-topo.php'); ?>


<!-- END TOPBAR -->
<!-- START CONTAINER -->
<div class="page-container row-fluid">

    <?php include('../../includes/menu.php'); ?>
    <!-- START CONTENT -->
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>

            <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
                <div class="page-title">

                    <div class="float-left">
                        <h1 class="title">Dashboard</h1>
                    </div>


                </div>
            </div>
            <div class="clearfix"></div>


            <div class="col-xl-12">
                <section class="box nobox">
                    <div class="content-body">

                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="r4_counter db_box">
                                    <i class='float-left fa fa-thumbs-up icon-md icon-rounded icon-primary'></i>
                                    <div class="stats">
                                        <h4><strong>0</strong></h4>
                                        <span>Marcas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="r4_counter db_box">
                                    <i class='float-left fa fa-shopping-cart icon-md icon-rounded icon-orange'></i>
                                    <div class="stats">
                                        <h4><strong>0</strong></h4>
                                        <span>Produtos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="r4_counter db_box">
                                    <i class='float-left fa fa-dollar icon-md icon-rounded icon-purple'></i>
                                    <div class="stats">
                                        <h4><strong>0</strong></h4>
                                        <span>Pedidos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="r4_counter db_box">
                                    <i class='float-left fa fa-users icon-md icon-rounded icon-warning'></i>
                                    <div class="stats">
                                        <h4><strong>0</strong></h4>
                                        <span>Clientes</span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </section>
            </div>

        </section>
    </section>
    <!-- END CONTENT -->
    <div class="page-chatapi hideit">

        <div class="search-bar">
            <input type="text" placeholder="Search" class="form-control">
        </div>

        <div class="chat-wrapper">
            <h4 class="group-head">Groups</h4>
            <ul class="group-list list-unstyled">
                <li class="group-row">
                    <div class="group-status available">
                        <i class="fa fa-circle"></i>
                    </div>
                    <div class="group-info">
                        <h4><a href="#">Work</a></h4>
                    </div>
                </li>
                <li class="group-row">
                    <div class="group-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                    <div class="group-info">
                        <h4><a href="#">Friends</a></h4>
                    </div>
                </li>

            </ul>


            <h4 class="group-head">Favourites</h4>
            <ul class="contact-list">

                <li class="user-row" id='chat_user_1' data-user-id='1'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Clarine Vassar</a></h4>
                        <span class="status available" data-status="available"> Available</span>
                    </div>
                    <div class="user-status available">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_2' data-user-id='2'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Brooks Latshaw</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_3' data-user-id='3'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Clementina Brodeur</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>

            </ul>


            <h4 class="group-head">More Contacts</h4>
            <ul class="contact-list">

                <li class="user-row" id='chat_user_4' data-user-id='4'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Carri Busey</a></h4>
                        <span class="status offline" data-status="offline"> Offline</span>
                    </div>
                    <div class="user-status offline">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_5' data-user-id='5'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Melissa Dock</a></h4>
                        <span class="status offline" data-status="offline"> Offline</span>
                    </div>
                    <div class="user-status offline">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_6' data-user-id='6'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Verdell Rea</a></h4>
                        <span class="status available" data-status="available"> Available</span>
                    </div>
                    <div class="user-status available">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_7' data-user-id='7'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Linette Lheureux</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_8' data-user-id='8'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Araceli Boatright</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_9' data-user-id='9'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Clay Peskin</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_10' data-user-id='10'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Loni Tindall</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_11' data-user-id='11'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Tanisha Kimbro</a></h4>
                        <span class="status idle" data-status="idle"> Idle</span>
                    </div>
                    <div class="user-status idle">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_12' data-user-id='12'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Jovita Tisdale</a></h4>
                        <span class="status idle" data-status="idle"> Idle</span>
                    </div>
                    <div class="user-status idle">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>

            </ul>
        </div>

    </div>


    <div class="chatapi-windows ">


    </div>
</div>

<?php include('../../includes/rodape.php'); ?>