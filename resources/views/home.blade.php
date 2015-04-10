@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<ul id="tabs">
				   <li><a href="#" name="tab1">Normal Gacha</a></li>
				   <li><a href="#" name="tab2">Expensive Gacha</a></li>
				   <li><a href="#" name="tab3">Box Gacha</a></li>
				</ul>

				<div id="content">
					<div id="tab1">
						<p>Description</p>
						<p>{{ $normal_gacha_description }}</p>
						<a href="#" class="btn btn-blue" id="btn_normal_gacha_draw">Draw Normal</a>
					</div>

					<div id="tab2">
						<p>Description</p>
						<p>{{ $ex_gacha_description }}</p>
						<a href="#" class="btn btn-blue" id="btn_ex_gacha_draw">Draw Expensive</a>
					</div>

					<div id="tab3">
						<p>Description</p>
						<p>{{ $box_gacha_description }}</p>
						 <a href="#" class="btn btn-blue" id="btn_box_gacha_draw">Draw Box</a>

					</div>

					<div id="gacha_result" style="display: none">
						<img id="item-img" src="" />
						<div id="item-name">""</div>
						<div id="item-rarity">""</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	    $("#content").find("[id^='tab']").hide(); // Hide all content
	    $("#tabs li:first").attr("id","current"); // Activate the first tab
	    $("#content #tab1").fadeIn(); // Show first tab's content
	    
	    $('#tabs a').click(function(e) {
	        e.preventDefault();
	        if ($(this).closest("li").attr("id") == "current") { //detection for current tab
		 		return;
	        } else {
				$("#content").find("[id^='tab']").hide(); // Hide all content
			  	$("#tabs li").attr("id",""); //Reset id's
			  	$(this).parent().attr("id","current"); // Activate this
			  	$('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
				$('#gacha_result').hide();
			}
	    });
	});
	$('#normal_gacha').click(function () {
		$.ajax({
			type: 'post',
			url: 'normal/gacha_info',
			dataType: 'json',
			error: function (errorThrown) {
				console.log(errorThrown.responseText);
			},
			success: function (data) {
				console.log(data);

				$("#normal_gacha_area").show();
				$("#ex_gacha_area").hide();
				$("#box_gacha_area").hide();
				$("#gacha_result").hide();
			}
		});
	});

	$('#btn_normal_gacha_draw').click(function () {
		$.ajax({
			type: 'post',
			url: 'normal/draw',
			dataType: 'json',
			error: function (errorThrown) {
				console.log(errorThrown.responseText);
			},
			success: function(data) {
				console.log(data);
				$('#item-img').attr("src","images/normal.png");
				$('#item-rarity').text("normal rarity");
				$('#item-name').text("normal item name");
				$('#gacha_result').show();
			}
		});
	});

	$('#ex_gacha').click(function () {
		$.ajax({
			type: 'post',
			url: 'exclusive/gacha_info',
			dataType: 'json',
			error: function (errorThrown) {
				console.log(errorThrown.responseText);
			},
			success: function (data) {
				console.log(data);

				$("#ex_gacha_area").show();
				$("#normal_gacha_area").hide();
				$("#box_gacha_area").hide();
				$("#gacha_result").hide();
			}
		});
	});

	$('#btn_ex_gacha_draw').click(function () {
		$.ajax({
			type: 'post',
			url: 'exclusive/draw',
			dataType: 'json',
			error: function (errorThrown) {
				console.log(errorThrown.responseText);
			},
			success: function(data) {
				console.log(data);
				$('#item-img').attr("src","images/exclusive.png");
				$('#item-rarity').text("exclusive rarity");
				$('#item-name').text("exclusive item name");
				$('#gacha_result').show();
			}
		});
	});

	$('#box_gacha').click(function () {
		$.ajax({
			type: 'post',
			url: 'box/gacha_info',
			dataType: 'json',
			error: function (errorThrown) {
				console.log(errorThrown.responseText);
			},
			success: function (data) {
				console.log(data);

				$("#box_gacha_area").show();
				$("#normal_gacha_area").hide();
				$("#ex_gacha_area").hide();
				$("#gacha_result").hide();
			}
		});
	});

	$('#btn_box_gacha_draw').click(function () {
		$.ajax({
			type: 'post',
			url: 'box/draw',
			dataType: 'json',
			error: function (errorThrown) {
				console.log(errorThrown.responseText);
			},
			success: function(data) {
				console.log(data);
				$('#item-img').attr("src","images/box.png");
				$('#item-rarity').text("box rarity");
				$('#item-name').text("box item name");
				$('#gacha_result').show();
			}
		});
	});

</script>
@endsection
