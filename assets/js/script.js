let count = 1;
document.getElementById("radio1").checked = true;

setInterval( function(){
    nextImage();
}, 5000)

function nextImage(){
    count++;
    if(count>4){
        count = 1;
    }

    document.getElementById("radio"+count).checked = true;
}

function createPopup(id) {
    let popupNode = document.querySelector(id);
    let overlay = popupNode.querySelector(".overlay");
    let closeBtn = popupNode.querySelector(".close-btn");
    let popupContent = popupNode.querySelector(".popup-content");

    // Função para abrir o pop-up
    function openPopup() {
        popupNode.classList.add("active");
    }

    // Função para fechar o pop-up
    function closePopup() {
        popupNode.classList.remove("active");
    }

    // Fechar o pop-up ao clicar no overlay
    overlay.addEventListener("click", function(event) {
        // Se o clique foi fora da área do conteúdo do pop-up, fecha
        if (!popupContent.contains(event.target)) {
            closePopup();
        }
    });

    // Fechar o pop-up ao clicar no botão de fechar
    closeBtn.addEventListener("click", closePopup);

    return openPopup;
}

// Cria a função de abrir o pop-up com base no id do pop-up
let popup = createPopup("#popup");

// Adiciona o evento para abrir o pop-up quando o botão for clicado
document.querySelector("#open-popup").addEventListener("click", popup);
