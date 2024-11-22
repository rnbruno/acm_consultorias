@extends('site.main')

@section('content')
<section id="subheader" class="jarallax text-white">
    <img src="{{ asset('assets/images/background/subheader.jpg') }}" class="jarallax-img" alt="">
    <div class="center-y relative text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Notícias</h1>
                    <p>Reputação. Respeito. Resultado.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section aria-label="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb30">
                <div class="bloglist item">
                    <div class="post-content">
                        <div class="date-box">
                            <div class="m">10</div>
                            <div class="d">NOV</div>
                        </div>
                        <div class="post-image">
                            <img alt="" src="{{ asset('assets/images/news/1.jpg') }}">
                        </div>
                        <div class="post-text">
                            <span class="p-tagline">Law Firm</span>
                            <h4><a href="#">The Lawyer European Awards shortlist<span></span></a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <span class="p-author">Fynley Wilkinson</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb30">
                <div class="bloglist item">
                    <div class="post-content">
                        <div class="date-box">
                            <div class="m">15</div>
                            <div class="d">NOV</div>
                        </div>
                        <div class="post-image">
                            <img alt="" src="{{ asset('assets/images/news/2.jpg') }}">
                        </div>
                        <div class="post-text">
                            <span class="p-tagline">Law Firm</span>
                            <h4><a href="#">Six firms that are setting the trend<span></span></a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <span class="p-author">Fynley Wilkinson</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb30">
                <div class="bloglist item">
                    <div class="post-content">
                        <div class="date-box">
                            <div class="m">20</div>
                            <div class="d">NOV</div>
                        </div>
                        <div class="post-image">
                            <img alt="" src="{{ asset('assets/images/news/3.jpg') }}">
                        </div>
                        <div class="post-text">
                            <span class="p-tagline">Law Firm</span>
                            <h4><a href="#">When it comes to law firm mergers<span></span></a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <span class="p-author">Fynley Wilkinson</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb30">
                <div class="bloglist item">
                    <div class="post-content">
                        <div class="date-box">
                            <div class="m">25</div>
                            <div class="d">NOV</div>
                        </div>
                        <div class="post-image">
                            <img alt="" src="{{ asset('assets/images/news/4.jpg') }}">
                        </div>
                        <div class="post-text">
                            <span class="p-tagline">Law Firm</span>
                            <h4><a href="#">How to Make the Most of Your CLE<span></span></a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <span class="p-author">Fynley Wilkinson</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb30">
                <div class="bloglist item">
                    <div class="post-content">
                        <div class="date-box">
                            <div class="m">28</div>
                            <div class="d">NOV</div>
                        </div>
                        <div class="post-image">
                            <img alt="" src="{{ asset('assets/images/news/5.jpg') }}">
                        </div>
                        <div class="post-text">
                            <span class="p-tagline">Law Firm</span>
                            <h4><a href="#">The Ultimate Guide to Writing like a Lawyer<span></span></a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <span class="p-author">Fynley Wilkinson</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb30">
                <div class="bloglist item">
                    <div class="post-content">
                        <div class="date-box">
                            <div class="m">30</div>
                            <div class="d">NOV</div>
                        </div>
                        <div class="post-image">
                            <img alt="" src="{{ asset('assets/images/news/5.jpg') }}">
                        </div>
                        <div class="post-text">
                            <span class="p-tagline">Law Firm</span>
                            <h4><a href="#">Should you Just Phone Your Opponent?<span></span></a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <span class="p-author">Fynley Wilkinson</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-single"></div>
            <ul class="pagination">
                <li><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
</section>

@endsection