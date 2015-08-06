<center><h1>Steps to install phpmyadmin on Codio</h1></center>

<h3>What is phpMyAdmin?</h3>
It is a free software tool intended to handle the administration of MySQL over the Web.  Frequently used operations include:  managing databases, tables, columns, relations, indexes, users, permissions, etc.  These operations are performed via the user interface, while you still have the ability to directly execute any SQL statement.

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
<li>Run codio with Box URL (in a new tab in your browser) and add <code>/phpmyadmin</code> after the Codio URL you copied in the previous step.  Example:  <code>http://abc-xyz.codio.io:3000/phpmyadmin</code>

<center> <h2>PHPMYADMIN Interface</h2>
<img src=".guides/img/test_phpmyadmin.PNG" />
</center>
</li>
<li>Return to Codio, in the Codio Terminal, type the following statement to edit the <code>config.inc.php</code> file: 
<center><br><b><code>nano /home/codio/.parts/packages/phpmyadmin/4.3.10/phpmyadmin/config.inc.php</code></b></center>

<center>
<img src=".guides/img/open_phpmyadmin_config.PNG" />
</center>
</li>

<li>Change <code>$cfg['Servers'][$i]['AllowNoPassword'] = false;</code> to <code>$cfg['Servers'][$i]['AllowNoPassword'] = true;</code>  to allow you to login to phpmyadmin with out a password.

<center>
<img src=".guides/img/edit_phpmyadmin_config.PNG" />
</center>
</li>

<li>Save and close file using <code>Ctrl+X</code>, answer <code>Y</code> and <code>Enter</code>.</li>

<li>Restart apache2 server <code>parts restart apache2</code>
<center>
<img src=".guides/img/restart_apache2.PNG" />
</center>
</li>
<li>Return to the tab in browser displaying phpmyadmin interface, and try to login using username <code>root</code> and blank password.
<center>
<img src=".guides/img/test_phpmyadmin.PNG" />
</center>
</li>

<li>Change root password.
<ul>
<li>Click Users menu</li>
<li>Click Edit Privileges
<center>
<img src=".guides/img/users_phpmyadmin.PNG" />
</center>
</li>
</ul>

<li>In change password panel type your password and click Go.  (REMEMBER THIS PASSWORD!!!)
<center>
<img src=".guides/img/change_password_phpmyadmin.PNG" />
</center>
</li>

<li>Change <b>root</b> password for <b>ALL</b> host name by selecting <code>Edit Privileges</code>
<center>
<img src=".guides/img/after_change_password.PNG" />
</center>
</li>

<li>To enter phpmyadmin next time, you can simply enter the following commands: (If you need to work on this lab assignment later!!!)
<ul>
<li><code>parts start apache2</code></li>
<li><code>parts start mysql</code></li>
<li><code>parts start phpmyadmin</code></li>
</ul>
</li>

</ol>