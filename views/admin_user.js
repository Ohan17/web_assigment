

const rows = fetch("http://localhost/api/user_api/read.php")
                .then(res => res.json())
                .then(data =>{
                    console.log(data)
                    const array_user = data['users'];
                    const keys = Object.keys(array_user[0])
                    numRow = array_user.length;

                    let body = document.getElementById("body");
                    let table = document.getElementById("table");
                    let tbody = document.createElement('tbody');
                    table.appendChild(tbody)


                    for (var i=0;i<numRow;i++){
                       
                        var row = document.createElement("tr");

                        for (var j=0 ; j<2;j++){
                            var td = document.createElement("td");
                            td.innerHTML=array_user[i][keys[j]];
                      
                            row.appendChild(td);
                        }
                        var td_delete = document.createElement("td");
                        td_delete.innerHTML = `<button  onclick="removeUser(this.id)" class="delete-btn" id=${array_user[i][keys[0]]} ><i class="bi bi-x-lg"></i>Delete</button>`;
                        row.appendChild(td_delete);
                        var td_change = document.createElement("td");
                        td_change.innerHTML = `<button  onclick="changeUser(this.id)" class="delete-btn" id=${array_user[i][keys[0]]} ><i class="bi bi-pencil-fill"></i>Change</button>`;
                        row.appendChild(td_change);
                        // td.innerText = "<a>Change<a>"
                        // row.appendChild(td);
                        
                        tbody.appendChild(row);
                    }
                    


                })
                .catch(e => console.log(e));


function removeUser(record_id){
  record_id= parseInt(record_id);
  fetch('http://localhost/api/user_api/delete.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({"id": record_id}) 
  }).then(resp =>location.reload())
  
}


function changeUser(record_id){
  //  alert('chnage');
  
  fetch(`http://localhost/api/user_api/show.php?id=${record_id}`)
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
  legend.innerText="Change User";
 let form = document.createElement('form');
 form.appendChild(fieldset);
  body.removeChild(table);
  body.appendChild(form);
  

  user_fields = Object.keys(data); 
  console.log(user_fields);
  for (let i=2; i< user_fields.length;i++)
  {
    let hr =  document.createElement("hr") ;
    
    let label = document.createElement("label");
    label.setAttribute("for",user_fields[i]);
    let captialize = user_fields[i][0].toUpperCase() + user_fields[i].substr(1);
    
    label.innerText = captialize+": ";
    let input = document.createElement("input");
    input.setAttribute("type","text");

    input.setAttribute("id",user_fields[i]);
    input.setAttribute("name",user_fields[i]);
    input.setAttribute("value",data[user_fields[i]]);
    fieldset.appendChild(label);
    fieldset.appendChild(input);
    fieldset.appendChild(hr);
  }
  let breakLine = document.createElement("br") ;
  fieldset.removeChild(fieldset.lastChild);
  fieldset.appendChild(breakLine);
    let button = document.createElement("button");
    button.setAttribute("id","edit-btn");
    button.setAttribute("class","btn btn-outline-secondary  ");
    button.setAttribute("style","height:30px ; padding-bottom: 30px;float:right; background-color:#264b58; color:beige");
    button.setAttribute("type","button")
    button.innerText= "Edit";
    fieldset.appendChild(button);
    

    
    
    let editButton = document.getElementById("edit-btn");
    data = document.getElementsByTagName("input");
       
    
     editButton.onclick= function(){
     
      let post_data={
      "id":record_id,
      "name":data[0].value,
      "password":data[1].value,
      "privillege":data[2].value,
      }
    
    fetch('http://localhost/api/user_api/update.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(post_data)
    })
    .then(location.reload())
  }
  });
}

let addButton = document.getElementById("add-btn"); 
addButton.onclick = function (){
  addButton.innerText="Back";
    addButton.onclick= function(){
      location.reload();
    }
  let body = document.getElementById("body");
  let table = document.getElementById("table");
  let fieldset = document.createElement("fieldset");
  let legend = document.createElement("legend");
  fieldset.appendChild(legend);
  legend.innerText="Change user";
 let form = document.createElement('form');
 form.appendChild(fieldset);
  body.removeChild(table);
  body.appendChild(form);
  
  let user_fields = ["name","password","privillege"];
  for (let i=0; i< user_fields.length;i++)
  {
    let hr =  document.createElement("hr") ;
    
    let label = document.createElement("label");
    label.setAttribute("for",user_fields[i]);
    let captialize = user_fields[i][0].toUpperCase() + user_fields[i].substr(1);
    
    label.innerText = captialize+": ";
    let input = document.createElement("input");
    input.setAttribute("type","text");

    input.setAttribute("id",user_fields[i]);
    input.setAttribute("name",user_fields[i]);
    fieldset.appendChild(label);
    fieldset.appendChild(input);
    fieldset.appendChild(hr);
  }
  let breakLine = document.createElement("br") ;
  fieldset.removeChild(fieldset.lastChild);
  fieldset.appendChild(breakLine);
    let button = document.createElement("button");
    button.setAttribute("id","add");
    button.setAttribute("class","btn btn-outline-secondary  ");
    button.setAttribute("style","height:30px ; padding-bottom: 30px;float:right; background-color:#264b58; color:beige");
    button.setAttribute("type","button")
    button.innerText= "Add";
    fieldset.appendChild(button);

    button.onclick=function(){
      let data = document.getElementsByTagName("input");
      let post_data={
      "name":data[0].value,
      "password":data[1].value,
      "privillege":data[2].value
      
    };
      
      fetch('http://localhost/api/user_api/create.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(post_data)
    })
    .then(location.reload() )
      
    }
    
}