function eventListeners(){const e=document.querySelectorAll('input[name="incidente"]');console.log("Diste clic en Sí"),e.forEach(e=>e.addEventListener("click",mostrarMensajeBitacora))}function mostrarMensajeBitacora(e){const n=document.querySelector("#texto-mensaje");1==e.target.value?n.innerHTML='\n       <label for="mensaje">Por favor especifique su incidente: </label>\n        <textarea class="areatexto" id="mensaje" name="mensaje" ></textarea>\n       ':n.innerHTML=""}document.addEventListener("DOMContentLoaded",(function(){eventListeners()}));