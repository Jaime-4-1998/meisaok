document.querySelector("#submit").addEventListener("click", e => {
    e.preventDefault();
	function validatecorr(mail) {
		var corrok = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		return corrok.test(mail);
	}  
    let telefono = "5215535688727";
    let maquina = document.querySelector("#name").value;
    let cliente = document.querySelector("#names").value;
    let mail = document.querySelector("#mail").value;
    let tel = document.querySelector("#tel").value;
    let tema = document.querySelector("#tema").value;
    let resp = document.querySelector("#respuesta");
	
    let url = `https://api.whatsapp.com/send?phone=${telefono}&text=
          *ME INTERSA UN SERVICIO*%0A
          **%0A%0A
          *!Tu nombreÂ¡*%0A
          ${cliente}%0A
          *Maquina*%0A
          ${maquina}%0A
          *Correo*%0A
          ${mail}%0A
          *Numero de Contacto*%0A
          ${tel}%0A
          *Tema a tratar*%0A
          ${tema}%0A`;
    if (cliente === "" || maquina === "" || mail === "" || tel === "" || tema === "") {
        resp.classList.add("fail");
        resp.innerHTML = `Faltan datos de llenar`;
        return false;
    }else if(!validatecorr(mail)){
		resp.classList.add("correo");
		resp.innerHTML = `Correo no valido, ${mail}`;
		  return false; 
	}
	resp.classList.remove("fail");
	resp.classList.remove("correo");
    resp.innerHTML = `Se enviaron tus datos, ${cliente}`;
    document.getElementById("forme").reset();
    window.open(url);
});