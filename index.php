<?php include 'info.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $companyname ?></title>

		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link type="text/css" rel="stylesheet" href="css/website.css"  media="screen,projection"/>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- Material Symbols -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <style>
            @media only screen and (max-width: 768px) {
  /* CSS styles for mobile devices go here */
  .flexbox{
    display:block;
  }
  #industry_expertise{
    margin-right:0px !important; 
  }

  .brand-logo{
    font-size:22px !important;
    margin-top:-9px !important;
  }
  .main-nav-res{
    display:inline-grid !important;
  }
  .right-res{
    margin-top:22px;
  }
}

        </style>
	</head>

	<body class="scrollspy" id="home">

		<nav class="main-nav z-depth-0 main-nav-res">
			<div class="nav-wrapper container-fluid">
				<a href="#home" class="brand-logo"><?php echo $companyname ?></a>

				<ul class="right right-res">
					<li><a href="index.php">Home</a></li>
					<li><a href="#industries">Our Expertise</a></li>
					<li><a href="#who-we-are">About Us</a></li>
					<li id="contact-res"><a href="#contact-us">Contact Us</a></li>
					<li id="lets-res"><a href="#contact-us" class="btn yellow black-text semi-bold"><i class="material-icons right">keyboard_arrow_right</i>Let's Talk</a></li>
				</ul>
			</div>
		</nav>

		<div class="slider">
    <ul class="slides">
        <li>
            <div class="overlay"></div>
            <img src="images/banner.webp" alt="">
            <div class="caption left-align">
                <h1 class="semi-bold">
                    <span>Auxis Secures Top-Tier</span>
                    <br>
                    <span class="yellow-text">UiPath Platinum Partnership</span>
                </h1>
                <h4>Auxis joins the ranks of the top 1% of global partners<br>recognized for excellence in automation solutions.</h4>
            </div>
        </li>

        <li>
            <div class="overlay"></div>
            <img src="images/banner.webp" alt="">
            <div class="caption left-align">
                <h1 class="semi-bold">
                    <span>Finance Innovation Trends:</span>
                    <br>
                    <span class="yellow-text">How Hybrid & Nearshoring Are</span>
                    <br>
                    <span class="yellow-text">Shaping the Future</span>
                </h1>
                <h4>Cut through the noise and discover what’s truly<br>driving financial transformation today.</h4>
            </div>
        </li>

        <li>
            <div class="overlay"></div>
            <img src="images/banner.webp" alt="">
            <div class="caption left-align">
                <h1 class="semi-bold">
                    <span>Revamping Business Processes</span>
                    <br>
                    <span class="yellow-text">Leading Since 2015</span>
                </h1>
                <h4>Gain a competitive edge with innovative strategies,<br>technology, and process optimization.</h4>
            </div>
        </li>
    </ul>
</div>

