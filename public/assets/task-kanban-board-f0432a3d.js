(function(){dragula([document.querySelector("#new-tasks-draggable"),document.querySelector("#todo-tasks-draggable"),document.querySelector("#inprogress-tasks-draggable"),document.querySelector("#inreview-tasks-draggable"),document.querySelector("#completed-tasks-draggable")]);var t=document.getElementById("new-tasks");new SimpleBar(t,{autoHide:!0});var n=document.getElementById("todo-tasks");new SimpleBar(n,{autoHide:!0});var l=document.getElementById("inprogress-tasks");new SimpleBar(l,{autoHide:!0});var a=document.getElementById("inreview-tasks");new SimpleBar(a,{autoHide:!0});var r=document.getElementById("completed-tasks");new SimpleBar(r,{autoHide:!0}),document.addEventListener("DOMContentLoaded",()=>{setInterval(()=>{[document.querySelector("#new-tasks-draggable"),document.querySelector("#todo-tasks-draggable"),document.querySelector("#inprogress-tasks-draggable"),document.querySelector("#inreview-tasks-draggable"),document.querySelector("#completed-tasks-draggable")].map(e=>{e&&(e.children.length==0&&(e.classList.add("task-Null"),document.querySelector(`#${e.getAttribute("data-view-btn")}`).nextElementSibling.classList.add("d-none")),e.children.length!=0&&(e.classList.remove("task-Null"),document.querySelector(`#${e.getAttribute("data-view-btn")}`).nextElementSibling.classList.remove("d-none")))})},100)}),new Choices("#choices-multiple-remove-button1",{allowHTML:!0,removeItemButton:!0}),new Choices("#choices-multiple-remove-button2",{allowHTML:!0,removeItemButton:!0}),flatpickr("#targetDate",{enableTime:!0,dateFormat:"Y-m-d H:i"}),FilePond.registerPlugin(FilePondPluginImagePreview,FilePondPluginImageExifOrientation,FilePondPluginFileValidateSize,FilePondPluginFileEncode,FilePondPluginImageEdit,FilePondPluginFileValidateType,FilePondPluginImageCrop,FilePondPluginImageResize,FilePondPluginImageTransform);const o=document.querySelector(".multiple-filepond");FilePond.create(o)})();