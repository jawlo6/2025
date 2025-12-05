function addcart(){
    const file = document.getElementById('file').files[0]
    const numberofcopy = +document.getElementById(numberofcopy).value
    const typeofpaper = document.querySelector('input[type=radio]:checked').value
    let price = 0
    if (typeofpaper == "błyszczący"){
        price = numberofcopy * 1.5
    }
    if (typeofpaper == "matowy"){
        price= numberofcopy *2
    }
    const newimg =document.createElement("img")
    newimg.src = file.name
 
}