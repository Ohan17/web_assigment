let submit=document.getElementById("submit-button")
// console.log(1)
let text_inputs = document.getElementsByTagName("input")

submit.onclick = function(){
    let array_input =["topic","ans_a","ans_b","ans_c","ans_d","ans_correct"]
    let text_inputs = document.getElementsByTagName("input")
    let text_area = document.getElementsByTagName("textarea")

    let select = document.getElementsByTagName("select")

    let dict_input = {
        "content":text_area["question"].value,
       "topic":text_inputs[1].value,
       "level":select["level"].value,
      
       "ans_a":text_inputs[2].value,
       "ans_b":text_inputs[3].value,
       "ans_c":text_inputs[4].value,
       "ans_d":text_inputs[5].value,
       "ans_correct":text_inputs[6].value,
    }
    fetch('http://localhost/api/question_api/create.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(dict_input)
    })
    .then(location.reload())
   
}