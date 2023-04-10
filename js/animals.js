function showAnimals() {
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/animals/index",

        dataType: "html",
        success: function (response) {
            $("#data").html(response);
        }
    });
}
function addAnimals() {
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/animals/create",

        dataType: "html",
        success: function (response) {
            $("#modalBody").html(response);
        }
    });
}
function submitAnimaldata(){
    $("#formId").submit(function(e) {
        e.preventDefault();}); // avoid to execute the actual submit of the form.
        var form = $("#formId");
        $.ajax({
            type: "POST",
            url: "http://localhost:8080/animals/create",
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
              alert(data);
              showAnimals();
               // show response from the php script.
            }
       
        }); 
       $("#exampleModal").modal("hide"); 
}
function deleteAnimal(id){
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/animals/delete?id="+id,
        dataType: "html",
        success: function (response) {
           alert("Data is Deleted");
           showAnimals();
        }
    });
}
function animalUpdate(id){
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/animals/update?id="+id,

        dataType: "html",
        success: function (response) {
            $("#modalupdateBody").html(response);
        }
    });
  
}
function updateAnimaldata(id){
    $("#formupdateId").submit(function(e) {
        e.preventDefault();}); // avoid to execute the actual submit of the form.
        var form = $("#formupdateId");
        // alert("Form updated");
        $.ajax({
            type: "POST",
            url: "http://localhost:8080/animals/update?id=" +id,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
              alert(data); 
              showAnimals();// show response from the php script.
            }
       
        }); 
       $("#example1Modal").modal("hide");

}