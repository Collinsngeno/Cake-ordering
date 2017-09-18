<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css"/>
</head>
<style>
   /* Begin Navigation Bar Styling */
   #nav {
      width:100%;
      float: right;
      margin: auto;
      padding:0;
	  text-align:center;
      list-style: none;
      background-color:#CCFFCC;
      border-bottom: 1px solid #ccc; 
      border-top: 1px solid #ccc; }
		  
	  
   #nav li {
      float:left; }
   #nav li a {
      display: block;
      padding: 8px 15px;
      text-decoration: none;
      font-weight: bold;
      color: #069;
      border-right: 1px solid #ccc; }
   #nav li a:hover {
      color: #c00;
      background-color: #fff; }
   /* End navigation bar styling. */
   
   /* This is just styling for this specific page. */
  
   #wrap {
      width: 750px;
      margin: 0 auto;
      background-color: #fff; 
	  text-align:center;
	  }
   h1 {
      font-size: 1.5em;
	  font-color:#FFFFFF;
      padding: 1em 8px;
      background-color:#990012;
      margin: 0;
	  background-image:url(blackforest.jpg)}
	  
</style>
<body>


<div id="wrap">

   <h1>Cake Ordering System</h1>
   
   <!-- Here's all it takes to make this navigation bar. -->
   <ul id="nav">
	  <li><a href="list.php">Cake details</a></li>
     <li><a href="productslist.php">Products</a></li>
     <li><a href="vieworders.php">Orders</a></li>
      <li><a href="sales.php">Sales</a></li>
	  <li><a href="prices.php">Price List</a></li>
	  <li><a href="comments.php">Feedback</a></li>
	  <li><a href="index.php">Logout<li>
	  
       </ul>
   <!-- That's it! -->

</body>
<div class="container">

</html>
