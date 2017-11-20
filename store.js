


function checkout()
{
  window.open("bill.html");
}

function productinfo(i){
  var product=document.getElementById("prod");
  product.style.opacity=1;
  product.style.zIndex=4;
  product.style.transition='0.6s';
    document.getElementById("size").style.opacity=1;
  var prodpicture=document.getElementById("items").childNodes[i].firstChild.src;
  document.getElementById("prodpic").src=prodpicture;
  var productname=document.getElementById("items").childNodes[i].childNodes[2].textContent;
  document.getElementById("prodtitle").innerHTML=productname;
  var productprice=document.getElementById("items").childNodes[i].childNodes[4].textContent;
  document.getElementById("prodprice").innerHTML="Price: "+productprice;
  var productdesc=document.getElementById("items").childNodes[i].lastChild.textContent;
  document.getElementById("prodabout").innerHTML="Description: "+productdesc;
}

function productinfo2(i){
  var product=document.getElementById("prod");

  product.style.opacity=1;
  product.style.zIndex=4;
  product.style.transition='0.6s';
    document.getElementById("size").style.opacity=0;

  var prodpicture=document.getElementById("items").childNodes[i].firstChild.src;
  document.getElementById("prodpic").src=prodpicture;
  var productname=document.getElementById("items").childNodes[i].childNodes[2].textContent;
  document.getElementById("prodtitle").innerHTML=productname;
  var productprice=document.getElementById("items").childNodes[i].childNodes[4].textContent;
  document.getElementById("prodprice").innerHTML="Price: "+productprice;
  var productdesc=document.getElementById("items").childNodes[i].lastChild.textContent;
  document.getElementById("prodabout").innerHTML="Description: "+productdesc;

}



function closeproduct(){
  var product=document.getElementById("prod");
  product.style.opacity=0;
  product.style.zIndex=-1;
  product.style.transition='0s';
}
