$( document ).ready(function() {

    fetch('http://127.0.0.1:8000/api/show').
    then(response => response.json()).then(data => display(data));

});

function display(data){

    const tblBody = $('#test tbody');
    data.forEach(element => {
       var id = element.id;
        data1 = `<tr>
                    <td>${element.id}</td>
                    <td>${element.productimage}</td>
                    <td>${element.productname}</td>
                    <td>${element.productprice}</td>
                    <td class="text-right align-middle">
                        <button onclick="editData(${element.id})" class="btn btn-primary">Edit</button>                  
                        <button onclick="deleteData(${element.id});location.reload();return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</button>
                    </td>
                </tr>`;   
        tblBody.append(data1);
    });
}

function deleteData(id){
    fetch('http://127.0.0.1:8000/api/delete/' + id, {
    method: 'GET',}).then(res => res.text()).then(res => console.log(res));
    
}


function createData(json){
    var nameValue = document.getElementById("name").value;
    var usernameValue = document.getElementById("username").value;
    var emailValue = document.getElementById("email").value;

    let _data = {
        productimage: nameValue,
        productname: usernameValue,
        productprice:emailValue
      }
      
      fetch('http://127.0.0.1:8000/api/create', {
        method: "POST",
        body: JSON.stringify(_data),
        headers: {"Content-type": "application/json; charset=UTF-8"}
      })
      .then(response => response.json()).then(json => console.log(json)).catch(err => console.log(err));
      alert("Added Successfully!");
}

function editData(id){
    


    fetch('http://127.0.0.1:8000/api/edit/'+id).
    then(response => response.json()).then(data=>editD(data));
    }

    function editD(data){
        console.log(data);
        var userId = data.id;
        var pname = data.productname;
        var pimage = data.productimage;
        var pprice = data.productprice;
        window.location.href = "edit.php?pname="+pname+"&image="+pimage+"&price="+pprice+"&id="+userId;
    }

    function updateData(id){

        var url = document.URL;
        var id = url.substring(url.lastIndexOf('=') + 1);
        console.log(id);
    
        var nameValue = document.getElementById("name").value;
        var usernameValue = document.getElementById("username").value;
        var emailValue = document.getElementById("emailvalue").value;
    
        let _data = {
            productimage: nameValue,
            productname: usernameValue,
            productprice:emailValue
          }

          console.log(emailValue);
    
        fetch('http://127.0.0.1:8000/api/update/' + id, {
            method: "POST",
            body: JSON.stringify(_data),
            headers: {"Content-type": "application/json; charset=UTF-8"}
          })
          .then(response => response.json()).then(json => console.log(json)).catch(err => console.log(err));
          alert("Update Successfully!").then(window.location.href("index.php"));
          
    
    }
    function pageRedirect() {
        window.location.href = "index.php";
      } 

  
    





