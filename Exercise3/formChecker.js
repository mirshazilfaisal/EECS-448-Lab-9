document.getElementById('form').onsubmit = function(){

    let username=document.getElementById('username');
    let password=document.getElementById('password');

    let spe=document.getElementById('spe');
    let jc=document.getElementById('jc');
    let tv=document.getElementById('tv');
 
    let ship1=document.getElementById('7day');
    let ship3=document.getElementById('3day');
    let ship2=document.getElementById('overnight');
    
    
    if(spe.value=="" || jc.value=="" || tv.value=="")   {
        alert("Please enter 0 if you wish not to order a product");
        return(false);
    }    

    else if(spe.value < 0 || jc.value < 0 || tv.value < 0)   {
        alert("Please enter a positive input");
        return(false);
    }  
    
    if(!ship1.checked && !ship2.checked && !ship3.checked){
        alert("Please select one shipping option");
        return(false);
    }    

    if(username.value =="")
    {
        alert("Please enter username");
        return(false);
    }

    if(password.value ==""){
        alert("Please enter password");
        return(false);
    }
}

function reset(){
    document.getElementById("username").value="";
    document.getElementById("password").value="";
    document.getElementById("spe").value="";
    document.getElementById("jc").value="";
    document.getElementById("tv").value="";
    document.getElementById('7day').checked=false;
    document.getElementById('overnight').checked=false;
    document.getElementById('3day').checked=false;
}