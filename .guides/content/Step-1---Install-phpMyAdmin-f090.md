<center><h1>Steps to install phpMyAdmin on Codio</h1></center>

<h2>What is phpMyAdmin?</h2>
<center>
<img src=".guides/img/PhpMyAdmin_logo.png" />
</center>
It is a free software tool intended to handle the administration of MySQL over the Web.  Frequently used operations include:  managing databases, tables, columns, relations, indexes, users, permissions, etc.  These operations are performed via the user interface, while you still have the ability to directly execute any SQL statement.  To learn more visit:  [https://www.phpmyadmin.net/](https://www.phpmyadmin.net/)

<ol>
<li>Open terminal in Codio:  <code>Tools -> Terminal</code> </li>
<li>Start mysql server:  <code>parts start mysql</code>

<center>
<img src=".guides/img/start_mysql.PNG" />
</center>
</li>

<li>Install phpmyadmin <code>parts install phpmyadmin</code>

<center>
<img src=".guides/img/install_phpmyadmin.PNG" />
</center>
</li>

<li>Start apache2 server:  <code>parts start apache2</code> or <code>parts restart apache2</code> if apache2 already running

<center>
<img src=".guides/img/restart_apache2.PNG" />
</center>
</li>

<li>Copy your Codio Box URL by doing the following:  Go to <code>Project -> Box Info</code> and copy the URL for <b>WEB:  Static Content URL</b> which is the "http://.....".

</li>
<li>Run Codio using the <code>Box URL</code> by doing the following:
<ul>
<li>Go to the Main Menu in Codio and select the dropdown list for the right-most menu option <code>Project Index (static)</code>.</li>
<li>Next, select the <code>Box URL</code> option!!!!  This option is used in Codio for previewing PHP, Ruby or other server side languages over http.  <i><b>(Below image represents the default settings.  Change these settings to <code>Box URL</code> and <code>New Browser Tab</code>)</b></i></li>

<center>
<img src=".guides/img/codio_BoxURL.png" />
</center>
</ul>


<li>Open a new tab in your browser and paste the URL from <b>Step #5</b> then add <code>:3000/phpmyadmin</code> after the Codio URL you copied in the previous step.  
<center> Example:  <code>http://abc-xyz.codio.io:3000/phpmyadmin</code>

You should now see the phpMyAdmin Interface (see below). </center>


<center> <h3>phpMyAdmin Interface</h3>
<img src=".guides/img/test_phpmyadmin.PNG" />
</center>
</li>
<li>Return to Codio, in the Terminal, type the following statement to edit the <code>config.inc.php</code> file: 
<center><br><b><code>nano   /home/codio/.parts/packages/phpmyadmin/4.3.10/phpmyadmin/config.inc.php</code></b></center>

<center>
<img src=".guides/img/open_phpmyadmin_config.PNG" />
</center>

<i><b>NOTE:  </b>This step will allow you to login to phpMyAdmin application without using a password temporarily!!</i>
</li>

<li>Scroll down the <code> config.inc.php</code> file and <b>change ONLY the value from <code>false</code> to <code> true</code> for the following line of code:  </b> <code>$cfg['Servers'][$i]['AllowNoPassword'] = false;</code> to <code>$cfg['Servers'][$i]['AllowNoPassword'] = true;</code> 

<center>
<img src=".guides/img/edit_phpmyadmin_config.PNG" />
</center>
</li>

<li>Save and close file using <code>Ctrl+X</code>, answer <code>Y</code> and <code>Enter</code>.</li>

<li>Restart apache2 server by typing the following in the terminal: <code>parts restart apache2</code>

<center>
<img src=".guides/img/restart_apache2.PNG" />
</center>
</li>
<li>Return to the tab in browser displaying phpMyAdmin interface, and try to login using username <code>root</code> and blank password.  Press <code>Go</code>.
<center>
<img src=".guides/img/test_phpmyadmin.PNG" />
</center>
</li>

<li>Change the user <code>root</code> password by doing the following:
<ul>
<li>Click <code>Users</code> tab in the phpMyAdmin Menu.</li>
<li>Click <code>Edit Privileges</code> for EACH user named <code>root</code> one at a time!

<center>
<img src=".guides/img/users_phpmyadmin.PNG" />
</center>
</li>
</ul>

<li>Click the <code>Change password</code> button and type your password.  Now, press <code>Go</code>. <b>(REMEMBER THIS PASSWORD!!!)</b>

<center>
<img src=".guides/img/change_password_phpmyadmin.PNG" />
</center>
</li>

<li>Change the password for <b>ALL</b> host named <b>root</b> by selecting <code>Edit Privileges</code>.  Below is an example of how the list should appear after each <b>root</b> user privileges have been modified.

<center>
<img src=".guides/img/after_change_password.PNG" />
</center>
</li>

<li>To enter phpMyAdmin application next time, you can simply enter go to the URL entered on <b>Step #7</b>!  (If you need to work on this lab assignment later!!!)
</li>

</ol>