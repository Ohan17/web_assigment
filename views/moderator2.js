

let tab2 = document.getElementById("tab2")

tab2.onclick = function() {
    const rows = fetch("http://localhost/api/topic_api/read.php")
    .then(res => res.json())
    .then(data =>{
        console.log(data)
        const array_topic = data['topics'];
        const keys = Object.keys(array_topic[0])
        numRow = array_topic.length;

        let body = document.getElementById("body2");
        let table = document.getElementById("table2");
        let tbody = document.createElement('tbody');
        table.appendChild(tbody)


        for (var i=0;i<numRow;i++){
           
            var row = document.createElement("tr");

            for (var j=0 ; j<2;j++){
                var td = document.createElement("td");
                 td.setAttribute("class","text-left");
                td.innerHTML=array_topic[i][keys[j]];
          
                row.appendChild(td);
            }
            var td_delete = document.createElement("td");
            td_delete.setAttribute("class","text-right");
            td_delete.innerHTML = `<button  onclick="removeTopic1(this.id)" class="delete-btn" id=${array_topic[i][keys[0]]} ><i class="bi bi-x-lg"></i>Delete</button>`;
            row.appendChild(td_delete);
            var td_change = document.createElement("td");
            td_change.setAttribute("class","text-left");
            td_change.innerHTML = `<button  onclick="changeTopic1(this.id)" class="delete-btn" id=${array_topic[i][keys[0]]} ><i class="bi bi-pencil-fill"></i>Change</button>`;
            row.appendChild(td_change);
            // td.innerText = "<a>Change<a>"
            // row.appendChild(td);
            
            tbody.appendChild(row);
        }
        


    })
    .catch(e => console.log(e));

}



function removeTopic1(record_id){
    record_id= parseInt(record_id);
    fetch('http://localhost/api/topic_api/delete.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({"id": record_id}) 
    }).then(resp =>location.reload())
    
  }
  
  
  function changeTopic1(record_id){
    //  alert('chnage');
    
    fetch(`http://localhost/api/topic_api/show.php?id=${record_id}`)
    .then(response =>{return (response.json())})
    .then(data => {
      let addButton1 = document.getElementById("add-btn"); 
  
      addButton1.innerText="Back";
      addButton1.onclick= function(){
        location.reload();
      }
  
    let body = document.getElementById("body");
    let table = document.getElementById("table");
    let fieldset = document.createElement("fieldset");
    let legend = document.createElement("legend");
    fieldset.appendChild(legend);
    legend.innerText="Change Topic";
   let form = document.createElement('form');
   form.appendChild(fieldset);
    body.removeChild(table);
    body.appendChild(form);
    
  
    topic_fields = Object.keys(data); 
    console.log(data);
    for (let i=1; i< topic_fields.length-1;i++)
    {
      let hr =  document.createElement("hr") ;
      
      let label = document.createElement("label");
      label.setAttribute("for",topic_fields[i]);
      let captialize = topic_fields[i][0].toUpperCase() + topic_fields[i].substr(1);
      
      label.innerText = captialize+": ";
      let input = document.createElement("input");
      input.setAttribute("type","text");
  
      input.setAttribute("id",topic_fields[i]);
      input.setAttribute("name",topic_fields[i]);
      input.setAttribute("value",data[topic_fields[i]]);
      console.log(data[topic_fields[i]])
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
      "level":parseInt(data[1].value)
        }
     
      fetch('http://localhost/api/topic_api/update.php', {
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
  
  let addButton1 = document.getElementById("add-btn"); 
  addButton1.onclick = function (){
    addButton1.innerText="Back";
      addButton1.onclick= function(){
        location.reload();
      }
    let body = document.getElementById("body");
    let table = document.getElementById("table");
    let fieldset = document.createElement("fieldset");
    let legend = document.createElement("legend");
    fieldset.appendChild(legend);
    legend.innerText="Change topic";
   let form = document.createElement('form');
   form.appendChild(fieldset);
    body.removeChild(table);
    body.appendChild(form);
    
    let topic_fields = ["name","level"];
    for (let i=0; i< topic_fields.length;i++)
    {
      let hr =  document.createElement("hr") ;
      
      let label = document.createElement("label");
      label.setAttribute("for",topic_fields[i]);
      let captialize = topic_fields[i][0].toUpperCase() + topic_fields[i].substr(1);
      
      label.innerText = captialize+": ";
      let input = document.createElement("input");
      input.setAttribute("type","text");
  
      input.setAttribute("id",topic_fields[i]);
      input.setAttribute("name",topic_fields[i]);
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
        "level":parseInt(data[1].value)
      };
        fetch('http://localhost/api/topic_api/create.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(post_data)
      })
      .then(location.reload() )
        
      }
      
  }