<!doctype html>
<html ng-app="form-example2">
  <head>
    <script src="http://code.angularjs.org/1.0.6/angular.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
    
    <div contentEditable="true" ng-model="content" title="Click to edit">Some</div
    


    <pre>model = {{content}}</pre>
    






    <style type="text/css">
      div[contentEditable] {
        cursor: pointer;
        background-color: #D0D0D0;
      }
    </style>
  </body>
</html>