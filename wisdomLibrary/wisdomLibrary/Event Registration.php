<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM events where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<body>
<header>
      
	  <nav class="nav-wraper indigo">
		  <a href="#" class="brand-logo">WISDOM LIBRARY</a>

		  <div class="container">
			  <a href="#" class="sidenav-trigger" data-target="mobile-links">
				  <i class="material-icons">menu</i>
			  </a>
			  <ul class="right" hide-on-med-and-down="">
			  <li><a href="report.php">GENERATE REPORT</a></li>
				<li><a href="Event Registration.html">UPDATE EVENTS</a></li>
				<li><a href="bookAdd.html">ADD BOOKS</a></li>
				
				<li><a href="index.php">HOME</a></li>
				  <li><button type="reset">Logout</button></li> </ul>
				  
	  
			  <ul class="sidenav" id="mobile-links">
				<li><a href="report.php">GENERATE REPORT</a></li>
				<li><a href="Event Registration.html">UPDATE EVENTS</a></li>
				<li><a href="bookAdd.html">ADD BOOKS</a></li>
				
				<li><a href="index.php">HOME</a></li>
				  <li><button type="reset">Logout</button></li>
				 
				</ul>
			
				

	  </div></nav>
  </header>
<div class="container">
    <pre>Book Club
        Book clubs are a great way to connect
        reders and authors while keeping things
        relatively simple.
        Venue: Publlic library
        Date: April-4-2022
        Duration: 2:30 - 4:30 </pre>
    <pre>Book Launch
        Book Launch are all activities, promotions
        that are done to introduce a new book.
        Venue: Publlic library
        Date: April-8-2022
        Duration: 8:30 - 10:30 
    </pre>
    <pre>Educational seminar
         Educational seminar indicates a
         small, advanced study to exchange ideas.
         Venue: Publlic library
         Date: April-10-2022
         Duration: 10:30 - 12:30 
    </pre>
    <form>
        <button class="addBtn"><a href = "">Add New</a></button>
        <button class="deleteBtn"><a href = "">Delete Event</a></button>
        <button class="updateBtn"><a href = "">Update Event</a></button>
    </form>

</div>
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<form action="" id="manage-event">
					<input type="hidden" name="id" value="<?php echo isset($id) ? $id :'' ?>">
					<div class="form-group row">
						<div class="col-md-5">
							<label for="" class="control-label">Event</label>
							<input type="text" class="form-control" name="event"  value="<?php echo isset($event) ? $event :'' ?>" required>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-5">
							<label for="" class="control-label">Schedule</label>
							<input type="text" class="form-control datetimepicker" name="schedule"  value="<?php echo isset($schedule) ? date("Y-m-d H:i",strtotime($schedule)) :'' ?>" required autocomplete="off">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-5">
							<label for="" class="control-label">Venue</label>
							<select name="venue_id" id="" required="" class="custom-select select2">
								<option value=""></option>
								<?php
									$artist = $conn->query("SELECT * FROM venue order by venue asc");
									while($row=$artist->fetch_assoc()):
								?>
									<option value="<?php echo $row['id'] ?>" <?php echo isset($venue_id) && $venue_id == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['venue']) ?></option>
								<?php endwhile; ?>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-10">
							<label for="" class="control-label">Description</label>
							<textarea name="description" id="description" class="form-control jqte" cols="30" rows="5" required><?php echo isset($description) ? html_entity_decode($description) : '' ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="2" id="type" name="type" <?php echo isset($type) && $type == 2 ? "checked" : "" ?>>
						  <label class="form-check-label" for="type">
						    Private Event (<i>Do not show in website</i>)
						  </label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="1" id="payment_status" name="payment_status" <?php echo isset($payment_type) && $payment_type == 1 ? "checked" : '' ?>>
						  <label class="form-check-label" for="payment_status">
						    Free For All
						  </label>
						</div>
					</div>
					<div class="form-group row" <?php echo isset($payment_type) && $payment_type == 1 ? "style='display:none'" : '' ?>>
						<div class="col-md-5">
							<label for="" class="control-label">Registration Fee</label>
							<input type="number" step="any" class="form-control text-right" name="amount" id ='amount'  value="<?php echo isset($amount) ? $amount :0 ?>" required autocomplete="off">
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-5">
							<label for="" class="control-label">Audience Capacity</label>
							<input type="number" step="any" class="form-control text-right" name="audience_capacity" id ='audience_capacity'  value="<?php echo isset($audience_capacity) ? $audience_capacity : 0 ?>" required autocomplete="off">
						</div>
					</div>
					<div class=" row form-group">
						<div class="col-md-5">
							<label for="" class="control-label">Banner Image</label>
							<input type="file" class="form-control" name="banner" onchange="displayImg2(this,$(this))">
						</div>

						<div class="col-md-5">
							<img src="<?php echo isset($banner) ? 'assets/uploads/'.$banner :'' ?>" alt="" id="banner-field">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label">Additional Images</label>
						<input type="file" id="chooseFile" multiple="multiple" onchange="displayIMG(this)" accept="image/x-png,image/gif,image/jpeg" style="display: none">
						<label for="chooseFile" id="choose"><strong>Choose File</strong></label>
							  <div id="drop">
							  	<?php 
							  		$images = array();
							  		if(isset($id)){
							  			$fpath = 'assets/uploads/event_'.$id;
							  			if(is_dir($fpath))
							  			$images= scandir($fpath);
							  		}
							  		foreach($images as $k => $v):
							  			if(!in_array($v,array('.','..'))):
							  				$img= base64_encode(file_get_contents($fpath.'/'.$v));
					  					
							  	?>
							  		<div class="imgF" >
											<span class="rem badge badge-primary" onclick="rem_func($(this))"><i class="fa fa-times"></i></span>
											<input type="hidden" name="img[]" value="<?php echo $img ?>">
											<input type="hidden" name="imgName[]" value="<?php echo $v ?>">
											<img class="imgDropped" src="<?php echo $fpath.'/'.$v ?>">
									</div>
							  	<?php
							  			else:
					  						unset($images[$v]);
							  			endif;
						  			endforeach;
						  			if(count($images) <=3):
							  	?>
							  	<span id="dname" class="text-center">Drop Files Here</span>
							  <?php endif; ?>
							  </div>
							  <div id="list">
							  </div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-sm btn-block btn-primary col-sm-2"> Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="imgF" style="display: none " id="img-clone">
			<span class="rem badge badge-primary" onclick="rem_func($(this))"><i class="fa fa-times"></i></span>
	</div>
