<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>
<style type="text/css">

.btn {
    /* text-transform: uppercase; */
    font-size: 13px;
    font-weight: 400;
    padding: 0 10px;
    line-height: 1.6em;
}

.dropdown-toggle, .main-navigation ul .dropdown-toggle.toggled-on, .menu-toggle, .row {
     margin-left: 0px; 
    margin-right: -15px;
}

</style>
<div class="container" style="height: 74em;width: 1355px;">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_Usbox" style="background: url('http://www.theforexmastermind.com/wordpress/wp-content/themes/Twitter-BootstrapBlankTheme/assets/images/brdg.jpg');margin: auto;
    color: white; height: 79em;">
            <h1 style="color: white;
">GET IN TOUCH</h1>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_UsDiv">
               <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12 contact_UsWrapper">
                  <p><i class="material-icons">location_on</i> 911, Shekhar Central, Palasia Square,
                     <br>Indore - 452001 Madhya Pradesh, India 
                  </p>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_Usphone_nbumbr">
                     <p><i class="material-icons">phone_iphone</i> 0731 - 4206247 </p>
                  </div>
              
               
               </div>
               <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 contact_TextPart">
                  <h4>Leave us a message</h4>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contactuS_inputs">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group dropdown" id="selectQueryType">
                        <button type="button" class="btn btn-default dropdown-toggle btn-block ng-binding" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trying to reach?
                        <b class="caret"></b></button>
                        <ul class="dropdown-menu">
                           <!-- ngRepeat: action in actions --><li ng-repeat="action in actions" class="ng-scope">
                              <a ng-click="setAction(action)" class="ng-binding">Trying to reach?</a>
                           </li><!-- end ngRepeat: action in actions --><li ng-repeat="action in actions" class="ng-scope">
                              <a ng-click="setAction(action)" class="ng-binding">General</a>
                           </li><!-- end ngRepeat: action in actions --><li ng-repeat="action in actions" class="ng-scope">
                              <a ng-click="setAction(action)" class="ng-binding">Technical</a>
                           </li><!-- end ngRepeat: action in actions --><li ng-repeat="action in actions" class="ng-scope">
                              <a ng-click="setAction(action)" class="ng-binding">Content</a>
                           </li><!-- end ngRepeat: action in actions --><li ng-repeat="action in actions" class="ng-scope">
                              <a ng-click="setAction(action)" class="ng-binding">Advertisement</a>
                           </li><!-- end ngRepeat: action in actions -->
                        </ul>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group" style="padding-right: 0px;">
                        <input type="text" class="form-control ng-pristine ng-untouched ng-valid" id="name" placeholder="Name" ng-model="name" ng-trim="true">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
                        <input type="email" class="form-control ng-pristine ng-untouched ng-valid ng-valid-email" id="email" placeholder="Email" ng-model="email" ng-trim="true">
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group" style="padding-right: 0px;">
                        <input type="text" class="form-control ng-pristine ng-untouched ng-valid" id="subject" placeholder="Subject" ng-model="subject" ng-trim="true">
                     </div>
                  </div>
                  <textarea class="form-control ng-pristine ng-untouched ng-valid" rows="9" id="message" placeholder="Write your message here" ng-model="message" ng-trim="true"></textarea>
                  <button type="button" class="btn btn-danger" ng-click="contact()">send</button>
               </div>
            </div>
         </div>
      </div>
	  

<?php get_footer(); ?>


