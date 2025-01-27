<div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
		<!-- Js code for return to prvious top-navbar -->
			
        <script>
    document.getElementById('sidebarCollapse').addEventListener('click', function () {
        // Get the previous page's URL
        const previousPage = document.referrer;

        // Check if the previous page is NOT the login page 
        if (previousPage && !previousPage.includes('/admin_panel/index.php')) {
            // Navigate back only if the previous page is not the login page
            window.history.back();
        } else {
            // If there's no valid previous page or it's the login page, do nothing
            console.log('Cannot navigate back to the login page.');
        }
    });
</script>


					<a class="navbar-brand" href="#"> <?php echo $section ?> </a>
					
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   <span class="material-icons">notifications</span>
								   <span class="notification">4</span>
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">You have 5 new messages</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Mike</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish Mary on her birthday!</a>
                                    </li>
                                    <li>
                                        <a href="#">5 warnings in Server Console</a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
								<span class="material-icons">apps</span>
								</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
								<span class="material-icons">person</span>
								</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="#">
								<span class="material-icons">settings</span>
								</a>
                            </li>

                            <li class="nav-item" id="logout">
                                <a class="nav-link" href="../logout.php">
								logout
								</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
</div>