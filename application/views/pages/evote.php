<section class="special-area bg-biru section_padding_50" id="about">
	<div class="special_description_area mt-150">
        <div class="container">
            <div class="row">
            	<div class="col-lg-2"></div>
            	<div class="col-12 col-lg-8">
            		<div class="single-special">
            			<?php
            				foreach ($main['sql']->result() as $sql) {
            					echo $sql->langkah_evote;
            				}
            			?>
            		</div>
            	</div>
            	<div class="col-lg-2"></div>
            </div>
        </div>
    </div>
</section>
