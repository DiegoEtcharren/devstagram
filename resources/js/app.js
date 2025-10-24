import Dropzone from "dropzone";
Dropzone.autoDiscover = false;
const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage : "Arrastra tu Foto",
    acceptedFiles : ".jpg, .png, .jpeg, .gif",
    addRemoveLinks : true, 
    dictRemoveFile : "Borrar Foto",
    maxFiles : 1, 
    uploadMultiple : false
}
);




