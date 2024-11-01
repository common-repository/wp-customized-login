=== Wp Customized Login ===
Contributors: Brajesh K. Singh
Tags: login,login customization,customization
Requires at least: 2.5
Tested up to: 2.7
Stable tag: 1.0

Wp Customized Login allows you to add your own logo to your wordpress blog/websites login page.

== Description ==

Wp Customized Login allows to add your own logo to your wordpress blog/websites login page.
It also adds the facilities to link the logo to your own website rather than wordpress.org
It does following things

*   Adding your own logo to the blog/website login page(wp-login.php)
*   Forces login page logo to point to your own website,instead of the default behavior(i.e. wordpress.org)
*   On mouse over the logo,shows your blog/website's description,instead of "Powered by WordPress"

   
== Installation ==

For wordpress version 2.7
1. Use wordpress plugin installer (Plugins->add new) to upload the zip file wp-customized-login.zip
2. Activate the plugin through the 'Plugins' menu in WordPress
3.delete logo.png from '/wp-content/plugins/wp-customized-login',and upload your logo there,rename it to logo.png.
If your logo is jpg or gif,edit custom-login.css and change the logo.png with yourlogoname.extension

For wordpress version 2.5 to 2.6.5
1.Unzip the wp-customized-login.zip
2. Upload folder wp-customized-login to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress
4.delete logo.png from '/wp-content/plugins/wp-customized-login',and upload your logo there,rename it to logo.png.
If your logo is jpg or gif,edit custom-login.css and change the logo.png with yourlogoname.extension


== Frequently Asked Questions ==

= I want more customization,like login page colors etc,how can I do that =

well,I have put all the required css selector there,if you are good at editing css,go ahead,edit custom-login.css,uncomment the selectors and put your styles there.It will work perfectly.
If you use firefox,get the firebug extension and check the dom of your login page,You can easily edit it.


== Screenshots ==
please check the home page of plugin for more screenshots

== Other Notes ==
for more help,and your suggestions,please visit [Thinking In Wordpress.com](http://www.thinkinginwordpress.com/2008/12/customized-wordpress-login-page-plugin/ "The home page of Wp Customized login")