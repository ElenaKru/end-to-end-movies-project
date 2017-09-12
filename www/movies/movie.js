  var moviesModule = function() {
                movieApiMethod =  'movie';
                return {
                    createMovie: function() {
                        var data = {
                            name: $('#movieName').val(),
                            d_id: $('#director').val(),
                            ctrl: movieApiMethod
                        }
                        jQuery.ajax({
                            url: '../../api/api.php' ,
                            data: data,
                            type: 'POST',
                            success: function(result) {
                                alert('Movie was added successfully!');
                             //   callback(result);
                            }
                        });
                    },
                    getMovie: function(id, callback) {
                        var data = {
                            ctrl: movieApiMethod
                        };
                        if (id)
                            data.id = id;

                        jQuery.ajax({
                            url: '../api/api.php' ,
                            data: data,
                            type: 'GET',
                            success: function(result) {
                            
                                callback(result);
                            }
                        });
                    },
                    deleteMovie: function() {
                        jQuery.ajax({
                            url: '/api/api.php' ,
                            data: {
                                ctrl: movieApiMethod
                            },
                            type: 'DELETE',
                            success: function(result) {
                                console.log(result);
                            }
                        });
                    }

                }
            }