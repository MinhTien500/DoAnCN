const btn= document.querySelectorAll("button")
btn.forEach(function(button,index){
button.addEventListener("click",function(event){{
    var btnItem = event.target
    var product = btnItem.parentElement
    var productImg= product.querySelector("img").src

    console.log(product)
}})
})