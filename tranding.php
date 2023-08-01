<?php 
	include("header.php");
?>
<!-- <div class="container-fluid"> -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<img src="img/Wedding/WeddingInvitation.png" class="img-fluid w-100" alt="image Here" style="max-height: 500px;">
		</div>
	</div>

	<div class="row">
		<div>
			<i id="showhideicon" class="bi bi-caret-right-square float-start" style="font-size: 40px;" onclick="showsidebar()"></i>
			<i id="closeicon" class="bi bi-x float-end" style="font-size: 40px;cursor: pointer; display:none;" onclick="closesidebar()"></i>
		</div>

		<div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 text-center mb-5 pt-5 border border-1 border-top-0 border-bottom-0">
			<h2 class="text-start text-uppercase mb-5">Tranding</h2>
			<div>
				<h4 class="text-uppercase text-start">Card Orientation</h4>
				<!-- <h2 style="color:#6D7E7A; text-align: left;">Card Orientation</h2> -->
				<div class="row my-5">
					<div class="col-lg-4 col-md-4 col-sm-4" onclick="cardFormat('portrait')">
						<i class="bi bi-image" style="color:#6D7E7A; font-size:60px; cursor: pointer;">
						</i>
						<span style="color:#FFBA36; cursor: pointer;">Portrait</span>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 border border-1 border-top-0 border-bottom-0 border-end-0" onclick="cardFormat('square')">
						<i class="bi bi-image w-100" style="color:#6D7E7A; font-size:60px; cursor: pointer;"></i>
						<span style="color:#EE3226E5; cursor: pointer;">Square</span>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 border border-1 border-top-0 border-bottom-0 border-end-0" onclick="cardFormat('landscape')">
						<i class="bi bi-image" style="color:#6D7E7A; font-size:60px; cursor: pointer;"></i>
						<span style="color:#EE3226E5; cursor: pointer;">Landscape</span>
					</div>

				</div>

				<div class="row my-5 pt-5 border border-1 border-start-0 border-bottom-0 border-end-0 text-start">
					<!-- <h2 style="color:#6D7E7A;">Wedding Invitations</h2> -->
					<h4 class="text-uppercase">Wedding Invitations</h4>

					<div class="col-12 my-1 rounded">
						<a href="" class="text-start btn btn-lg" style="border-radius: 10px; border:3px solid #FFBA36; white-space: nowrap;">Bachelor Part</a>
					</div>

					<div class="col-12 my-1 rounded">
						<a href="" class="text-start btn btn-lg" style="border-radius: 10px; border:3px solid #FFBA36; white-space: nowrap;">Bridal Shower</a>
					</div>

					<div class="col-12 my-1 rounded">
						<a href="" class="text-start btn btn-lg" style="border-radius: 10px; border:3px solid #FFBA36; white-space: nowrap;">Engagement Party</a>
					</div>

					<div class="col-12 my-1 rounded">
						<a href="" class="text-start btn btn-lg" style="border-radius: 10px; border:3px solid #FFBA36; white-space: nowrap;">Response & RSVP Cards</a>
					</div>					

					<!-- <div class="col-lg-12 col-md-12 col-sm-12 text-start my-3">
						<h5 style="color: #FFBA36;">Bachelor Party</h5>
					</div> -->

					<!-- <div class="col-lg-12 col-md-12 col-sm-12 text-start my-3">
						<h5 style="color: #FFBA36;">Bridal Shower</h5>
					</div> -->

					<!-- <div class="col-lg-12 col-md-12 col-sm-12 text-start my-3">
						<h5 style="color: #FFBA36;">Engagement Party</h5>
					</div> -->

					<!-- <div class="col-lg-12 col-md-12 col-sm-12 text-start my-3">
						<h5 style="color: #FFBA36;">Response & RSVP Cards</h5>
					</div> -->
				</div>

				<div class="row my-5 pt-5 border border-1 border-start-0 border-bottom-0 border-end-0 text-start">
					<h4 class="text-uppercase" >Languages</h4>
					
					<div class="col-lg-4 col-md-4 col-sm-4 text-start my-3 rounded">
						<a class="btn btn-lg w-100" style="border-radius: 5px; background-color:#FFBA36;" onclick="cardLanguage('english')">English</a>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 text-start my-3">
						<a class="btn btn-lg w-100" style="border: 2px solid red; border-radius: 5px; color: red;" onclick="cardLanguage('urdu')">Urdu</a>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 text-start my-3">
						<a class="btn btn-lg w-100" style="border: 2px solid red; color: red; border-radius: 5px;" onclick="cardLanguage('sindhi')">Sindhi</a>
					</div>
				</div>

			</div>
		</div>

		<div id="cardDiv" class="col-lg-9 col-md-12 col-sm-12 card-content">
			<div class="row p-5 mt-5">
				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle 95.png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle 96.png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle .png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle 97.png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle 98.png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle 99.png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle 100.png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle 101.png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle 102.png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle 104.png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle 105.png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-3 mb-4 item">
					<img src="img/Wedding/Rectangle/Rectangle 110.png" class="img-fluid w-100" alt="image Here">
					<div class="row text-center mt-1">
						<span style="color:#EE3226E5;" class="col-lg-6 col-md-12 col-sm-12 float-start fw-bolder">PKR 1500</span>
						<span style="color:#FFBA36;" class="col-lg-6 col-md-12 col-sm-12 float-end fw-bolder">Customise</span>
					</div>
				</div>

			</div>
		</div>
		<div class="row">
				<div class="col-4"></div>
				<div class="col-4 text-center">
					<div class="pagination">
			            <li class="page-item previous-page disable">
			                <a class="page-link" href="#">Prev</a>
			            </li>
			            <li class="page-item current-page active">
			                <a class="page-link" href="#">1</a>
			            </li>
			            <li class="page-item dots">
			                <a class="page-link" href="#">...</a>
			            </li>
			            <li class="page-item current-page">
			                <a class="page-link" href="#">5</a>
			            </li>
			            <li class="page-item current-page">
			                <a class="page-link" href="#">6</a>
			            </li>
			            <li class="page-item dots">
			                <a class="page-link" href="#">...</a>
			            </li>
			            <li class="page-item current-page">
			                <a class="page-link" href="#">10</a>
			            </li>
			            <li class="page-item next-page">
			                <a class="page-link" href="#">Next</a>
			            </li>
				    </div>
				</div>
				<div class="col-4"></div>
			</div>
	</div>
</div>
<?php
	include("footer.php");
?>