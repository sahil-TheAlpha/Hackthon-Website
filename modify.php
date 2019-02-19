<?php
                $query = $con->query('SELECT * FROM agenda');
              if($query->num_rows > 0){
                  while($row = $query->fetch_assoc()){

                      $name = $row['name'];
                      $dat = $row['dat'];
                      $tim = $row['tim'];
                      $descrip=$row['descrip'];
              ?>

          <div class="row">
			<div class="col-sm-12">
				<div class="timeline">
  					<div class="timeline__wrap">
    					<div class="timeline__items">
                <?php
                $query = $con->query('SELECT * FROM agenda');
              if($query->num_rows > 0){
                  while($row = $query->fetch_assoc()){

                      $name = $row['name'];
                      $dat = $row['dat'];
                      $tim = $row['tim'];
                      $descrip=$row['descrip'];
              ?>
      						<div class="timeline__item">
        						<div class="timeline__content">
       								<h2 class="font-weight-bold black-text"><span><i class="fas fa-clock"></i></span>&nbsp;<?php echo $dat; ?></h2>
       								<h5 class="font-weight-bold"><?php echo $name; ?>&nbsp;<span class="text-muted small"><?php echo $tim; ?></span></h5>
      								<p class="text-justify"><?php echo $descrip; ?></p>
        						</div>
      						</div><?php }} ?>
    					</div>
  					</div>
				</div>
			</div>
		</div>
		

		<script type="text/javascript">
			<script type="text/javascript">
		$(function(){
  			jQuery('.timeline').timeline({
  				mode: 'horizontal',
  				forceVerticalMode: '600',
  				visibleItems: 3,
  				horizontalStartPosition: 'top'
  			});
		});
	</script>
		</script>   




		<div class="md-form mb-5">
          							<i class="fa fa-user prefix grey-text"></i>
          							<input type="text" id="form34" name="qName" class="form-control validate">
          							<label data-error="wrong" data-success="right" for="form34">Your name</label>
        						</div>
        						<div class="md-form mb-5">
          							<i class="fa fa-envelope prefix grey-text"></i>
          							<input type="email" id="form29" name="qEmail"class="form-control validate">
          							<label data-error="wrong" data-success="right" for="form29">Your email</label>
        						</div>
       	 						<div class="md-form mb-5">
          							<i class="fa fa-tag prefix grey-text"></i>
          							<input type="text" id="form32" name="qSubject"class="form-control validate">
          							<label data-error="wrong" data-success="right" for="form32">Subject</label>
        						</div>
        						<div class="md-form">
          							<i class="fa fa-pencil prefix grey-text"></i>
          							<textarea type="text" id="form8" name="qQuery"class="md-textarea form-control" rows="4"></textarea>
          							<label data-error="wrong" data-success="right" for="form8">Your message</label>
        						</div> 