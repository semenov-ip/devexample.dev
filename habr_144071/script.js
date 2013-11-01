window.onload = function(){

  // просто функция добавляет DIV с нужным нам текстом
  function appendText(text){
    var div = document.createElement("div");
    div.innerHTML = text;
    document.body.appendChild(div);
  }

  // функция для ссылок обрабатывается при клике на ссылку
  function handlerAnchors(){

    // заполним хранилище чем нибудь
    var state = {
      title: $(this).attr( "title" ),
      url: $(this).attr( "href", 2 ) // двоечка нужна для ИЕ6-7
    }

    // заносим ссылку в историю
    history.pushState( state, state.title, state.url );

    // тут можете вызвать подгруздку данных и т.п.
    // ...

    appendText( '<b>Вы перешли по ссылке:</b> ' +
                  '<span style="color: green;">' + state.url + '</span>' );

    // не даем выполнить действие по умолчанию
    return false;
  }

  // ищем все ссылки
  var anchors = document.getElementsByTagName('a');

  // вешаем события на все ссылки в нашем документе
  for( i=0; i < anchors.length; i++ ){
    anchors[i].onclick = handlerAnchors();
  }

  // вешаем событие на popstate которое срабатывает
  // при нажатии back/forward в браузере
  window.onpopstate = function(e){

    // просто сообщение
    appendText( '<b>Вы вернулись на страницу:</b> ' +
        '<span style="color: green;">' + history.location + '</span>' +
        '<br/><b>state:</b> <span style="color: green;">' +
        JSON.stringify( history.state ) + '</span><br/><br/>' );

    // тут можете вызвать подгруздку данных и т.п.
    // ...
  }
}

