<section class="center-align scrollspy" id="what-we-do">
    <div class="container">
        <h3 class="medium"><?php echo $companyname ?> Business Transformation Solutions</h3>
        <p>Our expertise in business modernization helps us deliver tailored consulting and nearshore outsourcing services, designed to align with your strategic business objectives in the following key areas:</p>

        <br>

        <div class="row">
            <div class="col s12 m4 l3">
                <div class="card-panel hovered">
                    <h5>Finance &<br>Accounting</h5>
                    <p class="grey-text text-darken-2">We develop and execute impactful strategies that assist CFOs in enhancing, expanding, and evolving their financial operations to achieve operational excellence.</p>
                    <br>
                </div>
            </div>

            <div class="col s12 m4 l3">
                <div class="card-panel hovered">
                    <h5>Information<br>Technology</h5>
                    <p class="grey-text text-darken-2">Helping CIOs drive IT modernization by adopting cutting-edge processes, technologies, and workforce capabilities, positioning IT as a key business enabler.</p>
                    <br>
                </div>
            </div>

            <div class="col s12 m4 l3">
                <div class="card-panel hovered">
                    <h5>Business<br>Operations</h5>
                    <p class="grey-text text-darken-2">We empower businesses to optimize customer service, HR, and other back-office operations, ensuring they run efficiently and deliver outstanding performance.</p>
                    <br>
                </div>
            </div>

            <div class="col s12 m4 l3">
                <div class="card-panel hovered">
                    <h5>Digital<br>Transformation</h5>
                    <p class="grey-text text-darken-2">We provide end-to-end guidance through your digital transformation, from Intelligent Automation to Cloud Solutions, helping you stay ahead in the digital age.</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>


		<div class="container">
			<div class="divider"></div>
		</div>

		<section>
    <div class="container">
        <h2 class="medium center-align">Why Partner with <span class="yellow-text text-darken-2"><?php echo $companyname ?></span></h2>
        <br>
        <ul class="collapsible popout">
            <li>
                <div class="collapsible-header">Leading the Way in Nearshore Services</div>
                <div class="collapsible-body grey-text text-darken-1"><?php echo $companyname ?> has transformed consulting since 1997, offering a modern alternative to conventional models. With years of industry experience, we blend strategic insights with practical solutions to give our clients a decisive advantage.</div>
            </li>

            <li>
                <div class="collapsible-header">Client-Focused Success</div>
                <div class="collapsible-body grey-text text-darken-1">At <?php echo $companyname ?>, your success is our priority. For over two decades, we’ve helped businesses reach their full potential through expert guidance, bringing together the best talent and customized business solutions.</div>
            </li>

            <li>
                <div class="collapsible-header">Expertise Across Key Business Functions</div>
                <div class="collapsible-body grey-text text-darken-1">We go beyond basic support to manage essential business operations. With our expertise, you’ll enhance efficiency, implement effective controls, and foster innovation, ensuring your business scales and excels in today’s competitive environment.</div>
            </li>

            <li>
                <div class="collapsible-header">Industry-Specific Solutions</div>
                <div class="collapsible-body grey-text text-darken-1">We tailor our services to meet the unique demands of your industry. Whether it’s virtual audits for the hospitality sector or optimizing revenue management in healthcare, our customized solutions ensure your business runs smoothly and efficiently.</div>
            </li>

            <li>
                <div class="collapsible-header">Turning Strategy into Results</div>
                <div class="collapsible-body grey-text text-darken-1">We don't just provide advice—we offer actionable solutions. By combining consulting, nearshore outsourcing, and managed services, we ensure your business achieves real results. Our expert teams guide you from strategy development to implementation, utilizing cutting-edge digital tools and top-tier talent.</div>
            </li>

            <li>
                <div class="collapsible-header">Bespoke Solutions for Mid-Market and Enterprise</div>
                <div class="collapsible-body grey-text text-darken-1">Mid-market and enterprise businesses have specific needs that require personalized approaches. Unlike larger consulting firms, we specialize in delivering strategic solutions tailored to your organization’s processes, ensuring innovation and maximized ROI in every engagement.</div>
            </li>
        </ul>

        <br><br>

        <div class="row">
            <div class="col s12 m4 l6">
                <video class="responsive-video" autoplay loop muted>
                    <source src="images/video.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col s12 m8 l5 offset-l1">
                <h3 class="medium yellow-text text-darken-2">Global Support Hubs</h3>
                <p>Our global support centers offer access to highly skilled professionals from top nearshoring locations such as Mexico, Argentina, and Guatemala. We leverage best practices and cutting-edge technology to drive process improvements across your operations.</p>
            </div>
        </div>
    </div>
</section>


