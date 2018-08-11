<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
ベトナムワーク<br>
東京都新宿区高田馬場1ー33ー6平和相互403<br>
Lê Hưng: 090-3535-8691<br>
Lan Nguyễn: 080-9875-4489<br>
Thu Thu: 090-4753-8899<br>
Bi Bi (HUYEN) : 090-8438-5157<br>
</div><!-- .site-info -->
