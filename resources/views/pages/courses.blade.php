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
                        <li>portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

<!--portfolio section -->
    <div class="portfolio_section_area mt-45 mb-45">
        <div class="portfolio_button">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio_tab_button"> 
                            <button class="active" data-filter="*">all</button>   
                            <button  data-filter=".company">Company</button>   
                            <button  data-filter=".computers">Computers</button>   
                            <button  data-filter=".general">General</button>   
                            <button  data-filter=".hipster">Hipster</button>   
                            <button  data-filter=".food">Just Food</button>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio_tab">
            <div class="container-fluid p-0">
                <div class="row no-gutters portfolio_gallery">
                    
                        <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers food">
                                <div class="single_portfolio_inner">
                                    <div class="portfolio_thumb">
                                        <a href="#"><img src="{{ asset('img/portfolio/port1.jpg') }}" alt=""></a>
                                       
                                        <div class="portfolio_content">
                                            <a href="portfolio-details.html">Acoustic Guitars</a>
                                        </div>
                                    </div>
                               </div>
                            </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers general">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port2.jpg') }}" alt=""></a>
                                
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Electric Guitars</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item company general">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port3.jpg') }}" alt=""></a>
                               
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Musical Theory</a>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers hipster">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port4.jpg') }}" alt=""></a>
                               
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Art & Crafts</a>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers general food">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port5.jpg') }}" alt=""></a>
                                
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Violin</a>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item company general hipster">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port6.jpg') }}" alt=""></a>
                               
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Piano</a>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers company food">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port7.jpg') }}" alt=""></a>
                                
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Percussion</a>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers general Hipster">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port8.jpg') }}" alt=""></a>
                               
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Flutes/Banshi</a>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item company general hipster food">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port9.jpg') }}" alt=""></a>
                                
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Professional Vocals</a>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers company hipster food">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port10.jpg') }}" alt=""></a>
                               
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Bass Guitars</a>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers company general food">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port11.jpg') }}" alt=""></a>
                               
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Recitation</a>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers company general hipster">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port12.jpg') }}" alt=""> </a>
                                
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Drums</a>
                                </div>
                            </div>
                       </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers general">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port13.jpg') }}" alt=""></a>
                                
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Traditional Music</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers general">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port14.jpg') }}" alt=""></a>
                                
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Cajon</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers general">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port15.jpg') }}" alt=""></a>
                                
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Western Music</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers general">
                        <div class="single_portfolio_inner">
                            <div class="portfolio_thumb">
                                <a href="#"><img src="{{ asset('img/portfolio/port16.jpg') }}" alt=""></a>
                                
                                <div class="portfolio_content">
                                    <a href="portfolio-details.html">Tabla</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
               
            </div>
        </div>
    </div>
    <!--portfolio section end-->
@endsection