<section class="grey lighten-4 center-align scrollspy" id="industries">
    <div class="container">
        <h2 class="medium">Our Industry Expertise</h2>
        <h5 class="grey-text text-darken-2">Our specialized expertise drives success across a wide range of industries, offering tailored IT and business solutions that meet the unique challenges of each sector.</h5>
        <br>

        <div class="flexbox" style="align-items: center; padding: 5% 0">
            <div style="min-width: 200px; margin-right: 100px" id="industry_expertise">
                <i class="material-symbols-rounded large yellow-text text-darken-2">store</i>
                <h3 class="semi-bold">Retail & Consumer Goods</h3>
            </div>
            <div>
                <p>The retail and consumer goods sector is in constant evolution, driven by shifting consumer demands, the rise of e-commerce, and technological advancements. From optimizing in-store experiences to enhancing digital platforms, we help retailers and CPG companies navigate these changes, ensuring they stay competitive and responsive to market trends.</p>
            </div>
        </div>

        <div class="flexbox" style="align-items: center; padding: 5% 0">
            <div style="min-width: 200px; margin-right: 100px" id="industry_expertise">
                <i class="material-symbols-rounded large yellow-text text-darken-2">paid</i>
                <h3 class="semi-bold">Financial Services</h3>
            </div>
            <div>
                <p>The financial services industry faces rapid innovation, regulatory changes, and increased customer expectations. Our solutions empower financial institutions to manage risks, improve operational efficiency, and harness cutting-edge technologies to remain ahead in a highly competitive landscape.</p>
            </div>
        </div>

        <div class="flexbox" style="align-items: center; padding: 5% 0">
            <div style="min-width: 200px; margin-right: 100px" id="industry_expertise">
                <i class="material-symbols-rounded large yellow-text text-darken-2">install_desktop</i>
                <h3 class="semi-bold">Technology & SaaS</h3>
            </div>
            <div>
                <p>In the dynamic world of tech and SaaS, agility and innovation are crucial for survival. We help tech companies accelerate their product development cycles, enhance software quality through advanced testing, and implement scalable solutions to support their growth and customer satisfaction.</p>
            </div>
        </div>

        <div class="flexbox" style="align-items: center; padding: 5% 0">
            <div style="min-width: 200px; margin-right: 100px" id="industry_expertise">
                <i class="material-symbols-rounded large yellow-text text-darken-2">factory</i>
                <h3 class="semi-bold">Diverse Industries</h3>
            </div>
            <div>
                <p>With broad industry experience, we support a variety of sectors, from complex, highly regulated industries like healthcare and finance to fast-paced markets like technology and manufacturing. Our tailored solutions are designed to meet the specific needs of each industry, driving innovation and operational excellence to help businesses thrive in competitive environments.</p>
            </div>
        </div>
    </div>
</section>


<section class="center-align scrollspy" id="who-we-are">
    <div class="container">
        <h2 class="semi-bold">About Us</h2>
        <h5 class="grey-text text-darken-2 medium">Over 8 Years of Excellence<br>in Business Solutions and Innovation</h5>

        <br><br>

        <p class="semi-bold">Our Journey</p>

        <div class="row left-align grey-text text-darken-2">
            <div class="col s12 m6">
                <p>Our story began with a shared vision: to deliver top-tier consulting and outsourcing solutions that bridge the gap between innovation and execution. From our humble beginnings, we have steadily expanded our expertise, driving transformation in industries worldwide.</p>

                <p>With a commitment to adaptability and client-focused strategies, we designed our services to meet the needs of businesses ranging from small startups to large enterprises. As we grew, so did our capability to tackle complex challenges, delivering bespoke solutions that provide real, measurable impact.</p>

                <p>Early on, our focus was on helping mid-sized companies unlock growth by offering the kind of flexible, dynamic support usually reserved for large corporations. As word of our innovative approach spread, larger organizations also turned to us for an alternative to the traditional, rigid consulting models they had come to expect.</p>

                <p>Our success is rooted in a forward-thinking approach that adapts to the rapidly evolving business landscape.</p>
            </div>

            <div class="col s12 m6">
                <p>Recognizing the value of close collaboration, we established our first international delivery center in 2010, choosing a location that aligned with our belief in seamless, real-time client engagement. This nearshore model, based in Costa Rica, enabled us to provide high-quality services with greater efficiency and stronger communication.</p>

                <p>By 2021, we expanded further into Colombia, positioning ourselves as a leader in nearshore outsourcing and empowering our clients with access to top talent in the region. Our expansion wasn't limited to geography—we also diversified our service offerings to include cutting-edge IT solutions, advanced financial services, digital transformation, and intelligent automation.</p>

                <p>We’ve partnered with industry leaders like Microsoft, Oracle, and other tech innovators to ensure we remain at the forefront of business transformation.</p>

                <p>Throughout our journey, our mission has remained constant: to empower businesses with innovative strategies that drive efficiency, growth, and long-term success. By continuously challenging conventional methods and embracing new opportunities, we’re not just helping our clients succeed—we’re shaping the future of business.</p>
            </div>
        </div>
    </div>
