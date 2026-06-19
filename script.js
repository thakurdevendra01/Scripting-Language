function show_prompt(){
    var person = prompt("Enter your Name: ", " ");
    if(person != null){
        document.getElementById("demo").innerHTML = 
        "Hello " + person + "! How are you today?";
    }
}