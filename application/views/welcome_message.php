<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/style.css'); ?>">
</head>
  <body>
      <header>
          <h1>Cyber Security ID</h1>
          <?php $this->load->view('_partials/navbar.php'); ?>
      </header>

      <main>
          <section id="about">
              <h2>Selamat datang di kursus cyber security! </h2>
              <p>
                Di sini, Anda akan mempelajari berbagai keterampilan dan 
                pengetahuan yang diperlukan untuk melindungi diri Anda, bisnis, dan organisasi dari ancaman keamanan 
                digital yang semakin meningkat. Kursus ini dirancang untuk semua tingkat pengalaman, mulai dari pemula 
                hingga ahli. Kami akan memandu Anda melalui berbagai topik, mulai dari dasar-dasar keamanan jaringan dan 
                sistem operasi, hingga taktik dan teknik serangan yang digunakan oleh penyerang. Anda juga akan 
                mempelajari cara mengidentifikasi dan mencegah serangan phishing, malware, dan DDoS, serta cara mengelola 
                dan memperbarui sistem keamanan Anda untuk menjaga keamanan dan keandalan jaringan Anda. Dengan mengikuti 
                kursus ini, Anda akan memiliki kepercayaan diri yang lebih besar dalam menghadapi ancaman keamanan digital
                dan memiliki keterampilan yang diperlukan untuk melindungi diri Anda dan organisasi Anda dari serangan 
                cyber. </p>
          </section>

          <section id="products">
            <h2>Our Products</h2>
            <div class="card-container">
                <div class="card">
                    <img src="https://www.nesabamedia.com/wp-content/uploads/2019/08/Security-e1565890683231-1.jpg" alt="Product 1">
                    <h3>Keamanan Jaringan</h3>
                    <p>Kursus cyber security ini akan membantu Anda memperkenalkan dasar-dasar keamanan jaringan, mengidentifikasi kerentanan, dan melindungi sistem Anda dari ancaman keamanan jaringan seperti peretasan, malware, dan serangan DDoS.</p>
                    <button>Learn More</button>
                </div>
                <div class="card">
                    <img src="https://image.freepik.com/free-vector/database_45037-9.jpg" alt="Product 2">
                    <h3>Keamanan Database</h3>
                    <p>Mempelajari cara melindungi basis data Anda dari serangan cyber dengan memperkenalkan dasar-dasar keamanan basis data, mengidentifikasi kerentanan, dan melindungi sistem Anda dari ancaman keamanan basis data seperti SQL injection, kebocoran data, dan serangan ransomware.</p>
                    <button>Learn More</button>
                </div>
                <div class="card">
                    <img src="https://d3rv1nmzvje89q.cloudfront.net/optimized_v5/2017/12/not-set-landing-pages_featrure-768x674.jpg" alt="Product 3">
                    <h3>Keamanan Website</h3>
                    <p>Mempelajari cara melindungi website Anda dari serangan cyber dengan memperkenalkan dasar-dasar keamanan website, mengidentifikasi kerentanan, dan melindungi sistem Anda dari ancaman keamanan website seperti cross-site scripting (XSS), cross-site request forgery (CSRF), dan serangan DDoS.</p>
                    <button>Learn More</button>
                </div>
            </div>
        </section>

          <section id="testimonials">
              <h2>Testimonials</h2>
              <div class="testimonial-container">
                <div class="testimonial">
                  <img src="https://cms-cdn.placeholder.co/scott_goodbrand_1_7bf2aa1815.svg?width=3840" alt="John Doe">
                  <p>"Kursus cyber security ini benar-benar membuka mata saya tentang pentingnya keamanan digital."</p>
                  <cite>John Doe</cite>
                </div>
                <div class="testimonial">
                  <img src="https://cms-cdn.placeholder.co/Alex_Hayden_1_5f3a152e0a.jpg?width=3840" alt="Jane Smith">
                  <p>"Saya sangat terkesan dengan materi yang disajikan dalam kursus cyber security ini."</p>
                  <cite>Jane Smith</cite>
                </div>
                <div class="testimonial">
                  <img src="https://cms-cdn.placeholder.co/Bryce_Jones_e0e102396f.jpg?width=3840" alt="Bob Johnson">
                  <p>"Saya merasa lebih siap untuk melindungi data pribadi saya dan bisnis saya dari ancaman cyber."</p>
                  <cite>Bob Johnson</cite>
                </div>
              </div>
            </section>

        <section id="contact">
          <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or comments, please feel free to contact us using the form below:</p>
            <form>
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" placeholder="Enter your name">
        
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" placeholder="Enter your email">
        
              <label for="message">Message:</label>
              <textarea id="message" name="message" placeholder="Enter your message"></textarea>
        
              <button type="submit">Submit</button>
            </form>
          </div>
        </section>
        
      </main>

      <?php $this->load->view('_partials/footer.php'); ?>
  </body>

</html>
