<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
				
		<div class="nav-container">
		<nav class="top-bar overlay-bar">
				<div class="container">
				
					<div class="row nav-menu">
						<div class="col-md-2 col-sm-3 columns">
								<a href="/">
								<?php 
							$actual_page = $_SERVER[REQUEST_URI];
							if(strlen($actual_page)>1){ 
								echo '<img alt="logo" class="outer-logo" src="/img/growth-min-white-slim.png">';
							}
						 else{
								echo '<img alt="logo" class="outer-logo" src="/img/A-GA-seul.png">';
						 }
							?> 
							</a>
						</div>
					
						<div class="col-md-10 col-sm-9 columns">
							<ul class="menu">
								<li><a href="#clients">Clients</a></li>
								<li><a href="#offre">Offres</a>
								</li>
								<li><a href="publications.php">Publications</a></li>
								<li><a href="http://academy.thiga.fr">Formations</a></li>
								<li><a href="#equipe">Équipe</a></li>
                                <li><a href="#contact">Contact</a></li>
							</ul>
		
							<ul class="social-icons text-right">
								<li>
									<a href="https://twitter.com/innothiga">
										<i class="icon social_twitter"></i>
									</a>
								</li>
							
							
								<li>
									<a href="https://www.instagram.com/thigafr">
										<i class="icon social_instagram"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>
					
				</div>
			</nav>
			
		
		</div>