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