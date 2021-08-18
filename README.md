# Multi languages with PHP


[![enter image description here](https://user-images.githubusercontent.com/9513390/129836634-d162646b-320c-4c05-b81a-709293e9539a.jpg)](https://www.ideas2code.io/multi-language-with-php.html)

There are several ways to create a website with multi languages, today we will see one way. Using PHP + HTML

## Objetive

 - Swith between multiple language our websites

## Demo
[https://demos.ideas2code.io/Multi-language-with-PHP/](https://demos.ideas2code.io/Multi-language-with-PHP/)


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
