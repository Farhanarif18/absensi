<nav class="pcoded-navbar menu-light ">
	<div class="navbar-wrapper  ">
		<div class="navbar-content scroll-div " >
			
			<div class="">
				<div class="main-menu-header">
					<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
					<div class="user-details">
						<div id="more-details">UX Designer <i class="fa fa-caret-down"></i></div>
					</div>
				</div>
				<div class="collapse" id="nav-user-link">
					<ul class="list-unstyled">
						<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
						<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
						<li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
					</ul>
				</div>
			</div>
			
			<ul class="nav pcoded-inner-navbar ">
				<li class="nav-item pcoded-menu-caption">
					<label>Navigation</label>
				</li>
				<li class="nav-item">
					<a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
				</li>
				<li class="nav-item">
					<a href="{{ route('pegawai') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">pegawai</span></a>
				</li>
				<li class="nav-item">
					<a href="{{ route('kehadiran') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">kehadiran</span></a>
				</li>
				<li class="nav-item">
					<a href="{{ route('thadir') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Tidak  Hadir</span></a>
				</li>
				<li class="nav-item">
					<a href="{{ route('dataCuti') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Cuti</span></a>
				</li>
				<li class="nav-item pcoded-menu-caption">

			</ul>
			
			
		</div>
	</div>
</nav>