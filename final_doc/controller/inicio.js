AppAngular.controller(
  "inicio",
  function ($scope, $location, $routeParams, configuracionGlobal, $http) {
    $http
      .get(configuracionGlobal.api_url + "/listarform.php", {})
      .then((repuesta) => {
        $scope.listado = respuesta.data;
      });

    $scope.centrar = {
      estiloss: "display: flex; justify-content: center;",
    };

    $scope.Mostrar = function (_tipo) {
      if (_tipo == 1) {
        $scope.front = true;
        $scope.back = false;
        $scope.full = false;
      } else if (_tipo == 2) {
        $scope.front = false;
        $scope.back = true;
        $scope.full = false;
      } else if (_tipo == 3) {
        $scope.front = false;
        $scope.back = false;
        $scope.full = true;
      }
    };

    $scope.centrar = {
      estiloss: "display: flex; justify-content: center;",
      card: "display: flex; justify-content: center;",
    };

    $scope.Guardar = function () {
      console.log($scope.nombre + " " + $scope.apellido);
      var datosform = {
        name: $scope.nombre,
        lastname: $scope.apellido,
        date: $scope.fecha,
        email: $scope.email,
        sex: $scope.genero,
      };
      console.log(datosform);
      $http({
        url: configuracionGlobal.api_url + "/insertarform.php",
        method: "POST",
        data: datosform,
        headers: { "Content-Type": "aplication/x-www-form-urlencoded" },
      }).then((respuesta) => {
        alert("Formulario completado exitosamente");
      });
    };
  }
);
