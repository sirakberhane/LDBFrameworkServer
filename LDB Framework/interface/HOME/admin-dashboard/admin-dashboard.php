<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!(isset($_COOKIE['AUTH']))){
    header('Location: home.php');
    exit;
  }
?>
<html>
  <head>
    <title>Administrator Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <div class="logo">
	                 <h1><a href="index.html"></a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> OPTIONS <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="#">Profile</a></li>
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Settings
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="#">Administrator</a></li>
                            <li><a href="#">User</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-6">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">LDB Framework Server Status</div>

							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
               <br /><br />
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">User Status</div>

								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Total Active Users</div>

								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">API Status</div>

						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  		STATUS: <strong>OK</strong>
					</div>
		  		</div>
		  	</div>

		  	<div class="content-box-large">
        <h1>  LinkedDatabase Frameworks (SERVER) </h1>
          <br /><br />
              Using Java WebSocket and Dynamic Web Editor, this server-socket is
          <br /><br />
          able to auto-generate, find user IDs, and remove selected users
          <br /><br />
          from the LDB Framework (Server-Side).The Client-Side will send the
          <br /><br />
          user credential through an encrypted HTTPS server and the LDB
          <br /><br />
          server will match the sent credential with the database
          <br /><br />
          credential if they match the server will send back a "PASS" or let the
          <br /><br />
          user login else, it will send a "FAIL" or credentials don't match alert.
          <br /><br />
          <br /><br />
              The LDB database uses modern password hashing. When the user first
          <br /><br />
          makes a password the server will automatically assign a random ID and
          <br /><br />
          salt (String). Using the password and salt, the server will encrypt
          <br /><br />
          and only save the hash of the password {ex. (SHA512(password + salt)).
          <br /><br />
          HASH -> DB}. This means even if the server was hacked, the hacker
          <br /><br />
          will not be able to get the password easily and they would have a hard
          <br /><br />
          time cracking the encrypted hash passwords.
          <br /><br />
          <br /><br />
          <h3>Features</h3>
          <br /><br />
            * Create, Edit, and Delete Accounts (Database)
            <br /><br />
            * Locks for 15 min if password is wrong
            <br /><br />
            * Bash-like UI with unique commands
            <br /><br />
            <br /><br />
          <h3>Future Implementations</h3>
          <br /><br />
            * Admin + Multi-User Control (Parallel Pipeline)
          <br /><br />
            * Branch/Guest Login (Limiting User to only basic commands)
          <br /><br />
            * Automated Login (Admin-Only)
          <br /><br />
            * Network Handling - Admin vs. User website Re-directing (Admin-Only)
          <br /><br />
            * Virtual/Nano LDB Framework (Admin + User
          <br /><br />
            * Implement U2F/FIDO Authentication + NFC support for IOS/Android
          <br /><br />
          <br /><br />
		  	</div>
		  </div>
		</div>
    </div>
    <footer>
         <div class="container">

            <div class="copy text-center">
               &copy; 2018 Sirak Berhane - <a href='https://github.com/sirakberhane/LDBFrameworkServer'> LinkedDatabase Frameworks</a>
            </div>
         </div>
      </footer>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
