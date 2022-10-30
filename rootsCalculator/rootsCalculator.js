function solution(form){
    let a;
    let b;
    let c;
    let root1;
    let root2;
   // let box = document.getElementById("box");


    a = form.elements["a"].valueAsNumber;
    b = form.elements["b"].valueAsNumber;
    c = form.elements["c"].valueAsNumber;

    //calculates the square root
    let left = b * b;
    let right = 4 * a * c;
    let sqrtSolution = left - right;

    //calculate quadratic equation
    root1 = ((-b + Math.sqrt(sqrtSolution)) / (2 * a)).toFixed(3);
    root2 = ((-b - Math.sqrt(sqrtSolution)) / (2 * a)).toFixed(3);

    console.log(left);
    console.log(right);
    



    

    //checks a, b, c for non integers and a for 0
    if (a == 0 || Number.isInteger(a) == false || a < -99 || a > 99){
        console.log("Invalid entry for a. Must be a non-zero integer between -99 and +99.")
        if (Number.isInteger(b) == false || b < -99 || b > 99){
            console.log("Invalid entry for b. Must be an integer between -99 and +99.")
            if (Number.isInteger(c) == false || c < -99 || c > 99){
                console.log("Invalid entry for c. Must be an integer between -99 and +99.")
                document.getElementById("a").style.border = "2px solid red";
                document.getElementById("b").style.border = "2px solid red";
                document.getElementById("c").style.border = "2px solid red";
                alert("Invalid entry for a. Must be a non-zero integer between -99 and +99. \nInvalid entry for b. Must be an integer between -99 and +99. \nInvalid entry for c. Must be an integer between -99 and +99.")
                return;
            }
            document.getElementById("a").style.border = "2px solid red";
            document.getElementById("b").style.border = "2px solid red";
            alert("Invalid entry for a. Must be a non-zero integer between -99 and +99. \nInvalid entry for b. Must be an integer between -99 and +99.")
            return;
        }
        if (Number.isInteger(c) == false || c < -99 || c > 99){
            console.log("Invalid entry for c. Must be an integer between -99 and +99.")
            document.getElementById("a").style.border = "2px solid red";
            document.getElementById("c").style.border = "2px solid red";
            alert("Invalid entry for a. Must be a non-zero integer between -99 and +99. \nInvalid entry for c. Must be an integer between -99 and +99.")
            return
        }
        document.getElementById("a").style.border = "2px solid red";
        alert("Invalid entry for a. Must be a non-zero integer between -99 and +99.")
        return;
    }
    else if (Number.isInteger(b) == false || b < -99 || b > 99){
        console.log("Invalid entry for b. Must be an integer between -99 and +99.")
        if (Number.isInteger(c) == false || c < -99 || c > 99){
            console.log("Invalid entry for c. Must be an integer between -99 and +99.")
            document.getElementById("b").style.border = "2px solid red";
            document.getElementById("c").style.border = "2px solid red";
            alert("Invalid entry for b. Must be an integer between -99 and +99. \nInvalid entry for c. Must be an integer between -99 and +99.")
            return;
        }
        document.getElementById("b").style.border = "2px solid red";
        alert("Invalid entry for b. Must be an integer between -99 and +99")
        return;
    }
    else if (Number.isInteger(c) == false || c < -99 || c > 99){
        console.log("Invalid entry for c. Must be an integer between -99 and +99.")
        document.getElementById("c").style.border = "2px solid red";
        alert("Invalid entry for c. Must be an integer between -99 and +99.")
        return;
    }
    else {
        console.log("a, b, and c have passed the check!")
    }



    
   

    //outputs based on parameters
    if (left < right){
        let solution1 = "Solution: x's roots are imaginary";
        document.getElementById("result").innerHTML = solution1;
        console.log("Solution: x's roots are imaginary")
    } 
    else if (left == right){
        let solution2 = "Solution: x = " + root1;

        document.getElementById("result").innerHTML = solution2;
        console.log('Solution: ' + root1.toFixed(3) + ' ' + root2)
    }
    else if (left > right){
        let solution3 = "Solution: x = " + root1 + ", x = " + root2;

        document.getElementById("result").innerHTML = solution3;
        console.log('Solution: ' + root1 + ' ' + root2)
    }
    else err=>{
        console.log('Errors:' + err.message)
    }

    



}