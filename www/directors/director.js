var directorsModule = function() {
    directorApiMethod =  'director';
    return {
        createDirector: function() {


            jQuery.post(directorApiUrl).always(function(data) {
                console.log(data);
            });
        },
        getDirector: function(id, callback) {
            var data = {
                ctrl: directorApiMethod
            };
            if (id)
                data.id = id;

            jQuery.ajax({
                url: '../../api/api.php' ,
                data: data,
                type: 'GET',
                success: function(result) {

                    callback(result);
                }
            });
        },
        deleteDirector: function() {
            jQuery.ajax({
                url: '/api/api.php' ,
                data: {
                    ctrl: directorApiMethod
                },
                type: 'DELETE',
                success: function(result) {
                    console.log(result);
                }
            });
        },
        getDirectorsIds: function(callback) {
            jQuery.ajax({
                url: '../../api/api.php' ,
                data: {
                    ctrl: directorApiMethod
                },
                type: 'GET',
                success: function(result) {

                    callback(result);
                }
            });
        }
    }
}