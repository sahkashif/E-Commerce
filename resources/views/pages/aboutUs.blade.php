@extends('layouts.app')
@section('content')

<!--breadcrumbs area start-->
<div class="breadcrumbs_area mt-45">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
     <!--about section area -->
    <section class="about_section mt-45 mb-50">
        <div class="container">   
            <div class="row align-items-center">
                <div class="col-12">
                   <figure>
                        <div class="about_thumb">
                            <img src="{{ asset('img/about/about1.jpg') }}" alt="">
                        </div>
                        <figcaption class="about_content">
                            <h1>We are a digital agency focused on delivering content and utility user-experiences.</h1>
                            <p>Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet cursus odio tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel nunc taciti integer cras. Hac pede dis, praesent nibh ac dui mauris sit. Pellentesque mi, facilisi mauris, elit sociis leo sodales accumsan. Iaculis ac fringilla torquent lorem consectetuer, sociosqu phasellus risus urna aliquam, ornare.</p>
                            <div class="about_signature">
                                <img src="{{ asset('img/about/about-us-signature.png') }}" alt="">
                            </div>
                        </figcaption>
                    </figure>
                </div>    
            </div>
        </div>    
    </section>
    <!--about section end-->
          
    <!--chose us area start-->
    <div class="choseus_area" data-bgimg="{{ asset('img/about/about-us-policy-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{ asset('img/about/About_icon1.png') }}" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Creative Design</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{ asset('img/about/About_icon2.png') }}" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>100% Money Back Guarantee</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_chose">
                        <div class="chose_icone">
                            <img src="{{ asset('img/about/About_icon3.png') }}" alt="">
                        </div>
                        <div class="chose_content">
                            <h3>Online Support 24/7</h3>
                            <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--chose us area end-->      
           
    <!--services img area-->
    <div class="about_gallery_section mb-45">
        <div class="container">  
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="{{ asset('img/about/about2.jpg') }}" alt="">
                            </div>
                            <figcaption class="about_gallery_content">
                               <h3>What do we do?</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-4">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="{{ asset('img/about/about3.jpg') }}" alt="">
                            </div>
                            <figcaption class="about_gallery_content">
                               <h3>Our Mission</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-4 col-md-4">
                    <article class="single_gallery_section">
                        <figure>
                            <div class="gallery_thumb">
                                <img src="{{ asset('img/about/about4.jpg') }}" alt="">
                            </div>
                            <figcaption class="about_gallery_content">
                               <h3>History Of Us</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>     
    </div>
    <!--services img end-->       
            
     
     <!--team area start-->
   <div class="team_area">
       <div class="container">
            <div class="team_container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <article class="team_member">
                            <figure>
                                <div class="team_thumb">
                                    <img src="{{ asset('img/about/about-us-person1.jpg') }}" alt="">
                                </div>
                                <figcaption class="team_content">
                                    <h3>John</h3>
                                    <h5>Director</h5>
                                    <p>Phone:<a href="tel:+(800)123456789"> +(800) 123 456 789</a> <br> Email:<a href="#"> john@example.com</a> </p>
                                </figcaption>
                            </figure>   
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="team_member">
                            <figure>
                                <div class="team_thumb">
                                    <img src="{{ asset('img/about/about-us-person2.jpg') }}" alt="">
                                </div>
                                <figcaption class="team_content">
                                    <h3>Mary</h3>
                                    <h5>Designer</h5>
                                    <p>Phone:<a href="tel:+(800)123456789"> +(800) 123 456 789</a> <br> Email:<a href="#"> john@example.com</a> </p>
                                </figcaption>
                            </figure>   
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="team_member">
                            <figure>
                                <div class="team_thumb">
                                    <img src="{{ asset('img/about/about-us-person3.jpg') }}" alt="">
                                </div>
                                <figcaption class="team_content">
                                    <h3>Michael</h3>
                                    <h5>Developer</h5>
                                    <p>Phone:<a href="tel:+(800)123456789"> +(800) 123 456 789</a> <br> Email:<a href="#"> john@example.com</a> </p>
                                </figcaption>
                            </figure>   
                        </article>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <article class="team_member">
                            <figure>
                                <div class="team_thumb">
                                    <img src="{{ asset('img/about/about-us-person4.jpg') }}" alt="">
                                </div>
                                <figcaption class="team_content">
                                    <h3>James</h3>
                                    <h5>Coder</h5>
                                    <p>Phone:<a href="tel:+(800)123456789"> +(800) 123 456 789</a> <br> Email:<a href="#"> john@example.com</a> </p>
                                </figcaption>
                            </figure>   
                        </article>
                    </div>
                </div>
           </div>
       </div>
   </div>
   <!--team area end-->
     
   

@endsection