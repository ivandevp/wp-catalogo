<?php

get_header(); ?>
<style type="text/css">

@media only screen and (max-width: 959px) {
  .img-pf-mb{
    width:100%;
    height:auto;}
  .panel-title {
    font-size: 15px;
    font-weight: 700;}
}
  .icon-ubicanos-right{
    padding-right: 15px;  } 
.panel-default>.panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #e4e5e7;
  padding: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;}

.panel-default>.panel-heading a {
  display: block;
  padding: 10px 15px;}

.panel-default>.panel-heading a:after {
  color: #00b0e9;
  content: "";
  position: relative;
  top: 0px;
  display: inline-block;
  font-family: 'FontAwesome';
  font-style: normal;
  font-weight: 700;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  float: right;
  transition: transform .25s linear;
  -webkit-transition: -webkit-transform .25s linear;}

.panel-default>.panel-heading a[aria-expanded="true"] {
  background-color: #eee;}

.panel-default>.panel-heading a[aria-expanded="true"]:after {
  content: "\f107";
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
  font-size: 22px;}

.panel-default>.panel-heading a[aria-expanded="false"]:after {
  content: "\f106";
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
  font-size: 22px;}

.accordion-option {
  width: 100%;
  float: left;
  clear: both;
  margin: 15px 0;}

.accordion-option .title {
  font-size: 20px;
  font-weight: bold;
  float: left;
  padding: 0;
  margin: 0;}

.accordion-option .toggle-accordion {
  float: right;
  font-size: 16px;
  color: #6a6c6f;}

.accordion-option .toggle-accordion:before {
  content: "Expand All";}

.accordion-option .toggle-accordion.active:before {
  content: "Collapse All";}
</style>



    <section class="afiliate">
      <div class="row">
            <div class=" col-xs-12">
            <h1 style="text-align:center;color:#00b0e9;"><?php the_title(); ?></h1>
              <div class="terminos-condiciones">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <?php endif; ?>

              </div>
      </div>
    </div>
    </section>

    <script type="text/javascript">
      $(document).ready(function() {

  $(".toggle-accordion").on("click", function() {
    var accordionId = $(this).attr("accordion-id"),
      numPanelOpen = $(accordionId + ' .collapse.in').length;
    
    $(this).toggleClass("active");

    if (numPanelOpen == 0) {
      openAllPanels(accordionId);
    } else {
      closeAllPanels(accordionId);
    }
  })

  openAllPanels = function(aId) {
    console.log("setAllPanelOpen");
    $(aId + ' .panel-collapse:not(".in")').collapse('show');
  }
  closeAllPanels = function(aId) {
    console.log("setAllPanelclose");
    $(aId + ' .panel-collapse.in').collapse('hide');
  }
     
});
    </script>
<?php

get_footer(); ?>

