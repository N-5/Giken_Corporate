<?php
/*
Template Name: english-industrial
*/
?>
<?php get_header(); ?>
<main id="industrial">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">INDUSTRIAL MACHINES</h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/industrial-lower.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="service-lead">
    <div class="l-container">
      <h2 class="service-lead__heading" data-inview>
        We put maximum priority on user-friendliness <br>during design and development.<br>
        The quality of our products <br class="u-sm_max">has been highly evaluated.
      </h2>
      <p class="service-lead__text u-m" data-inview>
        This is our new field of business, separated from the fields of automobiles and aluminum. Based on the technology and know-how accumulated in those two fields, we provide automation and labor-saving in all processes while retaining product quality and cost performance. We are able to improve customers’ profits and production efficiency, and solve their problems for the renovation of their business.
      </p>
    </div>
  </section>

  <section class="service-case">
    <div class="l-container">
      <div class="service-case-list">
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>CUT AND REMOVED</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/survice-case_1.jpg" alt="CUT AND REMOVED">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">Thread Cutting/ Removal Devices</h3>
            <p class="u-m">
              Devices for cutting and removing threads from paper rolls, bobbins, jaw bobbins and resin tubes without damaging them, for recycling.
            </p>
            <ul class="service-case__funtion">
              <li>Paper roll thread removal device</li>
              <li>Bobbin thread removal device</li>
              <li>Jaw bobbin thread removal device</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item item-reverse" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-left"><span>CONVEYOR</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/survice-case_2.jpg" alt="CONVEYOR">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">Conveyors</h3>
            <p class="u-m">Custom-made conveyors according to the product.</p>
            <ul class="service-case__funtion">
              <li>Roller conveyor</li>
              <li>Belt conveyor</li>
              <li>Threading conveyor</li>
              <li>Special conveyor</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>PALLETIZER</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/survice-case_3.jpg" alt="PALLETIZER">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">Palletizing Devices</h3>
            <p class="u-m">
              Devices for unloading products from conveyors and carts and stacking and packing them, updating manufacturing systems according to the need.
            </p>
          </div>
        </div>

        <div class="service-case-list__item item-reverse" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-left"><span>TRANSFER APPARATUS</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/survice-case_4.jpg" alt="TRANSFER APPARATUS">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">Transfer Devices</h3>
            <p class="u-m">
              Custom-made transfer systems utilising loaders and AGVs, that take into account the weight and shape of materials and transfer speeds, enabling optimal transfer for any plant layout.
            </p>
            <ul class="service-case__funtion">
              <li>Reject device</li>
              <li>Roll transfer device</li>
              <li>Automated guided vehicle (AGV)</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>CARBON FIBER</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/industrial/survice-case_5.jpg" alt="CARBON FIBER">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">Carbon Fiber Processing Equipment</h3>
            <ul class="service-case__funtion">
              <li>Carbon fiber cutter</li>
              <li>Carbon fiber sheet stacker</li>
              <li>Carbon fiber inspection device</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="c-section-back">
    <div class="c-section-back__inner">
      <a href="<?php echo home_url(); ?>/en/service/"><span>BACK</span></a>
    </div>
  </section>
</main>
<?php get_footer(); ?>
