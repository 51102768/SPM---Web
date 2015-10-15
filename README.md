#SOFTWARE PROJECT MANAGEMENT
##Online Coffee shop lookup website
###**Install Project**###
1. Install [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.apachefriends.org/) for window web server (LAMP for ubuntu) (Suggest: WAMP is more stable).
2. Activating the Xampp or Wamp server, if xampp or wampp server won't run, taking a look at [configuration of Port](https://nguyenduydai.wordpress.com/tag/huong-dan-doi-port-cho-wampserver/) (because of Skype or Visual studio port confict).
3. Install Composer
	- Link: [Composer](https://getcomposer.org/)
4. Install Environment Path for Composer
	- Check after install: In command line, type "composer" if it wont be found so have to reinstall environment path.
5. Install Laravel in Composer
	- Command: composer global require "laravel/installer=~1.1"
	- Note: if it requires "php.exe" file, point to *XAMPP*(bin) or *WAMP*(apache) server directory 
6. Download [GIT](https://help.github.com/articles/set-up-git/#platform-windows)
7. Learn how to use git
	- Open git shell.
	- Using git shell, go to public directory of XAMPP or WAMP.
	- Clone to this [project's repository](https://github.com/51102768/SPM---Web): git clone https://github.com/51102768/SPM---Web.git
8. Update dependencies:
	- Open command line prompt (cmd not Git shell).
	- Move to SPM---Web directory in command line promt, type: composer install (install dependencies for project)
9. Test server:
	- Start server.
	- Open localhost.
	- Go to your project in localhost.
	- Open "public" directory.
	- If it run, server can probably work.
10. Continuing to complete the project.

###**Task**###
- Online training
- Analyse requirements and features
- 1st meeting
- Design database
- 2nd meeting
- Design mock-up
- Code front-end
- Code back-end
- Test front-end, layouts
- Test back-end, features
- Gather and connect code
- Integration test
- Deploy to server
- Final test

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
