 <section class="page-section" id="services">
     <div class="container px-4 px-lg-5">
         <h2 class="text-center mt-0">Our Sermons</h2>
         <hr class="divider" />
         <div class="row gx-4 gx-lg-5">
             <div class="col-lg-3 col-md-6 text-center">


             </div>
         </div>

         <h2 class="section-title">Latest sermons</h2>
         <div class="sermon-carousel">
             <ul class="seremon-list">

             </ul>
         </div>
         <div class="sermon-carousel">
             <div class="sermon-intro">
                 <p>Welcome to our collection of latest sermons, where faith meets everyday life. Each message is
                     carefully crafted to inspire, encourage, and challenge you in your spiritual journey. Whether
                     you're a long-time believer or just exploring faith, these sermons offer insights and wisdom for
                     all.</p>

                 <ul class="seremon-list">
                     <!-- Slideshow container -->
                     <div class="slideshow-container">
                         @foreach ($add_sermons as $add_sermon)
                             <!-- Full-width images with number and caption text -->
                             <div class="mySlides fade">
                                 <div class="numbertext">{{ $add_sermon->id }}</div>
                                 <img src="https://png.pngtree.com/thumb_back/fh260/background/20230523/pngtree-bible-gif-hd-wallpaper-image_2683159.jpg"
                                     style="width:100%">
                                 <p class="textme">{{ $add_sermon->title }}</p>
                                 <div class="text">{{ $add_sermon->text }}</div>
                             </div>
                         @endforeach

                         <!-- Next and previous buttons -->
                         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                         <a class="next" onclick="plusSlides(1)">&#10095;</a>
                     </div>
                     <br>

                     <!-- The dots/circles -->
                     <div style="text-align:center">
                         <span class="dot" onclick="currentSlide(1)"></span>
                         <span class="dot" onclick="currentSlide(2)"></span>
                         <span class="dot" onclick="currentSlide(3)"></span>
                     </div>
                 </ul>
             </div>
         </div>
 </section>
