/**
 * Created by tonny on 24/11/2015.
 */

function abrirPopup(url) {
    var newW =  1000;
    var newH =  800;
    var left = (screen.width-newW)/2;
    var top = (screen.height-newH)/2;
    var newwindow = window.open(url, 'Mias', 'width='+newW+',height='+newH+',left='+left+',top='+top);
    newwindow.resizeTo(newW, newH);

//posiciona o popup no centro da tela
    newwindow.moveTo(left, top);
    newwindow.focus();
    return false;
}

function abrirPopupComInfo(url, info) {
    var newW =  1000;
    var newH =  800;
    var left = (screen.width-newW)/2;
    var top = (screen.height-newH)/2;
    var newwindow = window.open(url, 'Mais', 'width='+newW+',height='+newH+',left='+left+',top='+top);
    newwindow.resizeTo(newW, newH);

//posiciona o popup no centro da tela
    newwindow.moveTo(left, top);
    newwindow.focus();
    return false;
}




