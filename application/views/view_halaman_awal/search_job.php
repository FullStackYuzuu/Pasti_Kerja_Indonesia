<div class="bg"
    style="background-image: -webkit-linear-gradient(0deg, #bfacff 0%, #795fff 100%);padding: 20px;padding-top: 50px;">
    <div class="banner-content col-lg-12" style="margin-top: 0;">
    <form action="<?=base_url('index.php/home/searchjob')?>" method="POST" novalidate>
								<div class="row justify-content-center form-wrap">
									<div class="col-lg-4 form-cols">
										<input type="text" class="form-control" name="cari" value="" placeholder="what are you looging for?">
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects"">
											<select name="lokasi">
												<option  selected value="">pilih area</option>
												<?php
    												foreach ($lowongan as $row) {
														?>
														<option value="<?php echo $row->lokasi; ?>">
															<?php echo $row->lokasi ?>
														</option>
														<?php
													}
											
?>
											</select>
										</div>
									</div>
									<div class="col-lg-3 form-cols">
										<div class="default-select" id="default-selects2">
											<select name="kategori">
												<option value="">All Category</option>
												<option value="2">Medical</option>
												<option value="3">Technology</option>
												<option value="4">Goverment</option>
												<option value="5">Development</option>
											</select>
										</div>										
									</div>
									<div class="col-lg-2 form-cols ">
									    <button type="submit" class="btn btn-info">
									      <span class="lnr lnr-magnifier"></span> Search
									    </button>
									</div>								
								</div>
							</form>	
    </div>
</div>
<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-lg-8 post-list">
                <ul class="cat-list">
                    <li><a href="#">Recent</a></li>
                    <li><a href="#">Full Time</a></li>
                    <li><a href="#">Intern</a></li>
                    <li><a href="#">part Time</a></li>
                </ul>
                
                <?php
               
    	foreach ($search as $row) {
			    ?>
                <div class="single-post d-flex flex-row">
                    <div class="thumb">
                        <img src="<?=base_url('assets')?>/img/post.png" alt="">
                        <ul class="tags">
                            <li>
                                <a href="#">Art</a>
                            </li>
                            <li>
                                <a href="#">Media</a>
                            </li>
                            <li>
                                <a href="#">Design</a>
                            </li>
                        </ul>
                    </div>
                    <div class="details">
                        <div class="title d-flex flex-row justify-content-between">
                            <div class="titles">
                                <a href="single.html">
                                    <h4><?php echo $row->lokasi ?></h4>
                                </a>
                                <h6>Premium Labels Limited</h6>
                            </div>
                            <ul class="btns">
                                <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                <li><a href="#">Apply</a></li>
                            </ul>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt
                            ut dolore magna aliqua.
                        </p>
                        <h5>Job Nature: Full time</h5>
                        <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                        <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                    </div>
                </div>


                <?php
                                                        
													}
											
?>


                <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>

            </div>
            <div class="col-lg-4 sidebar">
                <div class="single-slidebar">
                    <h4>Jobs by Location</h4>
                    <ul class="cat-list">
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>New York</p><span>37</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Park Montana</p><span>57</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Atlanta</p><span>33</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Arizona</p><span>36</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Florida</p><span>47</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Rocky Beach</p><span>27</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Chicago</p><span>17</span>
                            </a></li>
                    </ul>
                </div>

                <div class="single-slidebar">
                    <h4>Top rated job posts</h4>
                    <div class="active-relatedjob-carusel">
                        <div class="single-rated">
                            <img class="img-fluid" src="<?=base_url('assets')?>/img/r1.jpg" alt="">
                            <a href="single.html">
                                <h4>Creative Art Designer</h4>
                            </a>
                            <h6>Premium Labels Limited</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
                                ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            <a href="#" class="btns text-uppercase">Apply job</a>
                        </div>
                        <div class="single-rated">
                            <img class="img-fluid" src="img/r1.jpg" alt="">
                            <a href="single.html">
                                <h4>Creative Art Designer</h4>
                            </a>
                            <h6>Premium Labels Limited</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
                                ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            <a href="#" class="btns text-uppercase">Apply job</a>
                        </div>
                        <div class="single-rated">
                            <img class="img-fluid" src="img/r1.jpg" alt="">
                            <a href="single.html">
                                <h4>Creative Art Designer</h4>
                            </a>
                            <h6>Premium Labels Limited</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
                                ididunt ut dolore magna aliqua.
                            </p>
                            <h5>Job Nature: Full time</h5>
                            <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                            <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            <a href="#" class="btns text-uppercase">Apply job</a>
                        </div>
                    </div>
                </div>

                <div class="single-slidebar">
                    <h4>Jobs by Category</h4>
                    <ul class="cat-list">
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Technology</p><span>37</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Media & News</p><span>57</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Goverment</p><span>33</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Medical</p><span>36</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Restaurants</p><span>47</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Developer</p><span>27</span>
                            </a></li>
                        <li><a class="justify-content-between d-flex" href="category.html">
                                <p>Accounting</p><span>17</span>
                            </a></li>
                    </ul>
                </div>

                <div class="single-slidebar">
                    <h4>Carrer Advice Blog</h4>
                    <div class="blog-list">
                        <div class="single-blog " style="background:#000 url(img/blog1.jpg);">
                            <a href="single.html">
                                <h4>Home Audio Recording <br>
                                    For Everyone</h4>
                            </a>
                            <div class="meta justify-content-between d-flex">
                                <p>
                                    02 Hours ago
                                </p>
                                <p>
                                    <span class="lnr lnr-heart"></span>
                                    06
                                    <span class="lnr lnr-bubble"></span>
                                    02
                                </p>
                            </div>
                        </div>
                        <div class="single-blog " style="background:#000 url(img/blog2.jpg);">
                            <a href="single.html">
                                <h4>Home Audio Recording <br>
                                    For Everyone</h4>
                            </a>
                            <div class="meta justify-content-between d-flex">
                                <p>
                                    02 Hours ago
                                </p>
                                <p>
                                    <span class="lnr lnr-heart"></span>
                                    06
                                    <span class="lnr lnr-bubble"></span>
                                    02
                                </p>
                            </div>
                        </div>
                        <div class="single-blog " style="background:#000 url(img/blog1.jpg);">
                            <a href="single.html">
                                <h4>Home Audio Recording <br>
                                    For Everyone</h4>
                            </a>
                            <div class="meta justify-content-between d-flex">
                                <p>
                                    02 Hours ago
                                </p>
                                <p>
                                    <span class="lnr lnr-heart"></span>
                                    06
                                    <span class="lnr lnr-bubble"></span>
                                    02
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End post Area -->