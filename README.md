#### What is it?

Files for getting a working environment for web developers based on the ubuntu server 16.04. Includes fully customized Linux, Apache, MySQL, with PHP 7, xdebug, phpmyadmin. Using this, you can set up the working environment in a few minutes. Ideal for both beginners and experienced developers.

# Configure the development environment for learning HTML, CSS, PHP in Windows.

**(article is published on  https://www.linkedin.com/pulse/configure-development-environment-learning-html-css-php-panov/ )**

 ![web - developer PHPStorm and Vagrant](http://www.panovs.com/alex/article/phpstart/0.jpg)


Beginning programmers always ask the question, where to start learning about creating websites? Search on the Internet gives a lot of various information, but unfortunately only more confuses novice developers. Having more than 5 years of teaching experience, I have seen many times how students, making breaks in computer games and deciding to become web developers, tried to customize development environments. They began to sort out the programs for layout. They grabbed Sublime Text, Notepad ++, Visual Studio Code, NetBeans or PHPStorm. We tried to install on our local computer WAMP (stands for Windows, Apache, MySQL and PHP) platforms, such as Denver, Xampp, Open Server and many others. But since there is no systematic knowledge in the head of a novice developer, there is no experience of customization, it was rare for some of them to set up a convenient development environment, and whoever got it, understood that it became more difficult to play, since many additional programs, smoothness in the game.

This article was born because of explaining for many years to each student how to do everything correctly and conveniently.

Once again I want to say that we will set up a working environment in the Windows system to study the creation of sites in HTML, CSS and their links to PHP. We will call this computer working, so that beginning web developers get used to the idea that their computer is their source of income.

### Begin. 

I believe that since you decided to become a web developer, the very first thing you need to do is install Git on your computer. Git is a distributed version control system. Believe me that this system will save you many times, especially when you realize that something has gone wrong. Thanks Git you can clearly control when this happened and Git will give you the opportunity to roll back to the previous version of the edited file. It's convenient, right?

To install, download and install Git for Windows (https://gitforwindows.org/), leaving all paths and default settings. After installation, restart the computer.

Now you can use Git from the command line or PowerShell.

I adhere to the rule that you only need to install Git and IDE on your working computer, which stands for "integrated development environment". Everything else should work in the server version. You can not put yourself into a variety of WAMP. I emphasize that I'm talking about WAMP assemblies. I will explain my point of view. WAMP-assemblies are convenient and good, but only when you clearly understand what and why you are doing on the server and site. Beginners simply because of their experience until this can not. Yes, reading on many forums where web developers, including Full Stack Developers, give advice to beginners, I very often had to read that WAMP-assemblies are very convenient. But for such advice, you can immediately distinguish a professional, from someone who has just taken his first steps toward web development. A professional will never advise a beginner to learn the web development to put himself a WAMP-assembly.

And the point is this. The environment in WAMP-assembly is quite different from the real environment, which is on web hosting, on which your finished site will be located. The web hosting environment is usually a system based on UNIX-like systems (Linux, CentOS, etc.), it is less often the IIS web server, and when using WAMP-assemblies we get windows environment that has nothing to do with the real environment does not. In my practice, I was a witness when WAMP-assemblies interfered with people.

For example, a novice web developer came to our team developing sites on a home computer with a WAMP-assembly. He had a simple task to make a page from a ready-made layout and make a working feedback form on it. In a few days, he brings a ready-made solution. We pour it on the test server, which is an exact copy of the production server and see that the form does not work, and some pictures are not shown. Yes, experienced developers immediately understand what's the matter, but the beginner does not understand this and he has a panic. He immediately says: "I do not understand, everything is working at my house."

I ask him to check where the page loads the pictures, and also check the php script for absolute paths. When he fixes it, everything works. But this is a simple form of feedback, and if this is an online store site, pages at 400?

Or another example.
I had to somehow deal with the deployment of the site, which the company ordered from freelance - the developer. The developer made a bespoke website for a company. When this developer demonstrated a ready order to the client on his working laptop, everything worked well, but when this site was moved to the hosting provider the site did not work and some pages just did not show up. Experienced developers also understand what's the matter, but beginners have not yet given it, due to lack of necessary experience. Here it turned out that windows does not have the support of .htaccess, having prescribed the necessary directives for CMS operation it all worked. But it was just a business card site, but if it was an online store with admin, closed sections, etc.? To avoid all this, I recommend that all its students use if not a complete 100% production environment, then at least very close to it, and this WAMP-assembly can not be provided.

I have two favorite environments in which I work, it's NetBeans and PHPStorm. What you like best depends on you. I recommend you put both and try to work in them. NetBeans is free, PHPStorm costs $89 for an individual developer, but there is a 30 day trial so that you can look at it in work.

I'll tell you about the configuration using the IDE PHPStorm as an example. We install it on our working computer IDE PHPStorm, downloading it from the official site (<https://www.jetbrains.com>). There is nothing complicated, it's just a window program, leaving all the default paths. Have installed.

As I said, everything should be developed in an environment or an identical web hosting or very close to it. To do this, we need to install VirtualBox on our computer by downloading it from the official site (<https://www.virtualbox.org> ). Here, too, there is nothing complicated, set and reboot the computer.  

##### Then there are two ways of development. 

**The first way** is to create a virtual machine inside VirtualBox manually, install Linux Server into it, raise Apache, MySQL and PHP on the server. Further for debugging to us there it will be necessary to install Xdebug for debugging PHP, simultaneously having understood with dependencies inside the virtual machine and also to consider dependencies with our working folder on the host machine. When you gain experience, it's not so difficult to do as it seems, but for those who are just making their first steps toward WEB development, these are all not necessary complications.

Therefore, there is a **second path** of development. Install on your computer Vagrant, downloading it from the official site (<http://www.vagrantup.com/downloads.html> ). Vagrant is an application that helps you manage virtual machines. Installed? If you receive an error about the incompatibility of the PowerShell version, then update the Management Framework (<https://www.microsoft.com/en-US/download/details.aspx?id=50395> ). Installed? Excellent.


Then we download the archive with the vagrant configuration, which I prepared on the basis of "Ubuntu Server 16.04" and which I propose to use to my students. We create a working folder, in which we will create our site. For example, this will be the folder **"webdev"** on drive **"C"**. How to do it? For those who already installed Git, open the "C" drive in the explorer and right-click and select **"Git Bash Here"**.

​                                 ![Panov. Git Bash Here](http://www.panovs.com/alex/article/phpstart/git-1.jpg)                 

A console will open in which you enter the command: **git clone <https://github.com/abyss-soft/webdev>** and click "enter".

   ![webdev](http://www.panovs.com/alex/article/phpstart/git-2.jpg)

After that, you had our finished working folder on the disk with this file tree:

   ![webdev tree](http://www.panovs.com/alex/article/phpstart/tree.jpg)

I want to draw your attention to the fact that the folder with our site, which we will develop, is located along this path: **C:\webdev\www\webdev.local**

In the future, you will be able to replace all files in this folder with files on your site and get a ready development environment for your site.

I also recommend that you register with <https://github.com> and make the "Fork" of my repository “<https://github.com/abyss-soft/webdev>” , so you will save it yourself and it will always remain with you.



> For those who do not want to install themselves Git, here are the direct links:
>
> 1. Direct Link: <https://github.com/abyss-soft/webdev/archive/master.zip> 
> 2. Reference to Github: <https://github.com/abyss-soft/webdev> 
> 3. Reference to Vagrant Box: <https://app.vagrantup.com/alex-panov/boxes/webdev> 



Next, run the command line interpreter. To do this, press Win + R (press and hold the button with the Windows logo to the left and right of the space after the alto) and not press it to press R) and enter the command **"cmd"** (without the quotes). In the opened window, we go to our created folder by entering the command **"cd c:\webdev"**.

Go to the folder, enter the command  **vagrant up**. The console does not close. When we work and we need to turn off the virtual server, we'll enter the command **vagrant halt**.

The first launch can take a lot of time - the image will be downloaded, at subsequent starts this step will not be, the image will cling to the cache. Next, the virtual machine will start.

In the virtual machine itself, we have the **PHP.ini** file located at **/etc/php/7.0/apache2/php.ini** and having such a setup:

> *----------Working:-------*
>
> *[xdebug]*
>
> *zend_extension="/usr/lib/php/20151012/xdebug.so"*
>
> *xdebug.remote_autostart = on*
>
> *xdebug.remote_enable=on*
>
> *xdebug.remote_connect_back = on*
>
> *xdebug.remote_port=9000*
>
> *xdebug.remote_host=192.168.33.31*
>
> *xdebug.idekey=PHP_IDE_CONFIG*


Where **xdebug.remote_host=192.168.33.31**  is the address of the host computer in which PHPStorm is started. 

After waiting for it to load, we will write the following line in the hosts file  (it is C:\Windows\System32\drivers\etc ):   
**192.168.33.33      webdev.local**

Next, launch your favorite browser and go to the link  [webdev.local](http://webdev.local)

If everything went as expected, we'll see a page with the text *«PHP calculating:»*, indicating that our test site is loaded into our virtual machine on the server and is ready to work. 



**Next, we need to connect to the PHPStorm remote PHP interpreter.** 

To do this, run PHPStorm and create a new project:

   ![www.lpdis.ru PHPStorm](http://www.panovs.com/alex/article/phpstart/PHPStorm-1.jpg)

The program tells us that there are already files in this folder and will ask if we want to create a project in this folder:

   ![A. Panov](http://www.panovs.com/alex/article/phpstart/PHPStorm-2.jpg)

Click "Yes"


Then click on the menu «File»-> «Settings..»:

   ![Panov A.](http://www.panovs.com/alex/article/phpstart/PHPStorm-3.jpg)

and go to the  **Languages & Frameworks** section and in this section select the **“PHP”** item. In this section, you need to assign an interpreter for the IDE in the  **CLI Interpreter** item by clicking on the button  **[…]**

   ![PHPStorm](http://www.panovs.com/alex/article/phpstart/PHPStorm-4.jpg)

In the opened window, click on the green "+", set any name, for example "Remote PHP 7" and select the item **Remote…**. 

   ![PHPStorm](http://www.panovs.com/alex/article/phpstart/PHPStorm-5.jpg)

In the window that appears, select  **Vagrant** and specify the path to the file  **«C:\webdev»**

   ![webdev - A.Panov](http://www.panovs.com/alex/article/phpstart/PHPStorm-6.jpg)

And click "OK".

A window like this appears where you can see the PHP version and the debugger version: 

   ![Vagrant and PHPStorm](http://www.panovs.com/alex/article/phpstart/PHPStorm-7.jpg)



Next, in the PHP section, select  **Servers (PHP -> Servers)**. Click on the green "+" and enter any name, for example "webdev.local" and the name of the host: "webdev.local". The port number is left "80" and the debugger specifies "XDebug". Be sure to include the checkbox **Use path mappings…** to indicate the correspondence paths:

|       File/Directory       | Absolute patch on the server |
| :------------------------: | :--------------------------: |
| C:\webdev\www\webdev.local |    /var/www/webdev.local     |

 ![WebDev](http://www.panovs.com/alex/article/phpstart/PHPStorm-8.jpg)

   

For more comfortable debugging, or rather, for the debugger not to pop up on the first line of any PHP file, you need to disable this function here:

   ![Debug in PHPStorm](http://www.panovs.com/alex/article/phpstart/PHPStorm-12.jpg)

 

Go to PHPStorm, select **"Edit Configurations ..."** from the **"Run"** menu

   ![PHPStorm A.Panov](http://www.panovs.com/alex/article/phpstart/PHPStorm-9.jpg)

In the opened form, click on the green **"+"** and select **"Application type PHP Web Application"**. Enter a name, for example, "WebApplication", in the server field select the name of the server we just created, the start URL and also you can select the browser in which the xdebug session will be opened. 

   ![PHPStorm](http://www.panovs.com/alex/article/phpstart/PHPStorm-10.jpg)



### Important! 

Debugging only works when PHPStorm is on listen mode. To do this, click **"Start Listening for PHP Debug Connections"** in the right-hand corner:

   ![Debug in PHPStorm and Vagrant](http://www.panovs.com/alex/article/phpstart/PHPStorm-11.jpg)

 

We also need to install an additional extension in the browser. To do this, visit the official JetBrains page with Browser Debugging Extensions  (<https://confluence.jetbrains.com/display/PhpStorm/Browser+Debugging+Extensions>) and download the desired extension for your browser.

After we install our extension to the browser, let's open its settings and specify the **idekey** that we already specified in the settings: **PHP_IDE_CONFIG**

   ![](http://www.panovs.com/alex/article/phpstart/PHPStorm-13.jpg)

 

In PHPStorm, activate the listener (in the right corner of the **Start Listening for PHP Debug Connections**) and click on **Run WebApplication**. Debugging at the PHPStorm level is started.

Next, we activate the Debug Extension. To do this, go to our website <http://webdev.local>  and after we clicked on the bug icon (already in the browser) and select the item **Debug** in «Google Chrome»

   ![Run WebApplication](http://www.panovs.com/alex/article/phpstart/PHPStorm-13-1.jpg)

Or in "Mozilla Firefox":

   ![PHPStorm](http://www.panovs.com/alex/article/phpstart/PHPStorm-13-2.jpg)

After that the icon will turn green.



After these settings, you can safely set breakpoints and debug your PHP-sites. After we install breakpoint in PHPStorm, we need to refresh the page in the browser, and see that it has hung in the boot mode, and in the PHPStorm, the breakpoints worked.

 

For example, put a breakpoint on the line:

> $x = 2;

 

And click «Run WebApplication»:

  ![Run WebApplication](http://www.panovs.com/alex/article/phpstart/PHPStorm-14.jpg) 

As you can see, our debugger stopped at our breakpoint and shows us the variables:

 ![Debug in PHPStorm](http://www.panovs.com/alex/article/phpstart/PHPStorm-15.jpg)  

If we press the **"F8"** key, we'll see that the debugger moves step-by-step, showing all of our variables:

   ![PHPStorm](http://www.panovs.com/alex/article/phpstart/PHPStorm-16.jpg)

In this way, we have installed and configured our working environment, in which we can fully work.



[My profile on LinkedIn](https://www.linkedin.com/in/alexander-panov-04071b147)	
