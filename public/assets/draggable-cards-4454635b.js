(function(){let l=".terms-box";document.querySelectorAll(".terms-fullscreen").forEach(t=>{t.addEventListener("click",function(r){let e=this.closest(l);return e.classList.toggle("box-fullscreen"),e.classList.remove("box-collapsed"),r.preventDefault(),!1})}),dragula([document.querySelector("#draggable-left"),document.querySelector("#draggable-right")])})();