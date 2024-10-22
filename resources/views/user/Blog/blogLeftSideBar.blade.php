@extends('./user/main')

@section('title', 'Blog left side-bar')

@section('content')

<div class="main-content main-content-blog single left-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-trail breadcrumbs">
						<ul class="trail-items breadcrumb">
							<li class="trail-item trail-begin">
								<a href="index.html">Home</a>
							</li>
							<li class="trail-item">
								<a href="#">Our blog</a>
							</li>
							<li class="trail-item trail-end active">
								New Designer Outdoor Furniture
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="content-area content-blog col-lg-9 col-md-8 col-sm-12 col-xs-12">
					<div class="site-main">
						<div class="post-item">
							<div class="post-format">
								<a href="#">
									<img src="assets/images/blog1.jpg" alt="img">
								</a>
							</div>
							<div class="post-infor">
								<div class="category-blog">
									<a href="#">LIFE STYLE</a>
								</div>
								<h3 class="post-title">
									<a href="#">New Designer Outdoor Furniture</a>
								</h3>
								<div class="main-info-post">
									<p>
										Duis quis porta enim. 
										Nunc molestie porta elit, sit amet mattis lectus mollis et.
										Phasellus condimentum nulla a arcu lacinia, a 
										venenatis ex congue. Mauris nec ante magna. 
										Duis lacus massa, consequat at mollis gravida, ornare vel mi. 
										Nam dignissim sagittis quam nec consequat. 
										Maecenas vel nulla eleifend, euismod magna sed, tristique velit. 
										Nam sed eleifend dui, eu eleifend leo.
									</p>
									<p>
										Mauris ornare eros quis placerat mollis. 
										Duis ornare euismod risus at dictum. 
										Proin at porttitor metus. Nunc luctus nisl suscipit,
										hendrerit ligula non, mattis dolor. 
										In sit amet enim in odio viverra maximus luctus vitae orci. 
										Nunc faucibus ipsum vel massa
										venenatis pretium. Suspendisse volutpat ac nisi at commodo. 
									</p>
									<blockquote>
										<p>
											Maecenas vel nulla eleifend, euismod magna sed, tristique velit.
											Nam sed eleifend dui, eu eleifend leo. 
											Mauris ornare eros quis placerat mollis.
											Duis ornare euismod risus at dictum. 
											Proin at porttitor metus. 
											Nunc luctus nisl suscipit, hendrerit ligula non, mattis dolor.
										</p>
										<div class="author">
											<span class="name">
												Koan Conella
											</span>
											<span class="desc">
												Creative Copywriter
											</span>
										</div>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="blog-articles related-articles">
							<h3 class="custom_blog_title">
								Related Articles
							</h3>
							<div class="blog-slider style-1 owl-slick"  data-slick ='{"variableWidth":true, "autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"1200","settings":{"slidesToShow":1,"variableWidth":false }}]'>
								<div class="blog-item">
									<div class="post-format">
										<a href="#">
											<img src="assets/images/blog2.jpg" alt="img">
										</a>
									</div>
									<div class="post-info">
										<div class="category-blog">
											<a href="#">LIFE STYLE</a>
										</div>
										<h3 class="post-title">
											<a href="#">New Designer Outdoor Furniture <span>[...]</span></a>
										</h3>
										<div class="main-info-post">
											<p class="des">
												Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue.
												Mauris nec ante magna.
											</p>
										</div>
										<div class="author-view">
											<div class="author">
												<div class="avt">
													<img src="assets/images/avt-blog1.png" alt="img">
												</div>
												<h3 class="name">
													Adam Smith
												</h3>
											</div>
											<div class="review">
												<div class="view">
													<span class="icon-view">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</span>
													<span class="count">
														631
													</span>
												</div>
												<div class="s-comments">
													<span class="icon-cmt">
														<i class="fa fa-commenting" aria-hidden="true"></i>
													</span>
													<span class="count">
														82
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="blog-item ">
									<div class="post-format ">
										<a href="#">
											<img src="assets/images/blog3.jpg" alt="img">
										</a>
									</div>
									<div class="post-info ">
										<div class="category-blog">
											<a href="#">LIFE STYLE</a>
										</div>
										<h3 class="post-title">
											<a href="#">New Designer Outdoor Furniture <span>[...]</span></a>
										</h3>
										<div class="main-info-post">
											<p class="des">
												Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue.
												Mauris nec ante magna.
											</p>
										</div>
										<div class="author-view">
											<div class="author">
												<div class="avt">
													<img src="assets/images/avt-blog1.png" alt="img">
												</div>
												<h3 class="name">
													Adam Smith
												</h3>
											</div>
											<div class="review">
												<div class="view">
													<span class="icon-view">
														<i class="fa fa-eye" aria-hidden="true"></i>
													</span>
													<span class="count">
														631
													</span>
												</div>
												<div class="s-comments">
													<span class="icon-cmt">
														<i class="fa fa-commenting" aria-hidden="true"></i>
													</span>
													<span class="count">
														82
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="main-info-post">
								<p class="des">
									Nam sed eleifend dui, eu eleifend leo.Mauris ornare eros quis placerat mollis. Duis ornare euismod risus at dictum. Proin at porttitor metus. Nunc luctus nisl suscipit, hendrerit ligula non, mattis dolor. In sit amet enim in odio viverra maximus luctus vitae orci. Nunc faucibus ipsum vel massa venenatis pretium. Suspendisse volutpat ac nisi at commodo. 
								</p>
								<p class="des">
									Mauris tempor eros vel velit condimentum venenatis. Aliquam ut viverra sapien. Sed condimentum semper faucibus. Maecenas feugiat purus eget interdum sagittis. Ut pellentesque gravida justo non rhoncus. Nunc ullamcorper tortor id aliquet luctus. Proin varius aliquam consequat. Curabitur a commodo diam, vitae pellentesque urna. Fusce posuere turpis arcu, fringilla varius nunc dictum in. Praesent pulvinar sit amet nulla nec elementum.
								</p>
							</div>
						</div>
						<div class="tags tags-blog">
							<h3 class="widgettitle">
								Tags:
							</h3>
							<ul class="tagcloud">
								<li class="tag-cloud-link">
									<a href="#">Fashion</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Chairs</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Hat</a>
								</li>
								<li class="tag-cloud-link active">
									<a href="#">Accessories</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Hot</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Lamp</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Lighting</a>
								</li>
							</ul>
						</div>
						<div class="view-share">
							<div class="author-view">
								<div class="author">
									<div class="avt">
										<img src="assets/images/avt-blog1.png" alt="img">
									</div>
									<h3 class="name">
										Adam Smith
									</h3>
								</div>
								<div class="review">
									<div class="view">
										<span class="icon-view">
											<i class="fa fa-eye" aria-hidden="true"></i>
										</span>
										<span class="count">
											631
										</span>
									</div>
									<div class="s-comments">
										<span class="icon-cmt">
											<i class="fa fa-commenting" aria-hidden="true"></i>
										</span>
										<span class="count">
											82
										</span>
									</div>
								</div>
							</div>
							<div class="share">
								<h3 class="title">share</h3>
								<i class="icon fa fa-facebook-square" aria-hidden="true"></i>
								<i class="icon fa fa-linkedin" aria-hidden="true"></i>
								<i class="icon fa fa-twitter" aria-hidden="true"></i>
							</div>
						</div>
						<div class="comments-area">
							<h3 class="custom_blog_title">
								Comments <span class="count">(2)</span>
							</h3>
							<form class="comment-form">
								<p class="comment-reply-content">
									<textarea  rows="6" placeholder="Write your comment" class="input-form"></textarea>
								</p>
								<p class="form-submit">
									<span class="controll">
										<i class="icon fa fa-file-image-o" aria-hidden="true"></i>
										<i class="icon fa fa-paperclip" aria-hidden="true"></i>
										<i class="icon fa fa-smile-o" aria-hidden="true"></i>
										<button class="submit button">POST A COMMENT</button>		
									</span>	
								</p>
							</form>
							<ul class="comment-list">
								<li class="comment">
									<div class="comment-item">
										<div class="author-view">
											<div class="author">
												<div class="avt">
													<img src="assets/images/avt-blog1.png" alt="img">
												</div>
												<h3 class="name">
													Adam Smith
												</h3>
											</div>
											<div class="date-reply-comment">
												<span class="date-comment">
													4 days ago
												</span>
											</div>
										</div>
										<div class="comment-body">
											<div class="comment-content">
												<p>
													Nam sed eleifend dui, eu eleifend leo.
													Mauris ornare eros quis placerat mollis. 
													Duis ornare euismod risus at dictum. 
													Proinat porttitor metus. 
													Nunc luctus nisl suscipit, hendrerit ligula non.
												</p>
											</div>
											<div class="comment-reply-link">
												<span class="Comment">
													<i class="icon fa fa-commenting" aria-hidden="true"></i>
													Comment
												</span>
												<span class="like">
													<i class="icon fa fa-thumbs-o-up" aria-hidden="true"></i>
													1
												</span>
												<span class="dislike">
													<i class="icon fa fa-thumbs-o-down" aria-hidden="true"></i>
												</span>
											</div>
										</div>
									</div>
									<ul class="children">
										<li>
											<div class="comment-item">
												<div class="author-view">
													<div class="author">
														<div class="avt">
															<img src="assets/images/avt-blog1.png" alt="img">
														</div>
														<h3 class="name">
															Samuel Godi
														</h3>
													</div>
													<div class="date-reply-comment">
														<span class="date-comment">
															4 days ago
														</span>
													</div>
												</div>
												<div class="comment-body">
													<div class="comment-content">
														<p>
															Ut pellentesque gravida justo non rhoncus. 
															Nunc ullamcorper tortor id aliquet luctus. 
															Proin varius aliquam consequat.Curabitur a commodo diam, vitae pellentesque urna.
														</p>
													</div>
													<div class="comment-reply-link">
														<span class="Comment">
															<i class="fa fa-commenting" aria-hidden="true"></i>
															Comment
														</span>
														<span class="like">
															<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
															9
														</span>
														<span class="dislike">
															<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
															1
														</span>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="pagination clearfix style1">
							<div class="nav-link">
								<a href="#" class="page-numbers"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>
								<a href="#" class="page-numbers">1</a>
								<a href="#" class="page-numbers">2</a>
								<a href="#" class="page-numbers current">3</a>
								<a href="#" class="page-numbers"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar sidebar-single-blog col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="wrapper-sidebar">
						<div class="widget widget-socials">
							<h3 class="widgettitle">
								Follow us
							</h3>
							<div class="content-socials">
								<div class="social-list">
									<a href="#" target="_blank" class="social-item">
										<i class="fa fa-facebook-square" aria-hidden="true"></i>
									</a>
									<a href="#" target="_blank" class="social-item">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
									<a href="#" target="_blank" class="social-item">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="widget widget-categories">
							<h3 class="widgettitle">Categories</h3>
							<ul class="list-categories">
								<li>
									<input type="checkbox" id="cb1">
									<label for="cb1" class="label-text">
										New Arrivals
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb2">
									<label for="cb2" class="label-text">
										Lighting
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb3">
									<label for="cb3" class="label-text">
										Tables
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb4">
									<label for="cb4" class="label-text">
										Chairs
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb5">
									<label for="cb5" class="label-text">
										Accessories
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb6">
									<label for="cb6" class="label-text">
										Lamp
									</label>
								</li>
							</ul>
						</div>
						<div class="widget widget-post">
							<h3 class="widgettitle">Popular Articles</h3>
							<ul class="vereesa-posts">
								<li class="widget-post-item">
									<div class="thumb-blog">
										<img src="assets/images/sidebar-post1.jpg" alt="img">
									</div>
									<div class="post-content">
										<div class="cat">
											<a href="#">Life Style</a>
										</div>
										<h5 class="post-title"><a href="#">9 Quicks Tips That Will Change <span>[...]</span></a></h5>
									</div>
								</li>
								<li class="widget-post-item">
									<div class="thumb-blog">
										<img src="assets/images/sidebar-post2.jpg" alt="img">
									</div>
									<div class="post-content">
										<div class="cat">
											<a href="#">Lookbook</a>
										</div>
										<h5 class="post-title"><a href="#">9 Quicks Tips That Will Change <span>[...]</span></a></h5>
									</div>
								</li>
								<li class="widget-post-item">
									<div class="thumb-blog">
										<img src="assets/images/sidebar-post3.jpg" alt="img">
									</div>
									<div class="post-content">
										<div class="cat">
											<a href="#">Street Style</a>
										</div>
										<h5 class="post-title"><a href="#">9 Quicks Tips That Will Change <span>[...]</span></a></h5>
									</div>
								</li>

							</ul>
						</div>
						<div class="widget widget-tags">
							<h3 class="widgettitle">
								Popular Tags
							</h3>
							<ul class="tagcloud">
								<li class="tag-cloud-link">
									<a href="#">Fashion</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Chairs</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Hat</a>
								</li>
								<li class="tag-cloud-link active">
									<a href="#">Accessories</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Hot</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Lamp</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Lighting</a>
								</li>
							</ul>
						</div>
						<div class="widget newsletter-widget">
							<div class="newsletter-form-wrap ">
								<h3 class="title">Subscribe to Our Newsletter</h3>
								<div class="subtitle">
									More special Deals, Events & Promotions
								</div>
								<input type="email" class="email" placeholder="Your email letter">
								<button type="submit" class="button submit-newsletter">Subscribe</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection