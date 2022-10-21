<?php $currentPage = "index"; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Stylesheets-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="styles.css" rel="stylesheet" type="text/css"> 

    <!--Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <title>Beach House</title>

    <!-- Image: Beach House (2021) [Online image] Available from: http://www.beachhousebaltimore.com/favicon.ico?v=2 [Accessed 13/12/2021]. -->
    <link rel="shortcut icon" type="image/ico" href="graphics/favicon.ico">
</head>
<body id="index">

  <?php include("header.php");?>

  <div class="container pb-3">
    <!-- Biography-->
    <div class="row pb-5">
      <div class="col-lg-10 mx-auto mt-4 text-center">
        <p>Beach House is the project of vocalist/keyboardist Victoria Legrand and guitarist Alex Scally — one of the most acclaimed dream pop groups of the past 15 years. 
          From their beloved self-titled 2006 debut to 2018's internationally-acclaimed album 7, Beach House moved from a charming lo-fi sound to ethereal perfection, 
          melding hypnotic, haunting melodies with Legrand's velvety voice to create a unique, distinguished sonic universe.</p>
        <p class="text-muted text-end"> (Gigs in Scotland)</p>
        <div id="more" class="collapse">
          <p>Legrand and Scally met through a mutual friend in Baltimore's indie rock scene and formed Beach House in 2004. 
          They began releasing songs soon after, including "Apple Orchard," which appeared on Pitchfork's Infinite Mixtape MP3 series in August 2006. 
          That October, the duo released their self-titled debut album.</p>
          <p class="text-muted text-end"> (AllMusic)</p>
          <p>Both members of the band have long-standing relationships with playing and learning about music. Alex began playing piano in elementary school and picked up other instruments
          in his early high school years. This is also when he first began recording music. Similarly, Victoria was classically trained in piano from the age of 7 and began formally training
          her voice at the age of 14. She also studied theatre at the International School of Jacques Lecoq. Victoria started writing her own songs at the age of 18. 
          A lot of the lyrics and songs she currently composes find their seeds in the piano and organ playing she does.</p>
          <p class="text-muted text-end"> (Carpark Records)</p>
        </div>
        <p id="readmore">Read More</p>
      </div>
    </div>

    <!-- Carousel -->
    <div class="row text-center pb-3">
      <div class="col-lg-6 mx-auto">
        <h4>Discography</h4>
      </div>
    </div>
    <div class="row pb-4">
      <div class="col-lg-6 mx-auto">
        <div id="carousel" class="carousel carousel-dark slide text-center" data-bs-ride="carousel">
          <div class="carousel-indicators d-none d-md-block">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
          </div>
          <div class="carousel-inner text-center">
            <div class="carousel-item active">
              <!-- Image: Pitchfork (2006) [Online image] Available from: https://media.pitchfork.com/photos/5ae0bd512c39e92029a3b250/1:1/w_320/Beach%20House_7.jpg [Accessed 01/12/2021]. -->
              <img src="graphics/BeachHouse_Album.jpg" class="album rounded" alt="Beach House album art">
              <div class="carousel-caption d-none d-md-block">
                <h5>Beach House</h5>
                <p>(2006)</p>
              </div>
            </div>
            <div class="carousel-item">
              <!-- Image: Pitchfork (2008) [Online image] Available from: https://media.pitchfork.com/photos/5929ad8f5e6ef95969321ad1/1:1/w_320/3c28c23c.jpg [Accessed 01/12/2021]. -->
              <img src="graphics/Devotion_Album.jpg" class="album rounded" alt="Devotion album art">
              <div class="carousel-caption d-none d-md-block">
                <h5>Devotion</h5>
                <p>(2008)</p>
              </div>
            </div>
            <div class="carousel-item">
              <!-- Image: Pitchfork (2010) [Online image] Available from: https://media.pitchfork.com/photos/5929b4cf13d197565213ab80/1:1/w_320/58f96b36.jpg [Accessed 01/12/2021]. -->
              <img src="graphics/TeenDream_Album.jpg" class="album rounded" alt="Teen Dream album art">
              <div class="carousel-caption d-none d-md-block">
                <h5>Teen Dream</h5>
                <p>(2010)</p>
              </div>
            </div>
            <div class="carousel-item">
              <!-- Image: Pitchfork (2012) [Online image] Available from: https://media.pitchfork.com/photos/5929b536b1335d7bf169a88a/1:1/w_320/f251d544.jpeg [Accessed 01/12/2021]. -->
              <img src="graphics/Bloom_Album.jpg" class="album rounded" alt="Bloom album art">
              <div class="carousel-caption d-none d-md-block">
                <h5>Bloom</h5>
                <p>(2012)</p>
              </div>
            </div>
            <div class="carousel-item">
              <!-- Image: Pitchfork (2015) [Online image] Available from: https://media.pitchfork.com/photos/5929aed09d034d5c69bf45f4/1:1/w_320/9c17ddf5.jpg [Accessed 01/12/2021]. -->
              <img src="graphics/DepressionCherry_Album.jpg" class="album rounded" alt="Depression Cherry album art">
              <div class="carousel-caption d-none d-md-block">
                <h5>Depression Cherry</h5>
                <p>(2015)</p>
              </div>
            </div>
            <div class="carousel-item">
              <!-- Image: Pitchfork (2015) [Online image] Available from: https://media.pitchfork.com/photos/5929b1bfc0084474cd0c1e73/1:1/w_320/5d056739.jpg [Accessed 01/12/2021]. -->
              <img src="graphics/TYLS_Album.jpg" class="album rounded" alt="Thank You Lucky Stars album art">
              <div class="carousel-caption d-none d-md-block">
                <h5>Thank You Lucky Stars</h5>
                <p>(2015)</p>
              </div>
            </div>
            <div class="carousel-item">
              <!-- Image: Pitchfork (2018) [Online image] Available from: https://media.pitchfork.com/photos/5ae0bd512c39e92029a3b250/1:1/w_320/Beach%20House_7.jpg [Accessed 01/12/2021]. -->
              <img src="graphics/7_Album.jpg" class="album rounded" alt="7 album art">
              <div class="carousel-caption d-none d-md-block">
                <h5>7</h5>
                <p>(2018)</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

    <!--Last.fm API with AJAX, most listened songs -->
    <div class="row text-center">
      <div class="col-lg-6 mx-auto">
        <h4>Most streamed songs of all time</h4>
        <p><i>(Last.fm data)</i></p>
      </div>
    </div>
    <div class="row pb-2">
      <div class="col-lg-10 mx-auto">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col" id="songnum">#</th>
              <th scope="col">Song Name</th>
              <th scope="col">Playcount</th>
            </tr>
          </thead>
          <tbody id="result">
          </tbody>
        </table>
      </div>
    </div> 

    <div class="row text-center pb-4">
      <div class="col mx-auto" id="photo"></div>
    </div>
  
    <!-- Cards -->
    <div class="row my-3 my-md-1">
      <!-- Tour dates -->
      <div class="col-md col-lg-5 ms-auto">
        <div class="card">
          <div class="card-body" id="tour">
            <h5 class="card-title">Europe tour</h5>
            <p class="card-text"><b>21/5/22</b> Dublin, IE <span>The National Stadium</span></p>
            <p class="card-text"><b>23/5/22</b> Glasgow, UK <span>Barrowland Ballroom</span></p>
            <p class="card-text"><b>24/5/22</b> Manchester, UK <span>Manchester Academy</span></p>
            <p class="card-text"><b>26/5/22</b> London, UK <span>O2 Academy Brixton</span></p>
            <p class="card-text"><b>28/5/22</b> Antwerp, BE <span>De Roma</span></p>
            <p class="card-text"><b>30/5/22</b> Brussels, BE <span>Ancienne Belgique</span></p>
            <p class="card-text"><b>31/5/22</b> Paris, FR <span>L'Olympia</span></p>
            <p class="card-text"><b>2/6/22</b> Paloma, FR <span>Nimes</span></p>
          </div>
        </div>
      </div>
      <!-- Coming soon -->
      <div class="col-md col-lg-5 me-auto">
        <div class="card pb-4">
          <div class="card-body">
            <h5 class="card-title">Once Twice Melody (coming soon)</h5>
          </div>
          <div class="mx-auto" id="fade">
            <a href="https://open.spotify.com/album/6ouGk1XXEeIn7sVEHdPZc6?si=WtL8RFr9R9iv4sZ85sJVkw" target="_blank">
              <!-- Image: Rate Your Music(2021) [Online image] Available from: https://e.snmc.io/i/600/w/8e4d7ab83ec516394a1663500502f592/9469128/beach-house-once-twice-melody-Cover-Art.jpg [Accessed 01/12/2021]. -->
              <img src="graphics/OnceTwiceMelody_Album.jpg" class="album rounded card-img-bottom linkto" alt="Once Twice Melody album art">
            </a>
            <p class="overlaytext text-muted">Listen on Spotify</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include("footer.php");?>

  <!-- jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  <!-- Scripts -->
  <script src="scripts/script.js"></script>
  <script src="scripts/jq_script.js"></script>
</body>

</html>