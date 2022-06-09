let submit=document.getElementById("submit-button")
// console.log(1)
let text_inputs = document.getElementsByTagName("input")

submit.onclick = function(){
    let text_inputs = document.getElementsByTagName("input")
    console.log(text_inputs)
    let select = document.getElementsByTagName("select")

    let dict_input = {
       "name":text_inputs[1].value,
       "level":select["level"].value,
      
    }
    console.log(dict_input)
    fetch('http://localhost/api/topic_api/create.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(dict_input)
    })
    .then(e=> console.log(e))
   
}