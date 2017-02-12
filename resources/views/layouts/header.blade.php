<section class="hero is-fullheight is-mountain animated slideInUp parallax" style="background-image: url('../img/background-fredesk.jpg');">
	<!-- Hero header: will stick at the top -->
	<div class="hero-head animated fadeInDown animate-delay">
		<header class="nav">
			<div class="container">
				<div class="nav-left">
					<a href="/" class="nav-item">
						<img width="130" src="/img/logo-fredesk.png" alt="Fredesk">
					</a>
				</div>
				<span @click="toggleNav" class="nav-toggle">
					<span></span>
					<span></span>
					<span></span>
				</span>
				<div :class="{'nav-right': true, 'nav-menu': true, 'is-active': mobileNav}" @click="jumpToSection">

					<router-link class="nav-item hvr-underline-from-left" active-class="is-active" to="/" exact>
		         	Home
		            </router-link>

		            <router-link class="nav-item hvr-underline-from-left" active-class="is-active" to="/about">
		            About Me
		            </router-link>
		            <a href="http://snippets.fredesk.com" class="nav-item hvr-underline-from-left">
		            Snippets
		            </a>
		            <a href="http://blog.fredesk.com" class="nav-item hvr-underline-from-left">
		            Blog
		            </a>		            
		            <router-link class="nav-item hvr-underline-from-left" active-class="is-active" to="/contact">
		            Contact
		            </router-link> 	

		            <span class="nav-item">
			          <a href="https://github.com/FredericBruening?tab=repositories" class="button is-inverted">
			            <span class="icon">
			              <i class="fa fa-github"></i>
			            </span>
			            <span>Follow</span>
			          </a>
			        </span>  

				</div>
			</div>
		</header>
	</div>

	<!-- Hero content: will be in the middle -->
	<div class="hero-body">
		<div class="container has-text-centered">

		<transition-group tag="div" appear appear-active-class="animated flipInX animate-delay">
			<h1 class="title is-2" key="h1">
				Creative Ideas That Perform
			</h1>
			<h2 class="title is-4 typewrite" 
				key="h2"
				data-period="2000" 
				data-type='[ "Hi, Im Frederic.", "My success is measured by results.", "I am Creative.", "I Love to Develop.", "I Love Design." ]'
			>
			  	<span class="wrap"></span>
			</h2>
		</transition-group>

		</div>
	</div>

</section>