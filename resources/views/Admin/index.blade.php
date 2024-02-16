<x-adminlayout>
    <h1 class="title">Admin Dashboard</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			<div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2>{{ $farmersCount }}</h2>
							<p>Farmers</p>
						</div>
						
						@if($farmersCount > 0)
							<i class='bx bx-trending-up icon' ></i>
							@else
							<i class='bx bx-trending-down icon down' ></i>
						@endif
						
					
					</div>
					<span class="progress" data-value="{{$farmersIncrease}}%"></span>
					<span class="label">{{$farmersIncrease}}%  From yesterday</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>{{ $providersCount }}</h2>
							<p>Providers</p>
						</div>
						
						@if($providersCount > 0)
							<i class='bx bx-trending-up icon' ></i>
							@else
							<i class='bx bx-trending-down icon down' ></i>
						@endif
						
					</div>
					<span class="progress" data-value="{{$providersIncrease}}%"></span>
					<span class="label">{{$providersIncrease}}%  From yesterday</span>
					

				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>{{ $profilesCount }}</h2>
							<p>Profiles</p>
						</div>
						
						@if($profilesCount > 0)
							<i class='bx bx-trending-up icon' ></i>
							@else
							<i class='bx bx-trending-down icon down' ></i>
						@endif
					
					
					</div>
					<span class="progress" data-value="{{$profilesIncrease}}%"></span>
					<span class="label">{{$profilesIncrease}}%  From yesterday</span>
				</div>
				
			</div>

			<div class="bestseller">
				<h2>Blogs</h2>
				<p>Discover the top 3 Blogs of the week</p>
				<div class="product-list">
					<div class="product">
						<img src="{{ asset('images/provider.jpg') }}" alt="iPhone 11 Pro Max">
						<div class="product-info">
							<h3>Sowing Empowerment: Celebrating the Role of Women in Farming</h3>
							<p>by <span style="color: black">Alex Mwai</span></p>
							<p style="color: blue">382 views</p>
						</div>
					</div>
			
					<div class="product">
						<img src="{{ asset('images/provider.jpg') }}" alt="iPhone 11 Pro Max">
						<div class="product-info">
							<h3>Harvesting Success: Mastering the Art of Selling Farm Products Like a Pro</h3>
							<p>by <span style="color: black">Peter Muthee</span></p>
							<p style="color: blue">382 views</p>
						</div>
					</div>
				</div>
				<a href="#">See All</a>
			</div>
			
			
			
			
			
			

			<div class="members-container">
				<div class="members-header">
					<h3>Latest Members</h3>
					<div class="header-actions">
						<span class="new-members">{{ $userstoday }} New Members</span>
						<button class="close-btn">✕</button>
					</div>
				</div>
				<div class="members-grid">
					@foreach($latestUsers as $user)
						<div class="member">
							<img src="{{$user->profile ? asset('storage/' . $user->profile) : asset('/images/homies.jpg')}}"  alt="">
							<p>{{ $user->firstname }}</p>
							<span>{{ $user->created_at->diffForHumans() }}</span> <!-- This will display "3 days ago", "1 month ago", etc. -->
						</div>
					@endforeach
				</div>				
				<div class="view-all">
					<a href="/users/manage">View All Users</a>
				</div>
			</div>



</x-adminlayout>