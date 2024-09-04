<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Components</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> 
  <style>

      .home-cont{
          display: flex;
          flex-direction: column;
          height: 100vh;
          background-image: url("https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bGlicmFyeXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80");
          background-size: cover;
          font-family: "Open Sans";
      }
      .navbar{
          display: flex;
          justify-content: space-between;
          align-items: center;
          background-image: linear-gradient(to bottom ,#658cbb, white);
          padding: 5px;
      }
      .logo-img{
          height: 5vh;
          border-radius: 20px;
      }
      .home-text-cont{
          display: flex;
          justify-content: space-around;
          width: 20rem;
      }
      .home-text{
          display: flex;
          align-items: center;
          height: 50rem;
          padding-left: 20px;
          font-size: 5rem;
          color: #fff9e3;
          font-family: "Bree Serif";
          font-weight: 300;
      }
  </style>
  </head>
  <body>
    <section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="https://img.freepik.com/premium-photo/letter-logo-flat-minimal-simple-white-background_959624-209.jpg" class="logo-img" alt="logo" />
              <a class="navbar-brand" href="#">Find It</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="LibraryManagement.php">Search</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Login
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"><a href="Login.php" style="color: black;">Sign Up</a></a></li>
                      <li><a class="dropdown-item" href="#">Sign-In</a></li>
                    </ul>
              </div>
            </div>
          </nav>
    </section>
    <section>
    <div class="home-cont">
        <div class="home-text">
            A LIBRARY <br /> IS A <br /> HOSPITAL <br /> FOR THE MIND
        </div>
    </div>
</section>
<section>
    <div class="container py-3">
        <header>
          <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
          </div>
        </header>
      
        <main>
          <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Free</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>Only for 1 user</li>
                    <li>Only able to read books</li>
                    <li>No Storage</li>
                    <li>Email support</li>
                    <li>NO Help center access</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                  <h4 class="my-0 fw-normal">Pro</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$19<small class="text-body-secondary fw-light">/mo</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>5 users included</li>
                    <li>Read and Download books</li>
                    <li>10 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                  <h4 class="my-0 fw-normal">Premium</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>10 users included</li>
                    <li> Read , Write and Publish books</li>
                    <li>15 GB of storage</li>
                    <li>Priority Phone and email support</li>
                    <li>Help center access</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
</section>
<section>
  <section>
    <div class="container" style='display:flex;flex-direction:column;align-items:center;justify-content:center;'>
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F6%2F2020%2F02%2Fminalima_hp1_flat_compressed.jpg" class="d-block" alt="couple"  height="500px" width="600px">
          </div>
          <div class="carousel-item">
            <img src="https://img.buzzfeed.com/buzzfeed-static/static/2020-12/21/0/asset/f69da90b1e93/sub-buzz-5094-1608511484-18.jpg" class="d-block"    height="500px" width="600px" alt="dog">
          </div>
          <div class="carousel-item">
            <img src="https://designforwriters.com/wp-content/uploads/2017/10/design-for-writers-book-cover-tf-2-a-million-to-one.jpg" class="d-block"   alt="family"  height="500px" width="600px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
</section>
<section>
  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="./home.html" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
      </ul>
      <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
    </footer>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
home.php
Displaying home.php.