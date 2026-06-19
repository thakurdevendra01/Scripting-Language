function check_input(){
    
    const message = document.getElementById("message");
    message.innerHTML = "";
    var x = document.getElementById("demo").value;

    try{
        if(x == "") throw "Empty";
        if(isNaN(x)) throw "not a number";
        if(x >= 10) throw "too high";
        if(x <= 5) throw "too low";
    }catch(err){
        message.innerHTML = "Input is " +err;
    }finally{
        document.getElementById("demo2").innerHTML = "operation completed";
    }
}