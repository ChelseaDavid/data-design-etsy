<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Data-Design-Etsy</title>
	</head>
	<body>
		<h1>Persona:</h1>
		<p><strong>Name:</strong> Meghan Jones</p>
		<!--Added user image -->
		<img src="images/etsy.jpg" alt="etsy">
		<!-- User info / Persona -->
		<p><strong>Age:</strong>28</p>
		<p><strong>Operating Platforms:</strong>Spends most of her time at home so prefers to operate on Windows 10 laptop but occasionally uses tablet or smartphone when on the go or completing transactions</p>
		<p><strong>User:</strong>Meghan is a college graduate who majored in fine art. She recently had a baby, and found lots of time while at home to begin pursuing her love for creating masterpieces. Meghan has been working on her love of slupting and pottery work for about a year now and has come to find she has quite a few items in her collection. Upon hearing feedback from friends and relatives on what a great job she had done, she considered if others may feel the same.</p>
		<!-- Use Case -->
		<h2>Use Case:</h2>
		<p>As a user I want to allow other users to browse my products with the option to purchase said products, while simultainiously
			establishing a strong customer base for my "shop"</p>
		<!-- User Needs -->
		<h2>User Needs</h2>
		<ul>
			<li>to connect with like users who are in the market to purchase artistic masterpieces</li>
			<li>to share pictures of products with users</li>
			<li>to establish a strong profile to appeal to future and or returning customers</li>
		</ul>
		<!-- User Frustrations -->
		<h2>Frustrations</h2>
		<ul>
			<li>Slow uploads</li>
			<li>Needs to be plugged in when uploading images</li>
		</ul>
		<!-- Interaction Flow -->
		<h2>Interaction  Flow:</h2>
		<ol>
			<li>After the user has signed into their already established shop. . .</li>
			<li>user then directed to "home page" same view "buying" user will see</li>
			<li>user icons listed next to profile avatar will direct seller to post new items available for purchase</li>
			<li>user can then start at the top of the page with images of product for sale. User can upload up to but no more than 10 photos 				regarding product for sale. Will also allow seller to adjust thumbnail to increase user visit history </li>
			<li></li>
		</ol>

		<!-- Conceptual Model -->
		<h3>Concetual Model</h3>
		<p>Profile Entity</p>
		<table>
			<tr>
				<th>profileId</th>
				<th>profileAtHandle</th>
			</tr>
			<tr>
				<td>8</td>
				<td>meghanjones</td>
			</tr>
		</table>
		<p>PRODUCT ENTITY</p>
		<table>
			<tr>
				<th>productId</th>
				<th>profileId</th>
				<th>productContent</th>
			</tr>
			<tr>
				<td>17</td>
				<td>8</td>
				<td>homemade bow and arrow stand</td>
			</tr>
			<tr>
				<td>72</td>
				<td>24</td>
				<td>tacky Marilyn Monroe painting</td>
			</tr>
		</table>
		<p>FAVORITE ENTITY: <em>m-to-n</em>from profile to product</p>
		 <table>
			 <tr>
				 <th>profileId</th>
				 <th>productId</th>
			 </tr>
			 <tr>
				 <td>8</td>
				 <td>72</td>
			 </tr>
		 </table>

		<!--  Goal, and Audience -->
		<p><strong>Ultimate Goal:</strong>To be able to provide a page is to navigate. One which will allow other users to frequent her page and make possible transactions when products are available.</p>
		<p><strong>Audience:</strong> 18 - 35 years old, new mothers, college graduates, art majors and enthusiast</p>
	</body>
	</html>