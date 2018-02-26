<?php

get_header(); ?>

<style type="text/css">
@media only screen and (max-width: 959px) {
.panel-title{
font-size:15px;
font-weight:700;}}

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
  content: "";
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  float: right;
  transition: transform .25s linear;
  -webkit-transition: -webkit-transform .25s linear;}

.panel-default>.panel-heading a[aria-expanded="true"] {
  background-color: #eee;}

.panel-default>.panel-heading a[aria-expanded="true"]:after {
  content: "\2212";
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);}

.panel-default>.panel-heading a[aria-expanded="false"]:after {
  content: "\002b";
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);}

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

    <section>
              <div class="terminos-condiciones">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <?php endif; ?>

              </div>
  
    
    </section>

    
<?php

get_footer(); ?>