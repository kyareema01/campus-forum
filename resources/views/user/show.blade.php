
@extends('layouts.app')

@section('content')

 
        
    
  <!-- ***** Main Banner Area Start ***** -->
  {{-- <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="{{asset('assets/images/course-video.mp4')}}" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Graduate School of Management</h6>
            <h2><em>Your</em> Classroom</h2>
            <div class="main-button">
                <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Main Banner Area End ***** -->


<section class="features">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="features-post">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-pencil"></i>All Courses</h4>
            </div>
            <div class="content-hide">
              <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
              <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post second-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-graduation-cap"></i>Virtual Class</h4>
            </div>
            <div class="content-hide">
              <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
              <div class="scroll-to-section"><a href="#section3">Details</a></div>
              <button class="btn btn-success">Herse</button>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post third-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-book"></i>Real Meeting</h4>
            </div>
            <div class="content-hide">
              <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
              <div class="scroll-to-section"><a href="#section4">Read More</a></div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

<section class="section why-us" data-section="section2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>{{ $post->title }}</h2>
        </div>
      </div>
      <div class="col-md-12">
        <div class="news m-auto text-center">
            @if($post->file !=null)
            <tr>
              <td>
                <img src="postImg/{{$post->file}}" alt="image">
              </td>
            </tr>
            @endif
            <tr>
              <td>
                <p style="color:#fff">{{$post['post']}}</p>
              </td>
            </tr>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- <section class="section coming-soon" data-section="section3">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-xs-12">
        <div class="continer centerIt">
          <div>
            <h4>Take <em>any online course</em> and win $326 for your next class</h4>
            <div class="counter">

              <div class="days">
                <div class="value">00</div>
                <span>Days</span>
              </div>

              <div class="hours">
                <div class="value">00</div>
                <span>Hours</span>
              </div>

              <div class="minutes">
                <div class="value">00</div>
                <span>Minutes</span>
              </div>

              <div class="seconds">
                <div class="value">00</div>
                <span>Seconds</span>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="right-content">
          <div class="top-content">
            <h6>Register your free account and <em>get immediate</em> access to online courses</h6>
          </div>
          <form id="contact" action="" method="get">
            <div class="row">
              <div class="col-md-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Get it now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> --}}

{{-- <section class="section courses" data-section="section4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Choose Your Course</h2>
        </div>
      </div>
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src=" {{asset('assets/images/courses-01.jpg')}} " alt="Course #1">
          <div class="down-content">
            <h4>Digital Marketing</h4>
            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
            <div class="author-image">
              <img src="{{asset('')}}" alt="Author 1">
            </div>assets/images/author-01.png
            <div class="text-button-pay">
              <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src=" {{asset('assets/images/courses-02.jpg')}} " alt="Course #2">
          <div class="down-content">
            <h4>Business World</h4>
            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
            <div class="author-image">
              <img src="{{asset('assets/images/author-02.png')}}" alt="Author 2">
            </div>
            <div class="text-button-free">
              <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('assets/images/courses-03.jpg')}}" alt="Course #3">
          <div class="down-content">
            <h4>Media Technology</h4>
            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
            <div class="author-image">
              <img src="{{asset('assets/images/author-03.png')}}" alt="Author 3">
            </div>
            <div class="text-button-pay">
              <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('assets/images/courses-04.jpg')}}" alt="Course #4">
          <div class="down-content">
            <h4>Communications</h4>
            <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
            <div class="author-image">
              <img src="{{asset('assets/images/author-04.png')}}" alt="Author 4">
            </div>
            <div class="text-button-free">
              <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('assets/images/courses-05.jpg')}}" alt="">
          <div class="down-content">
            <h4>Business Ethics</h4>
            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
            <div class="author-image">
              <img src="{{asset('assets/images/author-05.png')}}" alt="">
            </div>
            <div class="text-button-pay">
              <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('assets/images/courses-01.jpg')}}" alt="">
          <div class="down-content">
            <h4>Photography</h4>
            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
            <div class="author-image">
              <img src="{{asset('assets/images/author-01.png')}}" alt="">
            </div>
            <div class="text-button-free">
              <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('assets/images/courses-02.jpg')}}" alt="">
          <div class="down-content">
            <h4>Web Development</h4>
            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
            <div class="author-image">
              <img src="{{asset('assets/images/author-02.png')}}" alt="">
            </div>
            <div class="text-button-free">
              <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('assets/images/courses-03.jpg')}}" alt="">
          <div class="down-content">
            <h4>Learn HTML CSS</h4>
            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
            <div class="author-image">
              <img src="{{asset('assets/images/author-03.png')}}" alt="">
            </div>
            <div class="text-button-pay">
              <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('assets/images/courses-04.jpg')}}" alt="">
          <div class="down-content">
            <h4>Social Media</h4>
            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
            <div class="author-image">
              <img src="{{asset('assets/images/author-04.png')}}" alt="">
            </div>
            <div class="text-button-pay">
              <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('assets/images/courses-05.jpg')}}" alt="">
          <div class="down-content">
            <h4>Digital Arts</h4>
            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
            <div class="author-image">
              <img src="{{asset('assets/images/author-05.png')}}" alt="">
            </div>
            <div class="text-button-free">
              <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('assets/images/courses-01.jpg')}}" alt="">
          <div class="down-content">
            <h4>Media Streaming</h4>
            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
            <div class="author-image">
              <img src="{{asset('assets/images/author-01.png')}}" alt="">
            </div>
            <div class="text-button-pay">
              <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}


{{-- <section class="section video" data-section="section5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="left-content">
          <span>our presentation is for you</span>
          <h4>Watch the video to learn more <em>about Grad School</em></h4>
          <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. You may <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> for details.
          <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>
          <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a></div>
        </div>
      </div>
      <div class="col-md-6">
        <article class="video-item">
          <div class="video-caption">
            <h4>Team Tecknow</h4>
          </div>
          <figure>
            <a href="https://portflio-vercel-master.vercel.app/" class="play"><img src="{{asset('assets/images/main-thumb.png')}}"></a>
          </figure>
        </article>
      </div>
    </div>
  </div>
</section> --}}

<section class="section contact" data-section="section6">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>School Location</h2>
        </div>
      </div>
      {{-- <div class="col-md-6">
      
      <!-- Do you need a working HTML contact-form script?
                
                  Please visit https://templatemo.com/contact page -->
                  
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-md-6">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                </fieldset>
              </div>
              <div class="col-md-6">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                </fieldset>
              </div>
            <div class="col-md-12">
              <fieldset>
                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <button type="submit" id="form-submit" class="button">Send Message Now</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div> --}}
      <div class="col">
        <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.1740895602675!2d4.503454850025123!3d8.482447499615665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103653167b08bddb%3A0xe53c8e8a6d9f894!2sAl%20Hikmah%20University%2C%20240211%2C%20Ilorin%2C%20Kwara!5e0!3m2!1sen!2sng!4v1675524977081!5m2!1sen!2sng" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>