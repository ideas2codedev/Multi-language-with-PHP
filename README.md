# Multi languages with PHP


[![enter image description here](https://www.ideas2code.io/wp-content/uploads/2020/08/portada2-590x295.jpg)](https://www.ideas2code.io/multi-language-with-php.html)

There are several ways to create a website with multi languages, today we will see one way. Using PHP + HTML

## Sponsor

[![enter image description here](https://www.ideas2code.io/wp-content/uploads/2020/10/bar.fw_.png)](http://adf.ly/23757721/www.ideas2code.io)

## Objetive

 - Swith between multiple language our websites

## Demo
[https://demos.ideas2code.io/Multi-language-with-PHP/](https://demos.ideas2code.io/Multi-language-with-PHP/)

[![enter image description here](https://www.ideas2code.io/wp-content/uploads/2020/08/demo.jpg)](https://demos.ideas2code.io/Multi-language-with-PHP/)

## Requirements
 - PHP7 
 - HTML5



## Let's code it!  
Let’s set our variable session by languages

**index.php**

    <?php
    session_start();
    if(isset($_GET[‘lang’])){
    $_SESSION[‘lang’] = $_GET[‘lang’];
    }
    elseif (!$_SESSION[‘lang’]){
    $_SESSION[‘lang’] = ‘en’;
    }
    include (‘lang_’.$_SESSION[‘lang’].’.php’);
    ?>

Create a language file

**lang_en.php**

    <?php
    define(‘your_variable’,’your_value’);
    ?>

**lang_es.php**

    <?php
    define(‘your_variable’,’your_value’);
    ?>

## Resources & Credits

**Official web site php docs:**

[https://www.php.net/manual/en/function.session-start.php](https://www.php.net/manual/en/function.session-start.php)

**Free template used from:**

[https://html5up.net/](https://html5up.net/)
