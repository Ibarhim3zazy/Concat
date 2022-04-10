 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <!-- light box cdn -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
 <link rel="stylesheet" href="css/protfolio.css">

 <?php require_once 'header.php';?>


 <!-- --------------- header portfolio ------------ -->
 <header class="protfolio container">
  <div class="portfolio__container grid">

   <div class="portfolio__data">

    <div class="portfolio__border">
     <div class="portfolio__perfil">
      <img src="user_media/image/bear.jpg" alt="">
     </div>
    </div>

    <h2 class="portfolio__name">
     ibrahim
    </h2>

    <h3 class="portfolio__profession">
     web developer
    </h3>

    <ul class="portfolio__social">
     <a href="https://www.linkedin.com" class="portfolio__social-link" target="_blank">
      <i class="fa-brands fa-linkedin"></i>
     </a>
     <a href="https://github.com" class="portfolio__social-link" target="_blank">
      <i class="fa-brands fa-github"></i>
     </a>
     <a href="https://www.instagram.com" class="portfolio__social-link" target="_blank">
      <i class="fa-brands fa-instagram-square"></i>
     </a>
    </ul>
   </div>

   <div class="portfolio__info grid">
    <div class="portfolio__info-group">
     <h3 class="portfolio__info-number">7</h3>
     <p class="portfolio__info-description">Years of <br> work</p>
    </div>
    <div class="portfolio__info-group">
     <h3 class="portfolio__info-number">+99</h3>
     <p class="portfolio__info-description">Completed <br> projects</p>
    </div>
   </div>

   <div class="portfolio__buttons">
    <a download="" href="" class="button">
     Download CV <i class="fa-solid fa-download"></i>
    </a>

    <div class="portfolio__buttons-small">
     <a href="" target="_blank" class="button button__small button__gray">
      <i class="fa-brands fa-whatsapp"></i>
     </a>

     <a href="" target="_blank" class="button button__small button__gray">
      <i class="fa-brands fa-facebook-messenger"></i>
     </a>
    </div>
   </div>

  </div>
 </header>

 <!-- --------------- main portfolio ------------ -->
 <main class="main">
  <section class="filters container">
   <!-- filter tabs -->
   <ul class="filters__content">
    <button class="filters_button filter-tab-active" data-target="#about">
     <a href="#about">about</a>
    </button>
    <button class="filters_button" data-target="#quality">
     <a href="#quality">Quality</a>
    </button>
    <button class="filters_button" data-target="#skills">
     <a href="#skills">skills</a>
    </button>
    <button class="filters_button" data-target="#service">
     <a href="#service">service</a>
    </button>
    <button class="filters_button" data-target="#portfolio">
     <a href="#portfolio">portfolio</a>
    </button>
    <button class="filters_button" data-target="#review">
     <a href="#review">review</a>
    </button>
    <button class="filters_button" data-target="#content">
     <a href="#content">content</a>
    </button>
   </ul>
   <div class="filters__sections">
    <!-- about me -->
    <div class="container-fluid py-5 filter-active filter" data-content id="about">
     <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
       <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke : 1px #dee2e6">
        About
       </h1>
       <h1 class="position-absolute text-uppercase text-primary">
        About Me
       </h1>
      </div>
      <div class="row align-items-center">
       <div class="col-lg-5 pb-4 pb-lg-0">
        <img src="user_media/image/bear.jpg" class="img-fluid rounded w-100">
       </div>
       <div class="col-lg-7">
        <h3 class="mb-4">
         Web Developer
        </h3>
        <p>
         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus illum veniam quis natus rerum praesentium,
         quidem provident veritatis necessitatibus excepturi numquam ducimus perspiciatis! Inventore deleniti rem
         mollitia deserunt ipsum maiores?
        </p>
        <div class="row mb-3">
         <div class="col-sm-6 py-2">
          <h6>name: <span class="text-secondary"> Ibrahim Azazy</span> </h6>
         </div>
         <div class="col-sm-6 py-2">
          <h6>Birthday: <span class="text-secondary"> 2 | 12 | 2000</span> </h6>
         </div>
         <div class="col-sm-6 py-2">
          <h6>Degree: <span class="text-secondary"> </span> Master </h6>
         </div>
         <div class="col-sm-6 py-2">
          <h6>Experience: <span class="text-secondary"> 7 Years</span> </h6>
         </div>
         <div class="col-sm-6 py-2">
          <h6>Phone: <span class="text-secondary"> +20 0102 0022 020</span> </h6>
         </div>
         <div class="col-sm-6 py-2">
          <h6>Email: <span class="text-secondary"> ibrahim290@example.com</span> </h6>
         </div>
         <div class="col-sm-6 py-2">
          <h6>Address: <span class="text-secondary"> 123 Street, Kolkata , WB</span> </h6>
         </div>
         <div class="col-sm-6 py-2">
          <h6>Freelance: <span class="text-secondary"> Avaliable</span> </h6>
         </div>
        </div>
        <!-- button -->
        <a href="" class="btn btn-outline-primary blue mr-4">Hire Me</a>
        <a href="" class="btn btn-outline-primary ">Learn More</a>
       </div>
      </div>
     </div>
    </div>
    <!-- quality -->
    <div class="container-fluid py-5 filter" data-content id="quality">
     <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
       <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke : 1px #dee2e6">
        Quality
       </h1>
       <h1 class="position-absolute text-uppercase text-primary">
        Education & Experience
       </h1>
      </div>
      <div class="row align-items-center">
       <div class="col-lg-6">
        <h3 class="mb-4">
         My Education
        </h3>

        <div class="border-left border-primary p1-4 m1-2">
         <div class="position-relative ex-me mb-4">
          <i class="far fa-dot-circle text-primary position-absolute" style="top:10px; left:-12px; font-size:22px;"></i>
          <h5 class="font-width-bold mb-1" style="padding-left: 30px;">Dachelor of Science</h5>
          <p class="mb-2" style="padding-left: 30px;"><strong>Combridge University</strong> <small>2005 - 2009</small>
          </p>
          <p style="padding-left: 30px; font-size:14px;">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod molestias dicta omnis ea, eum voluptatem illo
           cumque praesentium ullam qui soluta, temporibus fugiat. Praesentium delectus necessitatibus eligendi,
           voluptas corrupti dicta.
          </p>
         </div>
        </div>
        <div class="border-left border-primary p1-4 m1-2">
         <div class="position-relative ex-me mb-4">
          <i class="far fa-dot-circle text-primary position-absolute" style="top:10px; left:-12px; font-size:22px;"></i>
          <h5 class="font-width-bold mb-1" style="padding-left: 30px;">Master In CSE</h5>
          <p class="mb-2" style="padding-left: 30px;"><strong>Combridge University</strong> <small>2005 - 2009</small>
          </p>
          <p style="padding-left: 30px; font-size:14px;">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod molestias dicta omnis ea, eum voluptatem illo
           cumque praesentium ullam qui soluta, temporibus fugiat. Praesentium delectus necessitatibus eligendi,
           voluptas corrupti dicta.
          </p>
         </div>
        </div>
        <div class="border-left border-primary p1-4 m1-2">
         <div class="position-relative ex-me mb-4">
          <i class="far fa-dot-circle text-primary position-absolute" style="top:10px; left:-12px; font-size:22px;"></i>
          <h5 class="font-width-bold mb-1" style="padding-left: 30px;">IIT Kharagpur</h5>
          <p class="mb-2" style="padding-left: 30px;"><strong>Combridge University</strong> <small>2005 - 2009</small>
          </p>
          <p style="padding-left: 30px; font-size:14px;">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod molestias dicta omnis ea, eum voluptatem illo
           cumque praesentium ullam qui soluta, temporibus fugiat. Praesentium delectus necessitatibus eligendi,
           voluptas corrupti dicta.
          </p>
         </div>
        </div>
       </div>
       <!-- Experience -->
       <div class="col-lg-6">
        <h3 class="mb-4">
         My Experience
        </h3>
        <div class="border-left border-primary p1-4 m1-2">
         <div class="position-relative ex-me mb-4">
          <i class="far fa-dot-circle text-primary position-absolute" style="top:10px; left:-12px; font-size:22px;"></i>
          <h5 class="font-width-bold mb-1" style="padding-left: 30px;">Web Designer</h5>
          <p class="mb-2" style="padding-left: 30px;"><strong>XSY Soft Company</strong> <small>2005 - 2009</small>
          </p>
          <p style="padding-left: 30px; font-size:14px;">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod molestias dicta omnis ea, eum voluptatem illo
           cumque praesentium ullam qui soluta, temporibus fugiat. Praesentium delectus necessitatibus eligendi,
           voluptas corrupti dicta.
          </p>
         </div>
        </div>
        <div class="border-left border-primary p1-4 m1-2">
         <div class="position-relative ex-me mb-4">
          <i class="far fa-dot-circle text-primary position-absolute" style="top:10px; left:-12px; font-size:22px;"></i>
          <h5 class="font-width-bold mb-1" style="padding-left: 30px;">Apps Developer</h5>
          <p class="mb-2" style="padding-left: 30px;"><strong>Combridge University</strong> <small>2005 - 2009</small>
          </p>
          <p style="padding-left: 30px; font-size:14px;">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod molestias dicta omnis ea, eum voluptatem illo
           cumque praesentium ullam qui soluta, temporibus fugiat. Praesentium delectus necessitatibus eligendi,
           voluptas corrupti dicta.
          </p>
         </div>
        </div>
        <div class="border-left border-primary p1-4 m1-2">
         <div class="position-relative ex-me mb-4">
          <i class="far fa-dot-circle text-primary position-absolute" style="top:10px; left:-12px; font-size:22px;"></i>
          <h5 class="font-width-bold mb-1" style="padding-left: 30px;">Web Developer</h5>
          <p class="mb-2" style="padding-left: 30px;"><strong>Combridge University</strong> <small>2005 - 2009</small>
          </p>
          <p style="padding-left: 30px; font-size:14px;">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod molestias dicta omnis ea, eum voluptatem illo
           cumque praesentium ullam qui soluta, temporibus fugiat. Praesentium delectus necessitatibus eligendi,
           voluptas corrupti dicta.
          </p>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- skills -->
    <div class=" container-fluid py-5 filter" data-content id="skills">
     <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
       <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke : 1px #dee2e6">
        Skills
       </h1>
       <h1 class="position-absolute text-uppercase text-primary">
        My Skills
       </h1>
      </div>
      <div class="row align-item-center">
       <div class="col-md-6">
        <div class="skill mb-4">
         <div class="d-flex justify-content-between">
          <h6 class="font-width-bold">HTML</h6>
          <h6 class="font-width-bold"> 95%</h6>
         </div>
         <div class="progress">
          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0"
           aria-valuemax="100"></div>
         </div>
        </div>
        <div class="skill mb-4">
         <div class="d-flex justify-content-between">
          <h6 class="font-width-bold">CSS</h6>
          <h6 class="font-width-bold"> 85%</h6>
         </div>
         <div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0"
           aria-valuemax="100"></div>
         </div>
        </div>
        <div class="skill mb-4">
         <div class="d-flex justify-content-between">
          <h6 class="font-width-bold">PHP</h6>
          <h6 class="font-width-bold"> 90%</h6>
         </div>
         <div class="progress">
          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0"
           aria-valuemax="100"></div>
         </div>
        </div>
        <div class="skill mb-4">
         <div class="d-flex justify-content-between">
          <h6 class="font-width-bold">Javascript</h6>
          <h6 class="font-width-bold"> 80%</h6>
         </div>
         <div class="progress">
          <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
          </div>
         </div>
        </div>
       </div>
       <div class="col-md-6">
        <div class="skill mb-4">
         <div class="d-flex justify-content-between">
          <h6 class="font-width-bold">Paython</h6>
          <h6 class="font-width-bold"> 75%</h6>
         </div>
         <div class="progress">
          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100"></div>
         </div>
        </div>
        <div class="skill mb-4">
         <div class="d-flex justify-content-between">
          <h6 class="font-width-bold">HTML</h6>
          <h6 class="font-width-bold"> 95%</h6>
         </div>
         <div class="progress">
          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
          </div>
         </div>
        </div>
        <div class="skill mb-4">
         <div class="d-flex justify-content-between">
          <h6 class="font-width-bold">Argular Js</h6>
          <h6 class="font-width-bold"> 97%</h6>
         </div>
         <div class="progress">
          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="97" aria-valuemin="0"
           aria-valuemax="100"></div>
         </div>
        </div>
        <div class="skill mb-4">
         <div class="d-flex justify-content-between">
          <h6 class="font-width-bold">WordPress</h6>
          <h6 class="font-width-bold"> 87%</h6>
         </div>
         <div class="progress">
          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="87" aria-valuemin="0"
           aria-valuemax="100"></div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- service -->
    <div class="container-fluid pt-5 filter" data-content id="service">
     <div class="container">
      <div class="service-h4 position-relative d-flex align-items-center justify-content-center">
       <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke : 1px #dee2e6">
        Service
       </h1>
       <h1 class="position-absolute text-uppercase text-primary">
        My Services
       </h1>
      </div>
      <div class="row pb-4">
       <div class="service-box col-lg-4 col-md-6 text-center mb-5">
        <div class="d-flex align-items-center justify-content-center mb-4"
         style="flex-direction: column; row-gap:15px;">
         <div class="top" style="display: flex; align-items:center;justify-content:center;">
          <i class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3" style="font-size: 22px;"></i>
          <h4 class="font-weight-bold m-0" style="font-size: 20px; font-weight:600;color:#333">Web Design</h4>
         </div>
         <p
          style="font-size: 14px;color: #999;font-weight: var(--normal-font-size); max-width : 300px; word-wrap:break-word">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore perferendis quis accusantium eum!
         </p>
         <a href="" class="border-bottom  text-decoration-none" style="color: #85e0da; border-color : #85e0da">Read
          More</a>
        </div>
       </div>
       <div class="service-box col-lg-4 col-md-6 text-center mb-5">
        <div class="d-flex align-items-center justify-content-center mb-4"
         style="flex-direction: column; row-gap:15px;">
         <div class="top" style="display: flex; align-items:center;justify-content:center;">
          <i class="fab fa-2x fa-apple service-icon bg-primary text-white mr-3" style="font-size: 22px;"></i>
          <h4 class="font-weight-bold m-0" style="font-size: 20px; font-weight:600;color:#333">App Developer</h4>
         </div>
         <p
          style="font-size: 14px;color: #999;font-weight: var(--normal-font-size); max-width : 300px; word-wrap:break-word">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore perferendis quis accusantium eum!
         </p>
         <a href="" class="border-bottom  text-decoration-none" style="color: #85e0da; border-color : #85e0da">Read
          More</a>
        </div>
       </div>
       <div class="service-box col-lg-4 col-md-6 text-center mb-5">
        <div class="d-flex align-items-center justify-content-center mb-4"
         style="flex-direction: column; row-gap:15px;">
         <div class="top" style="display: flex; align-items:center;justify-content:center;">
          <i class="fa fa-2x fa-search service-icon bg-primary text-white mr-3" style="font-size: 22px;"></i>
          <h4 class="font-weight-bold m-0" style="font-size: 20px; font-weight:600;color:#333">Web Design</h4>
         </div>
         <p
          style="font-size: 14px;color: #999;font-weight: var(--normal-font-size); max-width : 300px; word-wrap:break-word">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore perferendis quis accusantium eum!
         </p>
         <a href="" class="border-bottom  text-decoration-none" style="color: #85e0da; border-color : #85e0da">Read
          More</a>
        </div>
       </div>
       <div class="service-box col-lg-4 col-md-6 text-center mb-5">
        <div class="d-flex align-items-center justify-content-center mb-4"
         style="flex-direction: column; row-gap:15px;">
         <div class="top" style="display: flex; align-items:center;justify-content:center;">
          <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3" style="font-size: 22px;"></i>
          <h4 class="font-weight-bold m-0" style="font-size: 20px; font-weight:600;color:#333">Web Design</h4>
         </div>
         <p
          style="font-size: 14px;color: #999;font-weight: var(--normal-font-size); max-width : 300px; word-wrap:break-word">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore perferendis quis accusantium eum!
         </p>
         <a href="" class="border-bottom  text-decoration-none" style="color: #85e0da; border-color : #85e0da">Read
          More</a>
        </div>
       </div>
       <div class="service-box col-lg-4 col-md-6 text-center mb-5">
        <div class="d-flex align-items-center justify-content-center mb-4"
         style="flex-direction: column; row-gap:15px;">
         <div class="top" style="display: flex; align-items:center;justify-content:center;">
          <i class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3" style="font-size: 22px;"></i>
          <h4 class="font-weight-bold m-0" style="font-size: 20px; font-weight:600;color:#333">SEO</h4>
         </div>
         <p
          style="font-size: 14px;color: #999;font-weight: var(--normal-font-size); max-width : 300px; word-wrap:break-word">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore perferendis quis accusantium eum!
         </p>
         <a href="" class="border-bottom  text-decoration-none" style="color: #85e0da; border-color : #85e0da">Read
          More</a>
        </div>
       </div>
       <div class="service-box col-lg-4 col-md-6 text-center mb-5">
        <div class="d-flex align-items-center justify-content-center mb-4"
         style="flex-direction: column; row-gap:15px;">
         <div class="top" style="display: flex; align-items:center;justify-content:center;">
          <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3" style="font-size: 22px;"></i>
          <h4 class="font-weight-bold m-0" style="font-size: 20px; font-weight:600;color:#333">Apps Design</h4>
         </div>
         <p
          style="font-size: 14px;color: #999;font-weight: var(--normal-font-size); max-width : 300px; word-wrap:break-word">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore perferendis quis accusantium eum!
         </p>
         <a href="" class="border-bottom  text-decoration-none" style="color: #85e0da; border-color : #85e0da">Read
          More</a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- portfolio -->
    <div class="container-fluid pt-5 pb-3 portfolio-container filter" data-content id="portfolio">
     <div class="container">
      <div class="service-h4 position-relative d-flex align-items-center justify-content-center">
       <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke : 1px #dee2e6">
        Gallery
       </h1>
       <h1 class="position-absolute text-uppercase text-primary">
        My Protfolio
       </h1>
      </div>
      <!-- menu -->
      <div class="row">
       <div class="col-12 text-center mb-2">
        <ul class="list-inline mb-4" id="portfolio-flters">
         <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*" style="cursor: pointer;">ALL</li>
         <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first" style="cursor: pointer;">Design</li>
         <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second" style="cursor: pointer;">Development</li>
         <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third" style="cursor: pointer;">Marketing</li>
        </ul>
       </div>
      </div>
      <div class="row portfolio-container">
       <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
        <div class="position-relative overflow-hidden mb-2">
         <img src="user_media/image/background.jpg" alt="" class="img-fluid rounded w-100" style="height: 270px; ">
         <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
          <a href="user_media/image/background.jpg" data-lightbox="portfolio">
           <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
          </a>
         </div>
        </div>
       </div>
       <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
        <div class="position-relative overflow-hidden mb-2">
         <img src="user_media/image/pi-1.jpg" alt="" class="img-fluid rounded w-100" style="height: 270px;">
         <div class=" portfolio-btn bg-primary d-flex align-items-center justify-content-center">
          <a href="user_media/image/pi-1.jpg" data-lightbox="portfolio">
           <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
          </a>
         </div>
        </div>
       </div>
       <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
        <div class="position-relative overflow-hidden mb-2">
         <img src="user_media/image/pi-2.jpg" alt="" class="img-fluid rounded w-100" style="height: 270px;">
         <div class=" portfolio-btn bg-primary d-flex align-items-center justify-content-center">
          <a href="user_media/image/pi-2.jpg" data-lightbox="portfolio">
           <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
          </a>
         </div>
        </div>
       </div>

       <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
        <div class="position-relative overflow-hidden mb-2">
         <img src="user_media/image/pi-3.jpg" alt="" class="img-fluid rounded w-100" style="height: 270px;">
         <div class=" portfolio-btn bg-primary d-flex align-items-center justify-content-center">
          <a href="user_media/image/pi-3.jpg" data-lightbox="portfolio">
           <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
          </a>
         </div>
        </div>
       </div>
       <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
        <div class="position-relative overflow-hidden mb-2">
         <img src="user_media/image/pi-4.jpg" alt="" class="img-fluid rounded w-100" style="height: 270px;">
         <div class=" portfolio-btn bg-primary d-flex align-items-center justify-content-center">
          <a href="user_media/image/pi-4.jpg" data-lightbox="portfolio">
           <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
          </a>
         </div>
        </div>
       </div>
       <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
        <div class="position-relative overflow-hidden mb-2">
         <img src="user_media/image/pi-7.jpg" alt="" class="img-fluid rounded w-100" style="height: 270px;">
         <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
          <a href="user_media/image/pi-7.jpg" data-lightbox="portfolio">
           <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
          </a>
         </div>
        </div>
       </div>

      </div>
     </div>
    </div>
    <!-- review -->
    <div class="container-fluid review-container filter py-5" data-content id="review">
     <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
       <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke : 1px #dee2e6">
        Review
       </h1>
       <h1 class="position-absolute text-uppercase text-primary">
        Clients says
       </h1>
      </div>

      <div class="row justify-content-center">
       <div class="col-lg-9">
        <div class="owl-carousel testimonial-carousel">
         <div class="text-center owl-dots">
          <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
          <h4 class="font-weight-light mb-4">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos architecto alias inventore commodi!
          </h4>
          <img src="user_media/image/bear.jpg" alt="" class="img-fluid rounded-circle mx-auto mb-3"
           style="width: 80px; height: 80px; ">
          <h5 class="font-weight-bold m-0">Client name:</h5>
          <span>Profession</span>
         </div>
         <div class="text-center owl-dots">
          <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
          <h4 class="font-weight-light mb-4">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos architecto alias inventore commodi!
          </h4>
          <img src="user_media/image/bear.jpg" alt="" class="img-fluid rounded-circle mx-auto mb-3"
           style="width: 80px; height: 80px; ">
          <h5 class="font-weight-bold m-0">Client name:</h5>
          <span>Profession</span>
         </div>

         <div class="text-center owl-dots">
          <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
          <h4 class="font-weight-light mb-4">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos architecto alias inventore commodi!
          </h4>
          <img src="user_media/image/bear.jpg" alt="" class="img-fluid rounded-circle mx-auto mb-3"
           style="width: 80px; height: 80px; ">
          <h5 class="font-weight-bold m-0">Client name:</h5>
          <span>Profession</span>
         </div>
        </div>
       </div>
      </div>

     </div>

    </div>
    <!-- content -->
    <div class="container-fluid contact-container filter py-5" data-content id="content">
     <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
       <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke : 1px #dee2e6">
        Contact
       </h1>
       <h1 class="position-absolute text-uppercase text-primary">
        Contact Me
       </h1>
      </div>

      <div class="row justify-content-center">
       <div class="col-lg-8">
        <div class="contact-form text-center">
         <div id="success"></div>
         <form action="" id="contactForm" novalidate="novalidate">
          <div class="form-row">
           <div class="control-group col-sm-6">
            <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required"
             data-validation-required-message="Please enter your name ">
            <p class="help-block text-danger"></p>


           </div>

           <div class="control-group col-sm-6">
            <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required"
             data-validation-required-message="Please enter your email ">
            <p class="help-block text-danger"></p>
           </div>


          </div>

          <div class="control-group">
           <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required"
            data-validation-required-message="Please enter your Subject ">
           <p class="help-block text-danger"></p>
          </div>
          <div class="control-group">
           <textarea class="form-control py-3 px-4" required id="message" rows="5" placeholder="Message"></textarea>
           <p class="help-block text-danger"></p>
          </div>
          <div>
           <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">
            Send Message
           </button>
          </div>
         </form>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
 </main>

 <script src=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.0/typed.min.js"></script>
 <!-- OwlCarousel2 -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
 <!-- light box js code  -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
 <script src="js/portfolio.js"></script>