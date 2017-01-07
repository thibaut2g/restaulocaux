app.factory('MapFactory', function($http, $q){
	var factory = {
		coo : false,
		getCoos : function(){
			var deferred = $q.defer();
			if (factory.coo !== false) {
				deferred.resolve(factory.coo)
			}else{
				return $http.get('json/coo.json').success(function(data, status){
					factory.coo = data;
					deferred.resolve(data);
					
				}).error(function(data, status) {
					deferred.reject('Impossible de récupérer les coordonnees');
				});
			}
			return deferred.promise;
		},
		getCoo: function(id){
			alert('fonction succes')
			// var deferred = $q.defer();
			// var post = {};
			// var posts = factory.getPosts().then(function(posts){
			// 	angular.forEach(factory.posts, function(value, key) {
			// 	  	if (value.id == id){
			// 	  		post = value;
			//   		}
			// 	});
			// 	deferred.resolve(post);
			// }, function(msg){
			// 	deferred.reject(msg);
			// });
			// return deferred.promise;
		},
	};
	return factory;
})