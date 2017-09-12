  var customersModule = function() {
                customerApiMethod =  'customer';
                return {
                    createCustomer: function() {
                       
                    
                        jQuery.post(customerApiUrl).always(function(data) {
                            console.log(data);
                        });
                    },
                    getCustomer: function(id, callback) {
                        var data = {
                            ctrl: customerApiMethod
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
                    deleteCustomer: function() {
                        jQuery.ajax({
                            url: '/api/api.php' ,
                            data: {
                                ctrl: customerApiMethod
                            },
                            type: 'DELETE',
                            success: function(result) {
                                console.log(result);
                            }
                        });
                    }
                }
            }