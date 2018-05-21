[![](http://twendingtrades.com/wp-content/uploads/sites/7/2017/12/twending-trades-logo2-500x287-300x172.png)](http://twendingtrades.com)
# TwendingTrades.com Free Rotator and List Script
This is a Database driven rotator and list script that stores a list of Data related to Crypto-Faucets. It was designed 
with the faucets listed on Faucethub.io in mind. The rotator allows the adminsistrator to Track Captcha Type, 
verified date, and much more. 

  - User Filterable/Sortable - Lists are user sortable and Rotators are user filterable
  - Store Data for faucets using all coin types on Faucethub.io in a single database 
  - Track things like Direct Payouts, Forced Shortlinks, and more!

### New Features!

  - User Filterable Modal control in Rotator
  - Sortable Data Table lists 


### Updated and Improved Often 
 - As things change around Faucethub and the crypto-faucet world in general, so too shall this script. I'll do my best to keep this document updated as well with the latest changes. 


### Installation

With the novice in mind, I'll try to keep this as easy as possible. This guide makes a few assummptions:
* You need to have some sort of web host that supports php and MySQL. 
* You know how to navigate the file system of your webhost using a file manager or the shell 
* I'll assume you have a general understanding of MySQL, and how to create a database. I would suggest using phpmyadmin, as that's widely available on most web hosts. 
* You know how to edit files and make basic changes

##### Setup  your web folder
Determine exactly where you want the script to be located and create a directory. For example if you want to keep them in a folder called myRotator, create that folder in your public_html or www folder. 
##### Create your database
Create an empty database using phpmyadmin or mysql in the shell, and then run the tt_rotator.sql included in this distribution.
##### Setup your config.php file
Open and edit the config.php file. Most of the stuff in here should be self explanitory. Again, this assumes you have a basic knowledge of editing things like html and php files. 

##### Log in as Admin and starting adding Sites!
It's really that simple. Visit yoursite.com/rotator/admin.php and login using the credentials you saved in the config.php file. From here, you can add sites right away. Once you go back to the index file in your browswer, if you're logged in as admin, you'll be able to edit the links and other details as you browse. 

### Support
If you have issues with this script, please contact info@ebarbsoftwareandwebdev.com and use Rotator Script in the subject. 