</section>


		<div class="container">
			<br>
			<div class="divider"></div>
			<br>
		</div>
        <section class="center-align scrollspy" id="contact-us">
    <div class="container">
        <h2 class="semi-bold">Contact Us</h2>
        <h5 class="grey-text text-darken-2 medium"><?php echo $companyname ?></h5>
        <br><br><br>
        <div class="row">
            <div class="col s12 m4">
                <i class="material-symbols-rounded medium">call</i>
                <p><b>Phone Number</b></p>
                <p><?php echo $phone ?></p>
            </div>
            <div class="col s12 m4">
                <i class="material-symbols-rounded medium">email</i>
                <p><b>Email Address</b></p>
                <p><?php echo $email ?></p>
            </div>
            <div class="col s12 m4">
                <i class="material-symbols-rounded medium">roofing</i>
                <p><b>Address</b></p>
                <p><?php echo $address ?></p>
            </div>
        </div>

        <br>
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l10 offset-l1 left-align">
                    <form action="#!" method="POST" class="row" name="contact-us-form">
                        <div class="col s12">
                            <p class="josefin"><b>Write To Us</b></p>
                            <br>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" class="custom-input" name="service" placeholder="Type of service you want">
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="text" class="custom-input" name="fname" placeholder="First name">
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="text" class="custom-input" name="lname" placeholder="Last name">
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="text" class="custom-input" name="email" placeholder="Email address">
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="text" class="custom-input" name="phone" placeholder="Mobile number">
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="query" placeholder="How can we help you?"></textarea>
                        </div>
                        <div class="col s12">
                            <p>
                                <input type="checkbox" id="test6" />
                                <label for="test6">I give consent to use this information to send additional emails and communication as described in your <a href="privacy-policy.php">Privacy Policy</a></label>
                            </p>
                            <br>
                            <button class="btn-large yellow darken-2 black-text" type="submit" name="submit-btn" value="Send Request">Send Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


		<!--JavaScript at end of body for optimized loading-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script>
			M.AutoInit()

			document.addEventListener('DOMContentLoaded', function() {
				var instances = M.Slider.init(document.querySelector('.slider'), {
					indicators: false,
					height: 550
				})


				var elems = document.querySelectorAll('.scrollspy');
				var scrollspy = M.ScrollSpy.init(elems, {
					scrollOffset: 64
				});
			})

			const form = document.forms['contact-us-form']

			form.addEventListener('submit', (e) => {
				e.preventDefault()
				check = true

				Array.from(form.elements).forEach(input => {
					if (!input.value) {
						input.classList.add('invalid')
						check = false
					} else {
						input.classList.remove('invalid')
					}
				})

				if (!check) {
					M.toast({
						html : '<p>Please fill all the required fields.</p>'
					})
					return
				}

				M.toast({
					html : '<p>Your query has been submitted.<br>You will be contacted shortly</p>'
				})
				form.reset()
			})

            function isMobileMode() {
    return window.innerWidth <= 800;
}

			window.onscroll = () => {
                const navElement = document.querySelector('.main-nav');
    const targetElement = document.querySelector('.right-res');

    if (document.documentElement.scrollTop > 10) {
        navElement.classList.remove('z-depth-0');

        // Check if it's mobile mode and hide the element
        if (isMobileMode()) {
            targetElement.style.display = 'none';
        }
    } else {
        navElement.classList.add('z-depth-0');

        // Show the element again when z-depth-0 is added
        targetElement.style.display = 'block';
    }
			}
		</script>

	</body>
</html>