<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="" ng-init="names=['Sarvesh Patel','Mrugesh Bhatt','Hitesh Patel']">
  <p>Looping with ng-repeat:</p>
  <ul>
    <li ng-repeat="x in names">
      {{ x }} 1 
    </li>
  </ul>
</div>

</body>
</html>

