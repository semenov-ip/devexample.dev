angular.module('form-example2', [])
  .directive('contenteditable', function(){
    return {

      require: 'ngModel',

      link: function(scope, elm, attrs, ctrl){
        // view -> model
        elm.bind('blur', function(){
          
          console.log(scope);

          scope.$apply(function(){

            ctrl.$setViewValue(elm.html());
          
          })
        });

        // model -> view
        ctrl.$render = function() {
          elm.html(ctrl.$viewValue);
        };

        // load init value from DOM
        ctrl.$setViewValue(elm.html());
      }

    }
  });