/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}


function avgMark(marks){
    var total = 0;
    for (var i = 0; i < marks.length; ++i)
        total += marks[i];
    var average = total/marks.length;

    document.write("Average Marks: ", average, "<br>");
    if (average < 50)
        document.write("Grade: F");
    else if (average < 60)
        document.write("Grade: D");
    else if (average < 70)
        document.write("Grade: C");
    else if (average < 80)
        document.write("Grade: B");
    else
        document.write("Grade: A");
}


function findSmall(numbers){
    var small = 100;
    for (var i = 0; i < numbers.length; ++i){
        if (numbers[i] < small)
            small = numbers[i];    
    }
    document.write("Smallest number: ", small, "<br>");
}    

function findBig(numbers){
    var big = 0;
    for (var i = 0; i < numbers.length; ++i){
        if (numbers[i] > big)
            big = numbers[i];
    }
    document.write("Biggest number: ", big, "<br>");  
}

function findWord(word, text) {
    document.write(text, "<br>");
    var i;
    for(i=0; occur !== -1; ++i){
        var occur = text.indexOf(word);
        text = text.substring(occur+word.length);
    }
    document.write(word, " occured ", i-1, " times<br>");
}

function add() {
    var num1 = document.getElementById('firstNumber').value;
    var num2 = document.getElementById('secondNumber').value;
    var result = Number(num1) + Number(num2);
    
    document.getElementById('result').innerHTML = result;
}

function subtract() {
    var num1 = document.getElementById('firstNumber').value;
    var num2 = document.getElementById('secondNumber').value;
    var result = Number(num1) - Number(num2);
    
    document.getElementById('result').innerHTML = result;
}

function mutiply() {
    var num1 = document.getElementById('firstNumber').value;
    var num2 = document.getElementById('secondNumber').value;
    var result = Number(num1) * Number(num2);
    
    document.getElementById('result').innerHTML = result;
}

function divide() {
    var num1 = document.getElementById('firstNumber').value;
    var num2 = document.getElementById('secondNumber').value;
    var result = Number(num1) / Number(num2);
    
    document.getElementById('result').innerHTML = result;
}

function calPricing() {
    var quant = document.getElementById('quantity').value;
    var pricing = document.getElementById('ppu').value;
    var gst = document.getElementById('tax').value;
    var offer = document.getElementById('discount').value;
  
    total = quant * pricing * (100-offer)/100;
    total = total + gst/100 * total;
    // total = total * (100+gst)/100;  //why cannot?
    document.getElementById('total').value = parseFloat(total).toFixed(2);
}

function validateInputs() {
    //access all input fields by the name attribute
    //instead of using id or class attributes
    var name = document.forms["SurveryFrom"]["Name"];
    var email = document.forms["SurveryFrom"]["Email"];
    var age = document.forms["SurveryFrom"]["Age"];
    var course = document.forms["SurveryFrom"]["Course"];
    // Check for null name input
    if ((name.value).trim() === ""){
        window.alert("Please enter your name");
        name.focus();
        return false;
    }
    
    //Check for null email input
    if ((email.value).trim() === ""){
        window.alert("Please enter your email address");
        email.focus();
        return false;
    } else {
        //Check for email format. Note that regex is used
        var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!regex.test(email.value)){
        window.alert("You have entered an invalid email address");
        email.focus();
        return false;           
        }
    }
    
    //Check for null age input
    if ((age.value).trim() === ""){
        window.alert("Please enter your age");
        age.focus();
        return false;
    } else {
        //Check that age is a number
        if (isNaN(age.value)) {
            window.alert("Please enter number only");
            age.focus();
            return false;
        }
    }
    
    // Check that drop list is selected
    // Note that first item is a prompt message has value 0
    if (course.selectedIndex < 1 || 
            course[course.selectedIndex].value === 0){
        window.alert("Please select a course");
        age.focus();
        return false;       
    }
    // After all the validation, we get all the values for submission
    // Here we just display the values as an alert
    var nameValue = (name.value).trim();
    var emailValue = (email.value).trim();
    var ageValue = Number(age.value);
    var courseValue = course[course.selectedIndex].value;
    var courseText = course[course.selectedIndex].text;
    var message = nameValue = ", " + emailValue
            + ", " + ageValue + ", "
            + courseValue + "-" + courseText;
    window.alert(message);
    return true;
}

function validateUserID() {
    // read the value of the user id input
    var input = document.getElementById('uid').value;
    // clear the user id error message
    document.getElementById("errUid").innerHTML = "";
    if (input === "") {
        //set error message if user id input is empty
        document.getElementById("errUid").innerHTML
                = "<span style='color:red'>Please enter your user id!</span>";
        //if user id input is empty clear final error message
        document.getElementById("errFinal").innerHTML = "";
    }
}

function validatePassword() {
    // read the value of the password input
    var input = document.getElementById('password').value;
    // clear the password error message
    document.getElementById("errPassword").innerHTML = "";
    if (input === "") {
        //set error message if password input is empty
        document.getElementById("errPassword").innerHTML
                = "<span style='color:red'>Please enter your password!</span>";
        //if password input is empty clear final error message
        document.getElementById("errFinal").innerHTML = "";
    }
}

function validate() {
    //collections of all the validating functions
    validateUserID();
    validatePassword();
}
function finalValidate(){
    //use an array to store the error message of all inputs
    var error = new Array();
    error[0] = document.getElementById("errUid").innerHTML;
    error[1] = document.getElementById("errPassword").innerHTML;
    var count = 0;
    var i = 0;
    //Use loop to check through the error messages of all inputs
    for (i=0; i<2; i++) {
        //no error message increment count
        if (error[i] === "") {
            count = count + 1;
        }
    }
    //if all inputs have no error set final error message to good
    if (count === 2)
        document.getElementById("errFinal").innerHTML
                = "All the data you entered is correct!!";
}