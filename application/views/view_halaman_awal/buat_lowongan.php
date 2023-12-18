<body class="bg-gradient-primary">
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Buat Lowongan		
							</h1>	
							<!-- <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Blog</a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Blog Single</a></p> -->
						</div>											
					</div>
				</div>
			</section>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="flex justify-content-center">
                    
                    <div class="col-lg-7">
                        <div class="p-5">
                           
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Lowongan</h1>
                            </div>
                            <form method="POST" action="" novalidate>
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" name="lowongan" class="form-control form-control-user"
                                            id="exampleFirstName" placeholder="lowongan"
                                            value="<?= set_value('lowongan'); ?>">
                                        <?= form_error('lowongan','<small class = "text-danger pl-3">','</small>');?>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <input type="text" name="requirement" class="form-control form-control-user"
                                        id="exampleInputEmail" placeholder="requiement"
                                        value="<?= set_value('requiement'); ?>">
                                    <?= form_error('requirement','<small class = "text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="status" name="status">
                                        <option value="open">Open</option>
                                        <option value="closed">Closed</option>

                                    </select>

                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="lokasi" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="lokasi"
                                            value="<?= set_value('lokasi'); ?>">
                                        <?= form_error('lokasi','<small class = "text-danger pl-3">','</small>');?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="kategori" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="kategori"
                                            value="<?= set_value('kategori'); ?>">
                                        <?= form_error('kategori','<small class = "text-danger pl-3">','</small>');?>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Buat
                                </button>
                                <hr>

                            </form>
                            <hr>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>