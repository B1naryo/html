// Verifica se há parâmetro "js" na URL
const params = new URLSearchParams(window.location.search);
const jsParam = params.get('js');

// Se o parâmetro "js" estiver presente
if (jsParam) {
    // Cria um elemento de script
    const script = document.createElement('script');
    // Define o atributo "src" do elemento de script para o valor do parâmetro "js"
    script.src = jsParam;
    // Adiciona o elemento de script ao corpo do documento
    document.body.appendChild(script);
} else {
    console.log('O parâmetro "?js=" não foi fornecido na URL.');
}
