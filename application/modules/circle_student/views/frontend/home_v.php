
  <main>
    <div class="position-relative">
      <!-- shape Hero -->
    <section class="section section-lg section-shaped pb-350">
      <div id="mySlider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php $i=0; foreach ($slider->result_array() as $data): ?>
            <li data-target="#mySlider" data-slide-to="<?php echo $i++?>" class="<?php echo $data['status'];?>"></li>
            <?php endforeach ?>
          </ol>
        <div class="carousel-inner"><?php foreach ($slider->result_array() as $data): ?>
           <div class="carousel-item <?php echo $data['status'];?>">
               <img class="d-block w-100" src="<?php echo base_url(); ?>assets/upload/image/slider/<?php echo $data['gambar'] ?>" alt="First slide">
            </div>
            <?php endforeach ?>
        </div>
           <a class="carousel-control-prev" href="#mySlider" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
           </a>
           <a class="carousel-control-next" href="#mySlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
            </a>
      </div>
      
        <div class="container py-lg-md d-flex">
          <div class="row justify-content-center">
              <div class="col-lg-8 text-center">
                <h1 class="display-3  text-purple">Welcome To Circle Student
                  <!-- <span>completed with examples</span> -->
                </h1>
                <p class="lead  text-purple">Mudahnya belajar di  CIRCLE STUDENT  bisa dimana saja, kapan saja dengan materi terlengkap dan terjamin kualitasnya sesuai dengan kurikulum pendidikan nasional. Penyajian yang asyik dan menarik.</p>
                  
              </div>
            </div>
          </div>
          <div class="container py-md">
            <div class="row justify-content-between align-items-center">
             <div class="col-lg-5 mb-5 mb-lg-0"><h5 class="title text-warning">Apa Keuntungan Circle Student</h5>
               <p class="left"> Dapat di akses 24 jam
                   Dengan belajar lebih mudah dan bisa diakses dimana saja dan kapan saja</p>
             </div> 
             <div class="align-self-center"></div>
             <div class="justify-content-center"><img src="<?php echo base_url();?>assets/home/img/f1-01.png"class="img-fluid rounded" style="width: 500px"></div>
           </div>
          </div>
          <div class="container py-md">
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-6 mb-lg-auto"><img src="<?php echo base_url();?>assets/home/img/bg-mapel2.png"class="img-fluid rounded shadow" style="width: 300px">
             </div> 
             <div class="col-lg-5 mb-5 mb-lg-0"><h5 class="title text-warning">Materi Apasaja yang ada di Circle Student</h5>
               <p class="right"> Menyediakan rangkuman materi yang harus / wajib dikuasai oleh santri untuk kepentingan Sukses UTS , UAS, US/M, UN/USBN dan SBMPTN. Di lengkapi dengan kumpulan-kumpulan yang prediktif beserta pembahasan yang terstruktur dan jelas (teks maupun video)</p>
             </div>
          </div>

            <div class="container py-md">
             <div class="row justify-content-between align-items-center">
              <div class="col-lg-5 mb-5 mb-lg-0"> <h5 class="title text-warning">Materi Apasaja yang ada di Circle Student</h5>
               <p class="right"> Menyediakan rangkuman materi yang harus / wajib dikuasai oleh santri untuk kepentingan Sukses UTS , UAS, US/M, UN/USBN dan SBMPTN. Di lengkapi dengan kumpulan-kumpulan yang prediktif beserta pembahasan yang terstruktur dan jelas (teks maupun video)</p>
              </div>
                 <div class="col-lg-5 mb-5 mb-lg-0"><img src="<?php echo base_url();?>assets/home/img/bg-mapel2.png"class="img-fluid rounded shadow" style="width: 300px">
               </div>
             </div>
          </div>
    
       <!--   <div class="col-md-4">
            <div class="pl-md-3">
               <div class="card bg-default shadow border-0">
                  <img src="assets/home/img/avatar.jpg" class="card-img-top">
                     <blockquote class="card-blockquote">
                       <h4 class="display-9 font-weight-bold text-white">Circle Student</h4>
                         <p class="lead text-italic text-white">solusi belajar terlengkap untuk segala kesulitan belajar kamu. Konten tersedia untuk berbagai jenjang mulai dari SD, SMP dan SMA sesuai dengan kurikulum nasional dan dirancang khusus oleh pengajar terbaik dan berpengalaman (Master Teacher). Mulai dari nonton video, latihan soal, les privat, tryout semua bisa diakses dari smartphone kamu</p>
                      </blockquote>   
                  </div>
            </div>
          </div> -->
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>
     <section class="section section-lg">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-md-2">
            <img src="<?php echo base_url();?>assets/home/img/cir-01.png" class="img-fluid floating">
          </div>
          <div class="col-md-6 order-md-1">
            <div class="pr-md-5">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                <i class="ni ni-settings-gear-65"></i>
              </div>
              <h3>Serunya Pakai Circle</h3>
              <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
              <ul class="list-unstyled mt-5">
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-settings-gear-65"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Carefully crafted components</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-html5"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Amazing page examples</h6>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-satisfied"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0">Super friendly support team</h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
      <section class="section pb-0 bg-gradient-warning">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-lg-2 ml-lg-auto">
            <div class="position-relative pl-md-5">
              <img src="<?php echo base_url();?>assets/home/img/ill/ill-2.svg" class="img-center img-fluid">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="d-flex px-3">
              <div>
                <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                  <i class="ni ni-building text-primary"></i>
                </div>
              </div>
              <div class="pl-4">
                <h4 class="display-3 text-white">Modern Interface</h4>
                <p class="text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-satisfied"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-success">Awesome Support</h5>
                    <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                    <a href="#" class="text-success">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-warning">Modular Components</h5>
                    <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever.</p>
                    <a href="#" class="text-warning">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br></br><br></br><br></br><br></br><br></br> 
    <br></br> 
    <br></br> 
    <br></br>   
    <br></br> 
    <br></br> 
    <section class="section section-lg pt-lg-0 mt--200 ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-md-4 wow bounce" id="card_menu" data-wow-duration="2s" style="cursor: pointer;" onclick="checkLogin('library');">
                <div class="card bg-default shadow border-0">
                  <img src="<?php echo base_url(); ?>assets/home/img/library.jpg" class="card-img-top">
                  <blockquote class="card-blockquote">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                      <polygon points="0,52 583,95 0,95" class="fill-default"></polygon>
                      <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default"></polygon>
                    </svg>
                  </blockquote>
                </div>
              </div>
              <div class="col-md-4 wow bounce" id="card_menu" data-wow-duration="3s" style="cursor: pointer;" onclick="checkLogin('quiz');">
                <div class="card bg-default shadow border-0">
                  <img src="<?php echo base_url(); ?>assets/home/img/quiz.jpg" class="card-img-top">
                  <blockquote class="card-blockquote">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                      <polygon points="0,52 583,95 0,95" class="fill-default"></polygon>
                      <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default"></polygon>
                    </svg>
                    
                  </blockquote>
                </div>
              </div>
              <div class="col-md-4 wow bounce" id="card_menu" data-wow-duration="4s" style="cursor: pointer;" onclick="checkLogin('report');"> 
                <div class="card bg-default shadow border-0">
                  <img src="<?php echo base_url(); ?>assets/home/img/report.jpg" class="card-img-top">
                  <blockquote class="card-blockquote">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                      <polygon points="0,52 583,95 0,95" class="fill-default"></polygon>
                      <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default"></polygon>
                    </svg>
                    
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  