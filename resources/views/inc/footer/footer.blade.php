 <!--footer area start-->
 <footer class="footer_widgets">
    <!--newsletter area start-->
    <div class="newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter_container">
                        <div class="newsletter_content">
                            <div class="newsletter_icone">
                               <img src="{{ asset('img/about/newsletter-icon.png') }}" alt="">
                            </div>
                            <div class="newsletter_text">
                                <h3>Sign Up For Newsletters</h3>
                                <p>Get E-mail updates about our latest shop and special offers.</p>
                            </div>
                        </div>
                        <div class="subscribe_form">
                            <form  class="footer-newsletter" method="POST" action="/">
                                @csrf
                                <input  type="email" autocomplete="off" name="emailField" placeholder="Your email address..." data-validate="validate(required, email)" required/>
                                <button type="submit">Subscribe</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--newsletter area end-->
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <div class="widgets_container contact_us">
                       <h3>Contacts us</h3>
                        <div class="footer_contact">
                            <p><span>Address:</span> 29/13, Tajmohal Road, Block #C, Mohammadpur, Dhaka-1207.</p>
                            <p><span>Phone:</span> <a href="tel:+880 1305775556">+880 1305775556</a></p>
                            <p><span>Email:</span> <a href="#">info@bluesden.co</a></p>
                            
                        </div>
                         <div class="footer_payment">
                            <p>Payment Methods:</p>
                            <img src="{{ asset('img/icon/payment.png') }}" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>My Account</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="wishlist.html">Wish List</a></li>
                                <li><a href="#">Order History</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <div class="widgets_container widget_menu">
                        <h3>Our Location</h3>
                        <div class="footer_menu">
                            <div class="row">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.5248087681125!2d90.3585479264911!3d23.764319091023367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a0be52e985%3A0x90f4298e05201b5!2sBlues%20Den!5e0!3m2!1sen!2sbd!4v1575116660483!5m2!1sen!2sbd" width="600" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>    
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_area">
                        <p>Copyright &copy; 2019 <a href="/">Blues Den</a>  All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="footer_social text-right">
                       <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-rss"></i></a></li>
                       </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>   
</footer>
<!--footer area end-->



<!--news letter popup start-->

<!--news letter popup start-->




<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src={{asset('js/plugins.js')}}></script>

<!-- Main JS -->
<script src={{asset('js/main.js')}}></script>
