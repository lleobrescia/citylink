<?php
/**
 * Template for displaying search forms
 *
 * @package Citylink
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="input-group">
      <input type="text" class="form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Buscar', 'citynlink' ); ?>">
      
      <div class="input-group-addon">
         <button type="submit"  class="submit" name="submit" id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
      </div>
    </div>
	</form>