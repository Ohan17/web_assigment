function getRandomInt(max) {
    return Math.floor(Math.random() * max) +1;
  }
  
const topic_id = getRandomInt(6);

let topic_name = document.getElementById("topic-name");

fetch(`http://localhost/api/topic_api/show.php?id=${topic_id}`)
.then(res => res.json())
.then(data =>{
    console.log(data);
    topic_name.innerText= "Topic " + data["name"] +": ";
    console.log(topic_name)
})

fetch(`http://localhost/api/question_api/show_by_topic.php?topic=${topic_id}`)
.then(res => res.json())
.then(data =>
    {
        console.log(data["questions"])
        test_form = document.getElementById("test-form");
        question_list = data["questions"];
        for(let i=0; i<10;i++){
            let question_content = document.createElement("label");
            question_content.setAttribute("style","display:inline");
            question_content.setAttribute("for",`${question_list[i][0]}`);
            question_content.innerHTML= "Question "+ (i+1)+": " +question_list[i]["content"]
                                        +"</br>A. " + question_list[i]["ans_a"]
                                        +"</br>D. " + question_list[i]["ans_b"]
                                        +"</br>C. " + question_list[i]["ans_c"];
            if (question_list[i]["ans_d"] !=""){
                question_content.innerHTML += "</br>D. " + question_list[i]["ans_d"];
            }
                question_content.innerHTML += "</br>Choose your answer: ";
            let select_ans = document.createElement("select");
            select_ans.setAttribute("id",i);
            select_ans.setAttribute("name","question");
            let opt_A = document.createElement("option");
            opt_A.setAttribute("value",1);
            opt_A.innerText = "A";
            select_ans.appendChild(opt_A);
            let opt_B = document.createElement("option");
            opt_B.setAttribute("value",2);
            opt_B.innerText = "B";
            select_ans.appendChild(opt_B);
            let opt_C = document.createElement("option");
            opt_C.setAttribute("value",3);
            opt_C.innerText = "C";
            select_ans.appendChild(opt_C);
            if (question_list[i]["ans_d"] !=""){
                let opt_D = document.createElement("option");
                opt_D.setAttribute("value",4);
                opt_D.innerText = "D";
                select_ans.appendChild(opt_D);
            }
           
            let hr= document.createElement("hr");
            test_form.appendChild(question_content);
            test_form.appendChild(select_ans);
            test_form.appendChild(hr);
        }
        let submit = document.createElement("button");
        submit.setAttribute("class","btn btn-outline-success");
        submit.setAttribute("type","button");
        submit.innerText="Submit";
        test_form.appendChild(submit);
        console.l
        submit.onclick = function(){
            // alert(question_list[0]["ans_correct"]);
            let score = 0
            let data=document.getElementsByTagName("select");
            for(let i=0; i<data.length; i++){
                // console.log(question_list[i]["ans_correct"]);
                // console.log(data[i].value);

                if (data[i].value == question_list[i]["ans_correct"]){
                    score += 1;
                }
            }
            alert("Your score is "+score+". Please login if you want to save this result ");
           
        }
    })


