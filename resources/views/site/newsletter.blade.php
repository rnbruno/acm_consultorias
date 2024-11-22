@extends('site.main')

@section('content')
<section id="subheader" class="jarallax text-white">
    <img src="{{ asset('assets/images/background/subheader1.jpg') }}" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Newsletter</h1>
                    <p>Mensagem. Notícia. Informação.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section aria-label="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-read">
                    <img alt="" src="images/news/5.jpg" class="img-fullwidth">
                    <div class="post-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                            est laborum.</p>
                        <blockquote>Your attitude will go a long way in determining your success, your recognition, your reputation and your enjoyment in being a lawyer.</blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                            est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                            est laborum.</p>
                        <span class="post-date">April 1, 2018</span>
                        <span class="post-comment">1</span>
                        <span class="post-like">181</span>
                    </div>
                </div>
                <div class="spacer-single"></div>
                <div id="blog-comment">
                    <h4>Comments (5)</h4>
                    <div class="spacer-half"></div>
                    <ol>
                        <li>
                            <div class="avatar">
                                <img src="images/misc/avatar.png" alt="" /></div>
                            <div class="comment-info">
                                <span class="c_name">John Smith</span>
                                <span class="c_date id-color">15 January 2020</span>
                                <span class="c_reply"><a href="#">Reply</a></span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                            <ol>
                                <li>
                                    <div class="avatar">
                                        <img src="images/misc/avatar.png" alt="" /></div>
                                    <div class="comment-info">
                                        <span class="c_name">John Smith</span>
                                        <span class="c_date id-color">15 January 2020</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                        explicabo.</div>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <div class="avatar">
                                <img src="images/misc/avatar.png" alt="" /></div>
                            <div class="comment-info">
                                <span class="c_name">John Smith</span>
                                <span class="c_date id-color">15 January 2020</span>
                                <span class="c_reply"><a href="#">Reply</a></span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                            <ol>
                                <li>
                                    <div class="avatar">
                                        <img src="images/misc/avatar.png" alt="" /></div>
                                    <div class="comment-info">
                                        <span class="c_name">John Smith</span>
                                        <span class="c_date id-color">15 January 2020</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                        explicabo.</div>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <div class="avatar">
                                <img src="images/misc/avatar.png" alt="" /></div>
                            <div class="comment-info">
                                <span class="c_name">John Smith</span>
                                <span class="c_date id-color">15 January 2020</span>
                                <span class="c_reply"><a href="#">Reply</a></span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                        </li>
                    </ol>
                    <div class="spacer-single"></div>
                    <div id="comment-form-wrapper">
                        <h4>Leave a Comment</h4>
                        <div class="comment_form_holder">
                            <form id="contact_form" name="form1" class="form-default" method="post" action="#">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control" />
                                <label>Email <span class="req">*</span></label>
                                <input type="text" name="email" id="email" class="form-control" />
                                <div id="error_email" class="error">Please check your email</div>
                                <label>Message <span class="req">*</span></label>
                                <textarea cols="10" rows="10" name="message" id="message" class="form-control"></textarea>
                                <div id="error_message" class="error">Please check your message</div>
                                <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                <div id="mail_failed" class="error">Error, email not sent</div>
                                <p id="btnsubmit">
                                    <input type="submit" id="send" value="Send" class="btn btn-custom" /></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar" class="col-md-4">
                <div class="widget widget-post">
                    <h4>Recent Posts</h4>
                    <div class="small-border"></div>
                    <ul>
                        <li><span class="date">10 Jun</span><a href="#">The Lawyer European Awards shortlist</a></li>
                        <li><span class="date">22 Jun</span><a href="#">Six firms that are setting the trend</a></li>
                        <li><span class="date">20 Jun</span><a href="#">When it comes to law firm mergers</a></li>
                        <li><span class="date">12 Jun</span><a href="#">How to Make the Most of Your CLE</a></li>
                    </ul>
                </div>
                <div class="widget widget-text">
                    <h4>About Us</h4>
                    <div class="small-border"></div>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                    sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                </div>
                <div class="widget widget_tags">
                    <h4>Tags</h4>
                    <div class="small-border"></div>
                    <ul>
                        <li><a href="#link">Art</a></li>
                        <li><a href="#link">Application</a></li>
                        <li><a href="#link">Design</a></li>
                        <li><a href="#link">Entertainment</a></li>
                        <li><a href="#link">Internet</a></li>
                        <li><a href="#link">Marketing</a></li>
                        <li><a href="#link">Multipurpose</a></li>
                        <li><a href="#link">Music</a></li>
                        <li><a href="#link">Print</a></li>
                        <li><a href="#link">Programming</a></li>
                        <li><a href="#link">Responsive</a></li>
                        <li><a href="#link">Website</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section aria-label="section" class="text-light" data-bgcolor="gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-sm-30 text-center">
                <h3>Como podemos ajudá-lo?</h3>
                <form name="contactForm" id="contact_form" class="form-border" method="post" action="">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefone" />
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" placeholder="Mensagem"></textarea>
                    </div>
                    <div class="spacer-half"></div>
                    <div id="submit">
                        <input type="submit" id="send_message" value="Enviar Formulário" class="btn btn-custom" />
                    </div>
                    <div id="mail_success" class="success">Sua mensagem foi enviada com sucesso.</div>
                    <div id="mail_fail" class="error">Ocorreu um erro ao enviar sua mensagem.</div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection