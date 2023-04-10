function showUser() {
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/registration/index",

        dataType: "html",
        success: function (response) {
            $("#data").html(response);
        }
    });
}
function addUser() {
    $.ajax({
        type: "GET",
        url: "/basic/registration/create",

        dataType: "html",
        success: function (response) {
            $("#modalBody").html(response);
        }
    });
}
function submitUserdata(){
    $("#formId").submit(function(e) {
        e.preventDefault();}); // avoid to execute the actual submit of the form.
        var form = $("#formId");
        $.ajax({
            type: "POST",
            url: "/basic/registration/create",
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
              alert(data);
              showUser(); // show response from the php script.
            }
       
        }); 
       $("#exampleModal").modal("hide"); 
}
function deleteUser(id){ 
    $.ajax({
        type: "POST",
        url: "/basic/registration/delete?id="+id,
        dataType: "html",
        success: function (response) {
           alert("Data is Deleted");
           showUser();
        }
    });
}
function updateUser(id){
    $.ajax({
        type: "GET",
        url: "/basic/registration/update?id="+id,
        dataType: "html",
        success: function (response) {
            $("#modalupdateBody").html(response);
        }
    });
  
}
function updateUserdata(id){
    $("#formupdateId").submit(function(e) {
        e.preventDefault();}); // avoid to execute the actual submit of the form.
        var form = $("#formupdateId");
        // alert("Form updated");
        $.ajax({
            type: "POST",
            url: "/basic/registration/update?id=" +id,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
              alert(data);
              showUser(); // show response from the php script.
            }
       
        }); 
       $("#example1Modal").modal("hide");

}