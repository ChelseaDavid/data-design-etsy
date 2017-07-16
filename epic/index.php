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
		<p><strong>Operating Platforms:</strong> Spends most of her time at home so prefers to operate on Windows 10 laptop, core i5,
			but occasionally uses an IPad tablet or Samsung Galaxy Edge 7 when on the go or completing transactions</p>
		<p><strong>User:</strong>Meghan is a college graduate who majored in fine art. She recently had a baby, and found lots of time while at home to begin pursuing her love for creating masterpieces. Meghan has been working on her love of slupting and pottery work for about a year now and has come to find she has quite a few items in her collection. Upon hearing feedback from friends and relatives on what a great job she had done, she considered if others may feel the same.</p>
		<!-- User Story -->
		<h2>User Story:</h2>
		<p>As a user I want to allow other users to browse my products with the option to purchase said products, while simultaneously
			establishing a strong customer base for my "shop"</p>
		<!-- Use Case -->
		<h2>Use Case</h2>
		<p>A user posts a product by accessing the site, creating an account, posting a picture of product with
			detailed description, pricing, and shipping information.</p>
		<!-- User Needs -->
		<h2>User Needs</h2>
		<ul>
			<li>to connect with like users who are in the market to purchase artistic masterpieces</li>
			<li>to share pictures of products with users</li>
			<li>to establish a strong profile to appeal to future and or returning customers(ratings, reviews, and seller history)</li>
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
			<li>user can then provide great detail regarding product listed for sale. Title will be open answer and other detailing factors
				( color, who item was made by, time product was made) in form of drop down limiting the users possible choices when
				describing. Will give general description in drop downs and allow user an open section to accuretly describe the
				product for sale</li>
			<li>Seller will then detail price of the item</li>
			<li>Now that user has provided all necessary information regarding item description the buying user would need to complete
				transaction, the selling user will then define payment options and how they would like to be paid when a product
				is purchased</li>
			<li>final step, entering in appropriate banking information to receive said income when product is purchased</li>
		</ol>

		<!-- Conceptual Model -->
		<h3>Conceptual Model</h3>
		<p>Profile Entity</p>
		<table>
			<tr>
				<th>profileId(primary key)           |</th>
				<th>  profileUserName</th>
			</tr>
			<tr>
				<td>8            </td>
				<td>meghanjones  </td>
			</tr>
		</table>

		<p>PRODUCT ENTITY</p>

		<table>
			<tr>
				<th>productId(Primary key)       |</th>
				<th>profileId                    |</th>
				<th>productContent                </th>
			</tr>
			<tr>
				<td>17</td>
				<td>8 </td>
				<td>homemade bow and arrow stand</td>
			</tr>
			<tr>
				<td>72</td>
				<td>24</td>
				<td>tacky Marilyn Monroe painting</td>
			</tr>
		</table>

		<p>FAVORITE ENTITY: <em>m-to-n(Intersection)</em>from profile to product</p>

		 <table>
			 <tr>
				 <th>profileId(foreign key)|</th>
				 <th>productId(foreign key)</th>
			 </tr>
			 <tr>
				 <td>8</td>
				 <td>72</td>
			 </tr>
		 </table>

		<!--  Goal, and Audience -->
		<p><strong>Ultimate Goal:</strong>To be able to provide a page that is easy to navigate. One which will allow other users to frequent
			her page and make possible transactions when products are available.</p>
		<p><strong>Audience:</strong> 18 - 35 year olds, new mothers, college graduates, art majors and enthusiast</p>
	</body>
	</html>