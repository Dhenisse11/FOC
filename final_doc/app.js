var AppAngular = angular.module("ejercicio", ["ngRoute"]);

AppAngular.config([
  "$routeProvider",
  function ($routeProvider) {
    $routeProvider
      .when("/", {
        templateUrl: "view/homepage.html",
        controller: "inicio",
      })

      .when("/promociones", {
        templateUrl: "view/promociones.html",
        controller: "inicio",
      })

      .when("/contactanos", {
        templateUrl: "view/contactanos.html",
        controller: "inicio",
      });
  },
]);

AppAngular.constant("configuracionGlobal", {
  api_url: "http://localhost/api",
});
