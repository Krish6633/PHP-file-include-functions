<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd%22%3E >
<html xmlns="http://www.w3.org/1999/xhtml%22%3E">

<head>
    <title> Home Page </title>
    <link rel="stylesheet" href="dshorish.css" type="text/css" />
</head>

<body>
    
    <?php echo readfile("./menu.inc"); ?>

    <?php include "header.inc"; ?>

    <div class="picture">
        <img src="IMG_SELF.JPG" alt="Darya" height="200" width="200">
    </div>
    <br>
    <br>
    <div class="about_me">
        <h3>Summary</h3>
        <ul>
            <li>My name is Darya Shorish-Andish. I am currently a senior at George Mason. I plan on studying for my masters degree after I graduate with my IT degree.I enjoy watching movies and going to the gym. I have a twin brother named Arya. We are only
                just three minutes apart, which makes him older. I hope to do well in this course and to better my skills in html. </li>
        </ul>
        <h3>Academic</h3>
        <p>
            I am a Senior here at GMU and my major is in Information Technology with a concentration in cybersecurity.
            <br />
        </p>
    </div>

    <div class="description">
        <h3 align=center> Professional & Personal Deatails</h3>
        <br>
        <p> Hi there! </p>
        <br>
        <p> I am a senior here at George Mason University.</p>
        <p> I am excited about what this course has to offer!.</p>
        <br>
        <p> I have taken some coding courses and gained some knowledge in Python, Javascript, and some Html. I am excited to acquire new information and skills throughout this course. </p>
    </div>
    
    <?php require "footer.inc"; ?>
</body>

</html>