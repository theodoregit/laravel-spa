<!doctype html>
<html lang="en">
  <head>
  	<title>CBE Birr</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="../css/style2.css">
	<style>
		.dot-spin {
			position: relative;
			width: 10px;
			height: 10px;
			border-radius: 5px;
			background-color: transparent;
			color: transparent;
			box-shadow: 0 -18px 0 0 #60178a, 12.72984px -12.72984px 0 0 #60178a, 18px 0 0 0 #60178a, 12.72984px 12.72984px 0 0 rgba(152, 128, 255, 0), 0 18px 0 0 rgba(152, 128, 255, 0), -12.72984px 12.72984px 0 0 rgba(152, 128, 255, 0), -18px 0 0 0 rgba(152, 128, 255, 0), -12.72984px -12.72984px 0 0 rgba(152, 128, 255, 0);
			animation: dotSpin 1.5s infinite linear;
		}

		@keyframes dotSpin {
			0%,
			100% {
				box-shadow: 0 -18px 0 0 #60178a, 12.72984px -12.72984px 0 0 #60178a, 18px 0 0 0 #60178a, 12.72984px 12.72984px 0 -5px rgba(152, 128, 255, 0), 0 18px 0 -5px rgba(152, 128, 255, 0), -12.72984px 12.72984px 0 -5px rgba(152, 128, 255, 0), -18px 0 0 -5px rgba(152, 128, 255, 0), -12.72984px -12.72984px 0 -5px rgba(152, 128, 255, 0);
			}
			12.5% {
				box-shadow: 0 -18px 0 -5px rgba(152, 128, 255, 0), 12.72984px -12.72984px 0 0 #60178a, 18px 0 0 0 #60178a, 12.72984px 12.72984px 0 0 #60178a, 0 18px 0 -5px rgba(152, 128, 255, 0), -12.72984px 12.72984px 0 -5px rgba(152, 128, 255, 0), -18px 0 0 -5px rgba(152, 128, 255, 0), -12.72984px -12.72984px 0 -5px rgba(152, 128, 255, 0);
			}
			25% {
				box-shadow: 0 -18px 0 -5px rgba(152, 128, 255, 0), 12.72984px -12.72984px 0 -5px rgba(152, 128, 255, 0), 18px 0 0 0 #60178a, 12.72984px 12.72984px 0 0 #60178a, 0 18px 0 0 #60178a, -12.72984px 12.72984px 0 -5px rgba(152, 128, 255, 0), -18px 0 0 -5px rgba(152, 128, 255, 0), -12.72984px -12.72984px 0 -5px rgba(152, 128, 255, 0);
			}
			37.5% {
				box-shadow: 0 -18px 0 -5px rgba(152, 128, 255, 0), 12.72984px -12.72984px 0 -5px rgba(152, 128, 255, 0), 18px 0 0 -5px rgba(152, 128, 255, 0), 12.72984px 12.72984px 0 0 #60178a, 0 18px 0 0 #60178a, -12.72984px 12.72984px 0 0 #60178a, -18px 0 0 -5px rgba(152, 128, 255, 0), -12.72984px -12.72984px 0 -5px rgba(152, 128, 255, 0);
			}
			50% {
				box-shadow: 0 -18px 0 -5px rgba(152, 128, 255, 0), 12.72984px -12.72984px 0 -5px rgba(152, 128, 255, 0), 18px 0 0 -5px rgba(152, 128, 255, 0), 12.72984px 12.72984px 0 -5px rgba(152, 128, 255, 0), 0 18px 0 0 #60178a, -12.72984px 12.72984px 0 0 #60178a, -18px 0 0 0 #60178a, -12.72984px -12.72984px 0 -5px rgba(152, 128, 255, 0);
			}
			62.5% {
				box-shadow: 0 -18px 0 -5px rgba(152, 128, 255, 0), 12.72984px -12.72984px 0 -5px rgba(152, 128, 255, 0), 18px 0 0 -5px rgba(152, 128, 255, 0), 12.72984px 12.72984px 0 -5px rgba(152, 128, 255, 0), 0 18px 0 -5px rgba(152, 128, 255, 0), -12.72984px 12.72984px 0 0 #60178a, -18px 0 0 0 #60178a, -12.72984px -12.72984px 0 0 #60178a;
			}
			75% {
				box-shadow: 0 -18px 0 0 #60178a, 12.72984px -12.72984px 0 -5px rgba(152, 128, 255, 0), 18px 0 0 -5px rgba(152, 128, 255, 0), 12.72984px 12.72984px 0 -5px rgba(152, 128, 255, 0), 0 18px 0 -5px rgba(152, 128, 255, 0), -12.72984px 12.72984px 0 -5px rgba(152, 128, 255, 0), -18px 0 0 0 #60178a, -12.72984px -12.72984px 0 0 #60178a;
			}
			87.5% {
				box-shadow: 0 -18px 0 0 #60178a, 12.72984px -12.72984px 0 0 #60178a, 18px 0 0 -5px rgba(152, 128, 255, 0), 12.72984px 12.72984px 0 -5px rgba(152, 128, 255, 0), 0 18px 0 -5px rgba(152, 128, 255, 0), -12.72984px 12.72984px 0 -5px rgba(152, 128, 255, 0), -18px 0 0 -5px rgba(152, 128, 255, 0), -12.72984px -12.72984px 0 0 #60178a;
			}
		}
	</style>
	</head>
	<body>
	    <section class="ftco-section">
		    <div class="container">
                
			    <div class="row justify-content-center">
				    <div class="col-md-7 col-lg-5">
					    <div class="row justify-content-center">
							<div class="snippet" data-title=".dot-spin">
								<div class="stage">
									<div class="dot-spin"></div>
								</div>
							</div>
						</div>
				    </div>
					<form action="{{route('validation')}}" method="get">
						
						<input style="display: none;" type="text" name="amount" value="{{$amount}}">
						<input style="display: none;" type="text" name="till" value="{{$till}}">
						<input style="display: none;" type="text" name="compName" value="{{$compName}}">
						<button style="display: none;" type="submit" id="redirectLink">redirect</button>
					</form>
					<button style="display: none;" class="w3-button w3-light-grey" onclick="move()">Click Me</button>
					{{-- <a style="display: none;" href="{{route('validation')}}" id="redirectLink">redirect</a> --}}
			    </div>
		    </div>
	    </section>

        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
        <script type="text/javascript">
            window.onload = function(){
                // document.getElementById("redirectLink").click();
                // console.log("here");
            }
        </script>
		<script type="text/javascript">
			setTimeout(() => {
				document.getElementById("redirectLink").click();
                console.log("here");
			}, 1000);
		</script>
		<script>
			function move() {
				document.getElementById("redirectLink").click();
			  var elem = document.getElementById("myBar");
			  var width = 1;
			  var id = setInterval(frame, 10);
			  function frame() {
				if (width >= 100) {
				  clearInterval(id);
				} else {
				  width++;
				  elem.style.width = width + '%';
				}
			  }
			}
		</script>
	</body>
</html>