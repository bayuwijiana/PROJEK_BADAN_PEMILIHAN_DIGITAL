@extends('layouts.user')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="view
    " content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
           <!-- ======= Contact Section ======= -->
    <section id="REKRUTMEN" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Regist Employee</h2>
          <h3><span>Send Email To job vacancy  </span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>





          <div class="col-lg-6">
            <form action="/kirim" method="post"  >
              @csrf
            <div class="row">
                <div class="col form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" required>
                </div>

                <div class="col form-group">
                  <label>Website</label>
                  <input type="text" class="form-control" name="website" id="email" placeholder="Your website" required>
                </div>
              </div>


              <div class="form-group">
                  <label> Email Tujuan</label>
                <input type="text" class="form-control" name="email" id="subject" placeholder="email" required>
              </div>

              <div class="form-group">
                <label>Keterangan</label>
                <textarea class="form-control" name="komentar" rows="5" placeholder="Message to Job Vacansy" required></textarea>
              </div>
              
              <div class="text-center">
                
              <button class="btn btn-primary" type="submit">Send Message</button>

            </div>
            </form>
          </div>
                  <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Bizzland Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@bizland.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

       



</body>
</html>
@endsection