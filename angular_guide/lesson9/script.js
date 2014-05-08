function Ctr13($scope){

  $scope.title = "Loren Ipsum";

  $scope.text = "Neque porro quisquam est qui dolorem ipsum quia dolor...";
}

angular.module('zippyModule', [])
  .directive('zippy', function(){

    return {
      restrict: 'C',

      // шаблон заменит директиву zippy.
      replace: true,
      transclude: true,
      
      scope: { title:'@zippyTitle' },

      template: 
        '<div>' +
          '<div class="title">{{title}}</div>' +
          '<div class="body" ng-transclude></div>' +
        '</div>',

      // связующая функция добавляет поведение к шаблону
      link: function(scope, element, attrs) {

        // элемент Title
        var title = angular.element(element.children()[0]),

        // Opened / closed состояния
        opened = true;

        // Клик на названии показывает/скрывает подробности
        title.bind('click', toggle);

        // обработка изменений состояния
        function toggle() {
          opened = !opened;
          element.removeClass(opened ? 'closed' : 'opened');
          element.addClass(opened ? 'opened' : 'closed');
        }

        // инициализация zippy
        toggle(); 
      }
    }
  });