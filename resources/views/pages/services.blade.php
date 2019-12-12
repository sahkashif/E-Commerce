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
                            <li>our services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--services img area-->
    <div class="services_gallery mt-45">
        <div class="container">  
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_services">
                        <div class="services_thumb">
                            <a href="#" ><img src="{{ asset('img/service/services1.jpg') }}" alt=""></a>
                        </div>
                        <div class="services_content">
                           <h3>CUSTOM SHOP</h3>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services">
                        <div class="services_thumb">
                            <a href="#" ><img src="{{ asset('img/service/services2.jpg') }}" alt=""> </a>
                        </div>
                        <div class="services_content">
                           <h3>  GUITAR CARE </h3>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services">
                        <div class="services_thumb">
                            <a href="#" ><img src="{{ asset('img/service/services3.jpg') }}" alt=""></a>
                        </div>
                        <div class="services_content">
                           <h3> STUDIO DESIGN</h3>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
     <!--services img end-->

     <!--our services area-->
    <div class="our_services">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="services_title">
                        <h2>OUR SERVICES</h2>
                        <p> We offer </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fab fa-cuttlefish" aria-hidden="true"></i>
                        </div>
                        <div class="services_desc">
                            <h3>CUSTOM SHOP</h3>
                            <p>Transform your imaginations to reality. Build your own custom instruments with us !</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fas fa-guitar"></i>
                        </div>
                        <div class="services_desc">
                            <h3>GUITAR CARE</h3>

                            <p>Your guitar is part of your soul. We understand how to take care of it ! Visit us for any guitar related issues.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">

                            <i class="fas fa-drum"></i>

                        </div>
                        <div class="services_desc">
                            <h3>DRUM HOOD</h3>

                            <p>Drummers united under a roof to discuss and share ideas.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fas fa-microphone-alt"></i>
                        </div>
                        <div class="services_desc">
                            <h3>STUDIO DESIGN</h3>
                            <p>Design your home or professional studio with us.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fas fa-columns" aria-hidden="true"></i>
                        </div>
                        <div class="services_desc">
                            <h3>ROOM ACOUSTICS</h3>
                            <p>Your room sound and acoustic treatment is important for your music. Our engineers are here to give you the best acoustic treatment.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fab fa-artstation" aria-hidden="true"></i>
                        </div>
                        <div class="services_desc">
                            <h3>THE AMP SHOP</h3>
                            <p>Build your own custom Amps/Rigs with us. Choose from our vintage Amp collection. Order directly from reknown brands like Marshall, Orange etc.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fas fa-music"></i>
                        </div>
                        <div class="services_desc">
                            <h3>TRADITIONAL POINT</h3>
                            <p>The masters of traditional instrument makers are here to provide you the best services possible. </p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <div class="services_desc">
                            <h3>SOUVENIR</h3>
                            <p>Order your band/corporate souvenirs with us as T-shirt, badges, wrist bands etc.</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>    
    </div>
     <!--our services area end-->


    <!--services section area-->
    <div class="unlimited_services">
        <div class="container">  
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="services_section_thumb">
                        <img src="{{ asset('img/service/services4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="unlimited_services_content">
                        <h1>Proudly Made in Bangladesh</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, suscipit dolorum ullam soluta voluptatem quasi molestias illum possimus, accusantium assumenda inventore debitis ducimus. Quis ducimus, consequatur corrupti, sunt rerum sit atque eum inventore. Autem excepturi reiciendis voluptate totam sit, sunt fugiat voluptatum beatae voluptas ab quia vitae accusamus assumenda facilis perferendis, quam itaque aliquid qui omnis culpa consectetur placeat ipsa quaerat inventore quasi. Eligendi. </p>
                        <div class="view__work">
                            <a href="#">MORE INFO  <i class="fa fa-angle-right"></i></a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>     
    </div> 
    <!--services section end--> 

     <!--price table area -->
    <div class="priceing_table">
        <div class="container">   
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_priceing">
                        <div class="priceing_title">
                            <h1>CUSTOM SHOP</h1>
                        </div>
                        <div class="priceing_list">
                            <h1><span>৳500</span>/Customization</h1>
                            <ul>
                                <li>Custom Finish</li>
                                <li>Custom Shape</li>
                                <li>Material Choice</li>
                                <li>Signature Touch</li>
                            </ul>
                            <a class="list_button" href="#">purchase now </a>
                        </div>       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_priceing">
                        <div class="priceing_title">
                            <h1>GUITAR CARE</h1>
                        </div>
                        <div class="priceing_list">
                            <h1><span>৳400</span>/hour</h1>
                            <ul>
                                <li>Acoustics restoration</li>
                                <li>Repainting & Polishing</li>
                                <li>Electronics & parts</li>
                                <li>Fret Dressing</li>
                            </ul>
                            <a class="list_button" href="#">purchase now </a>
                        </div>       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_priceing">
                        <div class="priceing_title">
                            <h1>ROOM ACOUSTICS</h1>
                        </div>
                        <div class="priceing_list">
                            <h1><span>৳2000</span>/sft</h1>
                            <ul>
                                <li> Acoustic Panel</li>
                                <li>Reflection Cancelling</li>
                                <li>Sound Proofing</li>
                                <li>Bass Trap</li>
                            </ul>
                            <a class="list_button" href="#">purchase now </a>
                        </div>       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_priceing">
                        <div class="priceing_title">
                            <h1>Studio design</h1>
                        </div>
                        <div class="priceing_list">
                            <h1><span>৳15000</span></h1>
                            <ul>
                                <li>Room Construction</li>
                                <li>Acoustic Panel</li>
                                <li>Sound Proof Booth</li>
                                <li>Practice Rooms</li>
                            </ul>
                            <a class="list_button" href="#">purchase now </a>
                        </div>       
                    </div>
                </div>
            </div>
        </div>    
    </div>
     <!--price table  end-->

    <!--advantages wordpress -->
    <div class="advantages_ecommerce">
        <div class="container">   
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <div class="advantages_content">
                        <h3>Advantages of Mobile ecommerce theme</h3>
                        <p>Build a professional website system and great user experience</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-12">
                    <div class="advantages_button">
                        <a href="#" title="MORE INFO ">MORE INFO <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--advantages wordpress end-->

@endsection