@extends ('layout.default')

@section('content')
<div class="flyout">
    <input type="checkbox" class="menu-controls show-menu" id="menuToggle">
    <label for="menuToggle" class="menu-controls"><i class="fa fa-bars" aria-hidden="true"></i></label>
    <label for="menuToggle" class="menu-controls"><i class="fa fa-close" aria-hidden="true"></i></label>
    <div class="menu" role="menu">
      @include('partials.global-navigation')
    </div>
    <label for="menuToggle" class="shim"></label>
  </div><!-- /.flyout -->
  <div class="masthead">
    <div class="container">
      <a href="" class="branding">ComicBook<span>Labs</span></a>
      <nav class="pull-right hidden-xs">
        @include('partials.global-navigation')
      </nav>
    </div>
  </div><!-- /.masthead -->
  <div class="jumbotron">
    <div class="container">
      <article>
        <p class="pre-title">Registration for:</p>
        <h1>Blind <span>Date</span></h1>
        <p class="post-title">Now Open!</p>
        <a href="" class="btn btn-default">More Info</a>
        <a href="" class="btn btn-primary">Apply</a>
      </article>
    </div>
  </div><!-- /.jumbotron -->
  <section class="featured-project">
    <div class="container">
      <p class="pre-title text-center">Featured Project</p>
      <h2 class="text-center">Aporkalypse <span>Anthology</span></h2>
      <hr />
      <div class="row">
        <div class="col-md-4">
          <h4>The <span>Crew</span></h4>
          <hr class="short"/>
          <div class="crew-member">
            <img class="img-circle pull-left" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="60" height="60">
            <h5>Name <span>/ Artist</h5>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
          </div>
          <div class="crew-member">
            <img class="img-circle pull-left" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="60" height="60">
            <h5>Name <span>/ Writer</h5>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
          </div>
        </div>
        <div class="posts col-md-8">
          <article class="post">
            <figure style="background-image: url(http://placehold.it/650x200);">
              <div class="caption">March 25, <span>2015</span></div>
            </figure>
            <h3>Heading</h3>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-primary" href="#" role="button">Read More</a></p>
          </article><!-- /.post -->
        </div><!-- /.posts -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.featurd-project -->
  <section class="recent-news">
    <div class="container">
      <p class="pre-title text-center">Presenting</p>
      <h2 class="text-center">Recent <span>News</span></h2>
      <hr />
      <div class="row">
        <div class="posts">
          <article class="post col-sm-6 col-md-4">
            <figure style="background-image: url(http://placehold.it/300x300);">
              <div class="caption">March 25, <span>2015</span></div>
            </figure>
            <h3>Heading</h3>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-primary" href="#" role="button">Read More</a></p>
          </article><!-- /.post -->
          <article class="post col-sm-6 col-md-4">
            <figure style="background-image: url(http://placehold.it/300x300);">
              <div class="caption">March 25, <span>2015</span></div>
            </figure>
            <h3>Heading</h3>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-primary" href="#" role="button">Read More</a></p>
          </article><!-- /.post -->
          <article class="post col-sm-6 col-md-4">
            <figure style="background-image: url(http://placehold.it/300x300);">
              <div class="caption">March 25, <span>2015</span></div>
            </figure>
            <h3>Heading</h3>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-primary" href="#" role="button">Read More</a></p>
          </article><!-- /.post -->
        </div><!-- /.posts -->
      </div>
    </div>
  </section>
  <div class="footer"></div>
  <!-- /.footer -->
@stop