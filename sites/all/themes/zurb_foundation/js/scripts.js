/* Implement custom javascript here */
jQuery(document).ready(function($) {
      // Get your Yeti started.

      jQuery('#edit-submitted-email-address-123123').attr('placeholder', 'Enter your email address');
      jQuery('#webform-component-email-address-123123').addClass('large-7 columns');
      jQuery('#webform-component-text').addClass('large-12 columns');
      jQuery('.block-webform-client-block-15').addClass('large-12 columns');
      jQuery('.block-views-playlist-block').addClass('large-7 columns');
      
		jQuery('.mobile-menu-icon, .menu-tag').click(function(){
			jQuery('.mobile-menu-icon').toggleClass('stuck');
			jQuery('body').toggleClass('overflow');
			jQuery('.mobile-menu').toggleClass('active');	
		});      

});
