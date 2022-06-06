console.log(1)
const topic = fetch("http://localhost/api/topic_api/show_by_level.php?level=3")
.then(res=>res.json())
.then(data=>{
    let card_group = document.getElementById("card-group")
    const topics=data["topics"];
    for (let  i=0; i<topics.length; i++){
        
        let col = document.createElement("div");
        col.setAttribute("class","col p-1 ")
       

        let card = document.createElement("div");
        card.setAttribute("class","card");

        let card_body = document.createElement("div");
        card_body.setAttribute("class","card-body");

        let title = document.createElement("h5");
        title.setAttribute("class","card-title");
        title.innerText = topics[i]["name"];

        let button = document.createElement("button");
        button.setAttribute("type","button");
        button.setAttribute("class","btn btn-outline-danger");
        button.setAttribute("id",topics[i][0]);
        button.innerText ="Take the test"

        card_group.appendChild(col);
        col.appendChild(card);
        card.appendChild(card_body);
        card_body.appendChild(title);
        card_body.appendChild(button);
    }
    console.log(topics);
})