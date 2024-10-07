<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
	box-sizing: border-box;
}

body {
	background-color: #FAE1A7;
	font-family: Montserrat, sans-serif;
	
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;

	min-height: 100vh;
	margin: 0;
}

h3 {
	margin: 10px 0;
}

h6 {
	margin: 5px 0;
	text-transform: uppercase;
}

p {
	font-size: 14px;
	line-height: 21px;
}

.card-container {
	background-color: #FFFFFF;
	border-radius: 5px;
	box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
	color: #B3B8CD;
	padding-top: 30px;
	position: relative;
	width: 350px;
	max-width: 100%;
	text-align: center;
}
/*
.card-container .pro {
	color: #231E39;
	background-color: #FEBB0B;
	border-radius: 3px;
	font-size: 14px;
	font-weight: bold;
	padding: 3px 7px;
	position: absolute;
	top: 30px;
	left: 30px;
}
*/
.card-container .round {
	border: 1px solid #000000;
	border-radius: 50%;
	padding: 7px;
}

button.primary {
	background-color: #000000;
	border: 1px solid #FFFFFF;
	border-radius: 3px;
	color: #FFFFFF;
	font-family: Montserrat, sans-serif;
	font-weight: 500;
	padding: 10px 25px;
}

button.primary.ghost {
	background-color: transparent;
	color: #FFFFFF;
}

.skills {
	background-color: #D66400;
	text-align: left;
	padding: 15px;
	margin-top: 30px;
}

.skills ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.skills ul li {
	border: 1px solid #FFFFFF;
	border-radius: 2px;
	display: inline-block;
	font-size: 12px;
	margin: 0 7px 7px 0;
	padding: 7px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
</style>

<div class="card-container">
	<img class="round" src="AA.jpg" alt="user" />
	<h3>RH profile</h3>
	<h6>New York</h6>
	<p>User interface designer and <br/> front-end developer</p>
	<!--<div class="buttons">
		<button class="primary">
			Message
		</button>
		<button class="primary ghost">
			Following
		</button>
	</div>

	<div class="skills">
		<h6>Skills</h6>
		<ul>
			<li>UI / UX</li>
			<li>Front End Development</li>
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
			<li>React</li>
			<li>Node</li>
		</ul>
	</div>
</div>-->
<!--
<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this
		<a target="_blank" href="https://florin-pop.com/blog/2019/04/profile-card-design">here</a>
		- Design made by
		<a target="_blank" href="https://dribbble.com/shots/6276930-Profile-Card-UI-Design">Ildiesign</a>
	</p>
</footer>-->

