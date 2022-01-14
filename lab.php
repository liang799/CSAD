<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lab Solutions</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/lab.css" type="text/css" />
        <script src="js/lab.js"></script>

    </head>
    <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        
        <!--<input type="image" src="img/icons/scrollup.png" id="myBtn" title="Go to top" onclick="topFunction()">-->

        <h1 class="title">Lab Solutions</h1>
        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="https://esp.sp.edu.sg/webapps/blackboard/content/listContent.jsp?course_id=_52437_1&content_id=_1475638_1&mode=reset">CSAD Module</a>
            <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()">Labs <img src="img/icons/sort-down-green.png"/>
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" id="myDropdown">
                  <a href="#lab1">Lab 1</a>
                  <a href="#lab2">Lab 2</a>
                  <a href="#lab3">Lab 3</a>
                  <a href="#lab4">Lab 4</a>
                  <a href="#lab5">Lab 5</a>
                  <a href="#lab6">Lab 6</a>
                  <a href="#lab7">Lab 7</a>
                </div>
            </div> 
      </div>
        
        <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
            }
        </script>
        
        <!---------------------------------------- Lab 1 ---------------------------------------------------------->
        <h1 style="text-align:center; color:red" id="#lab1">Lab 1</h1>
        <hr style="width:20%; color:red">
        <h2 class="question">Q1</h2>
        <div class="box">Welcome to our Website</div>
                
        <h2 class="question">Q2</h2>
        <div class="box">
            <h1 align="left">Level 1</h1>
            <h2 align="right">Level 2</h2>
            <h3 align="center">Level 3</h3>
            <h4 align="left">Level 4</h4>
            <h5 align="left">Level 5</h5>
            <h6 align="center">Level 6</h6>
        </div>
                
        <h2 class="question">Q3</h2>
        <div class="box">
            <h1 align="center">Nokia N70</h1>

            <p>
                If the Nokia N70 phone had a twin, it has to be the <u>6680</u>.
                Not only do both phones share an almost similar design, they....
                <b><i>Symbian Series 60</i></b> platform. Fortunately as with any upgrade
                models, ... <b><u>2-megapixel</u></b> camera and an improved handset design.
            </p>

            <p>One question beckons. Can the N70 emulate the success of its predecessor?</p>
	</div>
                 
        <h2 class="question">Q4</h2>
                <div class="box"><img src = "img/iphone4.jpg" alt= "iphone 4"></div>
                
        
        <h2 class="question">Q5</h2>
        <div class="box">
            <p>
                Here are my favorite Internet search engines <br>
                Click on the address to go to that page.
            </p>
            
            <p>
                Yahoo: <a href="https://www.yahoo.com">https://www.yahoo.com</a> <br>
                Searx: <a href="https://searx.xyz/">https://searx.xyz/</a>
            </p>
        </div>
        
        
        <h2 class="question">Q6</h2>
        <div class="box">
            <p> 
                My email address is <a href="mailto: LeeKL@sp.edu.sg">LeeKL@sp.edu.sg</a>. 
                Click on the address and your browser will 
                open an email message and address it to me.
            </p>
        </div>
        
        <h2 class="question">Q7</h2>
        <div class="box">
            <font style="font-family: Script; color:blue" size="+3">Nokia N70</font> 
            <p>
                If the <span style="color:red">Nokia N70</span> phone had a twin,
                it has to be the <font size="-2">6680</font>.                
            </p>
        </div>
        
        
        <h2 class="question">Q8</h2>
        <div class="box">
            <p>To insert a hyperlink on a webpage, you can use the &lt;a&gt; tag</p>
            <p>The HTML code for producing the &lt; sign is &amp;lt;</p>
            <p>The temperature today is 28&deg;C.</p>
            <p>All information on this site is &copy; Michale Lee 2012.</p>
            <p>No permission is needed if you only need to use &frac14; of the information presented here.</p>
        </div>
        
        
        <h2 class="question">Q9</h2>
        <div class="box">
            There are 6 spaces between here &nbsp; &nbsp; &nbsp;and here.<br>
            There are 12 spaces between here &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp;and here.<br>
        </div>
        
        
        <h2 class="question-alt">Q10</h2>
        <div class="box">
            <hr width="90%">
            <hr size="4" width="75%" color="#00ff00">	    
            <hr size="12" width="100"  color="Red">
            <hr size="8" width="50%" noshade="noshade">
        </div>
                
        <h2 class="question-alt">Q11</h2>
        <div class="box">
            <h1>Unordered list</h1>
            <ul>
                <li>Singapore Poly</li>
                <li>Ngee Ann Poly</li>
                <li>Temasek Poly</li>
            </ul>

            <h1>Ordered list</h1>
            <ol>
                <li>Singapore Poly</li>
                <li>Ngee Ann Poly</li>
                <li>Temasek Poly</li>
            </ol>

            <h1>Unordered list</h1>
            <ul type="circle">
                <li>Singapore Poly</li>
                <li>Ngee Ann Poly</li>
                <li>Temasek Poly</li>
            </ul>

            <h1>Ordered list</h1>
            <ol type="i">
                <li>Singapore Poly</li>
                <li>Ngee Ann Poly</li>
                <li>Temasek Poly</li>
            </ol>
        </div>
        
        
        <h2 class="question-alt">Q12</h2>
        <div class="box">
            <table border="1">
                <tr>
                    <td>SP</td>
                    <td>Singapore Poly</td>
                </tr>

                <tr>
                    <td>SP</td>
                    <td>Singapore Poly</td>
                </tr>

                <tr>
                    <td>SP</td>
                    <td>Singapore Poly</td>
                </tr>
            </table>
        </div>
        
        
        <h2 class="question-alt">Q13</h2>       
        <div class="box">       
            <table border="1">
                <tr><th colspan="2">Polys in SG</th></tr>
                <tr>
                    <td>SP</td>
                    <td>Singapore Poly</td>
                </tr>

                <tr>
                    <td>SP</td>
                    <td>Singapore Poly</td>
                </tr>

                <tr>
                    <td>SP</td>
                    <td>Singapore Poly</td>
                </tr>
            </table>
        </div>
                
        <h2 class="question-alt">Q14</h2>
        <div class="box">
            <table border="1">
                <tr>
                    <td>SP</td>
                    <td>Singapore Poly</td>
                    <td rowspan="3"><img src="img/merlion.jpg" alt="merlion pic"></td>
                </tr>

                <tr>
                    <td>SP</td>
                    <td>Singapore Poly</td>
                </tr>

                <tr>
                    <td>SP</td>
                    <td>Singapore Poly</td>
                </tr>
            </table>
        </div>
                
        <h2 class="question-alt">Q15</h2>
        <div class="box">
            <table border="1" width="80%" bgcolor="pink"  cellspacing="5" cellpadding="10">
            <tr>
                <td width="400px" bgcolor="red">SP</td>
                <td>Singapore Poly</td>
            </tr>

            <tr>
                <td>SP</td>
                <td>Singapore Poly</td>
            </tr>

            <tr>
                <td bgcolor="yellow">SP</td>
                <td bgcolor="yellow">Singapore Poly</td>
            </tr>
            </table>
        </div>
        
        
        <h2 class="question-alt">Q16</h2>
        <div class="box">
            <table bgcolor="#7f7f7f" border="1" cellpadding="5" cellspacing="10" width="500">
                <tr bgcolor="#ffbecb">
                    <td colspan="3">Blah</td>
                    <td width="300">Blah</td>
                </tr>
                <tr>
                    <td rowspan="2">Blah</td>
                    <td>Blah</td>
                    <td>Blah</td>
                    <td>Blah</td>
                </tr>
                <tr>
                    <td>Blah</td>
                    <td>Blah</td>
                    <td>Blah</td>
                </tr>
                <tr>
                    <td>Blah</td>
                    <td rowspan="2" colspan="2" bgcolor="#fdb017">Blah</td>
                    <td>Blah</td>
                </tr>
                <tr>
                    <td>Blah</td>
                    <td>Blah</td>
                </tr>
            </table>
        </div>  
        
        
        <h2 class="question-alt">Q17</h2>
        <div class="box">
            <form method="post">
                Name: <input value="Pls type your name" name="name" type="text"> <br>
                Password: <input name="password" type="password"> <br>
                Year: 
                <select name="year">
                    <option value="year1" selected="selected">Year 1</option>
                    <option value="year2">Year 2</option>
                    <option value="year3">Year 3</option>
                </select> <br>

                Gender: 
                <input value="M" name="gender" type="radio">Male
                <input value="F" name="gender" checked="checked" type="radio">Female <br>

                Comments: <textarea rows="5" cols="50">Pls type your comments here.</textarea> <br>

                <input value="Go" type="submit">
            </form>  
        </div>  
                
        <h2 class="question-alt">Q18</h2>
        <div class="box" style="color: blue; background-image: url(img/bg.gif);">
            <p alink="purple" link="green" vlink="orange">
                Click <a href="https://github.com/iv-org/invidious/">here</a> for YouTube with no Ads.
            </p>
        </div>
                
        <h1 style="text-align:center; color:red" id="lab2">Lab 2</h1>
        <hr style="width:20%; color:red">
        
        <!-------------------------------------------- Lab 2 ------------------------------------------------------->

        <div class="box" id="lab2-q1">
            <h2 class="question-alt">Q1</h2>
            CSS Page Background and Text Color
        </div>
        
        <div class="box" id="lab2-q2-bod">
            <h2 class="question">Q2</h2>
            <h1>HTML</h1>
            <h2 id="lab2-q2-h2">CSS</h2>
        </div>
        
        <div class="box box2">
            <h2 class="question">Q3</h2>
            <h1 id="dicd">DICD</h1>
            <h2 id="icd">ICD</h2>
            <h3 id="css">CSS</h3>
        </div>
        
        <div class="box box2">
            <h2 class="question">Q4</h2>
            <p style="font-family: Comic Sans MS;font-size: 15pt">Line 1</p>
            <p class="style1">Line 2</p>
            <p class="style2">Line 3</p>
        </div>
        
        <div class="box box2">
            <h2 class="question">Q5</h2>
            <p>Line 1</p>
            <p class="blue">Line 2</p>
            <h1 id="header">Line 3</h1>
            <p class="blue">Line 4</p>
            <p>Line 5</p>
            <p class="blue">Line 6</p>
        </div>
        
        
        <div class="box box2">
            <h2 class="question">Q6</h2>
            <h3>Table 1</h3>
            <table class="table">
                <tr class="c1">
                    <td class="data">My favourite food</th>
                    <td class="data">Roti Prata</td>
                </tr>
                <tr class="c2">
                    <td class="data">My favourite drink</td>
                    <td class="data">Coke</td>
                </tr>
            </table>
             <h3>Table 2</h3>
            <table class="table">
                <tr>
                    <td class="c1">My favourite movie</th>
                    <td class="c1">Lord of the Rings</td>
                </tr>
                <tr>
                    <td class="c2">My favourite book</td>
                    <td class="c2">Da vinci code</td>
                </tr>
            </table>
        </div>
        
        <div class="box box2">
            <h2 class="question">Q7</h2>
            <h1>Male Artistes</h1>
            <ul class="pointer1">
                <li>Tom Cruise</li>
                <li>Brad Pitt</li>
                <li>Leonardo DiCaprio</li>
            </ul>

            <h1>Female Artistes</h1>
            <ul class="pointer2">
                <li>Angelia Jolie</li>
                <li>Cameron Diaz</li>
                <li>Jennifer Love Hewitt</li>
            </ul>
        </div>
        
        <div class="box box2">
            <h2 class="question">Q8</h2>
            <div class = "div1">
                Division 1<p/>Division 1<p/>Division 1<p/>
                Division 1<p/>Division 1<p/>Division 1<p/>
                Division 1<p/>Division 1<p/>Division<p/>
            </div>

            <div class = "div2">
                Division 2<p/>Division 2<p/>Division 2<p/>
                Division 2<p/>Division 2<p/>Division 2<p/>
                Division 2<p/>Division 2<p/>Division 2<p/>
            </div>
        </div>
        
        <div class="box box2">
            <h2 class="question">Q9</h2>
            <p class="q9link">Click <a href="home.html">here</a> to visit my webpage</a></p>
        </div>
        
         <div class="box box2">
            <h2 class="question-alt">Q10</h2>
            <br>
            <span style="font-size:50pt; z-index:0; left:150; top:30; color:green; position:relative;">Above</span>
            <span style="font-size:50pt; z-index:-2; left:170; top:50; color:blue;position:relative;">Below</span>
            <img src="img/Lab2/apple.gif" style="z-index:-1; position:relative;">
         </div>
        
        <h1 style="text-align:center; color:red" id="lab3">Lab 3</h1>
        <hr style="width:20%; color:red">
        
        <!-------------------------------------------- Lab 3 ------------------------------------------------------->
        
        <div class="box" id="lab2-q1">
            <h2 class="question-alt" >Q1</h2>
            <br>
            <svg height="210" width="300">
                <polygon points="10,10 15,190 160,210" style="fill:white;stroke:purple;stroke-width:1" />
            </svg> 
            <br>
            <script>
                var base = 5;
                var width = 6;
                var height = 7;
                var area = 1/2 * base * height;
                document.write("Area of the triangle: ", area);                
            </script>
        </div>
        
        <div class="box" id="lab3-q2">
            <h2 class="question">Q2</h2>
            <br>
            <script>
                for(var i = 0; i != 16; ++i) {
                    if (i%2 == 0)  
                        document.write(i, " is even <br>");
                    else 
                        document.write(i, " is odd <br>");
                }
            </script>
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q3</h2>
             <br>
            <script>
                for(var i = 0; i != 16; i+=2){ 
                    document.write(i ," * ", i ," = ", i*i, "<br>");
                }
            </script>
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q4</h2>
            <table>
                <tr>
                    <th><u>Range</u></th>
                    <th><u>Grade</u></th>
                </tr>
                <tr>
                    <td>0 to 49</td>
                    <td>F</td>
                </tr>
                <tr>
                    <td>50 to 59</td>
                    <td>D</td>
                </tr>
                <tr>
                    <td>60 to 69</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td>70 to 79</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>80 to 100</td>
                    <td>A</td>
                </tr>
            </table>
             <br>
            <script>
                let marks = [80, 77, 88, 95, 68];
                avgMark(marks);
            </script>
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q5</h2>
            <p>
                Create a new html file and name it “Q5.html”. <br>   
                Write <b>two</b> JavaScript <b>functions</b> which each will take an input parameter of an array of <br>
                numbers stored and find the smallest and largest number respectively. By calling the two <br>
                functions, compute and display the smallest and largest number of the array [80, 77, 88, 95, <br>
                68]. 
            </p>
            <script>
                let numbers = [80, 77, 88, 95, 68];
                findSmall(numbers);
                findBig(numbers);     
            </script>
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q6</h2>
             <br>
            <script>
                findWord("AA", "AA BB CC AA DD");
            </script>
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q7</h2>
            <h2>An Extremely simple Calculator</h2>
             <form>
                Input 1st number : <input type="text" id="firstNumber" /> <br>
                Input 2nd number : <input type="text" id="secondNumber" /> <br>
                <input type="button" onclick="add()" value="Addition"/>
                <input type="button" onclick="subtract()" value="Subtraction"/>
                <input type="button" onclick="multiply()" value="Multiply"/>
                <input type="button" onclick="divide()" value="Divide"/>
             </form>
             <p>
                 Result : <span id="result">____</span>
             </p>
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q8</h2>
            <form>
                Quantity <br>
                <input type="number" min="1" value="1" id="quantity" /> <br>
                Price Per Unit ($) <br> 
                <input type="number" step="any" value="1.00" id="ppu" /> <br>
                Tax rate (%) <br> 
                <input type="number" step="any" value ="7.0" id="tax" /> <br>
                Discount (%) <br>
                <input type="number" step="any" id="discount" value="0.00"/> <br>
                Total ($) <br>
                <input type="number" step="any" id="total" /> <br>
                <input type="button" onclick="calPricing()" value="Calculate"/>
            </form>
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q9 </h2>
            <form name="SurveryFrom" onsubmit="return validateInputs()">
                <p>Name: <input type="text" size="35" name="Name"></p>
                <p>Email: <input type="text" size="35" name="Email"></p>
                <p>Age: <input type="text" name="Age"></p>
                <p>
                    Course
                    <select name="Course">
                        <option value="0">SELECT COURSE</option>
                        <option value="1">DEEE</option>
                        <option value="2">DCPE</option>
                        <option value="3">DASE</option>
                        <option value="4">DEB</option>
                    </select>
                </p>
                <p>
                    <input type="submit" value="Send" name="Submit">
                    <input type="reset" value="Reset" name="Reset">                    
                </p>
            </form>
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q10</h2>
            <table id="table">
                <tr>
                    <td>User ID:</td>
                    <td><input type="text" id="uid" onkeyup="validateUserID();"/></td>
                    <td><div id="errUid"></div></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password"
                               onkeyup="validatePassword();"/></td>
                    <td><div id="errPassword"></div></td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <td><input type="button" id="login" value="login"
                               onclick="validate(); finalValidate();"/></td>
                    <td><div id="errFinal"></div></td>
                </tr>
            </table>
        </div>
        
        <h1 style="text-align:center; color:red" id="lab4">Lab 4</h1>
        <hr style="width:20%; color:red">
        
        <!-------------------------------------------- Lab 4 ------------------------------------------------------->

        <div class="box box2">
            <h2 class="question-alt">Q1</h2>
                <?php 
                print 'How are you?'; 
                print 'I am fine.';
                ?>  
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q2</h2>
            <?php
            $burger = 4.95;
            $mshake = 1.95;
            $coffee = 0.85;
            $gst = 0.07;
            $tip = 0.1;
            $total = (2 * $burger + $mshake + $coffee) * (1+$tip) *(1+$gst);
            echo $total;
            ?>
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q3</h2>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>Hamburgers</td>
                    <td>$<?php echo $burger; ?></td>
                    <td>2</td>
                    <td>$<?php echo ($burger * 2); ?></td>
                </tr>
                <tr>
                    <td>Chocolate Milkshake</td> 
                    <td>$<?php echo $mshake; ?></td>
                    <td>2</td>
                    <td>$<?php echo ($mshake * 2); ?></td>                    
                </tr>
                <tr>
                    <td>Coffee</td>
                    <td>$<?php echo $coffee; ?></td>
                    <td>2</td>
                    <td>$<?php echo ($coffee * 2); ?></td>                    
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total before Tax Total</td>
                    <td>$<?php echo (2 * $burger + $mshake + $coffee) ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Post-Tax Total</td>
                    <td>$<?php echo ((2 * $burger + $mshake + $coffee) * (1+$gst)) //this is a comment?></td>
                </tr> 
                <tr>
                    <td></td>
                    <td></td>
                    <td>Pre Tax Tip</td>
                    <td>$<?php echo ($tip *  (2 * $burger + $mshake + $coffee)) ?></td>
                </tr>  
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total cost</td>
                    <td>$<?php echo $total ?></td>
                </tr>     
            </table>
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q4</h2>   
            <?php
            $first_name = "John";
            $last_name = "Doe";
            $name = $first_name . " " . $last_name;
            echo $name . ', length: ';
            echo strlen($name);
            ?>                   
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q5</h2>
            <br>
            <?php
            for($i = 1; $i != 6; $i++) {
                echo $i . ', ' . pow(2, $i) . '<br>';
            }
            ?>
        </div>

        <h1 style="text-align:center; color:red" id="lab5">Lab 5</h1>
        <hr style="width:20%; color:red">

        <!-------------------------------------------- Lab 5 ------------------------------------------------------->
    
        <div id = "lab2-q1" class = "box">
            <h2 class = "question-alt">Q1</h2>
            <br>
            <?php
            for ($i = 1; $i != 51; $i++) {
                if ($i % 2 == 0) {
                    if ($i % 10 == 0)
                        echo '<span style="color: red">'. $i . '</span>' . '<br>';
                    else
                        echo '<span style="color: red">'. $i . '</span>';
                }
                else if ($i % 7 == 0)
                    echo '<span style="color: blue">'. $i . '</span>';
                else
                    echo $i;                    
            }
            ?>
        </div>
        
        <div class="box box2">
            <h2 class="question-alt">Q2</h2>
            <br>
            <?php
            $i = 1;
            do {
                if ($i % 2 == 0) {
                    if ($i % 10 == 0)
                        echo '<span style="color: red">'. $i . '</span>' . '<br>';
                    else
                        echo '<span style="color: red">'. $i . '</span>';
                }
                else if ($i % 7 == 0)
                    echo '<span style="color: blue">'. $i . '</span>';
                else
                    echo $i;     
                
                $i++;
            } while ($i != 51);
            ?>
        </div>
        
        <div class ="box box2">
            <h2 class="question-alt">Q3</h2>
            <br>
            <?php
            $age = 12;
            $shoe_size = 13;
            if ($age > $shoe_size) {
                print "Message 1.";
            } elseif (($shoe_size++) && ($age > 20)) {
                print "Message 2.";
            } else {
                print "Message 3.";
            }
            print "Age: $age. Shoe Size: $shoe_size";
            ?>
        </div>
        
         <div class ="box box2">
            <h2 class="question-alt">Q4</h2>
            <h3>Using while loop</h3>
            <?php
            echo '<table border="1px">';
            $F = -50;
            echo '<tr><th>Fahrenheit</th><th>Celcius</th><tr>';
            while ($F !== 55) {
                echo '<tr>';
                echo '<td>' . $F . '</td>';
                $C = 5 / 9 * ($F - 32);
                echo '<td>' . round($C, 1) . '</td>';
                echo '</tr>';
                $F = $F + 5;
            }
            echo '</table>'
            ?>
        </div>
        
        <div class ="box box2">
            <h2 class="question-alt">Q5</h2>
            <h3>Using For loop</h3>
            <?php
            echo '<table border="1px">';
            echo '<tr><th>Fahrenheit</th><th>Celcius</th><tr>';
            for ($F = -50; $F !== 55; $F = $F+5) {
                echo '<tr>';
                echo '<td>' . $F . '</td>';
                $C = 5 / 9 * ($F - 32);
                echo '<td>' . round($C, 1) . '</td>';
                echo '</tr>';
                }
            echo '</table>'
            ?>
        </div>
        
        <div class ="box box2">
            <h2 class="question-alt">Q6</h2>
            <br>
            <?php
            $numbers = array(1 ,2, 3, 4, 5, 6, 7, 8, 9 ,10);
            $size = count ($numbers);
            echo '(a) ' . $size . '<br>';
            
            $total = 0;            
            for ($i = 0; $i < $size; $i++)
                $total = $total + $numbers[$i];
            echo '(b) ' . $total/$size . '<br>';
            
            foreach ($numbers as $key) {
                if ($key % 2 === 1)
                    echo 'Square of ' . $key . ' is ' . pow($key, 2) . '<br>';
            }
            ?>
        </div>
        
        <div class ="box box2">
            <h2 class="question-alt">Q7</h2>
            <br>
            <?php
            function printInfo($salary) {
                echo '<table>';
                echo '<tr><th>name</th>' . '<th>salary</th></tr>';
                foreach ($salary as $key => $value)
                    echo "<tr><td>$key<td><td>$value</td></tr>";
                echo '</table>';
             }
             
            # Part a
                $salary = array("Peter"=>3800, "Lily"=>2300, "Helen"=>3100);
                printInfo($salary);
                
            # Part b
                $total = 0;
                foreach ($salary as $key => $value) {
                    $salary[$key] = $value * 1.05;
                    $total += $salary[$key];
                }
                echo 'If everyone got a 5% raise, the average salary is $' . $total/count($salary);
                
            # Part c
                asort($salary); #sort according to value(salary)
                printInfo($salary);
            
            # last secion
                ksort($salary); #sort according to keys
                printInfo($salary);
            ?>
        </div>
        
        <h1 style="text-align:center; color:red" id="lab6">Lab 6</h1>
        <hr style="width:20%; color:red">

        <!-------------------------------------------- Lab 6 ------------------------------------------------------->

        <div class = "box box2">
            <h2 class = "question-alt">Q1</h2>
            <style>
                .err {
                    color: red;
                }
                    
                label {
                    font-weight: bold;
                }
            </style>
            <?php
            $name = $gender = "";
            $errMsg = "";
            $error = false;
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $error = true;
                    $errMsg = "Name cannot bbe NULLL";
                } else {
                    $name = $_POST["name"];
                }
                if (isset($_POST["gender"])) {
                    $gender = $_POST["gender"];
                }
            }
            ?>
            
            <p/>
            <span class="err"> * Required Fields</span>
            <p/>
            <form method='POST' action = '<?php htmlspecialchars($_SERVER["PHP_SELF"])?>'>
                <label>Name:</label>
                <input type='text' name='name' value="<?php echo $name; ?>"/>
                <span class="err"/>
                    * <?php echo $errMsg; ?>
                </span>
                <br>
                <label>Gender:</label>
                <input type='radio' name='gender' value='female' checked> Female
                <input type='radio' name='gender' value='male'
                <?php if ($gender == "male") echo "checked"; ?> /> Male<br/>
                <p/>
                <input type='submit' value='Submit'>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($error == TRUE) {
                    return;
                }
                echo "Hi $name<br/>";
                echo "You are $gender";
            }
            ?>
        </div>

        <div class = "box box2">
            <h2 class = "question-alt">Q2</h2>
            <h1>Calculator</h1>
            <span class="err"> * Required Fields</span>
            <p/>
            <form method='POST' action = 'include/lab6-q2.php'>
                <label>Enter Number:</label>
                <input type='number' name='first' /><span class="err"/>  *</span>
               
                <br>
                
                <label>Enter Number:</label>
                <input type='number' name='second' /><span class="err"/>  *</span>
               
                <p/>
                <input type='radio' name='operand' value='add' checked>Addition</input><br>
                <input type='radio' name='operand' value='sub'>Subtraction</input><br>
                <input type='radio' name='operand' value='div'>Division</input><br>
                <input type='radio' name='operand' value='mult'>Multiplication</input><br>
                
                <p/>
                
                <input type='submit' value='Submit'>
            </form>
        </div>

        <h1 style="text-align:center; color:red" id="lab7">Lab 7</h1>
        <hr style="width:20%; color:red">

        <!-------------------------------------------- Lab 7 ------------------------------------------------------->

        <div class="box box2">
            <h2 class="question-alt">Q1</h2>
	    <pre>
		CREATE DATABASE mydatabase;
	    </pre>
        </div>

        <div class="box box2">
            <h2 class="question-alt">Q2</h2>
	    <pre>
		USE mydatabase;

		CREATE TABLE Employee (
		emp_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
		emp_name VARCHAR(50) NOT NULL,
		emp_dept VARCHAR(50) ,
		emp_address VARCHAR(50) NOT NULL,
		PRIMARY KEY (emp_id)
		);
	    </pre>
        </div>

        <div class="box box2">
            <h2 class="question-alt">Q3</h2>
	    <pre>
		SELECT * FROM mydatabase.employee;
	    </pre>
	    <?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mydatabase";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error)
		  die("Connection failed: " . $conn->connect_error);

		$sql = "select * from mydatabase.employee";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
		    echo "id: " . $row["emp_id"]. " - Name: " . $row["emp_name"]. ", " . $row["emp_dept"]. "<br>";
		  }
		} else {
		  echo "0 results";
		}
		?>
        </div>

        <div class="box box2">
            <h2 class="question-alt">Q4</h2>

	    <pre>
		INSERT INTO Employee (emp_id, emp_name, emp_dept, emp_address) VALUES
		('101', 'Rick Lee', 'D001', 'Singapore'),
		('123', 'Maggie Wong', 'D002', 'Hong Kong'),
		('166', 'Glenn Lee', 'D003', 'Japan'),
		('133', 'Mary Ray', 'D002', 'Hong Kong');
	    </pre>
	</div>

        <div class="box box2">
            <h2 class="question-alt">Q5</h2>

	    <pre>
		SELECT emp_name, emp_dept FROM mydatabase.employee WHERE emp_dept='D002'
	    </pre>
	    <?php
		$sql = "SELECT emp_name, emp_dept FROM mydatabase.employee WHERE emp_dept='D002'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
		    echo $row["emp_name"]. ", " . $row["emp_dept"]. "<br>";
		  }
		} else {
		  echo "0 results";
		}
		?>
	</div>

        <div class="box box2">
            <h2 class="question-alt">Q6</h2>

	    <pre>
		SELECT emp_name, emp_address FROM mydatabase.employee WHERE emp_address = 'Hong Kong';
	    </pre>
	    <?php
		$sql = "select emp_name, emp_address from mydatabase.employee where emp_address = 'Hong Kong'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
		    echo $row["emp_name"]. ", " . $row["emp_address"]. "<br>";
		  }
		} else {
		  echo "0 results";
		}
		?>
	</div>

        <div class="box box2">
            <h2 class="question-alt">Q7</h2>

	    <pre>
		SELECT COUNT(emp_name) FROM mydatabase.employee
	    </pre>
	    <?php
		$sql = 'SELECT COUNT(emp_name) FROM mydatabase.employee';
		$result = mysqli_query($conn, $sql);
		$data=mysqli_fetch_assoc($result);
		echo $data['COUNT(emp_name)'];
		?>
	</div>

        <div class="box box2">
            <h2 class="question-alt">Q8</h2>

	    <pre>
		SELECT COUNT(*) FROM mydatabase.employee WHERE emp_dept='D002' OR emp_dept='D001';
	    </pre>
		<?php
		$sql = "SELECT COUNT(*) FROM mydatabase.employee WHERE emp_dept='D002' OR emp_dept='D001'";
		$result = mysqli_query($conn, $sql);
		$data=mysqli_fetch_assoc($result);
		echo $data['COUNT(*)'];
		?>
	</div>

        <div class="box box2">
            <h2 class="question-alt">Q9</h2>

	    <pre>
		SELECT * FROM mydatabase.employee WHERE NOT emp_dept='D002' 
	    </pre>
		<?php
		$sql = "SELECT * FROM mydatabase.employee WHERE NOT emp_dept='D002'"; 
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
		    echo $row["emp_name"]. ", " . $row["emp_dept"]. "<br>";
		  }
		} else {
		  echo "0 results";
		}
		?>
	</div>

        <div class="box box2">
            <h2 class="question-alt">Q10</h2>

	    <pre>
		SELECT DISTINCT empt_dept FROM mydatabase.employee 
	    </pre>
		<?php
		$sql = "SELECT DISTINCT emp_dept FROM mydatabase.employee";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
		    echo $row["emp_dept"], " ";
		  }
		} else {
		  echo "0 results";
		}
		?>
	</div>

        <div class="box box2">
            <h2 class="question-alt">Q11</h2>

	    <pre>
		CREATE TABLE Enrolled (
		emp_id MEDIUMINT UNSIGNED NOT NULL,
		course_id MEDIUMINT UNSIGNED NOT NULL,
		start_date VARCHAR(15) NOT NULL,
		FOREIGN KEY (emp_id) REFERENCES employee (emp_id)
		);
	    </pre>
	</div>

        <div class="box box2">
            <h2 class="question-alt">Q12</h2>

	    <pre>
		INSERT INTO Enrolled (emp_id, course_id, start_date) VALUES
		('101', '1000', 'July 2020'),
		('101', '1001', 'Sept 2020'),
		('123', '1000', 'July 2020'),
		('166', '1000', 'July 2020'),
		('166', '1001', 'Sept 2020');
	    </pre>
	</div>

        <div class="box box2">
            <h2 class="question-alt">Q13</h2>

	    <pre>
		SELECT emp_name, course_id, start_date FROM mydatabase.employee, mydatabase.enrolled 
		WHERE Employee.emp_id = Enrolled.emp_id 
		AND Enrolled.course_id=1000;
	    </pre>
	    <?php
		$sql = "SELECT emp_name, course_id, start_date FROM mydatabase.employee, mydatabase.enrolled WHERE Employee.emp_id = Enrolled.emp_id AND Enrolled.course_id=1000";

		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
		    echo $row["emp_name"], ", ", $row["course_id"], ", ", $row["start_date"], "<br/>";
		  }
		} else {
		  echo "0 results";
		}
		?>
	</div>

        <div class="box box2">
            <h2 class="question-alt">Q14</h2>

	    <pre>
		SELECT emp_name 
		FROM employee WHERE emp_id 
		NOT IN (SELECT emp_id FROM enrolled)
	    </pre>
	    <?php
		$sql = "SELECT emp_name " .
			"FROM employee WHERE emp_id " .
			"NOT IN (SELECT emp_id FROM enrolled) ";

		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
		    echo $row["emp_name"] . "<br/>";
		  }
		} else {
		  echo "0 results";
		}
		?>
	</div>

        <div class="box box2">
            <h2 class="question-alt">Q15</h2>

	    <pre>
		SELECT DIST course_id FROM employee, enrolled WHERE emp_dept = 'D002'
	    </pre>
	    <?php
		$sql = "SELECT DISTINCT course_id FROM employee, enrolled WHERE emp_dept = 'D002'";

		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		  // output data of each row
		  while($row = mysqli_fetch_assoc($result)) {
		    echo $row["course_id"] . "<br/>";
		  }
		} else {
		  echo "0 results";
		}
		?>
	</div>
   </body>
</html>
