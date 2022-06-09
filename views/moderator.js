let tab1 = document.getElementById("tab1")

// document.getElementById('order').onchange = function() {
// alert(1)
// }

tab1.onclick = function() {


const rows = fetch("http://localhost/api/question_api/read.php")
                .then(res => res.json())
                .then(data =>{

                    const array_question = data['questions'];

                    // const order_by = document.getElementById("order").value
       

                    // console.log(order_by)
                    // if (`${order_by}` == `name`){
                    //   array_question.sort((a, b) => (a.name > b.name) ? 1 : -1)
                    //   console.log(order_by)
                    // }
                    // if (`${order_by}` == `level`){
                    //   array_question.sort((a, b) => (a.level > b.level) ? 1 : -1)
                    //   console.log(order_by)
                    // }
                    const keys = Object.keys(array_question[0])
                    numRow = array_question.length;

                    let body = document.getElementById("body");
                    let table = document.getElementById("table");
                    let tbody = document.createElement('tbody');
                    table.appendChild(tbody)


                    for (var i=0;i<numRow;i++){
                       
                        var row = document.createElement("tr");

                        for (var j=0 ; j<2;j++){
                            var td = document.createElement("td");
                            td.innerHTML=array_question[i][keys[j]];
                      
                            row.appendChild(td);
                        }
                        var td_delete = document.createElement("td");
                        td_delete.innerHTML = `<button  onclick="removeQuestion(this.id)" class="delete-btn" id=${array_question[i][keys[0]]} ><i class="bi bi-x-lg"></i>Delete</button>`;
                        row.appendChild(td_delete);
                        var td_change = document.createElement("td");
                        td_change.innerHTML = `<button  onclick="changeQuestion(this.id)" class="delete-btn" id=${array_question[i][keys[0]]} ><i class="bi bi-pencil-fill"></i>Change</button>`;
                        row.appendChild(td_change);
                        // td.innerText = "<a>Change<a>"
                        // row.appendChild(td);
                        
                        tbody.appendChild(row);
                    }
                    


                })
                .catch(e => console.log(e));
            }
function removeQuestion(record_id){
  record_id= parseInt(record_id);
  fetch('http://localhost/api/question_api/delete.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({"id": record_id}) 
  }).then()
  
}


function changeQuestion(record_id){
  //  alert('chnage');
  
  fetch(`http://localhost/api/question_api/show.php?id=${record_id}`)
  .then(response =>{return (response.json())})
  .then(data => {
    let addButton = document.getElementById("add-btn"); 

    addButton.innerText="Back";
    addButton.onclick= function(){
      location.reload();
    }

  let body = document.getElementById("body");
  let table = document.getElementById("table");
  let fieldset = document.createElement("fieldset");
  let legend = document.createElement("legend");
  fieldset.appendChild(legend);
  legend.innerText="Change question";
 let form = document.createElement('form');
 form.appendChild(fieldset);
  body.removeChild(table);
  body.appendChild(form);
  

  question_fields = Object.keys(data); 
  
  for (let i=2; i< question_fields.length;i++)
  {
    let hr =  document.createElement("hr") ;
    
    let label = document.createElement("label");
    label.setAttribute("for",question_fields[i]);
    let captialize = question_fields[i][0].toUpperCase() + question_fields[i].substr(1);
    
    label.innerText = captialize+": ";
    let input = document.createElement("input");
    input.setAttribute("type","text");

    input.setAttribute("id",question_fields[i]);
    input.setAttribute("name",question_fields[i]);
    input.setAttribute("value",data[question_fields[i]]);
    fieldset.appendChild(label);
    fieldset.appendChild(input);
    fieldset.appendChild(hr);
  }
  let breakLine = document.createElement("br") ;
  fieldset.removeChild(fieldset.lastChild);
  fieldset.appendChild(breakLine);
    let button = document.createElement("button");
    button.setAttribute("id","edit-btn");
    button.setAttribute("class","btn btn-primary mb-4");
    button.setAttribute("style","height:30px ; padding-bottom: 30px;float:right; ");
    button.setAttribute("type","button")
    button.innerText= "Edit";
    fieldset.appendChild(button);
    

    
    
    let editButton = document.getElementById("edit-btn");
    data = document.getElementsByTagName("input");
       
    
     editButton.onclick= function(){
     
      let post_data={
      "id":record_id,
    "content":data[1].value,
    "topic":data[2].value,
    "level":parseInt(data[3].value),
    "ans_a":data[4].value,
    "ans_b":data[5].value,
    "ans_c":data[6].value,
    "ans_d":data[7].value,
    "ans_correct":data[8].value};
    console.log(post_data)
    fetch('http://localhost/api/question_api/update.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(post_data)
    })
    // .then(location.reload())
  }
  });
}

let addButton = document.getElementById("add-btn"); 
addButton.onclick = function (){
    window.location.href = "http://localhost/views/create_question_form.php";
    //   addButton.innerText="Back";
//     addButton.onclick= function(){
//       location.reload();
//     }
//   let body = document.getElementById("body");
//   let table = document.getElementById("table");
//   let fieldset = document.createElement("fieldset");
//   let legend = document.createElement("legend");
//   fieldset.appendChild(legend);
//   legend.innerText="Change question";
//  let form = document.createElement('form');
//  form.appendChild(fieldset);
//   body.removeChild(table);
//   body.appendChild(form);
  
//   let question_fields = ["content","topic","level","ans_a","ans_b","ans_c","ans_d","ans_correct"]
//   for (let i=0; i< question_fields.length;i++)
//   {
//     let hr =  document.createElement("hr") ;
    
//     let label = document.createElement("label");
//     label.setAttribute("for",question_fields[i]);
//     let captialize = question_fields[i][0].toUpperCase() + question_fields[i].substr(1);
    
//     label.innerText = captialize+": ";
//     let input = document.createElement("input");
//     input.setAttribute("type","text");

//     input.setAttribute("id",question_fields[i]);
//     input.setAttribute("name",question_fields[i]);
//     fieldset.appendChild(label);
//     fieldset.appendChild(input);
//     fieldset.appendChild(hr);
//   }
//   let breakLine = document.createElement("br") ;
//   fieldset.removeChild(fieldset.lastChild);
//   fieldset.appendChild(breakLine);
//     let button = document.createElement("button");
//     button.setAttribute("id","add");
//     button.setAttribute("class","btn btn-outline-success");
//     button.setAttribute("type","button")
//     button.innerText= "Add";
//     fieldset.appendChild(button);

//     button.onclick=function(){
//       let data = document.getElementsByTagName("input");
//       let post_data={
//       "content":data[0].value,
//       "topic":data[1].value,
//       "level":parseInt(data[2].value),
//       "ans_a":data[3].value,
//       "ans_b":data[4].value,
//       "ans_c":data[5].value,
//       "ans_d":data[6].value,
//       "ans_correct":data[7].value
//     };
      
//       fetch('http://localhost/api/question_api/create.php', {
//       method: 'POST',
//       headers: {
//         'Content-Type': 'application/json'
//       },
//       body: JSON.stringify(post_data)
//     })
//     .then(location.reload())
      
//     }
    
}

mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}