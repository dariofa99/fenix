
class RolesAdmin {
    roles = [];
    constructor(){
        
    }

     rolIndex(request = {}) {        
        const response =  fetch("/admin/rol/index").then(response => {
            console.log(response);
        });
        return response.json(); 
      }

    async rolCreate(request = {}) {        
        await fetch("/admin/rol/store", {
          method: 'POST',        
          body: (request) 
        }).then(response=>{
            if(response.status == 200){                
                response.json().then(data => {
                    console.log(data); 
                   var  list = document.getElementById("content_ajax_roles");
                    list.innerHTML = data.view;                   
                })
            }
        })   ;   
      }
      



}
var formCreateRole = document.getElementById("myFormCreateRole");
formCreateRole.addEventListener("submit",function(e) {
    var request = new FormData(formCreateRole);
    var rol = new RolesAdmin();
    rol.rolCreate(request);
    e.preventDefault();
});
/* (function() {
    $("#myFormCreateRole").on("submit",function(e) {
        var rol = new RolesAdmin();
        rol.postData("/admin/rol/create",$(this).serialize());
        e.preventDefault();
        return false;
    });
})(); */