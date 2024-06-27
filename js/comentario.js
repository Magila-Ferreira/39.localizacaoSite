// Div onde estão: h4, textarea, button
var div = document.querySelector("div.comentarios");

// Área para comentar
const txtAreaComentario = document.querySelector(".txtArea_comentario");

function salvarComentario() {
    const conteudoComentario = txtAreaComentario.value;

    console.log(conteudoComentario);

    var comentario = document.createElement('p');
    comentario.classList.add("texto_comentario");
    comentario.textContent = conteudoComentario;

    const comentariosSalvos = document.querySelector("span");
    comentariosSalvos.appendChild(comentario);
    
    txtAreaComentario.value = "";

    const botao = document.querySelector("button");
    
    botao.blur();
};


