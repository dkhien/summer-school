<?php
/**
 * Title: Service With Two Rows
 * Slug: about-service-section
 * Categories: ziri-fse-patterns
 * Keywords: about-service-section
 */
return array(
	'title'      => __( 'Service With Two Rows', 'ziri' ),
	'categories' => array( 'ziri-fse-patterns' ),
	'keywords'   => array( 'about-service-section'),
	'content' => '
    <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|default","right":"15px","bottom":"var:preset|spacing|default","left":"15px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--default);padding-right:15px;padding-bottom:var(--wp--preset--spacing--default);padding-left:15px"><!-- wp:spacer {"height":"120px","className":"is-style-has-mb-50"} -->
<div style="height:120px" aria-hidden="true" class="wp-block-spacer is-style-has-mb-50"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"620px"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|default","right":"var:preset|spacing|default","left":"var:preset|spacing|default"}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:var(--wp--preset--spacing--default);margin-right:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);font-style:normal;font-weight:600;line-height:1.3">Empowering Your Business: Core Strength</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"16px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}},"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:16px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8">Transforming challenges into opportunities.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"56px","className":"is-style-has-mb-40","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:56px" aria-hidden="true" class="wp-block-spacer is-style-has-mb-40"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"30px","left":"40px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}},"border":{"color":"#ebf1fb","width":"1px","radius":"32px"}},"backgroundColor":"white","className":"is-style-box-shadow-one","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-box-shadow-one has-border-color has-white-background-color has-background" style="border-color:#ebf1fb;border-width:1px;border-radius:32px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","width":80,"height":80,"scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="'. esc_url( get_theme_file_uri('/assets/images/visualdesign.png') ) . '" alt="" style="object-fit:contain;width:80px;height:80px" width="80" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"40px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}}},"fontSize":"medium-large"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-large-font-size" style="margin-top:40px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);font-style:normal;font-weight:600">Tailored Solutions</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default","top":"8px"}},"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:8px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8">Our customized strategies ensure your unique business needs are comprehensively addressed. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-default"} -->
<div class="wp-block-column is-style-default"><!-- wp:group {"style":{"spacing":{"padding":{"right":"32px","left":"32px","top":"32px","bottom":"32px"}},"border":{"radius":"32px","color":"#ebf1fb","width":"1px"}},"backgroundColor":"white","className":"is-style-box-shadow-one","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-box-shadow-one has-border-color has-white-background-color has-background" style="border-color:#ebf1fb;border-width:1px;border-radius:32px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","width":80,"height":80,"scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="'. esc_url( get_theme_file_uri('/assets/images/visualdesign.png') ) . '" alt="" style="object-fit:contain;width:80px;height:80px" width="80" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"40px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}}},"fontSize":"medium-large"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-large-font-size" style="margin-top:40px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);font-style:normal;font-weight:600">Expertise and Experience</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default","top":"8px"}},"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:8px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8">Leverage the wealth of knowledge from our seasoned industry experts for maximum results.  </p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}},"border":{"radius":"32px","color":"#ebf1fb","width":"1px"}},"backgroundColor":"white","className":"is-style-box-shadow-one","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-box-shadow-one has-border-color has-white-background-color has-background" style="border-color:#ebf1fb;border-width:1px;border-radius:32px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","width":80,"height":80,"scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="'. esc_url( get_theme_file_uri('/assets/images/visualdesign.png') ) . '" alt="" style="object-fit:contain;width:80px;height:80px" width="80" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"40px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}}},"fontSize":"medium-large"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-large-font-size" style="margin-top:40px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);font-style:normal;font-weight:600">Innovation-Driven</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default","top":"8px"}},"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:8px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8">Stay competitive with our forward-thinking and innovative business strategies.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"56px","className":"is-style-has-mb-30","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:56px" aria-hidden="true" class="wp-block-spacer is-style-has-mb-30"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"30px","left":"40px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}},"border":{"color":"#ebf1fb","width":"1px","radius":"32px"}},"backgroundColor":"white","className":"is-style-box-shadow-one","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-box-shadow-one has-border-color has-white-background-color has-background" style="border-color:#ebf1fb;border-width:1px;border-radius:32px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","width":80,"height":80,"scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="'. esc_url( get_theme_file_uri('/assets/images/visualdesign.png') ) . '" alt="" style="object-fit:contain;width:80px;height:80px" width="80" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"40px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}}},"fontSize":"medium-large"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-large-font-size" style="margin-top:40px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);font-style:normal;font-weight:600">Partnership Approach</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default","top":"8px"}},"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:8px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8">Enjoy a symbiotic relationship where your success works is our primary objective.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"32px","left":"32px","top":"32px","bottom":"32px"}},"border":{"radius":"32px","color":"#ebf1fb","width":"1px"}},"backgroundColor":"white","className":"is-style-box-shadow-one","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-box-shadow-one has-border-color has-white-background-color has-background" style="border-color:#ebf1fb;border-width:1px;border-radius:32px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","width":80,"height":80,"scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="'. esc_url( get_theme_file_uri('/assets/images/visualdesign.png') ) . '" alt="" style="object-fit:contain;width:80px;height:80px" width="80" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"40px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}}},"fontSize":"medium-large"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-large-font-size" style="margin-top:40px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);font-style:normal;font-weight:600">Proven Success</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default","top":"8px"}},"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:8px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8">Trust in our track record of consistently delivering successful outcomes for our clients.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}},"border":{"radius":"32px","color":"#ebf1fb","width":"1px"}},"backgroundColor":"white","className":"is-style-box-shadow-one","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-box-shadow-one has-border-color has-white-background-color has-background" style="border-color:#ebf1fb;border-width:1px;border-radius:32px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","width":80,"height":80,"scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="'. esc_url( get_theme_file_uri('/assets/images/visualdesign.png') ) . '" alt="" style="object-fit:contain;width:80px;height:80px" width="80" height="80"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"40px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}}},"fontSize":"medium-large"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-large-font-size" style="margin-top:40px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);font-style:normal;font-weight:600">Full-Spectrum Services</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default","top":"8px"}},"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="margin-top:8px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8">Benefit from our all-encompassing range of services, catering to every facet of your business.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"120px","className":"is-style-has-mb-50","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:120px" aria-hidden="true" class="wp-block-spacer is-style-has-mb-50"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->' 
);
