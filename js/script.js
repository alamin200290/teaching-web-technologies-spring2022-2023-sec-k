
//name = "abc";
//var name ="abc";
let name ="abc";
//const name = "abc";
let student = ['alamin', 'alamin@aiub.edu',1, 3.4];

// function abc(){

// }
// let f1 = ()=>{
// }
// f1();
//console.log('test');
//alert('test...');
//document.write('test....');
function f1(){
    let obj = document.getElementsByTagName('h1')[0];
    obj.innerHTML = "This is another test...";
    obj.style.color = 'red';
}


function f2(){

    let username = document.getElementsByTagName('input')[0].value;
    //alert(username);
    if(username == ""){
        let obj = document.getElementsByTagName('p')[0];
        obj.innerHTML = "null value";
        obj.style.color = "red";
        document.getElementById('head').innerHTML = "";
        
    }else{
        document.getElementById('head').innerHTML = username;
    }
}