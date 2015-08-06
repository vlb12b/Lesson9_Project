<h3><b>Project Name:</b> Seminole Movie Database Application</h3>

<h3><b>Assignment Points: </b> 85</h3>

<h3><b>Assignment Due Date:</b>   Tuesday, August 4 by 11:59 pm </h3>

<h3><b>Assignment Description:</b></h3>

This assignment demonstrates how to use JQuery AJAX and PHP to interact with a MYSQL database to implement a web application.  JQuery AJAX makes it possible to update a page's content without reloading the page. <i>(See the completed Seminole Movie Database Application below!)</i>

<h3>How things work:</h3>
<ol>
<li>First the user makes a selection from the dropdown menu containing preselect movies.</li>
<li>The jQuery Javascript using  <code>$.ajax()</code> executes and creates its own request (HTTP Request) to a script on the server that has access to the mysql database (proxy).  It does this using AJAX.  This script in this exercise is php and is called <code>movieDB.php</code></li>
<li>The <code>movieDB.php</code> opens a connection to the database and sends a query, then gets the data from the mysql database.  It then returns the data (HTTP Response) via a JSON string, which finally updates the html content on the page dynamically!!</li>
</ol>

<h3>Overview of Assignment:</h3>
<ol>
<li>Install phpMyAdmin on your Codio virtual box.</li>
<li>Create a new database user.</li>
<ul>
<li>Username: <code>lis2360</code></li>
<li>Password: <code>lis2360</code></li>
<li>Host:     <code>localhost</code></li>
</ul>
<li>Create a new database.</li>
<ul>
<li>Database Name:  <code>MovieDB</code></li>
</ul>
<li>Grant database user access to database.</li>
<li>Create database table.</li>
<ul>
<li>Table Name:  <code>movieTable</code></li>
</ul>
<li>Add data to database table.</li>
<li>Run the Movie Database Application!</li>
<ul>
<li>Don't forget to preview the application using <code>Box URL</code> in Codio!</li>
</ul>
</ol>

<center>
<b><h2>Seminole Movie Database Application</h2></b>
<img src=".guides/img/movieDBApp.png" alt="Photo Gallery App" />
</center>