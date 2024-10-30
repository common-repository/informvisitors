=== informvisitors ===
Contributors:      Informvisitors
Plugin Name:       Informvisitors
Plugin URI:        https://informvisitors.com/
Tags:              push notifications, website push notifications, chrome push notifications, firefox push notifications, GCM, FCM, service-workers.
Version:           2.7
Stable tag:        2.7
Requires at least: 4.5 or Higher
Tested up to:      5.7.1
Text Domain:       informvisitors
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.txt  




With informvisitors, you can start sending browser push notifications to your clients in less than a minute.Just install the plugin and enjoy.informvisitors uses one click subscription irrespective of protocol of your website

== Description ==
Installing the informvisitors plugin will automatically insert the required code on your WordPress website, once you add username of your informvisitors account. To get started, you just have to install this plugin, make an account at informvisitors. We will contact you and give you your username. Just add the username in Settings page of Wordpress and you are done. Once live, you can see all the details and send push from your panel at informvisitors website.

What is informvisitors?

informvisitors lets you talk to your subscribers in a succinct, easy and delightful manner, using push notifications on browser. Push Notifications are clickable messages sent directly to your subscribers’ browsers (even when they are not on your website). These work on all devices — desktops, tablets and even mobile phones — so you don’t even have to invest in building a mobile app for your business. The opt-in and click rates are amazing! Some of our early adopters have seen an opt-in rate of 40% (10X the rate at which an average email list builds, and 20X the rate at which an average Twitter list populates) and a click rate of 20%. Of course, you get to see all this data, right in your informvisitors dashboard, updated real-time.

Let us help you get amazing returns on your communications. For any questions, please get in touch with us at gd@informvisitors.com

How to use informvisitors for your website?
Go to [Informvisitors](https://www.informvisitors.com/ "Informvisitors Home Page") and register a account.






== Installation ==

Installing Plugin: 

There are two ways to install the plugin :
* Install directly from the wordpress plugins catalogue.
* Download and Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

If you are not yet registered on informvisitors please create an account here : [Informvisitors](https://www.informvisitors.com/ "Informvisitors Home Page").
Once the email verification is completed, sign into informvisitors and follow the steps below.

CREATING NEW PROJECT :- 

* Click the dropdown at the top and select `Create a new Project`.

* Enter the homepage url of your Website in step 1.

* Verify the ownership of the Website by choosing one of the methods i.e. Adding meta tags, Adding a HTML page, and Using TXT records of your website.

* Once the ownership has been successfully verified move to the next step of providing the FCM (i.e. firebase cloud messaging) credentials for your website.

* In the next step choose the website platform as wordpress and move to next step.

* Next you can either customise the appearance of the notification request popups and notification section or choose default options (Note:- These settings can be changed later as well)

* In the next step fill the greeting campaign details for the new subscribers.

EXPLORING DASHBORAD :- 

* To get username of the project go to the `setup`->`platform setup` in left navigation.

* Your username/hostname for the project is visible in the right section.


FCM Details:
Google has deprecated GCM service post April, 2019 and advised all users to migrate to Firebase Cloud Messaging(FCM). In accordance with the notification we have also upgraded from GCM to FCM. We strongly advice all our clients to create their own FCM accounts and input their credentials . For a step by step guidance on how to create or migrate from GCM to FCM please go through this link [GCM to FCM Migration guide](https://www.informvisitors.com/dev-docs/gcmToFCM/ "Informvisitors GCM to FCM Migration guide") . 

Please input the following data in the dashboard

* FCM Project ID
* FCM Web API Key
* FCM APP ID
* FCM Sender ID
* FCM Server key
* FCM Vapid key

Failure to input the same data will result in using shared credentials for sending notifications. We strongly recommend to provide your own FCM credentials for sending notifications.


Note : 
Make sure your  website has service worker and manifest.json files with updated code as mentioned above.


== Frequently Asked Questions ==
= I can't see any code added to my header or footer when I view my page source =
Your theme needs to have the header and footer actions in place before the `</head>` and before the `</body>`

= If I use this plugin, do I need to enter any other code on my website? =
No, this plugin is sufficient by itself

== Screenshots ==
1. Plugin Settings page for entering informvisitors username
2. Example onboarding page when creating a new project
3. Example overview page post onboarding
4. Example platform setup page for getting the username/hostname
5. Example FCM Credentials (FCM Project ID, FCM Web API Key, FCM App ID, FCM Sender ID, FCM Server Key, FCM Vapid Key).
6. Example greeting campaign details page.
7. Example page for creating normal campaigns
8. Example analytics page for campaigns.
9. Notification permission request - mobile
10. User Preferences request - mobile
11. Chrome notification permission request - mobile
12. Body icon with custom icon - mobile
13. Notification Center - Notification history - mobile
14. Notification Center - Notification settings - Preferences - mobile
15. Notification Center - Notification settings - Feedback - mobile
16. Notification Center - Notification settings - Snooze Notifications - mobile


== ChangeLog ==

= 2.7 = 
* Fixes bugs related to clashing of different versions of firebase modules and initialisation
* Updates the script added to load most recent updates in features 

= 2.6 = 
* Updates the script added to the webpage to `/scripts/3.0.0/js/iv.js`

= 2.5 =
* Section for providing informvisitors username
* Updates the script tag to a unified one for both `http://` and `https://`
* Adds support for sending Direct push notifications to individual users
* Adds support for sending Socket based push notifications for paid clients
* Adds support for adding Bell and Bar to provide option for unsubscribed users
* Adds support `How to unblock notification permission` for users

= 2.1 =
* First Version

== Upgrade Notice ==

= 2.7 = 
* Fixes bugs related to clashing of different versions of firebase modules and initialisation

= 2.6 =
* Upgrades the script added on pages in accordance with the new dashboard of informvisitors.

= 2.5 =
* Upgrades to add new features like Direct Push, Socket Push, FCM, How to unblock notification permission and other things.

= 2.1 =
* First Version

== Configuration ==

Enter your informvisitors username in the Settings page of Wordpress(informvisitors)

== Adding to your template ==

header code :
`<?php wp_head();?>`

footer code : 
`<?php wp_footer();?>`