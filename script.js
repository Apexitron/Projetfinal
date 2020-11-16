function closeNav(){
    document.getElementById("sign-up-popup").style.display="none";
}

function openFilters()
{
    let menu=document.getElementById("filters");
    let opbtn=document.getElementById("opfilter");
    let clbtn=document.getElementById("clfilter");
    menu.style.left="0px";
    menu.style.marginLeft="35px";
    opbtn.style.display="none";
    clbtn.style.left="200px";
    
}

function closeFilters()
{
    let menu=document.getElementById("filters");
    let opbtn=document.getElementById("opfilter");
    let clbtn=document.getElementById("clfilter");
    menu.style.left="-400px";
    opbtn.style.display="block";
    clbtn.style.left="-95px";
    
}