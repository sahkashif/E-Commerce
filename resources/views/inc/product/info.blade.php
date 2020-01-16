<!--product info start-->
<div class="product_d_info mb-45">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="product_d_inner">   
                    <div class="product_info_button">    
                        <ul class="nav" role="tablist">
                            <li >
                                <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel" >
                            <div class="product_info_content">
                                <p>{{ $product->product_description }}</p>
                            </div>    
                        </div>
                        

                        <div class="tab-pane fade" id="reviews" role="tabpanel" >
                            <div class="reviews_wrapper">
                                <h2>1 review for Donec eu furniture</h2>
                                <div class="reviews_comment_box">
                                    <div class="comment_thmb">
                                        <img src="assets/img/blog/comment2.jpg" alt="">
                                    </div>
                                    <div class="comment_text">
                                        <div class="reviews_meta">
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                            <p><strong>admin </strong>- September 12, 2018</p>
                                            <span>roadthemes</span>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="comment_title">
                                    <h2>Add a review </h2>
                                    <p>Your email address will not be published.  Required fields are marked </p>
                                </div>
                                <div class="product_rating mb-10">
                                    <h3>Your rating</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_review_form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="review_comment">Your review </label>
                                                <textarea name="comment" id="review_comment" ></textarea>
                                            </div> 
                                            <div class="col-lg-6 col-md-6">
                                                <label for="author">Name</label>
                                                <input id="author"  type="text">

                                            </div> 
                                            <div class="col-lg-6 col-md-6">
                                                <label for="email">Email </label>
                                                <input id="email"  type="text">
                                            </div>  
                                        </div>
                                        <button type="submit">Submit</button>
                                        </form>   
                                </div> 
                            </div>     
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>    
</div>  
<!--product info end-->