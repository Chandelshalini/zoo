function showZoo() {
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/zoo/index",

        dataType: "html",
        success: function (response) {
            $("#data").html(response);
        }
    });
}
function addZoo() {
    $.ajax({
        type: "GET",
        url: "/basic/zoo/create",

        dataType: "html",
        success: function (response) {
            $("#modalBody").html(response);
        }
    });
}
function submitZoodata(){
    $("#formId").submit(function(e) {
        e.preventDefault();}); // avoid to execute the actual submit of the form.
        var form = $("#formId");
        $.ajax({
            type: "POST",
            url: "/basic/zoo/create",
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
              alert(data); // show response from the php script.
              showZoo();
            }
       
        }); 
       $("#exampleModal").modal("hide"); 
}

function deleteZoo(id){    
    $.ajax({
        type: "GET",
        url: "/basic/zoo/delete?id="+id,
        dataType: "html",
        success: function (response) {
           alert("Data is Deleted");
           showZoo();
        }
    });
}
function zooUpdate(id){
    $.ajax({
        type: "GET",
        url: "/basic/zoo/update?id="+id,

        dataType: "html",
        success: function (response) {
            $("#modalupdateBody").html(response);
        }
    });
  
}
function updateZoodata(id){
    $("#formupdateId").submit(function(e) {
        e.preventDefault();}); // avoid to execute the actual submit of the form.
        var form = $("#formupdateId");
        // alert("Form updated");
        $.ajax({
            type: "POST",
            url: "/basic/zoo/update?id="+id,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
              alert(data);
              showZoo(); // show response from the php script.
            }
       
        }); 
       $("#example1Modal").modal("hide");

}