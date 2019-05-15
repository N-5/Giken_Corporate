<?php
/*
Template Name: chinese-aluminum
*/
?>
<?php get_header(); ?>

<main id="aluminum">
  <section class="page-title">
    <div class="page-title__inner">
      <h1 class="page__heading">ALUMINUM<span>铝材事业</span></h1>
      <div class="page__backimage">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aluminum/aluminum-lower.jpg" alt="">
      </div>
    </div>
  </section>

  <section class="service-lead">
    <div class="l-container">
      <h2 class="service-lead__heading" data-inview>
        随时满足市场需求。<br>
        拥有可实现低成本、<br class="u-sm_max">短交货期的较强的开发能力。
      </h2>
      <p class="service-lead__text u-m" data-inview>
        为了解决各种业务课题，满足技术革新需求，实施新增设备及现有设备的设计、制作和安装。并且在各种单体装置方面也拥有许多实际业绩。特别在铝型材用后部设备及其相关装置方面，拥有丰富的专有技术和开发事例，可实现细致、低成本、短交期满足客户的各种要求。
      </p>
    </div>
  </section>

  <section class="service-case">
    <div class="l-container">
      <div class="service-case-list">
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>REAR EQUIPMENT</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aluminum/survice-case_1.jpg" alt="REAR EQUIPMENT">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">后部设备</h3>
            <p class="u-m">
              以丰富的实际业绩为基础，进行符合挤压型材后部设备的生产线建设的设计及组装。
            </p>
            <ul class="service-case__funtion">
              <li>台板切割装置</li>
              <li>各种后部工作台</li>
              <li>拉伸装置（可应对各种爪形）</li>
              <li>移载/定尺限位装置</li>
              <li>喷雾式水冷装置</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item item-reverse" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-left"><span>PULLER</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aluminum/survice-case_2.jpg" alt="PULLER">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">拉马装置</h3>
            <p class="u-m">采用伺服驱动的钢丝绳牵引方式，在国内后退速度最快。</p>
            <ul class="service-case__funtion">
              <li>后退最大速度 400m/min（日本国内最快）</li>
              <li>张力0.1kN ～ 1.24kN</li>
              <li>双拉马装置［专利］</li>
              <li>自行式单拉马装置</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>PARTS PILING EQUIPMENT</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aluminum/survice-case_3.jpg" alt="PARTS PILING EQUIPMENT">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">自动码垛装置</h3>
            <p class="u-m">
              将按照规定尺寸切割整齐的型材倒垛到料架上的单纯动作，只有技研的自动码垛装置方能实现快速、准确、无故障地堆码。
            </p>
            <ul class="service-case__funtion">
              <li>普通堆码、分层堆码</li>
              <li>搬运载重　MAX 200kg</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item item-reverse" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-left"><span>CONVEYOR</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aluminum/survice-case_4.jpg" alt="CONVEYOR">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">搬运输送机</h3>
            <p class="u-m">
              进行符合搬运生产线的各种输送机的制造、及满足客户需求的搬运系统的构建。
            </p>
            <ul class="service-case__funtion">
              <li>货架搬运输送机</li>
              <li>货架堆码装置</li>
              <li>货架移载搬运装置</li>
            </ul>
          </div>
        </div>
        
        <div class="service-case-list__item" data-inview>
          <div class="service-case-list__image">
            <div class="service-case-list__name name-right"><span>BILLET CUTTING</span></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aluminum/survice-case_5.jpg" alt="BILLET CUTTING">
          </div>
          <div class="service-case-list__detail">
            <h3 class="service-case__heading">长条毛坯切割生产线</h3>
            <p class="u-m">
              即使品种多批量小，也能进行无浪费的坯料管理，即使是切割到中途的长条毛坯，也能退回至储料器，从而避免浪费。
            </p>
            <ul class="service-case__funtion">
              <li>多层数型 毛坯储料器</li>
              <li>毛坯供料装置(支持多层数)</li>
              <li>毛坯推料装置</li>
              <li>毛坯刷子装置</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="c-section-back">
    <div class="c-section-back__inner">
      <a href="<?php echo home_url(); ?>/cn/service/"><span>BACK</span></a>
    </div>
  </section>
</main>
<?php get_footer(); ?>
