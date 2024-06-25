function exibir(arquivo,foto){
    if (arquivo.files.length != 1 ){
        return;
    }
    // Inicia o file-reader:
    var r = new FileReader();
    // Define o que ocorre quando concluir:
    r.onload = function() {
     // Define o `src` do elemento para o resultado:
     foto.src = r.result;
    }
    // Lê o arquivo e cria um link (o resultado vai ser enviado para o onload.
    r.readAsDataURL(arquivo.files[0]);
}