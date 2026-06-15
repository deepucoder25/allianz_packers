<?php
$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';
// bihar 
if (strtolower($city) == "") {
   $htmlcontent = "
        
   ";
   $htmlcontent1 = "
   
   ";
   $htmlcontent2 = "
   
   ";
} else {
  $about_content = "
        <p>Searching for <b>trustworthy movers and packers in $city</b>? Through <strong>$company3</strong>, we offer home-to-home relocation, office relocation, vehicle transport, furniture moving services, and regional relocation services on all locations throughout $city. Our team handles packing, loading, transportation, unloading, and placement of goods with clear pricing and professional support.</p>

   ";
   $about_content1 ="
   <p>$city has grown quickly over the last few years and that's one reason many families and businesses prefer it. Good roads, developing residential areas, schools, hospitals, shopping centres,  all these things make life easier here. But moving from one place to another in $city can still be tiring. There are society permissions to arrange, vehicles to book, cartons to pack, and a hundred small things to remember.
   ";
   $htmlcontent = "
            <p>Recently, we assisted a family shifting from one residential area of <b>$city</b> to another. On moving day, the apartment lift unexpectedly stopped working. Instead of delaying the move, our team rearranged manpower and safely carried essential furniture and household items down four floors. The relocation was completed the same day, and the family settled into their new home without disruption.</p>
   ";
   $htmlcontent1 = "
    <!-- What Makes Relocation Different -->
        <div class='city-content-card mt-4'>
          <h3 class='city-section-title-sm'>Areas We Serve in $city</h3>
          <p>We provide relocation services across major residential and commercial areas of $city. Whether you are moving within the city or relocating to another destination, our team can arrange packing, transportation, and unloading support according to your requirements.</p>

          <!-- Services List -->
          <h3 class='city-section-title-sm mt-4'>Understanding Packers and Movers Pricing in $city</h3>
          <p>For local shifting within $city, costs are usually influenced by the number of items, packing requirements, floor level, and vehicle size. The easiest way to receive an accurate estimate is to request a survey or share your moving details with our team.</p>
          <p>What will you spend on the move to your new home? A number of factors (distance between locations, amount of goods, level of the floor, whether a lift will be available, how much packing is involved, what type of vehicle to use, and if certain items must be handled with special care) will affect the cost of moving home. As no two moves are identical; therefore, the quotes given to customers will depend on these considerations.</p>
          <p>We believe in keeping things clear and straightforward, which means customers receive complete pricing information before the move begins. No confusion. No last-minute surprises.</p>
        </div>

       

   ";
   $htmlcontent2 = "
    <!-- Why Choose Professional Movers -->
        <div class='city-content-card mt-4'>
          <h4 class='city-section-title-sm'>What People Usually Notice After a Successful Move</h4>
          <p>Most customers tell us the same thing after shifting - they wish they had worried less. Before moving day, everything feels like a big task. There are cartons everywhere, calls to make, and plenty of small details to manage. But once the move is completed properly, people often realize the process was much easier than they expected.</p>

      
        </div>
   ";
} 