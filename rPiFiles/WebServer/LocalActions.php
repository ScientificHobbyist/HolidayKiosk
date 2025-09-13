
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<body>

  <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
            $command = escapeshellcmd('python3 /var/www/html/gpioMomentary.py');
			      $output = shell_exec($command);
        }
        function button2() {
            echo "This is Button2 that is selected";
        }
    ?>

<!--
    The section between the <style type="text/css"> and </style> is used to customize your viewer page.
    Do not delete any items in this section unless you know what they are doing.
    This section is where you can custom design your webpage the way you want it by changing the values for the particular section.
-->
<link href="https://fonts.googleapis.com/css?family=Fredericka the Great|Comfortaa|Rock Salt" rel="stylesheet">
<style type="text/css">

    /***************
        Base Config-- This section defines the base configuration for your page, the font and font color
    *******************/

    * {
        box-sizing: border-box;
        font-family: 'Fredericka the Great', cursive;
        color: #FFFFFF;
        text-align: center;
    }

    /*******************************
        The body section is for configuring the overall looks of the page such as the background color
        and background image. If you want to use a background image
        delete the comments and it is recommended to set a size to ensure if fits how you intend it.
        If you want the image to tile to fill the whole page then set the background-repeat to repeat.
    *******************************/

    body {
        /**
        background-image: url(yourBackgroundImage.html);
        background-repeat: repeat;
        background-size: 300px 100px;
        **/
        background-color: #BF2C31; /** sets the overall background color **/
        border: none;
        margin: auto;
        width: auto;
    }

    /*******************************
        The div section is for configuring looks of the div sections
    *******************************/

    div{
        font-size: 11px;
        line-height: 1.5;
        text-align: center;
        /** only needed if you want a different text color
        color: #000000;
        **/
    }
 
    /***************
        the body text is the generic style for your normal text areas
    *****************/

    .body_text{
        /** only needed if you want a different background color for all of the body text sections
        background-color: #000000;
        **/
        margin: auto;
        width: 90%;
        color: #FFFFFF;
        text-align: center;
        font-size: 18px;
        font-family: 'Comfortaa', cursive;
    }

    /*******************************
        The #intro section is for configuring looks for that section
    *******************************/

    #intro{

        /** only needed if you want a different background color for all of the body text sections
        background-color: #BF2C31;
        **/
        margin: auto;
        width: 100%;
        text-align: center;
        font-size: 25px;
    }

    /*******************************
        The #header section is for configuring looks for that section
    *******************************/

    #header{
        /** only needed if you want a different background color for all of the body text sections**/
        background-color: #BF2C31;
        margin: auto;
        width: 100%;
        text-align: center;
    }

    /*******************************
        The #bodyarea section is for configuring looks for that section
    *******************************/

    #bodyarea{
        /** only needed if you want a different background color for all of the body text sections**/
        background-color: #008B6B;
        margin: auto;
        width: 100%;
        text-align: center;
    }

    .button{
        background-color: #D0021B;
        border: thick;
		border-color: green;
        border-radius: 30px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
        margin: 4px 2px;
        cursor: pointer;
    }


</style>

<!-- ######### HEADER AREA #########-->

<div id="header">

	<div id="intro">
  <form method="post">	
		<button type="submit" class="button" name="button1"  value="Button1">
			<table border="0" height="200" width="600" align="center">
			  <tbody>
				<tr>
				  <td width="" >
					<img src="/images/speaker.png" height="150" >
					<img src="/images/speakers.png" height="150" >
					<img src="/images/speaker.png" height="150" >					  
				  </td>
				  </tr>
				  <tr>
				  	<td>
					 <span style="font-size: 30px; font-family: 'Fredericka the Great', cursive;">Turn on the Speakers</span>
					</td>
				  </tr>
				</tbody>
			</table>
		</button>
  </form>
	</div>
</div>

<!-- ######### SNOW #########-->
<div class="snow" />
<style>
    .editor-stage .snow {
        height:50px;
        background: #fff;
    }
    .snow{
        position:fixed;
        pointer-events:none;
        top:0;
        left:0;
        right:0;
        bottom:0;
        height:100vh;
        background: none;
        background-image: url('/images/s1.png'), url('/images/s2.png'), url('/images/s3.png');
        z-index:100;
        -webkit-animation: snow 10s linear infinite;
        -moz-animation: snow 10s linear infinite;
        -ms-animation: snow 10s linear infinite;
        animation: snow 10s linear infinite;
    }
    @keyframes snow {
        0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
        50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
        100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
    }
    @-moz-keyframes snow {
        0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
        50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
        100% {background-position: 400px 1000px, 200px 400px, 100px 300px;}
    }
    @-webkit-keyframes snow {
        0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
        50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
        100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
    }
    @-ms-keyframes snow {
        0% {background-position: 0px 0px, 0px 0px, 0px 0px;}
        50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
        100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
    }
</style>		
	</body>
</html>
