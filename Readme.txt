This is the order in how to make it work on localhost on any windows Operating System (This does not work directly on Mac’s because MAMP has their username and password for phpmyadmin different than WAMP).


1. MUST have WAMP or MAMP unless you have some remote server that your professor gave you.
   1. In our development environment, our username is “root” and our password is blank. These are the default WAMP credentials. 
1. To get the database up and running, one should first make sure their WAMP stack is running.
2. Go to github and pull/download zip of our project.
3. Place the knight-watch folder in your www which is located in your wamp/mamp folder
4. Copy all the files in both the Database and HTML folder and place them one directory up, which should be where you see the three folders.
   1. We never got them to read into different folders so they need to be in the same directory for them to work.
1. Database01 is a test code to send variables from HTML to Javascript to PHP. We just used HTML to PHP.
   1. If you need to make this a mobile application and you use Cordova you will need to use the database01 example because Cordova does not support PHP directly. 
1. They should then go to localhost/phpmyadmin and import the SQL scripts we have made. 
   1. These SQL scripts will create the database and tables needed for this project. Note: Currently the shift table is not being used anywhere. Eventually it should be used to keep track of which escort has been assigned to which user request.
1. Finally all you have to do is type phpmyadmin/[folderName in www folder]
   1. This will bring you to a page that you can select any html file and will load that file, I would recommend starting with the login then register yourself into the database.
*Note: To access the server that contains the files but no database functionality here the information:
* The server is running Windows Server 2012 R2 (4/29/16)
* Kaspersky and Windows updates are required and are handled by ITS
* Remote into the server while on Gannon's network to configure.
* Access to Gannon's network can also be gained via vpn.gannon.edu
* Server Name: SEDev1
* Server Address: SEDev1.gannon.edu
* Login: SEDev1\DEV1Admin = s3d3von!