@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					Coin: <div id="total_coin"> {{$total_coin}} </div>

					<div class="common-button" id="normal_gacha">Normal Gacha</div>

					<div class="common-button" id="ex_gacha">Expensive Gacha</div>

					{{--<div class="common-button" id="box_gacha">Box Gacha</div>--}}

					<div id="normal_gacha_area" style="display: none">
						<div id="normal_gacha_desc"></div>
						<div id="btn_normal_gacha_draw" class="common-button">Draw Normal</div>
					</div>

					<div id="ex_gacha_area" style="display: none">
						<div id="ex_gacha_desc"></div>
						<div id="btn_ex_gacha_draw" class="common-button">Draw Exclusive</div>
					</div>

					{{--<div id="box_gacha_area" style="display: none">--}}
						{{--<div id="box_gacha_desc"></div>--}}
						{{--<div id="btn_box_gacha_draw" class="common-button">Draw Box</div>--}}
					{{--</div>--}}

					<div id="gacha_result" style="display: none">
						<img id="item-img" src="" />
						<div id="item-name">""</div>
						<div id="item-rarity">""</div>
					</div>

					<div id="error_msg" style="display:none"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

	setInterval(function(){
		var coins = parseInt($('#total_coin').text());
		$('#total_coin').text(coins+1);
	},1000);

	function setNormalGachaInfo(data) {
		$('#normal_gacha_desc').text(data.description);
	}

	function setExpensiveGachaInfo(data) {
		$('#ex_gacha_desc').text(data.description);
	}

	function setBoxGachaInfo(data) {
		$('#box_gacha_desc').text(data.description);
	}

	function showGachaResult(data) {
		$('#item-img').attr("src",data.img);
		$('#item-rarity').text(data.rarity);
		$('#item-name').text(data.name);
		$('#gacha_result').show();
		$('#total_coin').text(data.coin_after);
	}

	function showErrorMessage(msg) {
		$("#gacha_result").hide();
		$('#error_msg').text(msg);
		$('#error_msg').show();
	}

	$('#normal_gacha').click(function () {
		$.ajax({
			type: 'post',
			url: 'normal/gacha_info',
			dataType: 'json',
			error: function (errorThrown) {
				console.log(errorThrown.responseText);
			},
			success: function (data) {
				setNormalGachaInfo(data);
				$("#normal_gacha_area").show();
				$("#ex_gacha_area").hide();
//				$("#box_gacha_area").hide();
				$("#gacha_result").hide();
				$("#error_msg").hide();
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
				if (data.error_msg) {
					showErrorMessage(data.error_msg);
				} else {
					showGachaResult(data);
				}
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
				setExpensiveGachaInfo(data);
				$("#ex_gacha_area").show();
				$("#normal_gacha_area").hide();
//				$("#box_gacha_area").hide();
				$("#gacha_result").hide();
				$("#error_msg").hide();
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
				if (data.error_msg) {
					showErrorMessage(data.error_msg);
				} else {
					showGachaResult(data);
				}
			}
		});
	});

//	$('#box_gacha').click(function () {
//		$.ajax({
//			type: 'post',
//			url: 'box/gacha_info',
//			dataType: 'json',
//			error: function (errorThrown) {
//				console.log(errorThrown.responseText);
//			},
//			success: function (data) {
//				setBoxGachaInfo(data);
////				$("#box_gacha_area").show();
//				$("#normal_gacha_area").hide();
//				$("#ex_gacha_area").hide();
//				$("#gacha_result").hide();
//				$("#error_msg").hide();
//			}
//		});
//	});

//	$('#btn_box_gacha_draw').click(function () {
//		$.ajax({
//			type: 'post',
//			url: 'box/draw',
//			dataType: 'json',
//			error: function (errorThrown) {
//				console.log(errorThrown.responseText);
//			},
//			success: function(data) {
//				$('#item-img').attr("src","images/box.png");
//				$('#item-rarity').text("box rarity");
//				$('#item-name').text("box item name");
//				$('#gacha_result').show();
//			}
//		});
//	});

</script>
@endsection
