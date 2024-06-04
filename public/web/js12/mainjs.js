//  function kerko(){
//    let string=document.getElementsByName("inp")
// if(string==="Finland" || string==="finland"||string==="FINLAND"){
// document.getElementById("anch").href=("https://finland.nordicvisitor.com/travel-deals/independent-tours/capitals-of-scandinavia-finland-cruise-winter/1639/")
// }


function setAction(form) {
    let string=document.getElementsByName("inp")
    if(string==="Finland" || string==="finland"||string==="FINLAND")
    form.action = "/contact";
    alert(form.action);
    return false;
  }