<style type="text/css">
	
	.wptreehouse-badge {
		position: relative;
	}

	.wptreehouse-badge-info { 
		display: none;
		background: rgba(255,255,255,.9);
		padding: 5px 10px;
	}

	.wptreehouse-badge:hover .wptreehouse-badge-info{
		display: block;
		position: absolute;				
		top: 0 ;
		right: 0;		
	}
	
</style>

<?php 		

	echo $before_widget;
	echo $before_title . $title . $after_title;	

?>

<ul class="wptreehouse-badges frontend">

	<?php 

		$total_badges = count( $wptreehouse_profile->{'badges'} );

		for( $i = $total_badges - 1; $i >= $total_badges - $num_badges; $i-- ):		

	;?>

	<li class="wptreehouse-badge">

		<img src="<?php echo $wptreehouse_profile->{'badges'}[$i]->{'icon_url'}; ?>">		


		<?php if( $display_tooltip == '1' ): ?>


			<div class="wptreehouse-badge-info">
																		
				<p class="wptreehouse-badge-name">			
					<a href="<?php echo $wptreehouse_profile->{'badges'}[$i]->{'url'};; ?>">
						<?php echo $wptreehouse_profile->{'badges'}[$i]->{'name'}; ?>
					</a>								
				</p>							

							
				<?php if ( $wptreehouse_profile->{'badges'}[$i]->{'courses'}[0]->{'title'} != '' ): ?>
				
				<p class="wptreehouse-badge-project">
					<a href="<?php echo $wptreehouse_profile->{'badges'}[$i]->{'courses'}[0]->{'url'}; ?>">
						<?php echo $wptreehouse_profile->{'badges'}[$i]->{'courses'}[0]->{'title'} ;?>
					</a>
				</p>
				<?php endif; ?>

				<a href="http://teamtreehouse.com" alt="Team Treehouse | A Better Way to Learn Technology" class="wptreehouse-logo">
					<img src="<?php echo plugins_url( 'wptreehouse-badges/images/treehouse-logo-demo.png' ); ?>" alt="Treehouse" />
				</a>
					
				<span class="wptreehouse-tooltip bottom"></span>							

			</div>

		<?php endif; ?>


	</li>


	<?php endfor; ?>

</ul>


<?php
	echo $after_widget; 

?>