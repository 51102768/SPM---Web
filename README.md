#SOFTWARE PROJECT MANAGEMENT
##Online Coffee shop lohpokup website
###**Install Project**###
1. Install [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.apachefriends.org/) for window web server (LAMP for ubuntu) (Suggest: WAMP is more stable)
2. Install Composer
	- Link: [Composer](https://getcomposer.org/)
3. Install Environment Path for Composer
	- Check after install: In command line, type "composer" if it wont be found so have to reinstall environment path.
4. Install Laravel in Composer
	- Command: composer global require "laravel/installer=~1.1"
	- Note: if it requires "php.exe" file, point to *XAMPP*(bin) or *WAMP*(apache) server directory 
5. Download [GIT](https://help.github.com/articles/set-up-git/#platform-windows)
6. Learn how to use git
	- Using command line, go to public directory of XAMPP or WAMP.
	- Clone to this [project's repository](https://github.com/51102768/SPM---Web): git clone https://github.com/51102768/SPM---Web.git
7. Continuing to complete the project.

###**Create Database**
**1. shops_table**
- id
- name
- address
- district
- city
- phone
- main_image
- price
- information
- open_time
- close_time	
- created_at
- deteled_at

**2. images_table**
- id
- shop_id
- url
- created_at
- deleted_at

**3. comments_table**
- id
- shop_id
- email
- created_at
- deleted_at