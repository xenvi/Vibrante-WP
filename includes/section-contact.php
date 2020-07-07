<div class="container">
   <div class="row info-box">
     <i class="fas fa-map-marked-alt"></i>
     <div class="text">
          <h4>Find Us At Our Office</h4>
          <p><?php the_field('street_address');?></p>
          <p><?php the_field('city_state_zip');?></p>
          <p><?php the_field('country');?></p>
     </div>
     </div>
   <div class="row info-box">
     <i class="fas fa-phone"></i>
     <div class="text">
          <h4>Give Us A Ring</h4>
          <p><?php the_field('telephone_number');?></p>
          <p><?php the_field('office_hours');?></p>
     </div>
   </div>
</div>