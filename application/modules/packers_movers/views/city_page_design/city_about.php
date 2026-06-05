<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
include 'city_content.php';
?>



<section class="pm-city-details-section">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- About Card -->
        <div class="pm-city-content-card">

          <!-- Eyebrow + Heading -->
          <div class="pm-city-section-eyebrow">Top Rated Relocation</div>
          <h2 class="pm-city-section-title">
            
            <span class="pm-city-accent"><?= $city ?></span>
       Packers and Movers
          </h2>
<div class='city-prose'>
       
<?php echo $htmlcontent;?>  
<div class="pm-city-map mt-2 mb-2">
<?php include 'city_map.php';?>
</div> 
</div>  

    <?php echo $htmlcontent1;?>   
    <?php echo $htmlcontent2;?>      
       <?php include 'city_reviews.php'?>

    <?php include 'city_faq.php'?>

      </div><!-- /col-lg-8 -->

      <!-- ============ RIGHT: SIDEBAR (col-lg-4) ============ -->
      <div class="col-lg-4">
        <?php include 'city_siderbar.php'; ?>
      </div>

      </div><!-- /col-lg-4 -->

    </div><!-- /row -->

  </div><!-- /container -->
</section>