<script>
	$('#payment_status').on('change keypress keyup',function(){
		if($(this).prop('checked') == true){
			$('#amount').closest('.form-group').hide()
		}else{
			$('#amount').closest('.form-group').show()
		}
	})
	$('.jqte').jqte();

	$('#manage-event').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_event',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.href = "index.php?page=events"
					},1500)

				}
				
			}
		})
	})
	if (window.FileReader) {
  var drop;
  addEventHandler(window, 'load', function() {
    var status = document.getElementById('status');
    drop = document.getElementById('drop');
    var dname = document.getElementById('dname');
    var list = document.getElementById('list');

    function cancel(e) {
      if (e.preventDefault) {
        e.preventDefault();
      }
      return false;
    }

    // Tells the browser that we *can* drop on this target
    addEventHandler(drop, 'dragover', cancel);
    addEventHandler(drop, 'dragenter', cancel);

    addEventHandler(drop, 'drop', function(e) {
      e = e || window.event; // get window.event if e argument missing (in IE)   
      if (e.preventDefault) {
        e.preventDefault();
      } // stops the browser from redirecting off to the image.
      $('#dname').remove();
      var dt = e.dataTransfer;
      var files = dt.files;
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        //attach event handlers here...

        reader.readAsDataURL(file);
        addEventHandler(reader, 'loadend', function(e, file) {
          var bin = this.result;
          var imgF = document.getElementById('img-clone');
          	imgF = imgF.cloneNode(true);
          imgF.removeAttribute('id')
          imgF.removeAttribute('style')

          var img = document.createElement("img");
          var fileinput = document.createElement("input");
          var fileinputName = document.createElement("input");
          fileinput.setAttribute('type','hidden')
          fileinputName.setAttribute('type','hidden')
          fileinput.setAttribute('name','img[]')
          fileinputName.setAttribute('name','imgName[]')
          fileinput.value = bin
          fileinputName.value = file.name
          img.classList.add("imgDropped")
          img.file = file;
          img.src = bin;
          imgF.appendChild(fileinput);
          imgF.appendChild(fileinputName);
          imgF.appendChild(img);
          drop.appendChild(imgF)
        }.bindToEventHandler(file));
      }
      return false;

    });

    Function.prototype.bindToEventHandler = function bindToEventHandler() {
      var handler = this;
      var boundParameters = Array.prototype.slice.call(arguments);
      return function(e) {
        e = e || window.event; // get window.event if e argument missing (in IE)   
        boundParameters.unshift(e);
        handler.apply(this, boundParameters);
      }
    };
  });
} else {
  document.getElementById('status').innerHTML = 'Your browser does not support the HTML5 FileReader.';
}

function addEventHandler(obj, evt, handler) {
  if (obj.addEventListener) {
    // W3C method
    obj.addEventListener(evt, handler, false);
  } else if (obj.attachEvent) {
    // IE method.
    obj.attachEvent('on' + evt, handler);
  } else {
    // Old school method.
    obj['on' + evt] = handler;
  }
}
function displayIMG(input){

    	if (input.files) {
	if($('#dname').length > 0)
		$('#dname').remove();

    			Object.keys(input.files).map(function(k){
    				var reader = new FileReader();
				        reader.onload = function (e) {
				        	// $('#cimg').attr('src', e.target.result);
          				var bin = e.target.result;
          				var fname = input.files[k].name;
          				var imgF = document.getElementById('img-clone');
						  	imgF = imgF.cloneNode(true);
						  imgF.removeAttribute('id')
						  imgF.removeAttribute('style')
				        	var img = document.createElement("img");
					          var fileinput = document.createElement("input");
					          var fileinputName = document.createElement("input");
					          fileinput.setAttribute('type','hidden')
					          fileinputName.setAttribute('type','hidden')
					          fileinput.setAttribute('name','img[]')
					          fileinputName.setAttribute('name','imgName[]')
					          fileinput.value = bin
					          fileinputName.value = fname
					          img.classList.add("imgDropped")
					          img.src = bin;
					          imgF.appendChild(fileinput);
					          imgF.appendChild(fileinputName);
					          imgF.appendChild(img);
					          drop.appendChild(imgF)
				        }
		        reader.readAsDataURL(input.files[k]);
    			})
    			
rem_func()

    }
    }
function displayImg2(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	$('#banner-field').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function rem_func(_this){
		_this.closest('.imgF').remove()
		if($('#drop .imgF').length <= 0){
			$('#drop').append('<span id="dname" class="text-center">Drop Files Here</label></span>')
		}
}
</script>

<?php include 'footer.php'?>
</body>
</html>