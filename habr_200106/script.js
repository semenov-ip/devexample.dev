// Обработчик back/forward событий
window.onpopstate = function(event){
  console.log("location: " + location.href + ", state: " + JSON.stringify(event.state));
}

// добавить состояние истории
history.pushState({page: 1}, "title 1", "?page=1");
history.pushState({page: 2}, "title 2", "?page=2");

// заменить текущее состояние
history.replaceState({page: 3}, "title 3", "?page=3");

history.back();
history.back();
history.go(2);

console.log(history.state)