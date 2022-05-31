
const rows = fetch("http://localhost/api/question_api/read.php")
                .then(res => res.json())
                .then(data =>{
                
                    const array_question = data['questions'];
                    

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
                            console.log(td)
                            row.appendChild(td);
                        }
                        var td_delete = document.createElement("td");
                        td_delete.innerHTML = `<button  onclick="removeQuestion(this.id)" class="delete-btn" id=${array_question[i][keys[0]]} ><i class="bi bi-x-lg"></i>
                        Delete</button>`;
                        row.appendChild(td_delete);
                        var td_change = document.createElement("td");
                        td_change.innerHTML = `<a id=${array_question[i][keys[0]]} href=#><i class="bi bi-pencil"></i>
                        Change</a>`;
                        row.appendChild(td_change);
                        // td.innerText = "<a>Change<a>"
                        // row.appendChild(td);
                        
                        tbody.appendChild(row);
                    }
                    


                })
                .catch(e => console.log(e));


function removeQuestion(record_id){
record_id= parseInt(record_id);
  
  fetch('http://localhost/api/question_api/delete.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({"id": record_id}) 
  }).then(resp =>location.reload())
  
}



