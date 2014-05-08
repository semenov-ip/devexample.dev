function Ctr12($scope){
  $scope.format = 'M/d/yy h:mm:ss a';
}

angular.module('time', [])
  .directive('myCurrentTime', function($timeout, dateFilter) {
    return function(scope, element, attrs){
      var format,
        timeoutId;

      function updateTime(){
        element.text(dateFilter(new Date(), format));
      }

      // отслеживание изменений выражений и обновление UI.
      scope.$watch(attrs.myCurrentTime, function(value){
        format = value;
        updateTime();
      });

      // обновление времени раз в секунду
      function updateLater() {
        console.log('fiers start');
        // сохранение для последующего использования

        timeoutId = $timeout(function() {
          updateTime(); // обновление DOM
          updateLater(); // обновление времени
        }, 1000);

        console.log(timeoutId);
      }

      // подписка на событие destroy для прекращения обновления UI
      // после удаления элемента.
      element.bind('$destroy', function() {
        $timeout.cancel(timeoutId);
      });

      updateLater(); // запуск процесса обновления UI.
    }
  });